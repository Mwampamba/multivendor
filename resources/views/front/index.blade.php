<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Multi Vendor E-commerce</title>
    <!-- Standard Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome.min.css') }}">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <!-- Jquery-Ui-Range-Slider -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui-range-slider.min.css') }}">
    <!-- Utility -->
    <link rel="stylesheet" href="{{ asset('front/css/utility.css') }}">
    <!-- Main -->
    <link rel="stylesheet" href="{{ asset('front/css/bundle.css') }}">
</head>

<body>

<!-- app -->
<div id="app">
    <!-- Header -->
    <header>
        <!-- Top-Header -->
        <div class="full-layer-outer-header">
            <div class="container clearfix">
                <nav>
                    <ul class="primary-nav g-nav">
                        <li>
                            <a href="tel:+255-11112221333">
                                <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                                Telephone:+255-111-222-333</a>
                        </li>
                        <li>
                            <a href="mailto:info@mwampambashop.co.tz">
                                <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                                E-mail: info@mwampambashop.co.tz
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="secondary-nav g-nav">
                        <li>
                            <a>My Account
                                <i class="fas fa-chevron-down u-s-m-l-9"></i>
                            </a>
                            <ul class="g-dropdown" style="width:200px">
                                <li>
                                    <a href="cart.html">
                                        <i class="fas fa-cog u-s-m-r-9"></i>
                                        My Cart</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="far fa-heart u-s-m-r-9"></i>
                                        My Wishlist</a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <i class="far fa-check-circle u-s-m-r-9"></i>
                                        Checkout</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminLogin') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Customer Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminLogin') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Vendor Login</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>USD
                                <i class="fas fa-chevron-down u-s-m-l-9"></i>
                            </a>
                            <ul class="g-dropdown" style="width:90px">
                                <li>
                                    <a href="#" class="u-c-brand">($) USD</a>
                                </li>
                                <li>
                                    <a href="#">(£) GBP</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>ENG
                                <i class="fas fa-chevron-down u-s-m-l-9"></i>
                            </a>
                            <ul class="g-dropdown" style="width:70px">
                                <li>
                                    <a href="#" class="u-c-brand">ENG</a>
                                </li>
                                <li>
                                    <a href="#">ARB</a>
                                </li>
                            </ul>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Top-Header /- -->
        <!-- Mid-Header -->
        <div class="full-layer-mid-header">
            <div class="container">
                <div class="row clearfix align-items-center">
                    <div class="col-lg-3 col-md-9 col-sm-6">
                        <div class="brand-logo text-lg-center">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('front/images/main-logo/logo.png')}}" alt="Stack Developers" class="app-brand-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 u-d-none-lg">
                        <form class="form-searchbox rounded">
                            <label class="sr-only" for="search-landscape">Search</label>
                            <input id="search-landscape" type="text" class="text-field" placeholder="Search everything">
                            <div class="select-box-position">
                                <div class="select-box-wrapper select-hide">
                                    <label class="sr-only" for="select-category">Choose category for search</label>
                                    <select class="select-box" id="select-category">
                                        <option selected="selected" value="">
                                            All
                                        </option>
                                        <option value="">Clothing</option>
                                        <option value="">Electronics</option>
                                        <option value="">Appliances</option>
                                    </select>
                                </div>
                            </div>
                            <button id="btn-search" type="submit" class="button button-primary fas fa-search"></button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <nav>
                            <ul class="mid-nav g-nav">
                                <li class="u-d-none-lg">
                                    <a href="index.html">
                                        <i class="ion ion-md-home u-c-brand"></i>
                                    </a>
                                </li>
                                <li class="u-d-none-lg">
                                    <a href="wishlist.html">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a id="mini-cart-trigger">
                                        <i class="ion ion-md-basket"></i>
                                        <span class="item-counter">4</span>
                                        <span class="item-price">$220.00</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mid-Header /- -->
        <!-- Responsive-Buttons -->
        <div class="fixed-responsive-container">
            <div class="fixed-responsive-wrapper">
                <button type="button" class="button fas fa-search" id="responsive-search"></button>
            </div>
            <div class="fixed-responsive-wrapper">
                <a href="wishlist.html">
                    <i class="far fa-heart"></i>
                    <span class="fixed-item-counter">4</span>
                </a>
            </div>
        </div>
        <!-- Responsive-Buttons /- -->
        <!-- Mini Cart -->
        <div class="mini-cart-wrapper">
            <div class="mini-cart">
                <div class="mini-cart-header">
                    YOUR CART
                    <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                </div>
                <ul class="mini-cart-list">
                    <li class="clearfix">
                        <a href="single-product.html">
                            <img src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                            <span class="mini-item-name">Product name</span>
                            <span class="mini-item-price">$100.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.html">
                            <img src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                            <span class="mini-item-name">Product name</span>
                            <span class="mini-item-price">$100.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.html">
                            <img src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                            <span class="mini-item-name">Product name</span>
                            <span class="mini-item-price">$100.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.html">
                            <img src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                            <span class="mini-item-name">Product name</span>
                            <span class="mini-item-price">$100.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                </ul>
                <div class="mini-shop-total clearfix">
                    <span class="mini-total-heading float-left">Total:</span>
                    <span class="mini-total-price float-right">$400.00</span>
                </div>
                <div class="mini-action-anchors">
                    <a href="cart.html" class="cart-anchor">View Cart</a>
                    <a href="checkout.html" class="checkout-anchor">Checkout</a>
                </div>
            </div>
        </div>
        <!-- Mini Cart /- -->
        <!-- Bottom-Header -->
        <div class="full-layer-bottom-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="v-menu v-close">
                            <span class="v-title">
                                <i class="ion ion-md-menu"></i>
                                All Categories
                                <i class="fas fa-angle-down"></i>
                            </span>
                            <nav>
                                <div class="v-wrapper">
                                    <ul class="v-list animated fadeIn">
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.html">
                                                <i class="ion-ios-add-circle"></i>
                                                Clothing
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Men</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">T-Shirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Shirts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Women</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Tops</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Denims</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Kids</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">T-Shirts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Shirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Shorts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.html">
                                                <i class="ion-ios-add-circle"></i>
                                                Electronics
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Computers</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Desktops</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Laptops
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Mobiles</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Smartphones</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Basic Mobiles
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Accessories</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Computer Accessories</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Mobile Accessories
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.html">
                                                <i class="ion-ios-add-circle"></i>
                                                Appliances
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Televisions</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Smart Televisions</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Standard Televisions
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Headphones</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">In-Ear</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">On-Ear
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Cameras
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Accessories
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="listing.html">DSLR Cameras
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop v-none" style="display: none">
                                            <a href="shop-v1-root-category.html">
                                                <i class="ion ion-md-rocket"></i>
                                                Accessories
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Watches</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Casual Watches</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Formal Watches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="listing.html">Belts</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Casual Belts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.html">Leather Belts
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="v-more">
                                                <i class="ion ion-md-add"></i>
                                                <span>View More</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="bottom-nav g-nav u-d-none-lg">
                            <li>
                                <a href="listing-without-filters.html">New Arrivals
                                    <span class="superscript-label-new">NEW</span>
                                </a>
                            </li>
                            <li>
                                <a href="listing-without-filters.html">Best Seller
                                    <span class="superscript-label-hot">HOT</span>
                                </a>
                            </li>
                            <li>
                                <a href="listing-without-filters.html">Featured
                                </a>
                            </li>
                            <li>
                                <a href="listing-without-filters.html">Discounted
                                    <span class="superscript-label-discount">-30%</span>
                                </a>
                            </li>
                            <li class="mega-position">
                                <a>More
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <div class="mega-menu mega-3-colm">
                                    <ul>
                                        <li class="menu-title">COMPANY</li>
                                        <li>
                                            <a href="about.html" class="u-c-brand">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">FAQ</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="menu-title">COLLECTION</li>
                                        <li>
                                            <a href="cart.html">Men Clothing</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Women Clothing</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminLogin') }}">Kids Clothing</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="menu-title">ACCOUNT</li>
                                        <li>
                                            <a href="{{ route('adminLogin') }}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminLogin') }}">My Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminLogin') }}">My Orders</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom-Header /- -->
    </header>
    <!-- Header /- -->
    <!-- Main-Slider -->
     <div class="container">
        <div class="default-height ph-item">
        <div class="slider-main owl-carousel">
            <div class="bg-image">
                <div class="slide-content">
                    <h1><img src="{{ asset('front/images/banners/banner-1.png')}}"></h1>
                    <h2>Spring Collection</h2>
                </div>
            </div>
            <div class="bg-image">
                <div class="slide-content">
                    <h1><img src="{{ asset('front/images/banners/banner-2.png')}}"></h1>
                    <h2>Summer Collection</h2>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Main-Slider /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                <a target="_blank" rel="nofollow" href="https://youtube.com/stackdevelopers" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="{{ asset('front/images/banners/stack-developers.png')}}" alt="Winter Season Banner">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <!-- Top Collection -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">TOP COLLECTION</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-best-selling-products">Best Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#discounted-products">Discounted Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="men-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_1.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show fade" id="men-best-selling-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="discounted-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="men-featured-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.html">
                                                <img class="img-fluid" src="{{ asset('front/images/product/product_3.jpg') }}" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.html">Product Code</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.html">Product Name
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    $100.00
                                                </div>
                                                <div class="item-old-price">
                                                    $120.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag discount">
                                            <span>-15%</span>
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
    <!-- Top Collection /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                <a target="_blank" rel="nofollow" href="https://youtube.com/stackdevelopers" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="{{ asset('front/images/banners/stack-developers.png')}}" alt="Winter Season Banner">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <!-- Site-Priorities -->
    <section class="app-priority">
        <div class="container">
            <div class="priority-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-star"></i>
                            </div>
                            <h2>
                                Great Value
                            </h2>
                            <p>We offer competitive prices on our 100 million plus product range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-cash"></i>
                            </div>
                            <h2>
                                Shop with Confidence
                            </h2>
                            <p>Our Protection covers your purchase from click to delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-ios-card"></i>
                            </div>
                            <h2>
                                Safe Payment
                            </h2>
                            <p>Pay with the world’s most popular and secure payment methods</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-contacts"></i>
                            </div>
                            <h2>
                                24/7 Help Center
                            </h2>
                            <p>Round-the-clock assistance for a smooth shopping experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site-Priorities /- -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Outer-Footer -->
            <div class="outer-footer-wrapper u-s-p-y-80">
                <h6>
                    For special offers and other discount information
                </h6>
                <h1>
                    Subscribe to our Newsletter
                </h1>
                <p>
                    Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.
                </p>
                <form class="newsletter-form">
                    <label class="sr-only" for="newsletter-field">Enter your Email</label>
                    <input type="text" id="newsletter-field" placeholder="Your Email Address">
                    <button type="submit" class="button">SUBMIT</button>
                </form>
            </div>
            <!-- Outer-Footer /- -->
            <!-- Mid-Footer -->
            <div class="mid-footer-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>COMPANY</h6>
                            <ul>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>COLLECTION</h6>
                            <ul>
                                <li>
                                    <a href="cart.html">Men Clothing</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Women Clothing</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminLogin') }}">Kids Clothing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>ACCOUNT</h6>
                            <ul>
                                <li>
                                    <a href="{{ route('adminLogin') }}">My Account</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminLogin') }}">My Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminLogin') }}">My Orders</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>Contact</h6>
                            <ul>
                                <li>
                                    <i class="fas fa-location-arrow u-s-m-r-9"></i>
                                    <span>Mwampamba Youtube channel</span>
                                </li>
                                <li>
                                    <a href="tel:+255-111-222-333">
                                        <i class="fas fa-phone u-s-m-r-9"></i>
                                        <span>+255-111-222-333</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@mwampambashop.co.tz">
                                        <i class="fas fa-envelope u-s-m-r-9"></i>
                                        <span>
                                            info@mwampambashop.co.tz</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mid-Footer /- -->
            <!-- Bottom-Footer -->
            <div class="bottom-footer-wrapper">
                <div class="social-media-wrapper">
                    <ul class="social-media-list">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="copyright-text">Copyright &copy; 2023
                    <a target="_blank" rel="nofollow" href="">Mwampamba Shop</a> | All Right Reserved</p>
            </div>
        </div>
        <!-- Bottom-Footer /- -->
    </footer>
    <!-- Footer /- -->
    <!-- Dummy Selectbox -->
    <div class="select-dummy-wrapper">
        <select id="compute-select">
            <option id="compute-option">All</option>
        </select>
    </div>
    <!-- Dummy Selectbox /- -->
    <!-- Responsive-Search -->
    <div class="responsive-search-wrapper">
        <button type="button" class="button ion ion-md-close" id="responsive-search-close-button"></button>
        <div class="responsive-search-container">
            <div class="container">
                <p>Start typing and press Enter to search</p>
                <form class="responsive-search-form">
                    <label class="sr-only" for="search-text">Search</label>
                    <input id="search-text" type="text" class="responsive-search-field" placeholder="PLEASE SEARCH">
                    <i class="fas fa-search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- Responsive-Search /- -->
    <!-- Newsletter-Modal -->
    <div id="newsletter-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                <div class="modal-body u-s-p-x-0">
                    <div class="row align-items-center u-s-m-x-0">
                        <div class="col-lg-6 col-md-6 col-sm-12 u-s-p-x-0">
                            <div class="newsletter-image">
                                <a target="_blank" rel="nofollow" href="#" class="banner-hover effect-dark-opacity">
                                    <img class="img-fluid" src="{{ asset('front/images/main-logo/mwampamba.png')}}" alt="Newsletter Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="newsletter-wrapper">
                                <h1>New to
                                    <span>Mwampamba shop</span> ?
                                    <br>Subscribe to our Newsletter</h1>
                                <h5>Get latest product update...</h5>
                                <form>
                                    <div class="u-s-m-b-35">
                                        <input type="text" class="newsletter-textfield" placeholder="Enter Your Email">
                                    </div>
                                    <div class="u-s-m-b-35">
                                        <button class="button button-primary d-block w-100">Subscribe</button>
                                    </div>
                                </form>
                                <h6>Be the first for getting special deals and offers, Send directly to your inbox.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter-Modal /- -->
    <!-- Quick-view-Modal -->
    <div id="quick-view" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Product-zoom-area -->
                            <div class="zoom-area">
                                <img id="zoom-pro-quick-view" class="img-fluid" src="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}" alt="Zoom Image">
                                <div id="gallery-quick-view" class="u-s-m-t-10">
                                    <a class="active" data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                    <a data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                    <a data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                    <a data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                    <a data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                    <a data-image="{{ asset('front/images/product/product_4.jpg') }}" data-zoom-image="{{ asset('front/images/product/product_4.jpg') }}">
                                        <img src="{{ asset('front/images/product/product_2.jpg') }}" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <!-- Product-zoom-area /- -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Product-details -->
                            <div class="all-information-wrapper">
                                <div class="section-1-title-breadcrumb-rating">
                                    <div class="product-title">
                                        <h1>
                                            <a href="single-product.html">Product Name</a>
                                        </h1>
                                    </div>
                                    <ul class="bread-crumb">
                                        <li class="has-separator">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="shop-v1-root-category.html">Men Clothing </a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="listing.html">Tops</a>
                                        </li>
                                        <li class="is-marked">
                                            <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                        </li>
                                    </ul>
                                    <div class="product-rating">
                                        <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                            <span style='width:67px'></span>
                                        </div>
                                        <span>(23)</span>
                                    </div>
                                </div>
                                <div class="section-2-short-description u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Description:</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                                <div class="section-3-price-original-discount u-s-p-y-14">
                                    <div class="price">
                                        <h4>$100.00</h4>
                                    </div>
                                    <div class="original-price">
                                        <span>Original Price:</span>
                                        <span>$120.00</span>
                                    </div>
                                    <div class="discount-price">
                                        <span>Discount:</span>
                                        <span>15%</span>
                                    </div>
                                    <div class="total-save">
                                        <span>Save:</span>
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="section-4-sku-information u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                                    <div class="availability">
                                        <span>Availability:</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="left">
                                        <span>Only:</span>
                                        <span>50 left</span>
                                    </div>
                                </div>
                                <div class="section-5-product-variants u-s-p-y-14">
                                    <h6 class="information-heading u-s-m-b-8">Product Variants:</h6>
                                    <div class="color u-s-m-b-11">
                                        <span>Available Color:</span>
                                        <div class="color-variant select-box-wrapper">
                                            <select class="select-box product-color">
                                                <option value="1">Heather Grey</option>
                                                <option value="3">Black</option>
                                                <option value="5">White</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sizes u-s-m-b-11">
                                        <span>Available Size:</span>
                                        <div class="size-variant select-box-wrapper">
                                            <select class="select-box product-size">
                                                <option value="">Male 2XL</option>
                                                <option value="">Male 3XL</option>
                                                <option value="">Kids 4</option>
                                                <option value="">Kids 6</option>
                                                <option value="">Kids 8</option>
                                                <option value="">Kids 10</option>
                                                <option value="">Kids 12</option>
                                                <option value="">Female Small</option>
                                                <option value="">Male Small</option>
                                                <option value="">Female Medium</option>
                                                <option value="">Male Medium</option>
                                                <option value="">Female Large</option>
                                                <option value="">Male Large</option>
                                                <option value="">Female XL</option>
                                                <option value="">Male XL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                    <form action="#" class="post-form">
                                        <div class="quick-social-media-wrapper u-s-m-b-22">
                                            <span>Share:</span>
                                            <ul class="social-media-list">
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="quantity-wrapper u-s-m-b-22">
                                            <span>Quantity:</span>
                                            <div class="quantity">
                                                <input type="text" class="quantity-text-field" value="1">
                                                <a class="plus-a" data-max="1000">&#43;</a>
                                                <a class="minus-a" data-min="1">&#45;</a>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="button button-outline-secondary" type="submit">Add to cart</button>
                                            <button class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                            <button class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Product-details /- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view-Modal /- -->
