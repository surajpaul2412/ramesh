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
												<li class="current">
													<a href="shop-grid-left.html">Bracelets <span class="count">9</span></a>
												</li>
												<li>
													<a href="shop-grid-left.html">Earrings <span class="count">4</span></a>
												</li>
												<li>
													<a href="shop-grid-left.html">Necklaces <span class="count">3</span></a>
												</li>
												<li>
													<a href="shop-grid-left.html">Charms <span class="count">6</span></a>
												</li>
												<li>
													<a href="shop-grid-left.html">Rings <span class="count">2</span></a>
												</li>
												<li>
													<a href="shop-grid-left.html">Wedding & Bridal <span class="count">4</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<!-- Block Product Filter -->
								<div class="block block-product-filter">
									<div class="block-title"><h2>Price</h2></div>
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

								<!-- Block Product Filter -->
								<div class="block block-product-filter clearfix">
									<div class="block-title"><h2>Color</h2></div>
									<div class="block-content">
										<ul class="filter-items color">
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color antique"></span>Antique</span><span class="count">3</span></a></li>
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color bone"></span>Bone</span><span class="count">2</span></a></li>
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color chestnut"></span>Chestnut</span><span class="count">5</span></a></li>
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color crimson"></span>Crimson</span><span class="count">8</span></a></li>
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color eggshell"></span>Eggshell</span><span class="count">3</span></a></li>
											<li><a href="shop-grid-left.html"><span class="color-wrap"><span class="color grullo"></span>Grullo</span><span class="count">4</span></a></li>
										</ul>
									</div>
								</div>

								<!-- Block Product Filter -->
								<div class="block block-product-filter clearfix">
									<div class="block-title"><h2>Size</h2></div>
									<div class="block-content">
										<ul class="filter-items text">
											<li><a href="shop-grid-left.html"><span>L</span></a></li>
											<li><a href="shop-grid-left.html"><span>M</span></a></li>
											<li><a href="shop-grid-left.html"><span>S</span></a></li>
										</ul>
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
										<ul class="layout-toggle nav nav-tabs">
											<li class="nav-item">
												<a class="layout-grid nav-link active" data-toggle="tab" href="#layout-grid" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span><span></span></span><span class="layer middle"><span></span><span></span><span></span></span><span class="layer last"><span></span><span></span><span></span></span></span></a>
											</li>
											<li class="nav-item">
												<a class="layout-list nav-link" data-toggle="tab" href="#layout-list" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span></span><span class="layer middle"><span></span><span></span></span><span class="layer last"><span></span><span></span></span></span></a>
											</li>
										</ul>
									</div>
								</div>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
										<div class="products-list grid">
											<div class="row">
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
													<div class="products-entry clearfix product-wapper">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="{{ asset('media/product/1.jpg') }}" class="post-image" alt="">
																	<img width="600" height="600" src="{{ asset('media/product/1-2.jpg') }}" class="hover-image back" alt="">
																</a>
															</div>		
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
																<span class="product-quickview" data-title="Quick View">
																	<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																</span>		
															</div>
														</div>
														<div class="products-content">
															<div class="contents text-center">
																<div class="rating">
																	<div class="star star-0"></div><span class="count">(0 review)</span>
																</div>
																<h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
																<span class="price">$150.00</span>
															</div>
														</div>
													</div>
												</div>
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
																<a href="shop-details.html">
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
																<h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
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
									<div class="tab-pane fade" id="layout-list" role="tabpanel">
										<div class="products-list list">
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
															<span class="price">$150.00</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover border">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$150.00</span></del> 
																<ins><span>$100.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-0"></div>
																<div class="review-count">
																	(0<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Bold Pearl Hoop Earrings</a></h3>
															<span class="price">$150.00</span>
															<div class="rating">
																<div class="star star-4"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover border">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/6.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/6-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Bora Armchair</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$120.00</span></del> 
																<ins><span>$100.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-0"></div>
																<div class="review-count">
																	(0<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Twin Hoops</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$100.00</span></del> 
																<ins><span>$90.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(3<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover border">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/7.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/7-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Diamond Bracelet</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$79.00</span></del> 
																<ins><span>$50.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(2<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
															<span class="price">$120.00</span>
															<div class="rating">
																<div class="star star-4"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover border">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/8.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/8-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">X Hoop Earrings</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$200.00</span></del> 
																<ins><span>$180.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(4<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover border">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/9.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/9-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Yintage Medallion Necklace</a></h3>
															<span class="price">$140.00</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
															</div>
															<div class="product-button">
																<div class="btn-add-to-cart" data-title="Add to cart">
																	<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																</div>
																<div class="btn-wishlist" data-title="Wishlist">
																	<button class="product-btn">Add to wishlist</button>
																</div>
																<div class="btn-compare" data-title="Compare">
																	<button class="product-btn">Compare</button>
																</div>
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>			
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<nav class="pagination">
									<ul class="page-numbers">
										<li><a class="prev page-numbers" href="#">Previous</a></li>
										<li><span aria-current="page" class="page-numbers current">1</span></li>
										<li><a class="page-numbers" href="#">2</a></li>
										<li><a class="page-numbers" href="#">3</a></li>
										<li><a class="next page-numbers" href="#">Next</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
@endsection