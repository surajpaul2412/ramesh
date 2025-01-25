@extends('layouts.frontend')

@section('main')
<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							{{ ucfirst($category) }}
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="{{route('welcome')}}">Home</a><span class="delimiter"></span><a href="{{ route('shop', ['category' => 'all']) }}">Shop</a><span class="delimiter"></span>{{ ucfirst($category) }}
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-12 col-12 sidebar left-sidebar md-b-50 p-t-10">
								<!-- Block Product Categories -->
								<div class="block block-product-cats">
									<div class="block-title"><h2>Categories</h2></div>
									<div class="block-content">
										<div class="product-cats-list">
											<ul>
												@foreach(categories() as $category)
												<li class="current">
													<a href="{{route('shop', $category->slug)}}">{{$category->name}} <span class="count">{{$category->products->count()}}</span></a>
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

								<div class="block block-product-cats">
									<div class="block-title"><h2>Types</h2></div>
									<div class="block-content">
										<div class="product-cats-list">
											<ul>
												@foreach(types() as $type)
												<li class="current">
													<a href="{{route('shop', $category->slug)}}">{{$type->name}} <span class="count">{{$type->products->count()}}</span></a>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-9 col-lg-9 col-md-12 col-12">
								<div class="products-topbar clearfix">
									<div class="products-topbar-left">
										<div class="products-count">
											Showing all {{ $products->count() }} results
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

								<div class="tab-content">
									<div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
										<div class="products-list grid">
											<div class="row">
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
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
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
											</div>
										</div>
									</div>
								</div>

								<div class="pagination">
								    {!! $products->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
@endsection