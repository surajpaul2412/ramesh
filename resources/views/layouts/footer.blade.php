<footer id="site-footer" class="site-footer background four-columns">
    <div class="footer">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 column-1">
                            <div class="block block-menu m-b-20">
                                <h2 class="block-title">Contact Us</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <span>Showroom:</span> 4837 / 44 Ground Floor , Regar Pura Karol Bagh New Delhi 110005
                                        </li>
                                        <li>
                                            <span>Mob:</span> <a href="tel:8888800079">8888800079</a>
                                        </li>
                                        <li>
                                            <span>Email:</span> <a href="mailto:admin@swarnsilva.com">admin@swarnsilva.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="block block-social">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-2">
                            <div class="block block-menu">
                                <h2 class="block-title">Customer Services</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-left.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left.html">Track Your Order</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left.html">Product Care & Repair</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left.html">Book an Appointment</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left.html">Frequently Asked Questions</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left.html">Shipping & Returns</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-3">
                            <div class="block block-menu">
                                <h2 class="block-title">About Us</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Our Producers</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">Return Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-4">
                            <div class="block block-menu">
                                <h2 class="block-title">Catalog</h2>
                                <div class="block-content">
                                    <ul>
                                        @foreach(categories() as $category)
                                        <li>
                                            <a href="">{{$category->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-left">
                                <p class="copyright">Swarnsilva | Copyright © 2024. All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-right">
                                <div class="block block-image">
                                    <img width="309" height="32" src="media/payments.png" alt="payments">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>