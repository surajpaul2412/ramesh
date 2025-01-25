<div class="products">
    @if ($products->count())
        @foreach ($products as $product)
            <div class="product">
                <h3>{{ $product->name }}</h3>
                <p>Price: ${{ $product->price }}</p>
                <p>Category: {{ $product->category->name }}</p>
                <p>Type: {{ $product->type->name }}</p>
            </div>
        @endforeach

        <!-- Pagination Links -->
        <div class="pagination">
            {{ $products->links() }}
        </div>
    @else
        <p>No products found matching the filters.</p>
    @endif
</div>
