@extends('layouts.frontend')

@section('main')
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <section class="section section-padding p-t-20 mobile-only">
                    <div class="section-container">
                        <!-- Block Product Categories -->
                        <div class="block block-product-cats slider round-border">
                            <div class="block-widget-wrap">
                                <div class="block-content">
                                    <div class="product-cats-list slick-wrap">
                                        <div class="slick-sliders content-category" data-dots="0" data-slidestoscroll="1" data-nav="0" data-columns4="4" data-columns3="3" data-columns2="3" data-columns1="1" data-columns1440="5" data-columns="5">
                                            @foreach(categories() as $category)
                                            <div class="item item-product-cat slick-slide"> 
                                                <div class="item-product-cat-content">
                                                    <a href="shop-grid-left.html">
                                                        <div class="item-image animation-horizontal">
                                                            <img width="258" height="258" src="{{$category->image}}" alt="{{$category->slug}}">
                                                        </div>
                                                    </a>            
                                                    <div class="product-cat-content-info">
                                                        <h3 class="item-title font-10">
                                                            <a href="shop-grid-left.html">{{$category->name}}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section m-b-30">
                    <!-- Block Sliders (Layout 3) -->
                    <div class="block block-sliders layout-3 auto-height nav-center">
                        <div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="671" src="media/slider/3-1.jpg" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">STATEMENT <br>MAKERS</h2>
                                            <div class="description-slider">Set off a chain reaction with statement styles that boast large profiles and embellished details.</div>
                                            <a class="button button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="671" src="media/slider/3-2.jpg" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">Oh, Hello <br>spring!</h2>
                                            <div class="description-slider">Set off a chain reaction with statement styles that boast large profiles and embellished details.</div>
                                            <a class="button button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="671" src="media/slider/3-3.jpg" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">Best of <br>the Best</h2>
                                            <div class="description-slider">Set off a chain reaction with statement styles that boast large profiles and embellished details.</div>
                                            <a class="button button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-70">
                    <div class="section-container">
                        <!-- Block Product Categories (Layout 2) -->
                        <div class="block block-product-cats layout-2">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    @foreach(categories() as $category)
                                    <div class="col-lg-3 col-md-6 col-6 m-b-30">
                                        <div class="item item-product-cat">
                                            <div class="item-product-cat-content">
                                                <div class="item-image animation-horizontal">
                                                    <a href="shop-grid-left.html">
                                                        <img width="330" height="330" src="{{$category->image}}" alt="{{$category->slug}}">
                                                    </a>
                                                </div>
                                                <div class="product-cat-content-info">
                                                    <a class="item-title" href="">{{$category->name}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-80">
                    <div class="section-container">
                        <!-- Block Lookbook -->
                        <div class="block block-lookbook">
                            <div class="block-widget-wrap">
                                <div class="lookbook-item">
                                    <div class="row">
                                        <div class="col-md-6 col-image">
                                            <div class="lookbook-container">
                                                <div class="lookbook-content">
                                                    <div class="item">
                                                        <img width="690" height="473" src="media/banner/lookbook-3-1.jpg" alt="Look Book 1">
                                                        <div class="item-lookbook" style="left:43%; top:77%">
                                                            <span class="number-lookbook">1</span>
                                                            <div class="content-lookbook" style="left:35px; bottom:10px;">
                                                                <div class="item-thumb">
                                                                    <a href="shop-details.html">
                                                                        <img width="1000" height="1000" src="media/product/1.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="content-lookbook-bottom">
                                                                    <div class="item-title">
                                                                        <a href="shop-details.html">Medium Flat Hoops</a>
                                                                    </div>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$150.00</span></del> 
                                                                        <ins><span>$100.00</span></ins>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-text">
                                            <div class="lookbook-intro-wrap position-center text-center">
                                                <div class="lookbook-intro">
                                                    <h2 class="title">Best Seller</h2>
                                                    <div class="description">Brighten up your look with vibrant gemstone jewelry.</div>
                                                    <a href="shop-grid-left.html" class="button button-primary animation-horizontal">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lookbook-item">
                                    <div class="row">
                                        <div class="col-md-6 col-text">
                                            <div class="lookbook-intro-wrap position-center text-center">
                                                <div class="lookbook-intro">
                                                    <h2 class="title">Special Discount</h2>
                                                    <div class="description">Introducing your outfit’s missing link.</div>
                                                    <a href="shop-grid-left.html" class="button button-primary animation-horizontal">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-image">
                                            <div class="lookbook-container">
                                                <div class="lookbook-content">
                                                    <div class="item">
                                                        <img width="690" height="473" src="media/banner/lookbook-3-2.jpg" alt="Look Book 1">
                                                        <div class="item-lookbook" style="right:25%; top:50%">
                                                            <span class="number-lookbook">1</span>
                                                            <div class="content-lookbook" style="right:35px; bottom:10px;">
                                                                <div class="item-thumb">
                                                                    <a href="shop-details.html">
                                                                        <img width="1000" height="1000" src="media/product/3.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="content-lookbook-bottom">
                                                                    <div class="item-title">
                                                                        <a href="shop-details.html">Twin Hoops</a>
                                                                    </div>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$150.00</span></del> 
                                                                        <ins><span>$100.00</span></ins>
                                                                    </span>
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
                    </div>
                </section>

                <section class="section section-padding background-img bg-img-2 p-t-70 p-b-50 mb-0">
                    <div class="section-container">
                        <!-- Block Product Categories (Layout 3) -->
                        <div class="block block-product-cats slider layout-3">
                            <div class="block-widget-wrap">
                                <div class="block-title">
                                    <div class="sub-title">We’ve Got You Covered</div>
                                    <h2>Type You are Looking For</h2>
                                </div>
                                <div class="block-content">
                                    <div class="product-cats-list slick-wrap">
                                        <div class="slick-sliders content-category" data-dots="0" data-slidestoscroll="true" data-nav="0" data-columns4="3" data-columns3="3" data-columns2="4" data-columns1="4" data-columns1440="5" data-columns="5">
                                            @if(types())
                                                @foreach(types() as $type)
                                                <div class="item item-product-cat slick-slide"> 
                                                    <div class="item-product-cat-content">
                                                        <a href="{{$type->slug}}">
                                                            <div class="item-image animation-horizontal">
                                                                <img width="273" height="376" src="{{$type->image}}" alt="{{$type->slug}}">
                                                            </div>
                                                        </a>            
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="{{$type->slug}}">{{$type->name}}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding background-img bg-img-3 p-t-60 p-b-70 m-b-70">
                    <div class="section-container">
                        <!-- Block Products (Layout 2) -->
                        <div class="block block-products layout-2 slider">
                            <div class="block-widget-wrap">
                                <div class="block-title"><h2>Trending Products</h2></div>
                                <div class="block-content">
                                    <div class="content-product-list slick-wrap">
                                        <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="2" data-columns1="3" data-columns1440="4" data-columns="4">
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/6.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/6-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
                                                                <span class="price">$100.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-10%</div>
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/7.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/7-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Bold Pearl Hoop Earrings</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$200.00</span></del>
                                                                    <ins><span>$180.00</span></ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/9.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/9-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Twin Hoops</a></h3>
                                                                <span class="price">$150.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-33%</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/10.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/10-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-4"></div><span class="count">(2 reviews)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$150.00</span></del> 
                                                                    <ins><span>$100.00</span></ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-7%</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/11.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/11-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                </div>
                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                    <button class="product-btn">Add to wishlist</button>
                                                                </div>
                                                                <span class="product-quickview" data-title="Quick View">
                                                                    <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                </span>     
                                                            </div>
                                                            <div class="product-stock">    
                                                                <span class="stock">Out Of Stock</span>
                                                            </div>
                                                        </div>
                                                        <div class="products-content">
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$150.00</span></del> 
                                                                    <ins><span>$140.00</span></ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/6.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/6-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
                                                                <span class="price">$100.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-10%</div>
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/7.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/7-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Bold Pearl Hoop Earrings</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$200.00</span></del>
                                                                    <ins><span>$180.00</span></ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/9.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/9-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Twin Hoops</a></h3>
                                                                <span class="price">$150.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-33%</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/10.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/10-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>      
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
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
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-4"></div><span class="count">(2 reviews)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$150.00</span></del> 
                                                                    <ins><span>$100.00</span></ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product slick-slide">
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="onsale">-7%</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="media/product/11.jpg" class="post-image" alt="">
                                                                    <img width="600" height="600" src="media/product/11-2.jpg" class="hover-image back" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-button">
                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                    <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                </div>
                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                    <button class="product-btn">Add to wishlist</button>
                                                                </div>
                                                                <span class="product-quickview" data-title="Quick View">
                                                                    <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                </span>     
                                                            </div>
                                                            <div class="product-stock">    
                                                                <span class="stock">Out Of Stock</span>
                                                            </div>
                                                        </div>
                                                        <div class="products-content">
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
                                                                <span class="price">
                                                                    <del aria-hidden="true"><span>$150.00</span></del> 
                                                                    <ins><span>$140.00</span></ins>
                                                                </span>
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
                </section>

                <section class="section section-padding m-b-70">
                    <div class="section-container">
                        <!-- Block Intro (Layout 3) -->
                        <div class="block block-intro layout-3">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    <div class="section-column left">
                                        <div class="intro-wrap">
                                            <h2 class="intro-title">It started with love</h2>
                                            <div class="intro-item">
                                                Behind our 15-year success is our panel of expert jewellers who have been scouring the entire globe in pursuit of the best and most stunning jewellery that can be offered at affordable price for you. 
                                            </div>
                                            <div class="intro-item">
                                                Visit our online catalogue and shop for the finest earrings, rings, bracelets, watches, silver, and the most luxurious gemstones. 
                                            </div>
                                            <div class="intro-btn">
                                                <a href="page-about.html" class="button button-primary animation-horizontal">About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-column right animation-horizontal hover-opacity">
                                        <img width="690" height="498" src="media/banner/intro-3.jpg" alt="intro">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding background-img bg-img-4 p-t-60 p-b-80 mb-0">
                    <!-- Block Instagram -->
                    <div class="block block-instagram slider">
                        <div class="block-widget-wrap">
                            <div class="block-title">
                                <div class="title-icon animation-horizontal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M437.019,74.981C388.667,26.628,324.379,0,256,0S123.333,26.628,74.981,74.981C26.628,123.333,0,187.621,0,256    s26.628,132.667,74.981,181.019C123.333,485.372,187.621,512,256,512s132.667-26.628,181.019-74.981S512,324.379,512,256    S485.372,123.333,437.019,74.981z M256,495.832C123.756,495.832,16.168,388.244,16.168,256S123.756,16.168,256,16.168    S495.832,123.756,495.832,256S388.244,495.832,256,495.832z"></path></g></g><g><g><path d="M347.845,97.011H164.155c-37.024,0-67.144,30.121-67.144,67.144v183.692c0,37.022,30.121,67.143,67.144,67.143h183.692    c37.022,0,67.143-30.121,67.143-67.144V164.155C414.989,127.131,384.869,97.011,347.845,97.011z M398.821,347.845    c0,28.108-22.868,50.976-50.976,50.976H164.155c-28.108,0-50.976-22.868-50.976-50.976V164.155    c0-28.108,22.868-50.976,50.976-50.976h183.692c28.107,0,50.975,22.868,50.975,50.976V347.845z"></path></g></g><g><g><path d="M339.402,251.22c-2.391-42.533-37.002-76.75-79.558-78.669c-49.108-2.214-89.535,38.232-87.292,87.346    c1.945,42.56,36.19,77.154,78.728,79.51c17.951,0.995,34.762-3.727,48.803-12.494c4.374-2.731,5.087-8.814,1.441-12.459    c-0.039-0.039-0.077-0.077-0.115-0.115c-2.657-2.658-6.778-3.059-9.971-1.075c-10.491,6.519-22.892,10.241-36.158,10.102    c-37.455-0.394-67.676-31.844-66.621-69.286c1.061-37.681,33.215-67.721,71.657-65.312c33.126,2.076,60.09,28.49,62.819,61.569    c1.111,13.475-1.787,26.206-7.61,37.157c-1.667,3.136-1.153,6.982,1.358,9.493c0.041,0.041,0.083,0.083,0.124,0.124    c3.773,3.773,10.154,2.886,12.675-1.816C336.664,282.269,340.301,267.197,339.402,251.22z"></path></g></g><g><g><circle cx="342.232" cy="158.989" r="21.558"></circle></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>
                                <h2>SwarnSilva instagram</h2>
                            </div>
                            <div class="block-content">
                                <div class="slick-wrap">
                                    <div class="slick-sliders" data-dots="false" data-item_row="1" data-nav="false" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="4" data-columns="4">
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-1.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-2.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-3.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-4.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-5.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                        <div class="item slick-slide">
                                            <a class="instagram" href="#">
                                                <img width="450" height="450" src="media/banner/instagram-6.jpg" alt="Image Slider">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
@endsection