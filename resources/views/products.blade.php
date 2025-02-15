<div class="tab-content products">
    <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
        <div class="products-list grid">
            <div class="row">
                @if ($products->count())
                    @foreach($products as $product)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                                @if($product->label)
                                <div class="product-lable">
                                    <div class="onsale">-{{$product->label}}%</div>
                                </div>
                                @endif
                                @if($product->is_featured)
                                <div class="product-lable">
                                    <div class="hot">Hot</div>
                                </div>
                                @endif
                                <div class="product-thumb-hover border">
                                    <a href="{{route('product.detail', $product->slug)}}">
                                        <img width="600" height="600" src="{{ asset('media/product/5.jpg') }}" class="post-image" alt="">
                                        @if($product->hover_image)
                                        <img width="600" height="600" src="{{ asset('media/product/5-2.jpg') }}" class="hover-image back" alt="">
                                        <!-- <img width="600" height="600" src="{{ asset('storage/'.$product->hover_image) }}" class="hover-image back" alt=""> -->
                                        @endif
                                    </a>
                                </div>      
                                <div class="product-button">
                                    <div class="btn-add-to-cart" data-title="Add to cart">
                                        <a rel="nofollow" href="{{ route('cart.add', $product->id) }}" class="product-btn button">Add to cart</a>
                                    </div>
                                    @if(isInWishlist($product->id))
                                    <div class="btn-wishlist" data-title="Wishlist">
                                        <button class="product-btn active">Add to wishlist</button>
                                    </div>
                                    @else
                                    <div class="btn-wishlist" data-title="Wishlist">
                                        <button class="product-btn">Add to wishlist</button>
                                    </div>
                                    @endif
                                    <span class="product-quickview" data-title="Quick View">
                                        <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                    </span>     
                                </div>
                            </div>
                            <div class="products-content">
                                <div class="contents text-center">
                                    <div class="rating">
                                        <div class="star star-{{ $product->rating }}"></div>
                                        <span class="count">({{ $product->reviews_count }} review{{ $product->reviews_count > 1 ? 's' : '' }})</span>
                                    </div>
                                    <h3 class="product-title"><a href="{{route('product.detail', $product->slug)}}">{{$product->name}}</a></h3>
                                    <span class="price">
                                        <del aria-hidden="true"><span>${{ $product->price }}</span></del> 
                                        <ins><span>${{ $product->sale_price }}</span></ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>No products found matching the filters.</p>
                @endif
            </div>
        </div>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
</div>