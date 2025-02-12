@extends('layouts.frontend')

@section('main')
<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Shopping Cart
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
						<div class="shop-cart">	
							<div class="row">
								<div class="col-xl-8 col-lg-12 col-md-12 col-12">
									<div class="cart-form">
										<div class="table-responsive">
											<table class="cart-items table" cellspacing="0">
												<thead>
													<tr>
														<th class="product-thumbnail">Product</th>
														<th class="product-price">Price</th>
														<th class="product-quantity">Quantity</th>
														<th class="product-subtotal">Subtotal</th>
														<th class="product-remove">&nbsp;</th>
													</tr>
												</thead>
												<tbody>
													@foreach($cartItems as $item)
													<tr class="cart-item">		
														<td class="product-thumbnail">
															<a href="shop-details.html">
																<img width="600" height="600" src="media/product/1.jpg" class="product-image" alt="">
															</a>				
															<div class="product-name">
																<a href="shop-details.html">{{$item->product->name}}</a>
															</div>
														</td>
														<td class="product-price">
															<span>₹{{$item->product->sale_price}}</span>
														</td>
														<td class="product-quantity">
															<div class="quantity">
																<button type="button" class="minus">-</button>	
																<input type="number" class="qty" step="1" min="0" max="" name="quantity" value="{{$item->quantity}}" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
																<button type="button" class="plus">+</button>
															</div>
														</td>
														<td class="product-subtotal">
															<span class="price">₹{{ number_format($item->quantity * $item->product->sale_price, 2) }}</span>
														</td>
														<td class="product-remove">
															<form action="{{ route('cart.remove', $item->id) }}" method="POST">
															    @csrf
															    @method('DELETE') <!-- Method spoofing for DELETE -->
															    <button type="submit" class="btn btn-danger">Remove</button>
															</form>
														</td>
													</tr>
													@endforeach
													<tr>
														<td colspan="6" class="actions">
															<div class="bottom-cart">
																<div class="coupon">
																	<input type="text" name="coupon_code" class="input-text" id="coupon-code" value="" placeholder="Coupon code"> 
																	<button type="submit" name="apply_coupon" class="button" value="Apply coupon">Apply coupon</button>
																</div>
															</div>	
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-12">
									<div class="cart-totals">
										<h2>Cart totals</h2>
										<div>
											<div class="cart-subtotal">
												<div class="title">Subtotal</div>
												<div><span>₹{{ number_format(calculateCartTotal(), 2) }}</span></div>
											</div>
											<hr>
											<div class="order-total">
												<div class="title">Total</div>
												<div><span>₹{{ number_format(calculateCartTotal(), 2) }}</span></div>
											</div>
										</div>
										<div class="proceed-to-checkout">		
											<a href="{{route('cart.checkout')}}" class="checkout-button button">
												Proceed to checkout
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="shop-cart-empty">
							<div class="notices-wrapper">
								<p class="cart-empty">Your cart is currently empty.</p>
							</div>	
							<div class="return-to-shop">
								<a class="button" href="shop-grid-left.html">
									Return to shop		
								</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
@endsection