@extends('layouts.master')

@section('content')
    <!--====================  hero slider area ====================-->

    <div class="hero-slider-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  hero slider wrapper  =======-->

                    <div class="hero-slider-wrapper">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": false,
                            "dots": true,
                            "autoplay": true,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "fade": true
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                            {"breakpoint":991, "settings": {"slidesToShow": 1} },
                            {"breakpoint":767, "settings": {"slidesToShow": 1} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1} }
                        ]'
                        >

                            <!--=======  single slider item  =======-->

                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper hero-slider-bg-1">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">The Stone Series</p>
                                        <p class="slider-title slider-title--big-bold">A Great Addition</p>
                                        <p class="slider-title slider-title--big-light">To Your Home</p>
                                        <a class="theme-button hero-slider-button" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single slider item  =======-->

                            <!--=======  single slider item  =======-->

                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper hero-slider-bg-2">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">Workshops @Alula</p>
                                        <p class="slider-title slider-title--big-bold">Plant Make</p>
                                        <p class="slider-title slider-title--big-light">People Happy</p>
                                        <a class="theme-button hero-slider-button" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single slider item  =======-->

                            <!--=======  single slider item  =======-->

                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper hero-slider-bg-3">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">Thursday Through Saturday</p>
                                        <p class="slider-title slider-title--big-bold">Plant Big Sale</p>
                                        <p class="slider-title slider-title--big-light">75% Off</p>
                                        <a class="theme-button hero-slider-button" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single slider item  =======-->

                        </div>
                    </div>

                    <!--=======  End of hero slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of hero slider area  ====================-->

    <!--====================  split banner area ====================-->

    <div class="split-banner-area mb-40 mb-sm-30">
        <div class="container">
            <div class="row row-5">
                <div class="col-md-6 mb-sm-10">
                    <!--=======  single split banner  =======-->

                    <div class="single-split-banner">
                        <div class="single-split-banner__image">
                            <a href="shop-left-sidebar.html">
                                <img src="assets/img/banners/banner1.jpg" class="img-fluid" alt="">
                                <div class="single-split-banner__image__content">
                                    <p class="split-banner-title split-banner-title--light">New Arrivals</p>
                                    <p class="split-banner-title split-banner-title--bold">House Plants</p>
                                    <p class="split-banner-title split-banner-title--price">from <span class="amount">$37.89</span></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--=======  End of single split banner  =======-->
                </div>
                <div class="col-md-6 mb-sm-10">
                    <!--=======  single split banner  =======-->

                    <div class="single-split-banner">
                        <div class="single-split-banner__image">
                            <a href="shop-left-sidebar.html">
                                <img src="assets/img/banners/banner2.jpg" class="img-fluid" alt="">
                                <div class="single-split-banner__image__content">
                                    <p class="split-banner-title split-banner-title--light">New Arrivals</p>
                                    <p class="split-banner-title split-banner-title--bold">Pothos Neon</p>
                                    <p class="split-banner-title split-banner-title--price">from <span class="amount">$35.89</span></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--=======  End of single split banner  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of split banner area  ====================-->
    <!--====================  product single row counter slider area ====================-->

    <div class="product-single-row-slider-area mb-40">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!--=======  section title  =======-->

                    <div class="section-title mb-20">
                        <h2>Today’s Deals</h2>
                    </div>

                    <!--=======  End of section title  =======-->
                </div>

                <div class="col-lg-5">
                    <div class="counter-deal">
                        Ends in: <div class="deal-countdown" data-countdown="2020/01/01"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  product single row slider wrapper  =======-->

                    <div class="product-single-row-slider-wrapper">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "infinite": false,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <div class="product-availability mb-15">
                                            <div class="product-availability__text">
                                                <div class="sold">Sold:1400</div>
                                                <div class="remaining">Available:230</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-15%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <div class="product-availability mb-15">
                                            <div class="product-availability__text">
                                                <div class="sold">Sold:1400</div>
                                                <div class="remaining">Available:230</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$70.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <div class="product-availability mb-15">
                                            <div class="product-availability__text">
                                                <div class="sold">Sold:1400</div>
                                                <div class="remaining">Available:230</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$30.00</span> <span class="main-price discounted">$50.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium16.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium17.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <div class="product-availability mb-15">
                                            <div class="product-availability__text">
                                                <div class="sold">Sold:1400</div>
                                                <div class="remaining">Available:230</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <div class="product-availability mb-15">
                                            <div class="product-availability__text">
                                                <div class="sold">Sold:1400</div>
                                                <div class="remaining">Available:230</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->


                        </div>
                    </div>

                    <!--=======  End of product single row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of product single row counter slider area  ====================-->
    <!--====================  full banner area ====================-->

    <div class="full-banner-area mb-40 mb-md-10 mb-sm-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 mb-md-30 mb-sm-30">
                    <!--=======  full banner content  =======-->

                    <div class="full-banner__content">
                        <h5>special offer</h5>
                        <h4>SUCCULENT GARDEN</h4>
                        <h3>GIFT BOXES</h3>

                        <p>From planter materials to style options, discover which planter is best for your space.</p>

                        <a href="shop-left-sidebar.html" class="theme-button theme-button--outline banner-button">Explore The Shop</a>
                    </div>
                    <!--=======  End of full banner content  =======-->
                </div>
                <div class="col-xl-8 col-lg-7 text-center text-lg-right mb-md-30 mb-sm-30">
                    <!--=======  full banner image  =======-->
                    <div class="full-banner__image">
                        <a href="shop-left-sidebar.html">
                            <img src="assets/img/banners/banner-big1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>

                    <!--=======  End of full banner image  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of full banner area  ====================-->
    <!--====================  banner with double row slider ====================-->

    <div class="banner-double-row-slider-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->

                    <div class="section-title mb-20">
                        <h2>New Products</h2>
                    </div>

                    <!--=======  End of section title  =======-->
                </div>
            </div>

            <div class="row row-10">
                <div class="col-custom-5 mb-sm-30">
                    <!--=======  slider banner area  =======-->

                    <div class="slider-banner">
                        <a href="shop-left-sidebar.html">
                            <img src="assets/img/banners/slider-banner1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>

                    <!--=======  End of slider banner area  =======-->
                </div>
                <div class="col-custom-7">
                    <!--=======  product double row slider wrapper  =======-->

                    <div class="product-double-row-slider-wrapper">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 3,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "rows": 2,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-15%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$70.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$30.00</span> <span class="main-price discounted">$50.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium16.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium17.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-15%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$70.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium16.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium17.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$30.00</span> <span class="main-price discounted">$50.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium13.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium14.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium16.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-15%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$70.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium17.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$30.00</span> <span class="main-price discounted">$50.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium12.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-20%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Lorem ipsum garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium15.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->

                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="single-product.html">
                                            <img src="assets/img/products/medium10.jpg" class="img-fluid" alt="">
                                            <img src="assets/img/products/medium11.jpg" class="img-fluid" alt="">
                                        </a>

                                        <span class="discount-label discount-label--green">-10%</span>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span class="main-price discounted">$120.00</span></p>

                                        <span class="cart-icon"><a href="javascript:void(0)"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>

                            <!--=======  End of single slider product  =======-->


                        </div>
                    </div>

                    <!--=======  End of product double row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of banner with double row slider  ====================-->
    <!--====================  icon feature area ====================-->

    <div class="icon-feature-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  icon feature wrapper  =======-->

                    <div class="icon-feature-wrapper">
                        <div class="row row-5">
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->

                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="assets/img/icons/free_shipping.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Free Shipping</p>
                                        <p class="feature-text">Free shipping on order</p>
                                    </div>
                                </div>

                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->

                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="assets/img/icons/support247.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Support 24/7</p>
                                        <p class="feature-text">Contact us 24 hrs a day</p>
                                    </div>
                                </div>

                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->

                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="assets/img/icons/moneyback.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">100% Money Back</p>
                                        <p class="feature-text">You’ve 30 days to Return</p>
                                    </div>
                                </div>

                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->

                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="assets/img/icons/payment_secure.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Payment Secure</p>
                                        <p class="feature-text">100% secure payment</p>
                                    </div>
                                </div>

                                <!--=======  End of single icon feature  =======-->
                            </div>
                        </div>
                    </div>

                    <!--=======  End of icon feature wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of icon feature area  ====================-->
    <!--====================  category area ====================-->

    <div class="category-area mb-40">
        <div class="container">
            <!--=======  section title  =======-->

            <div class="section-title mb-20">
                <h2>Featured Categories</h2>
            </div>

            <!--=======  End of section title  =======-->

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  category slider wrapper  =======-->

                    <div class="category-slider-wrapper-one">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "dots": false,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000
                            }'
                             data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'
                        >

                            <!--=======  single category item  =======-->

                            <div class="single-category-item">
                                <div class="single-category-item__image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/img/category/cat1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-category-item__image__content">
                                        <h5 class="category-title"><a href="shop-left-sidebar.html">BONSAI</a></h5>
                                        <p class="quntity">6 products</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single category item  =======-->

                            <!--=======  single category item  =======-->

                            <div class="single-category-item">
                                <div class="single-category-item__image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/img/category/cat2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-category-item__image__content">
                                        <h5 class="category-title"><a href="shop-left-sidebar.html">HOUSE PLANTS</a></h5>
                                        <p class="quntity">8 products</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single category item  =======-->

                            <!--=======  single category item  =======-->

                            <div class="single-category-item">
                                <div class="single-category-item__image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/img/category/cat3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-category-item__image__content">
                                        <h5 class="category-title"><a href="shop-left-sidebar.html">PERENNIALS</a></h5>
                                        <p class="quntity">7 products</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single category item  =======-->

                            <!--=======  single category item  =======-->

                            <div class="single-category-item">
                                <div class="single-category-item__image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/img/category/cat4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-category-item__image__content">
                                        <h5 class="category-title"><a href="shop-left-sidebar.html">PLANT FOR GIFT</a></h5>
                                        <p class="quntity">5 products</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single category item  =======-->

                            <!--=======  single category item  =======-->

                            <div class="single-category-item">
                                <div class="single-category-item__image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/img/category/cat1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-category-item__image__content">
                                        <h5 class="category-title"><a href="shop-left-sidebar.html">BONSAI</a></h5>
                                        <p class="quntity">6 products</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single category item  =======-->

                        </div>

                    </div>

                    <!--=======  End of category slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of category area  ====================-->
    <!--====================  blog post slider area ====================-->

    <div class="blog-post-slider-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->

                    <div class="section-title mb-20">
                        <h2>Latest Blogs</h2>
                    </div>

                    <!--=======  End of section title  =======-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  blog post slider wrapper  =======-->

                    <div class="blog-post-slider-wrapper">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 3,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single blog post  =======-->

                            <div class="slider-single-post">
                                <div class="slider-single-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="assets/img/blog/slider1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="slider-single-post__content">
                                    <h3 class="post-title"><a href="blog-post-left-sidebar.html">Bromeliad Mount Care: How to Water and Care for Mounted Bromeliads</a></h3>
                                    <div class="post-meta">
                                        <p class="author-name">by <span>HasTech</span></p>
                                        <p class="post-date">30 Oct, 2018</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single blog post  =======-->

                            <!--=======  single blog post  =======-->

                            <div class="slider-single-post">
                                <div class="slider-single-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="assets/img/blog/slider2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="slider-single-post__content">
                                    <h3 class="post-title"><a href="blog-post-left-sidebar.html">Mounted Tropical Plant Care: How to Grow Epiphytic Tropical Plants</a></h3>
                                    <div class="post-meta">
                                        <p class="author-name">by <span>HasTech</span></p>
                                        <p class="post-date">30 Oct, 2018</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single blog post  =======-->

                            <!--=======  single blog post  =======-->

                            <div class="slider-single-post">
                                <div class="slider-single-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="assets/img/blog/slider3.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="slider-single-post__content">
                                    <h3 class="post-title"><a href="blog-post-left-sidebar.html">Plantlet Care: How To Pot Up and Care For Juvenile Houseplants</a></h3>
                                    <div class="post-meta">
                                        <p class="author-name">by <span>HasTech</span></p>
                                        <p class="post-date">30 Oct, 2018</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single blog post  =======-->

                            <!--=======  single blog post  =======-->

                            <div class="slider-single-post">
                                <div class="slider-single-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="assets/img/blog/slider4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="slider-single-post__content">
                                    <h3 class="post-title"><a href="blog-post-left-sidebar.html">The Definitive List of Pumpkin Spice Everything fotr 2018</a></h3>
                                    <div class="post-meta">
                                        <p class="author-name">by <span>HasTech</span></p>
                                        <p class="post-date">30 Oct, 2018</p>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single blog post  =======-->
                        </div>
                    </div>

                    <!--=======  End of blog post slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of blog post slider area  ====================-->
    <!--====================  brand logo slider area ====================-->

    <div class="brand-logo-slider-area mb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!--=======  brand logo slider wrapper  =======-->

                    <div class="brand-logo-slider-wrapper brand-logo-slider-wrapper--double-border">
                        <div class="ht-slick-slider"
                             data-slick-setting='{
                            "slidesToShow": 5,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": false,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                             data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 5} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand1.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand2.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand3.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand4.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand5.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->

                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="assets/img/brands/brand1.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single brand logo  =======-->

                        </div>
                    </div>

                    <!--=======  End of brand logo slider wrapper  =======-->

                </div>
            </div>
        </div>
    </div>

    <!--====================  End of brand logo slider area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  newsletter wrapper  =======-->

                    <div class="newsletter-wrapper newsletter-bg-1">
                        <div class="newsletter-wrapper__text">
                            <h5>Subscribe newsletter to get updated</h5>
                            <p>We’ll never share your email address with a third-party.</p>
                        </div>
                        <div class="newsletter-wrapper__form">
                            <form id="mc-form" class="mc-form">
                                <input type="email" placeholder="Enter your email address here ...">
                                <button type="submit">Subscribe</button>
                            </form>

                            <!-- mailchimp-alerts Start -->

                            <div class="mailchimp-alerts mt-5 mb-5">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->

                        </div>
                    </div>

                    <!--=======  End of newsletter wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of newsletter area  ====================-->
@endsection