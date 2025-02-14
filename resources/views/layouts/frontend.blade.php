<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }} | @yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
        
        <!-- Dependency Styles -->
        <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/feather-font/css/iconfont.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/icomoon-font/css/icomoon.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/wpbingofont/css/wpbingofont.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/elegant-icons/css/elegant.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/slick/css/slick.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/slick/css/slick-theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/mmenu/css/mmenu.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('libs/slider/css/jslider.css') }}" type="text/css">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    </head>
    
    <body class="home home-3 title-3">
        <div id="page" class="hfeed page-wrapper">
            
            @include('layouts.header')
            
            @yield('main')

            @include('layouts.footer')
        </div>

        <!-- Back Top button -->
        <div class="back-top button-show">
            <i class="arrow_carrot-up"></i>
        </div>

        <!-- Search -->
        <div class="search-overlay">
            <div class="close-search"></div>
            <div class="wrapper-search">
                <form role="search" method="get" class="search-from ajax-search" action="#">
                    <a href="#" class="search-close"></a>
                    <div class="search-box">
                        <button id="searchsubmit" class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
                        <input type="text" autocomplete="off" value="" name="s" class="input-search s" placeholder="Search...">
                        @if(categories())
                        <div class="content-menu_search">
                            <label>Suggested</label>
                            <ul id="menu_search" class="menu">
                                @foreach(categories() as $category)
                                <li><a href="{{route('category', $category->slug)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>           
                        </div>
                        @endif
                    </div>
                </form> 
            </div>  
        </div>

        <!-- Wishlist -->
        <div class="wishlist-popup">
            <div class="wishlist-popup-inner">
                <div class="wishlist-popup-content">
                    <div class="wishlist-popup-content-top">
                        <span class="wishlist-name">Wishlist</span>
                        <span class="wishlist-count-wrapper"><span class="wishlist-count">{{count(getWishlistProducts())}}</span></span>                                
                        <span class="wishlist-popup-close"></span>
                    </div>
                    <div class="wishlist-popup-content-mid">
                        @if(getWishlistProducts()->isNotEmpty())
                        <table class="wishlist-items">                        
                            <tbody>
                                @foreach(getWishlistProducts() as $product)
                                <tr class="wishlist-item">
                                    <td class="wishlist-item-remove"><span></span></td>
                                    <td class="wishlist-item-image">
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/3.jpg" alt="">                                        
                                        </a>
                                    </td>
                                    <td class="wishlist-item-info">
                                        <div class="wishlist-item-name">
                                            <a href="shop-details.html">Twin Hoops</a>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <span>$150.00</span>
                                        </div>
                                        <div class="wishlist-item-time">June 4, 2022</div>                                
                                    </td>
                                    <td class="wishlist-item-actions">
                                        <div class="wishlist-item-stock">
                                            In stock 
                                        </div>
                                        <div class="wishlist-item-add">
                                            <div data-title="Add to cart">
                                                <a rel="nofollow" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                        @else
                            <div align="center" style="padding-top: 50px;">Your wishlist is empty.</div>
                        @endif
                    </div>
                    <div class="wishlist-popup-content-bot">
                        <div class="wishlist-popup-content-bot-inner">
                            <a class="wishlist-page" href="{{route('wishlist.index')}}">
                                Open wishlist page                                    
                            </a>
                            <span class="wishlist-continue" data-url="">
                                Continue shopping                                        
                            </span>
                        </div>
                        <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quickview -->
        <div class="quickview-popup">
            <div id="quickview-container"> 
                <div class="quickview-container"> 
                    <a href="#" class="quickview-close"></a> 
                    <div class="quickview-notices-wrapper"></div> 
                    <div class="product single-product product-type-simple">
                        <div class="product-detail">
                            <div class="row"> 
                                <div class="img-quickview"> 
                                    <div class="product-images-slider">
                                        <div id="quickview-slick-carousel"> 
                                            <div class="images"> 
                                                <div class="scroll-image">
                                                    <div class="slick-wrap">
                                                        <div class="slick-sliders image-additional" data-dots="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                            <div class="img-thumbnail slick-slide"> 
                                                                <a href="media/product/3.jpg" class="image-scroll" title="">
                                                                    <img width="900" height="900" src="media/product/3.jpg" alt="">
                                                                </a> 
                                                            </div>
                                                            <div class="img-thumbnail slick-slide"> 
                                                                <a href="media/product/3-2.jpg" class="image-scroll" title="">
                                                                    <img width="900" height="900" src="media/product/3-2.jpg" alt="">
                                                                </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="quickview-single-info">
                                    <div class="product-content-detail entry-summary">
                                        <h1 class="product-title entry-title">Twin Hoops paul</h1>
                                        <div class="price-single">
                                            <div class="price">
                                                <del><span>$150.00</span></del>
                                                <span>$100.00</span>
                                            </div>
                                        </div>
                                        <div class="product-rating"> 
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div> 
                                            <a href="#" class="review-link">(<span class="count">1</span> customer review)</a> 
                                        </div>
                                        <div class="description"> 
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</p> 
                                        </div>
                                        <form class="cart" method="post" enctype="multipart/form-data">
                                            <div class="quantity-button">
                                                <div class="quantity"> 
                                                    <button type="button" class="plus">+</button> 
                                                    <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off"> 
                                                    <button type="button" class="minus">-</button> 
                                                </div> 
                                                <button type="submit" class="single-add-to-cart-button button alt">Add to cart</button> 
                                            </div> 
                                            <button class="button quick-buy">Buy It Now</button>
                                        </form> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                    </div> 
                    <div class="clearfix"></div> 
                </div> 
            </div>
        </div>

        <!-- Newsletter Popup -->
        <!-- <div class="popup-shadow"></div>
        <div class="newsletter-popup">
            <a href="#" class="newsletter-close"></a>
            <div class="newsletter-container"> 
                <div class="newsletter-img">
                    <img src="{{ asset('media/banner/newsletter-popup.jpg') }}" alt="">
                </div> 
                <div class="newsletter-form">
                    <form action="#" method="post">
                        <div class="newsletter-title">
                            <div class="title">Get<br> free shipping</div>
                            <div class="sub-title">on your first order. Offer ends soon.</div>
                        </div>
                        <div class="newsletter-input clearfix">
                            <input type="email" name="your-email" size="40" class="form-control" placeholder="Enter Your Email ...">
                            <input type="submit" value="Subscribe" class="form-control">
                        </div>
                        <div class="newsletter-no">no thanks !</div>
                    </form>
                </div> 
            </div>
        </div> -->

        <!-- Page Loader -->
        <div class="page-preloader">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Dependency Scripts -->
        <script src="{{ asset('libs/popper/js/popper.min.js') }}"></script>
        <script src="{{ asset('libs/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('libs/slick/js/slick.min.js') }}"></script>
        <script src="{{ asset('libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>
        <script src="{{ asset('libs/slider/js/tmpl.js') }}"></script>
        <script src="{{ asset('libs/slider/js/jquery.dependClass-0.1.js') }}"></script>
        <script src="{{ asset('libs/slider/js/draggable-0.1.js') }}"></script>
        <script src="{{ asset('libs/slider/js/jquery.slider.js') }}"></script>
        <script src="{{ asset('libs/elevatezoom/js/jquery.elevatezoom.js') }}"></script>

        <!-- Site Scripts -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif

            @if(session('warning'))
                toastr.warning("{{ session('warning') }}");
            @endif

            @if(session('info'))
                toastr.info("{{ session('info') }}");
            @endif
        </script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right", // Change position here
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
        </script>

        @yield('script')
    </body>
</html>