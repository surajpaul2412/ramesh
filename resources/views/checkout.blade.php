@extends('layouts.frontend')

@section('main')
<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Checkout
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="{{route('welcome')}}">Home</a><span class="delimiter"></span><a href="{{route('shop')}}">Shop</a><span class="delimiter"></span>Checkout
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="shop-checkout">
							<form name="checkout" method="POST" class="checkout" action="{{ route('address.store') }}" autocomplete="off">
								@csrf
								<div class="row">
									<div class="col-xl-8 col-lg-7 col-md-12 col-12">
										<div class="customer-details">
											<div class="billing-fields">
												<h3>Billing Details</h3>
											    <div class="billing-fields-wrapper">
											        <!-- First Name -->
											        <p class="form-row form-row-first validate-required">
											            <label for="first_name">First name <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="first_name" id="first_name" value="{{ old('first_name', $address->first_name ?? '') }}">
											            </span>
											        </p>

											        <!-- Last Name -->
											        <p class="form-row form-row-last validate-required">
											            <label for="last_name">Last name <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="last_name" id="last_name" value="{{ old('last_name', $address->last_name ?? '') }}">
											            </span>
											        </p>

											        <!-- Country -->
											        <p class="form-row form-row-wide validate-required">
											            <label for="country">Country / Region <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" name="country" id="country" class="input-text" value="{{ old('country', $address->country ?? 'India') }}">
											            </span>
											        </p>

											        <!-- Street Address -->
											        <p class="form-row address-field validate-required form-row-wide">
											            <label for="street">Street address <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="street" id="street" placeholder="House number and street name" value="{{ old('street', $address->street ?? '') }}">
											            </span>
											        </p>

											        <!-- Apartment -->
											        <p class="form-row address-field form-row-wide">
											            <label for="apartment">Apartment, suite, unit, etc. <span class="optional">(optional)</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="apartment" id="apartment" placeholder="Apartment, suite, unit, etc. (optional)" value="{{ old('apartment', $address->apartment ?? '') }}">
											            </span>
											        </p>

											        <!-- City -->
											        <p class="form-row address-field validate-required form-row-wide">
											            <label for="city">Town / City <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="city" id="city" value="{{ old('city', $address->city ?? '') }}">
											            </span>
											        </p>

											        <!-- State -->
											        <p class="form-row address-field validate-required validate-state form-row-wide">
											            <label for="state">State / County <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" name="state" id="state" class="input-text" value="{{ old('state', $address->state ?? '') }}">
											            </span>
											        </p>

											        <!-- Postcode -->
											        <p class="form-row address-field validate-required validate-postcode form-row-wide">
											            <label for="postal_code">Postcode / ZIP <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="text" class="input-text" name="postal_code" id="postal_code" value="{{ old('postal_code', $address->postal_code ?? '') }}">
											            </span>
											        </p>

											        <!-- Phone -->
											        <p class="form-row form-row-wide validate-required validate-phone">
											            <label for="phone">Phone <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="tel" class="input-text" name="phone" id="phone" value="{{ old('phone', $address->phone ?? '') }}">
											            </span>
											        </p>

											        <!-- Email -->
											        <p class="form-row form-row-wide validate-required validate-email">
											            <label for="email">Email address <span class="required" title="required">*</span></label>
											            <span class="input-wrapper">
											                <input type="email" class="input-text" name="email" id="email" value="{{ old('email', $address->email ?? '') }}" autocomplete="off">
											            </span>
											        </p>
											    </div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-5 col-md-12 col-12">
										<div class="checkout-review-order">
											<div class="checkout-review-order-table">
												<h3 class="review-order-title">Product</h3>
												<div class="cart-items">
													@foreach($cartItems as $item)
													<div class="cart-item">
														<div class="info-product">
															<div class="product-thumbnail">
																<img width="600" height="600" src="media/product/3.jpg" alt="">					
															</div>
															<div class="product-name">
																{{$item->product->name}}
																<strong class="product-quantity">QTY : {{$item->quantity}}</strong>
															</div>
														</div>
														<div class="product-total">
															<span>₹{{$item->product->sale_price * $item->quantity}}</span>
														</div>
													</div>
													@endforeach
												</div>												
												<div class="cart-subtotal">
													<h2>Subtotal</h2>
													<div class="subtotal-price">
														<span>₹{{ number_format(calculateCartTotal(), 2) }}</span>
													</div>
												</div>
												<div class="shipping-totals shipping">
													<h2>Shipping</h2>
													<div data-title="Shipping">
														<ul class="shipping-methods custom-radio">
															<li>
																<input type="radio" name="shipping_method" data-index="0" value="free_shipping" class="shipping_method" checked="checked"><label>Free shipping</label>
															</li>
															<li>
																<input type="radio" name="shipping_method" data-index="0" value="flat_rate" class="shipping_method"><label>Flat rate</label>					
															</li>
														</ul>
													</div>
												</div>
												<div class="order-total">
													<h2>Total</h2>
													<div class="total-price">
														<strong>
															<span>₹480.00</span>
														</strong> 
													</div>
												</div>
											</div>
											<div id="payment" class="checkout-payment">
												<ul class="payment-methods methods custom-radio">
													<li class="payment-method">
														<input type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
														<label for="payment_method_bacs">Pay Now</label>
														<div class="payment-box">
															<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
														</div>
													</li>
													<li class="payment-method">
														<input type="radio" class="input-radio" name="payment_method" value="cod">
														<label>Cash on delivery</label>
														<div class="payment-box">
															<p>Pay with cash upon delivery.</p>
														</div>
													</li>
												</ul>
												<div class="form-row place-order">
													<div class="terms-and-conditions-wrapper">
														<div class="privacy-policy-text"></div>
													</div>
													<button type="submit" class="button alt" name="checkout_place_order" value="Place order">Place order</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
@endsection