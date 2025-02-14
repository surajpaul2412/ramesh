@extends('layouts.frontend')

@section('title')
Privacy Policy
@endsection

@section('main')
<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Privacy Policy
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="{{route('welcome')}}">Home</a><span class="delimiter"></span>Privacy Policy
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="page-faq">
							<div class="row">
								<div class="col-md-12 col-12">
								    <div class="privacy-policy-section">
								        <div class="section-title">
								            <h2>Privacy Policy</h2>
								        </div>
								        <div class="section-content">
								            <p>At Swarnsilva, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and protect your data when you visit our website [your website URL] or make a purchase from us.</p>

								            <h3>1. Information We Collect</h3>
								            <p>We collect the following types of information:</p>
								            <h4>A. Personal Information (provided by you)</h4>
								            <ul>
								                <li>Name</li>
								                <li>Email address</li>
								                <li>Phone number</li>
								                <li>Shipping and billing address</li>
								                <li>Payment details (processed securely through third-party payment gateways)</li>
								            </ul>

								            <h4>B. Non-Personal Information (collected automatically)</h4>
								            <ul>
								                <li>IP address</li>
								                <li>Browser type and device details</li>
								                <li>Pages visited on our website</li>
								                <li>Cookies and tracking data</li>
								            </ul>

								            <h3>2. How We Use Your Information</h3>
								            <p>We use your information for:</p>
								            <ul>
								                <li>Processing and fulfilling your orders</li>
								                <li>Communicating with you regarding orders, promotions, or support</li>
								                <li>Enhancing your shopping experience on our website</li>
								                <li>Preventing fraud and ensuring website security</li>
								                <li>Legal and compliance purposes</li>
								            </ul>

								            <h3>3. Data Security</h3>
								            <p>We implement strong security measures to protect your data from unauthorized access, loss, or misuse. However, no online platform is completely secure, so we encourage you to use strong passwords and avoid sharing sensitive information.</p>

								            <h3>4. Sharing Your Information</h3>
								            <p>We do not sell, rent, or trade your personal data. We only share information with:</p>
								            <ul>
								                <li>Payment gateways (for secure payment processing)</li>
								                <li>Shipping partners (to deliver your orders)</li>
								                <li>Legal authorities (if required by law)</li>
								            </ul>

								            <h3>5. Cookies & Tracking Technologies</h3>
								            <p>We use cookies to improve website functionality and provide a personalized shopping experience. You can manage cookie preferences in your browser settings.</p>

								            <h3>6. Third-Party Links</h3>
								            <p>Our website may contain links to third-party websites. We are not responsible for their privacy policies, so we recommend reviewing their terms before sharing personal information.</p>

								            <h3>7. Your Rights</h3>
								            <p>You have the right to:</p>
								            <ul>
								                <li>Access, update, or delete your personal data</li>
								                <li>Opt out of promotional emails</li>
								                <li>Request information about how we process your data</li>
								            </ul>
								            <p>To exercise these rights, contact us at <a href="mailto:admin@swarnsilva.com">admin@swarnsilva.com</a>.</p>

								            <h3>8. Changes to This Policy</h3>
								            <p>We may update this policy periodically. Please check this page for the latest version.</p>

								            <h3>9. Contact Us</h3>
								            <p>For any privacy-related concerns, reach out to us at:</p>
								            <p>📧 Email: <a href="mailto:admin@swarnsilva.com">admin@swarnsilva.com</a></p>
								            <p>📞 Phone: <a href="tel:8888800079">8888800079</a></p>
								        </div>
								    </div>
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