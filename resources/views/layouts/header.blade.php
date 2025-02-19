<header id="site-header" class="site-header header-v3">
    <div class="header-mobile">
        <div class="section-padding">
            <div class="section-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                        <div class="navbar-header">
                            <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                        <div class="site-logo">
                            <a href="{{route('welcome')}}">
                                <img width="400" height="79" src="{{asset('media/logo.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                        <div class="mojuri-topcart dropdown">
                            <div class="dropdown mini-cart top-cart">
                                <div class="remove-cart-shadow"></div>
                                <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                </a>
                                <div class="dropdown-menu cart-popup">
                                    <div class="cart-empty-wrap">
                                        <ul class="cart-list">
                                            <li class="empty">
                                                <span>No products in the cart.</span>
                                                <a class="go-shop" href="{{route('shop')}}">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-list-wrap">
                                        <ul class="cart-list ">
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                <a href="shop-details.html" class="product-image"><img width="600" height="600" src="media/product/3.jpg" alt=""></a>
                                                <a href="shop-details.html" class="product-name">Twin Hoops</a>
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$150.00</div>
                                            </li>
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>                                                  
                                                <a href="shop-details.html" class="product-image"><img width="600" height="600" src="media/product/1.jpg" alt=""></a>
                                                <a href="shop-details.html" class="product-name">Medium Flat Hoops</a>
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$100.00</div>
                                            </li>
                                        </ul>
                                        <div class="total-cart">
                                            <div class="title-total">Total: </div>
                                            <div class="total-price"><span>$250.00</span></div>
                                        </div>
                                        <div class="free-ship">
                                            <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                            <div class="total-percent"><div class="percent" style="width:20%"></div></div>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{route('cart.index')}}" class="button btn view-cart btn-primary">View cart</a>
                                            <a href="shop-checkout.html" class="button btn checkout btn-default">Check out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mobile-fixed">
            <!-- Shop -->
            <div class="shop-page">
                <a href="{{route('shop')}}"><i class="wpb-icon-shop"></i></a>
            </div>

            <!-- Login -->
            <div class="my-account">
                <div class="login-header">
                    <a href="{{route('login')}}"><i class="wpb-icon-user"></i></a>
                </div>
            </div>

            <!-- Search -->
            <div class="search-box">
                <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-box">
                <a href="{{route('wishlist.index')}}"><i class="wpb-icon-heart"></i></a>
            </div>
        </div>
    </div>

    <div class="header-desktop">
        <div class="header-top">
            <div class="section-padding">
                <div class="section-container large p-l-r">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12 header-left">
                            <div class="header-page-link">
                                <!-- Search -->
                                <div class="search-box">
                                    <div class="search-toggle"><i class="icon-search"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-4 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-logo">
                                <a href="{{route('welcome')}}">
                                    <img width="400" height="80" src="{{asset('media/logo.jpg')}}" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">
                                <!-- Login -->
                                <div class="login-header icon">
                                    @auth
                                        <a href="{{ route('customer.dashboard') }}"><i class="icon-user"></i></a>
                                    @else
                                        <a href="{{route('login')}}"><i class="icon-user"></i></a>
                                    @endauth
                                </div>
                                
                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="{{route('wishlist.index')}}"><i class="icon-heart"></i></a>
                                    <span class="count-wishlist">{{count(getWishlistProducts())}}</span>
                                </div>
                                
                                <!-- Cart -->
                                <div class="mojuri-topcart dropdown light">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <span>No products in the cart.</span>
                                                        <a class="go-shop" href="{{route('shop')}}">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-list-wrap">
                                                <ul class="cart-list ">
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="shop-details.html" class="product-image"><img width="600" height="600" src="media/product/3.jpg" alt=""></a>
                                                        <a href="shop-details.html" class="product-name">Twin Hoops</a>     
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$150.00</div>
                                                    </li>
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>                                                  
                                                        <a href="shop-details.html" class="product-image"><img width="600" height="600" src="media/product/1.jpg" alt=""></a>
                                                        <a href="shop-details.html" class="product-name">Medium Flat Hoops</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$100.00</div>                        
                                                    </li>
                                                </ul>
                                                <div class="total-cart">
                                                    <div class="title-total">Total: </div>
                                                    <div class="total-price"><span>$250.00</span></div>
                                                </div>
                                                <div class="free-ship">
                                                    <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                                    <div class="total-percent"><div class="percent" style="width:20%"></div></div>
                                                </div>
                                                <div class="buttons">
                                                    <a href="{{route('cart.index')}}" class="button btn view-cart btn-primary">View cart</a>
                                                    <a href="{{route('cart.checkout')}}" class="button btn checkout btn-default">Check out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle text-center color-white">
            <div class="site-navigation">
                <nav id="main-navigation">
                    <ul id="menu-main-menu" class="menu">
                        <li class="level-0 menu-item menu-item-has-children">
                            <a href="shop-grid-left.html"><span class="menu-item-text">Our Collections</span></a>
                            <ul class="sub-menu">
                                <!-- <li class="level-1 menu-item menu-item-has-children">
                                    <a href="shop-grid-left.html"><span class="menu-item-text">Shop - Products</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-grid-left.html"><span class="menu-item-text">Shop Grid - Left Sidebar</span></a>
                                        </li>
                                    </ul>
                                </li> -->
                                @foreach(types() as $type)
                                <li>
                                    <a href="{{route('type', $type->slug)}}"><span class="menu-item-text">Collections for <strong>{{$type->name}}</strong></span></a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="level-0 menu-item">
                            <a href="{{route('shop')}}"><span class="menu-item-text">Shop</span></a>
                        </li>
                        <li class="level-0 menu-item menu-item-has-children">
                            <a href="{{route('shop')}}"><span class="menu-item-text">Our Products</span></a>
                            <ul class="sub-menu">
                                @foreach(categories() as $category)
                                <li>
                                    <a href="{{route('category', $category->slug)}}"><span class="menu-item-text">{{$category->name}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="level-0 menu-item menu-item-has-children mega-menu mega-menu-fullwidth align-center">
                            <a href="blog-grid-left.html"><span class="menu-item-text">Blog</span></a>
                            <div class="sub-menu">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-section">
                                            <h2 class="sub-menu-title">Recent Posts</h2>
                                            <div class="block block-posts recent-posts p-t-5">
                                                <ul class="posts-list">
                                                    <li class="post-item">
                                                        <a href="blog-details-right.html" class="post-image">
                                                            <img src="media/blog/1.jpg">
                                                        </a>
                                                        <div class="post-content">
                                                            <h2 class="post-title">
                                                                <a href="blog-details-right.html">
                                                                    Bridial Fair Collections 2023
                                                                </a>
                                                            </h2>
                                                            <div class="post-time">
                                                                <span class="post-date">May 30, 2022</span>
                                                                <span class="post-comment">4 Comments</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="post-item">
                                                        <a href="blog-details-right.html" class="post-image">
                                                            <img src="media/blog/2.jpg">
                                                        </a>
                                                        <div class="post-content">
                                                            <h2 class="post-title">
                                                                <a href="blog-details-right.html">
                                                                    Our Sterling Silver
                                                                </a>
                                                            </h2>
                                                            <div class="post-time">
                                                                <span class="post-date">Aug 24, 2022</span>
                                                                <span class="post-comment">2 Comments</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="post-item">
                                                        <a href="blog-details-right.html" class="post-image">
                                                            <img src="media/blog/3.jpg">
                                                        </a>
                                                        <div class="post-content">
                                                            <h2 class="post-title">
                                                                <a href="blog-details-right.html">
                                                                    Kitchen Inspired On Japanese
                                                                </a>
                                                            </h2>
                                                            <div class="post-time">
                                                                <span class="post-date">Dec 06, 2022</span>
                                                                <span class="post-comment">1 Comment</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="level-0 menu-item">
                            <a href="{{route('about')}}"><span class="menu-item-text">About Us</span></a>
                        </li>
                        <li class="level-0 menu-item">
                            <a href="{{route('contact')}}"><span class="menu-item-text">Contact Us</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        @if(Route::is('welcome'))
        <div class="header-bottom">
            <div class="section-padding">
                <div class="section-container p-l-r">
                    <div class="block block-feature">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-md-2 sm-m-b-50">
                                    <div class="box">
                                        <div class="box-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"><g><g><path d="M457.987,31.531c-2.688-6.997-13.013-8.533-17.749-3.499c-21.44,18.88-48.939,29.248-77.547,29.248    c-39.424,0-75.989-19.627-97.771-52.501C262.937,1.792,259.609,0,256.025,0c-3.563,0-6.912,1.792-8.875,4.757    c-21.845,32.875-58.411,52.501-97.835,52.501c-28.928,0-56.704-10.603-78.208-29.867c-3.136-2.816-7.616-3.499-11.477-1.792    c-3.84,1.707-6.315,5.525-6.315,9.728v231.317c0,133.205,189.44,239.552,197.504,244.011c1.6,0.896,3.392,1.344,5.163,1.344    c1.771,0,3.563-0.448,5.163-1.301c8.064-4.459,197.504-110.827,197.504-244.011v-230.4    C458.777,34.688,458.563,33.067,457.987,31.531z M437.315,266.667c0,109.163-151.232,204.459-181.333,222.336    C225.859,471.125,74.649,375.936,74.649,266.667V56.811c22.165,14.165,48,21.803,74.667,21.803    c41.579,0,80.469-18.496,106.667-50.091c26.24,31.616,65.131,50.091,106.709,50.091c26.645,0,52.48-7.637,74.624-21.781V266.667z"></path></g></g><g><g><path d="M327.577,195.136c-4.16-4.16-10.923-4.16-15.083,0l-77.845,77.781l-35.072-35.115c-4.16-4.16-10.923-4.16-15.083,0    c-4.16,4.139-4.16,10.923,0,15.083l42.581,42.667c2.005,1.984,4.715,3.115,7.552,3.115s5.547-1.131,7.531-3.115l85.419-85.333    C331.737,206.059,331.737,199.296,327.577,195.136z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                            </span>
                                        </div>
                                        <div class="box-title-wrap">
                                            <h3 class="box-title">
                                                925 Pure Silver 
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 sm-m-b-50">
                                    <div class="box">
                                        <div class="box-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"id="Layer_1"x="0px"y="0px"viewBox="0 0 512 512"style="enable-background:new 0 0 512 512;"xml:space="preserve"><g><g><path d="M509.473,256.394l-59.391-67.801c-1.937-2.21-4.733-3.479-7.672-3.479h-49.455v-41.872    c0-5.633-4.567-10.199-10.199-10.199H172.109c-5.632,0-10.199,4.566-10.199,10.199v13.762H63.818    c-5.632,0-10.199,4.566-10.199,10.199c0,5.633,4.567,10.199,10.199,10.199h98.092v132.21h-59.046    c-5.632,0-10.199,4.566-10.199,10.199c0,5.633,4.567,10.199,10.199,10.199h59.046v10.365c0,5.633,4.567,10.199,10.199,10.199    h21.288c4.485,16.339,19.459,28.382,37.203,28.382c17.744,0,32.718-12.043,37.204-28.382h136.089v-0.001    c4.485,16.339,19.459,28.382,37.203,28.382c17.744,0,32.718-12.043,37.204-28.382h23.502c5.632,0,10.199-4.566,10.199-10.199    v-77.261C512,260.642,511.101,258.253,509.473,256.394z M230.6,358.558c-10.026,0-18.182-8.157-18.182-18.183    s8.156-18.183,18.182-18.183s18.183,8.157,18.183,18.183S240.626,358.558,230.6,358.558z M267.802,330.176    c-4.485-16.339-19.46-28.382-37.204-28.382s-32.717,12.043-37.203,28.382h-11.089V153.44h190.247v176.736H267.802z     M441.094,358.558c-10.026,0-18.182-8.157-18.182-18.183s8.156-18.183,18.182-18.183c10.026,0,18.183,8.157,18.183,18.183    S451.121,358.558,441.094,358.558z M491.602,330.176h-13.304c-4.485-16.339-19.46-28.382-37.204-28.382    c-17.744,0-32.717,12.043-37.203,28.382h-10.939V205.512h44.831l53.818,61.437V330.176z"></path></g></g><g><g><path d="M69.261,309.611h-5.442c-5.632,0-10.199,4.566-10.199,10.199c0,5.633,4.567,10.199,10.199,10.199h5.442    c5.632,0,10.199-4.566,10.199-10.199C79.46,314.177,74.894,309.611,69.261,309.611z"></path></g></g><g><g><path d="M119.5,232.276H10.199C4.567,232.276,0,236.842,0,242.475c0,5.633,4.567,10.199,10.199,10.199H119.5    c5.632,0,10.199-4.566,10.199-10.199C129.699,236.842,125.132,232.276,119.5,232.276z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                            </span>
                                        </div>
                                        <div class="box-title-wrap">
                                            <h3 class="box-title">
                                                FREE Delivery On Prepaid Orders 
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 sm-m-b-50">
                                    <div class="box">
                                        <div class="box-icon icon-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="459pt" viewBox="-5 0 459 459.648" width="459pt"><path d="m416.324219 293.824219c0 26.507812-21.492188 48-48 48h-313.375l63.199219-63.199219-22.625-22.625-90.511719 90.511719c-6.246094 6.25-6.246094 16.375 0 22.625l90.511719 90.511719 22.625-22.625-63.199219-63.199219h313.375c44.160156-.054688 79.945312-35.839844 80-80v-64h-32zm0 0"></path><path d="m32.324219 165.824219c0-26.511719 21.488281-48 48-48h313.375l-63.199219 63.199219 22.625 22.625 90.511719-90.511719c6.246093-6.25 6.246093-16.375 0-22.625l-90.511719-90.511719-22.625 22.625 63.199219 63.199219h-313.375c-44.160157.050781-79.949219 35.839843-80 80v64h32zm0 0"></path></svg>
                                            </span>
                                        </div>
                                        <div class="box-title-wrap">
                                            <h3 class="box-title">
                                                15 Days Return 
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <div class="box-icon icon-3">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"id="Layer_1"x="0px"y="0px"viewBox="0 0 512 512"style="enable-background:new 0 0 512 512;"xml:space="preserve"><g><g><path d="M498.946,294.959c-5.521-1.116-10.902,2.455-12.018,7.977C464.834,412.256,367.715,491.602,256,491.602    c-129.911,0-235.602-105.69-235.602-235.602S126.089,20.398,256,20.398c61.287,0,120.041,23.97,163.818,66.295h-26.361    c-5.633,0-10.199,4.566-10.199,10.199c0,5.633,4.566,10.199,10.199,10.199h51.229c5.633,0,10.199-4.566,10.199-10.199V45.664    c0-5.633-4.566-10.199-10.199-10.199c-5.633,0-10.199,4.566-10.199,10.199v26.848C386.87,26.228,322.823,0,256,0    C187.62,0,123.333,26.628,74.98,74.98C26.628,123.333,0,187.62,0,256s26.628,132.667,74.98,181.02    C123.333,485.372,187.62,512,256,512c59.438,0,117.352-20.83,163.074-58.652c45.116-37.321,76.315-89.304,87.849-146.372    C508.039,301.455,504.467,296.075,498.946,294.959z"></path></g></g><g><g><path d="M501.801,245.801c-5.633,0-10.199,4.566-10.199,10.199c0,2.281-0.033,4.585-0.098,6.848    c-0.161,5.631,4.273,10.326,9.903,10.487c0.1,0.002,0.198,0.004,0.297,0.004c5.497,0,10.031-4.376,10.19-9.907    c0.07-2.457,0.106-4.957,0.106-7.43C512,250.367,507.434,245.801,501.801,245.801z"></path></g></g><g><g><path d="M248.858,350.416H145.234v-20.14c0-43.204,109.147-65.293,109.147-135.134c0-35.082-27.286-62.369-64.644-62.369    c-34.434,0-61.07,22.739-61.07,53.924c0,9.745,3.248,13.319,9.745,13.319c7.471,0,11.369-4.548,11.369-8.771    c0-25.662,16.892-38.332,39.306-38.332c29.886,0,43.854,22.414,43.854,42.88c0,56.846-109.797,80.56-109.797,134.484v31.51    c0,5.198,5.847,8.446,10.07,8.446h115.644c4.223,0,7.796-4.872,7.796-10.071C256.654,354.964,253.081,350.416,248.858,350.416z"></path></g></g><g><g><path d="M388.538,293.893h-17.866v-62.695c0-5.523-5.523-8.121-10.72-8.121c-5.523,0-10.719,2.599-10.719,8.121v62.695h-63.669    l75.039-148.127c0.65-1.625,0.975-2.924,0.975-4.223c0-5.198-6.173-8.771-10.395-8.771c-3.898,0-7.796,1.949-10.071,6.497    l-81.535,160.797c-0.974,1.625-1.299,3.573-1.299,5.523c0,4.872,2.924,8.771,8.446,8.771h82.51v47.426    c0,5.522,5.198,8.446,10.719,8.446c5.198,0,10.72-2.924,10.72-8.446v-47.426h17.866c4.872,0,8.121-5.198,8.121-10.395    C396.658,299.091,394.059,293.893,388.538,293.893z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                            </span>
                                        </div>
                                        <div class="box-title-wrap">
                                            <h3 class="box-title">
                                                Authentication Certificate 
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </div>
</header>