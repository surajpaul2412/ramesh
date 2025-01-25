@extends('layouts.frontend')

@section('main')
<style type="text/css">
	#category-list {
	    list-style: none;
	    padding: 0;
	    margin: 0;
	}

	#category-list li {
	    margin-bottom: 8px;
	}

	#category-list a {
	    text-decoration: none;
	    color: #333;
	    font-weight: bold;
	    cursor: pointer;
	}

	#category-list a.active {
	    color: #007bff;
	}


	#type-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

#type-list li {
    margin-bottom: 8px;
}

#type-list a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    cursor: pointer;
}

#type-list a.active {
    color: #007bff;
}

</style>
<div class="row">
	<div class="col-6">
		<div class="filters">
		    <form id="filter-form">
		        <!-- Category Filter -->
					<div class="filter-category">
					    <label for="category">Category:</label>
					    <ul id="category-list">
					        <li>
					            <a href="#" data-category="" class="{{ request('category') == '' ? 'active' : '' }}">
					                All Categories
					            </a>
					        </li>
					        @foreach ($categories as $category)
					            <li>
					                <a href="#" data-category="{{ $category->slug }}" class="{{ request('category') == $category->slug ? 'active' : '' }}">
					                    {{ $category->name }}
					                </a>
					            </li>
					        @endforeach
					    </ul>
					</div>

		        <!-- Type Filter -->
				<div class="filter-type">
				    <label for="type">Type:</label>
				    <ul id="type-list">
				        <li>
				            <a href="#" data-type="" class="{{ request('type') == '' ? 'active' : '' }}">
				                All Types
				            </a>
				        </li>
				        @foreach ($types as $type)
				            <li>
				                <a href="#" data-type="{{ $type->slug }}" class="{{ request('type') == $type->slug ? 'active' : '' }}">
				                    {{ $type->name }}
				                </a>
				            </li>
				        @endforeach
				    </ul>
				</div>

		        <!-- Price Range Filter -->
		        <div class="filter-price">
		            <label for="min_price">Price Range:</label>
		            <input type="number" name="min_price" id="min_price" placeholder="Min Price" value="{{ request('min_price') }}">
		            <input type="number" name="max_price" id="max_price" placeholder="Max Price" value="{{ request('max_price') }}">
		            <button type="submit">Apply</button>
		        </div>
		    </form>
		</div>

	</div>
	<div class="col-6">
		<div id="products-container">
		    @include('products', ['products' => $products])
		</div>
	</div>
</div>

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Handle type selection
    $('#type-list a').on('click', function (e) {
        e.preventDefault();

        // Get the selected type slug
        const selectedType = $(this).data('type');

        // Highlight the active type
        $('#type-list a').removeClass('active');
        $(this).addClass('active');

        // Update the filter form with the selected type
        const formData = $('#filter-form').serializeArray();
        const updatedFormData = formData.filter(field => field.name !== 'type');
        updatedFormData.push({ name: 'type', value: selectedType });

        // Send AJAX request
        $.ajax({
            url: "{{ route('shop') }}",
            method: "GET",
            data: $.param(updatedFormData),
            beforeSend: function () {
                $('#products-container').html('<p>Loading...</p>');
            },
            success: function (response) {
                $('#products-container').html(response);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    // Handle category selection (already added earlier)
    $('#category-list a').on('click', function (e) {
        e.preventDefault();

        const selectedCategory = $(this).data('category');
        $('#category-list a').removeClass('active');
        $(this).addClass('active');

        const formData = $('#filter-form').serializeArray();
        const updatedFormData = formData.filter(field => field.name !== 'category');
        updatedFormData.push({ name: 'category', value: selectedCategory });

        $.ajax({
            url: "{{ route('shop') }}",
            method: "GET",
            data: $.param(updatedFormData),
            beforeSend: function () {
                $('#products-container').html('<p>Loading...</p>');
            },
            success: function (response) {
                $('#products-container').html(response);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    // Handle pagination dynamically (already added earlier)
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();

        const url = $(this).attr('href');

        $.ajax({
            url: url,
            success: function (response) {
                $('#products-container').html(response);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});

</script>
@endsection

@endsection