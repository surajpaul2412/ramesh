@extends('layouts.frontend')

@section('main')
<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Wishlist
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="{{route('welcome')}}">Home</a><span class="delimiter"></span>Shopping Cart
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						@if($wishlistItems->count())
						<div class="shop-wishlist">	
							<table class="wishlist-items">                            
								<tbody>
									@foreach($wishlistItems as $item)
									<tr class="wishlist-item">
										<td class="wishlist-item-remove">
											<form action="{{ route('wishlist.remove', $item->product->id) }}" method="POST">
						                        @csrf
						                        @method('DELETE')
						                        <button type="submit" class="btn btn-danger btn-sm">
						                        	<span></span>
						                        </button>
						                    </form>
										</td>
										<td class="wishlist-item-image">
	                                        <a href="shop-details.html">
												<img width="600" height="600" src="media/product/3.jpg" alt="">
											</a>
                           				</td>
										<td class="wishlist-item-info">
											<div class="wishlist-item-name">
												<a href="shop-details.html">{{ $item->product->name }}</a>
											</div>
											<div class="wishlist-item-price">
												<span>$150.00</span>
											</div>
											<div class="wishlist-item-time">June 6, 2022</div>
										</td>
                    					<td class="wishlist-item-actions">
                        					<div class="wishlist-item-stock">
												In stock                                    
											</div>
		                                    <div class="wishlist-item-add">
												<div class="btn-add-to-cart" data-title="Add to cart">
													<a rel="nofollow" href="#" class="product-btn">Add to cart</a>
												</div>
						        			</div>
						        		</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						@else
						<div align="center" style="padding-bottom: 3rem;">
							Please add products to wishlist.
						</div>
						@endif
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
@endsection