</div>
<!-- app /- -->
<!--[if lte IE 9]>
<div class="app-issue">
    <div class="vertical-center">
        <div class="text-center">
            <h1>You are using an outdated browser.</h1>
            <span>This web app is not compatible with following browser. Please upgrade your browser to improve your security and experience.</span>
        </div>
    </div>
</div>
<style> #app {
    display: none;
} </style>
<![endif]-->
<!-- NoScript -->
<noscript>
    <div class="app-issue">
        <div class="vertical-center">
            <div class="text-center">
                <h1>JavaScript is disabled in your browser.</h1>
                <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
            </div>
        </div>
    </div>
    <style>
    #app {
        display: none;
    }
    </style>
</noscript>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function() {
    ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<!-- Modernizr-JS -->
<script type="text/javascript" src="{{ asset('front/js/vendor/modernizr-custom.min.js') }}"></script>
<!-- NProgress -->
<script type="text/javascript" src="{{ asset('front/js/nprogress.min.js') }}"></script>
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('front/js/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- Popper -->
<script type="text/javascript" src="{{ asset('front/js/popper.min.js') }}"></script>
<!-- ScrollUp -->
<script type="text/javascript" src="{{ asset('front/js/jquery.scrollUp.min.js') }}"></script>
<!-- Elevate Zoom -->
<script type="text/javascript" src="{{ asset('front/js/jquery.elevatezoom.min.js') }}"></script>
<!-- jquery-ui-range-slider -->
<script type="text/javascript" src="{{ asset('front/js/jquery-ui.range-slider.min.js') }}"></script>
<!-- jQuery Slim-Scroll -->
<script type="text/javascript" src="{{ asset('front/js/jquery.slimscroll.min.js') }}"></script>
<!-- jQuery Resize-Select -->
<script type="text/javascript" src="{{ asset('front/js/jquery.resize-select.min.js') }}"></script>
<!-- jQuery Custom Mega Menu -->
<script type="text/javascript" src="{{ asset('front/js/jquery.custom-megamenu.min.js') }}"></script>
<!-- jQuery Countdown -->
<script type="text/javascript" src="{{ asset('front/js/jquery.custom-countdown.min.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<!-- Main -->
<script type="text/javascript" src="{{ asset('front/js/app.js') }}"></script>
</body>
</html>
