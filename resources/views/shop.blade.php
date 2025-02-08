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




<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Our Shop
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="{{route('welcome')}}">Home</a><span class="delimiter"></span><a href="{{ route('shop') }}">Shop</a>
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="row filters">
							<form id="filter-form" class="col-xl-3 col-lg-3 col-md-12 col-12 sidebar left-sidebar md-b-50 p-t-10">
								<!-- Block Product Categories -->
								<div class="block block-product-cats">
									<div class="block-title"><h2>Categories</h2></div>
									<div class="block-content">
										<div class="product-cats-list filter-category">
											<ul id="category-list">
												<li>
										            <a href="#" data-category="" class="{{ request('category') == '' ? 'active' : '' }}">
										                All Categories
										            </a>
										        </li>
										        @foreach ($categories as $category)
									            <li class="current">
									                <a href="#" data-category="{{ $category->slug }}" class="{{ request('category') == $category->slug ? 'active' : '' }}">
									                    {{ $category->name }}
									                    <span class="count">{{$category->products->count()}}</span>
									                </a>
									            </li>
										        @endforeach
											</ul>
										</div>
									</div>
								</div>

								<!-- Block Product Filter -->
								<div class="block block-product-filter">
									<div class="block-title"><h2>Price Range</h2></div>
									<div class="block-content">
										<div id="slider-range" class="price-filter-wrap">
											<div class="filter-item price-filter">
												<div class="layout-slider">
													<input id="price-filter" name="price" value="0;100" />
												</div>
												<div class="layout-slider-settings"></div>
											</div>
										</div>
									</div>
								</div>

								<!-- <div class="filter-price">
						            <label for="min_price">Price Range:</label>
						            <input type="number" name="min_price" id="min_price" placeholder="Min Price" value="{{ request('min_price') }}">
						            <input type="number" name="max_price" id="max_price" placeholder="Max Price" value="{{ request('max_price') }}">
						            <button type="submit">Apply</button>
						        </div> -->

								<div class="block block-product-cats">
									<div class="block-title"><h2>Types</h2></div>
									<div class="block-content">
										<div class="product-cats-list">
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
									</div>
								</div>
							</form>

							<div class="col-xl-9 col-lg-9 col-md-12 col-12">
								<div class="products-topbar clearfix">
									<div class="products-topbar-left">
										<div class="products-count">
											Showing all {{ $products->total() }} results.
										</div>
									</div>
									<div class="products-topbar-right">
										<div class="products-sort dropdown">
											<span class="sort-toggle dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Default sorting</span>
											<ul class="sort-list dropdown-menu" x-placement="bottom-start">
												<li class="active"><a href="#">Default sorting</a></li>
												<li><a href="#">Sort by popularity</a></li>
												<li><a href="#">Sort by average rating</a></li>
												<li><a href="#">Sort by latest</a></li>
												<li><a href="#">Sort by price: low to high</a></li>
												<li><a href="#">Sort by price: high to low</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div id="products-container">
								    @include('products', ['products' => $products])
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
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