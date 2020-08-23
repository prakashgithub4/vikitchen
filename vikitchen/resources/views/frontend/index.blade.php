<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kitchen</title>
    <meta name="description" content="Mazaar Theme" />
    <meta name="keywords" content="mazaar, wooCommerce, bootstrap, html template, mazaar template, ecommerce, theme" />
    <meta name="author" content="nileforest">
    <!--Important--><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicone Icon
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">-->

    <!-- CSS -->

</head>

<body>
@extends('layouts.vikitchen')

@section('content')
        <!--Page Body Content -->
        <div class="page-contaiter">
            <!--Intro-->
           <section id="intro" class="intro">
                    <!--Slider Hero-->
                    <div class="intro_slider1 owl-carousel owl-theme">
                        <!--Item-->

                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/slide6.jpg')}}" style="width:100%;"></div>
                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/slide2.jpg')}}" style="width:100%;"></div>
                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/slide5.jpg')}}" style="width:100%;"></div>
                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/slide7.jpg')}}" style="width:100%;"></div>
                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/slide4.jpg')}}" style="width:100%;"></div>
                    </div>
                    <!--End Slider Hero-->
                </section>
            <!--End Intro-->

            <!--Categories-->
            <section class="sec-padding-t">
                <div class="container">
                    <div class="row nf-grid">
                        <!--Grid-->
                        <div class="col-lg-8 col-md-12 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/imgb1.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="product_listing.php">Chimney</a>
                                </div>
                            </div>
                        </div>
                        <!--Grid-->
                        <div class="col-lg-4 col-md-6 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/imgs1.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="#">Hob</a>
                                </div>
                            </div>
                        </div>
                        <!--Grid-->
                        <div class="col-lg-4 col-md-6 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/003.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="#">Micro</a>
                                </div>
                            </div>
                        </div>
                        <!--Grid-->
                        <div class="col-lg-8 col-md-12 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/imgb.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="#">Oven</a>
                                </div>
                            </div>
                        </div>

                        <!--Grid-->
                        <div class="col-lg-8 col-md-12 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/001.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="#">Sink & Faucet</a>
                                </div>
                            </div>
                        </div>
                        <!--Grid-->
                        <div class="col-lg-4 col-md-6 col-sm-12 nf-grid-item">
                            <!--Categories Item-->
                            <div class="categories-item categories-item_1">
                                <div class="categories-image">
                                    <a class="categories-img-link">
                                        <img src="{{asset('frontconnect/img/categories/002.jpg')}}" alt="Women Accesories" />
                                    </a>
                                </div>
                                <div class="categories-content-overlay">
                                    <a class="categories-caption categories-caption-bottom slide-after-sec-btn" href="#">Others</a>
                                </div>
                            </div>
                        </div>
                        <!--Grid-->
                    </div>
                </div>
            </section>
            <!--End Categories-->

            <!--Products Slider-->
            <section class="sec-padding">
                <div class="container">
                    <div class="page-head">
                        <h2 class="page-title">Best Deal</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="product-item-4 owl-carousel owl-theme product-slider">
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link" href="product.php">
                                        <img src="{{asset('frontconnect/img/product/img1.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="product.php" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link" href="product.php">
                                    	<img src="{{asset('frontconnect/img/product/img2.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="product.php" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <del>
                                                <span class="product-price-currency-symbol">&#8377;</span>59.99
                                            </del>
                                            <ins>
                                                <span class="product-price-currency-symbol">&#8377;</span>39.99
                                            </ins>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img3.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>59.99</span>
                                        </span>
                                        –
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>84.99</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img4.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                       <img src="{{asset('frontconnect/img/product/img1.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img2.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <del>
                                                <span class="product-price-currency-symbol">&#8377;</span>59.99
                                            </del>
                                            <ins>
                                                <span class="product-price-currency-symbol">&#8377;</span>39.99
                                            </ins>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img3.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                     	<img src="{{asset('frontconnect/img/product/img4.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>59.99</span>
                                        </span>
                                        –
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>84.99</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Products Slider-->

            <!--Deal Counter-->
          <!--   <section id="intro" class="intro"> -->
                    <!--Slider Hero-->
                  <!--   <div class="intro_slider1 owl-carousel owl-theme"> -->
                        <!--Item-->

                    <!--    <div class="item"><img src="{{asset('frontconnect/img/slide_img/offer.jpg')}}" style="width:100%;"></div>
                       <div class="item"><img src="{{asset('frontconnect/img/slide_img/offer2.jpg')}}" style="width:100%;"></div> -->
                       <!--<div class="item"><img src="img/slide_img/slide3.jpg" style="width:100%;"></div>
                       <div class="item"><img src="img/slide_img/img_002.jpg" style="width:100%;"></div>-->
                   <!--  </div> -->
                    <!--End Slider Hero-->
              <!--   </section> -->
            <!--End Deal Counter-->

            <!--Products-->
            <section class="sec-padding">
                <div class="container">
                    <div class="page-head">
                        <h2 class="page-title">New Arrival</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="product-item-4 owl-carousel owl-theme product-slider">
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img5.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img6.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <del>
                                                <span class="product-price-currency-symbol">&#8377;</span>59.99
                                            </del>
                                            <ins>
                                                <span class="product-price-currency-symbol">&#8377;</span>39.99
                                            </ins>
                                        </span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img7.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>59.99</span>
                                        </span>
                                        –
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>84.99</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img2.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img3.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img4.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <del>
                                                <span class="product-price-currency-symbol">&#8377;</span>59.99
                                            </del>
                                            <ins>
                                                <span class="product-price-currency-symbol">&#8377;</span>39.99
                                            </ins>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img6.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                            <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="{{asset('frontconnect/img/product/img7.jpg')}}" alt="Product Item" />
                                    </a>
                                    <!--Add to Link-->
                                    <div class="add-to-link">
                                        <a class="btn btn-color btn--sm">Add To Cart</a>
                                    </div>
                                    <!--Hover Icons-->
                                    <div class="hover-product-icon">
                                        <div class="product-icon-btn-wrap">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <!--Product Content-->
                                <div class="product-item-content">
                                    <div class="tag"><a href="#">Minimal</a></div>
                                    <a href="#" class="product-item-title"><span>Product Title</span></a>
                                    <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>59.99</span>
                                        </span>
                                        –
                                        <span class="product-price-amount">
                                            <span><span class="product-price-currency-symbol">&#8377;</span>84.99</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Products-->

            <!--Testimonials-->
            <section class="sec-padding bg--secondary">
                <div class="container">
                    <div class="page-head">
                        <h2 class="page-title">Testimonials</h2>
                    </div>
                </div>

                <!--Testimonials-->
                <div class="container customer-testimonials-section">
                    <div class="row">
                        <div class="col-lg-8 mx-lg-auto">
                            <div class="testimonials-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="testimonials-item">
                                        <div class="testimonials-icon"><i class="ti-quote-left"></i></div>
                                        <p class="testimonials-quote">“There's plenty of money out there. They print more every day. But this ticket, there's only five of them in the whole world, and that's all there's ever going to be.”</p>
                                        <div class="testimonials-people">
                                            <h6 class="testimonials-people-title">Anthony T. Hincks</h6>
                                            <span class="testimonials-people-sub_title">(Apple Founder)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-item">
                                        <div class="testimonials-icon"><i class="ti-quote-left"></i></div>
                                        <p class="testimonials-quote">“So, what if, instead of thinking about solving your whole life, you just think about adding additional good things. One at a time. Just let your pile of good things grow”</p>
                                        <div class="testimonials-people">
                                            <h6 class="testimonials-people-title">Nicki Golden</h6>
                                            <span class="testimonials-people-sub_title">(Microsoft Ceo)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Testimonials-->
            </section>
            <!--Testimonials-->


        </div>
        <!--End Page Body Content -->
		@endsection


    <!-- Site Wraper End -->

    <!-- JS -->


	<div class="modal fade" id="modelPageLoad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-width-ex" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  	<!-- 	<img src="img/categories/shoppingpopup.jpg"> -->
        <h3 class="popup-head">About Copyrights</h3>
        <p class="popup-txt">Reproduction, distribution or sharing the captured (screenshot) licensed works will held against legal sanctions</p>
      </div>

    </div>
  </div>
</div>

<!--<script type="text/javascript">
$(document).ready(function(){
	 setTimeout(function () {
		 $("#modelPageLoad").modal('show');
		 }, 500);
});
</script>-->

</body>
</html>
