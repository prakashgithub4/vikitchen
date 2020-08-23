<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kitchen</title>
    <meta name="description" content="Mazaar Theme" />
    <meta name="keywords" content="mazaar, wooCommerce, bootstrap, html template, mazaar template, ecommerce, theme" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicone Icon 
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">-->

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <link href="css/skins/skin-default.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'header.php';?>
        <!--Page Body Content -->
        <div class="page-contaiter">
            <!--Breadcrumb-->
            <section class="breadcrumb">
                <div class="background-image" data-background="img/bg_img/bg_001.jpg" data-bg-posx="center" data-bg-posy="center" data-bg-overlay="4"></div>
                <div class="breadcrumb-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="breadcrumb-title">Cart</h1>
                                <nav class="breadcrumb-link">
                                    <span><a href="index.php">Home</a></span>
                                    <span>Cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Breadcrumb-->

            <!--Product Content-->
            <section class="sec-padding--md">
                <!-- Product -->
                <div class="container product-gallery-style2">
                    <div class="row">
                        <div class="col-lg-8">
                        	<div class="row">
                            	<div class="col-12">
                                    <h3 class="cart-page-pr-title" style="float:left;">My Shopping Bag</h3>
                                    <h3 class="cart-page-pr-title" style="float:right;">Unit Price</h3>
                                </div>
                        		<div class="cart-box-wrap">
                        		<div class="col-lg-2 col-md-2 col-12 img-cart-sm">
                            		<img src="img/product/img3.jpg" style="width:100%">
                            	</div>
                           	 	<div class="col-lg-10 col-md-10 col-12 txt-cart-sm">
                                	<div class="pr-tt-pr">
                                	<h3 class="cart-page-pr-title" style="float:left;">Product Title Product name</h3>
                                    <h3 class="cart-page-pr-title" style="float:right;">&#8377; 2,999</h3>
                                    </div>
                            		<div id="quantity_1234" class="product-quantity">
                                            <span data-value="-" class="quantity-btn quantityMinus"><i class="ti-minus"></i></span>
                                            <input class="quantity input--lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number">
                                            <span data-value="+" class="quantity-btn quantityPlus"><i class="ti-plus"></i></span>
                                        </div>
                                    <div class="cart-page-view-btn">
                                    	<a class="btn btn--primary btn--sm" href="product.php">View details</a>
                                        <a class="btn btn--primary btn--sm">Remove</a>
                                    </div> 
                            	</div>
                            </div>
                            </div>
                            <div class="row">
                        		<div class="cart-box-wrap">
                        		<div class="col-lg-2 col-md-2 col-12 img-cart-sm">
                            		<img src="img/product/img2.jpg" style="width:100%">
                            	</div>
                           	 	<div class="col-lg-10 col-md-10 col-12 txt-cart-sm">
                                	<div class="pr-tt-pr">
                                	<h3 class="cart-page-pr-title" style="float:left;">Product Title Product name</h3>
                                    <h3 class="cart-page-pr-title" style="float:right;">&#8377; 29,999</h3>
                                    </div>
                            		<div id="quantity_1234" class="product-quantity">
                                            <span data-value="-" class="quantity-btn quantityMinus"><i class="ti-minus"></i></span>
                                            <input class="quantity input--lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number">
                                            <span data-value="+" class="quantity-btn quantityPlus"><i class="ti-plus"></i></span>
                                        </div>
                                    <div class="cart-page-view-btn">
                                    	<a class="btn btn--primary btn--sm" href="product1.php">View details</a>
                                        <a class="btn btn--primary btn--sm">Remove</a>
                                    </div> 
                            	</div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        	<div class="cart-order-wrap">
                            	<h3 class="cart-odrer-head">Order Summary</h3>
                                <div class="order-price-wrap">
                                	<div class="cart-sub-txt">Cart Sub Total: </div>
                                    <div class="cart-price-txt">&#8377; 32,999</div>
                                </div>
                                <div class="order-price-wrap brdr-tp">
                                	<div class="cart-sub-txt">Shipping Charges: </div>
                                    <div class="cart-price-txt">&#8377; 0</div>
                                </div>
                                <div class="order-price-wrap brdr-tp">
                                	<div class="cart-sub-txt" style="font-weight: 500;">Total Amount: </div>
                                    <div class="cart-price-txt">&#8377; 32,999</div>
                                </div>
                                <div class="btn-wrap">
                                	<a class="btn btn-color btn--sm" href="index.php">Continue Shopping</a>
                                    <a class="btn btn-color btn--sm" href="checkout.php">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product -->

                <!--Related Product-->
                <div class="container sec-padding--md">
                    <div class="page-head">
                        <h2 class="page-title">Related Products</h2>
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
                                        <img src="img/product/img5.jpg" alt="Product Item" />
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
                                        <img src="img/product/img6.jpg" alt="Product Item" />
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
                                        <img src="img/product/img7.jpg" alt="Product Item" />
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
                                        <img src="img/product/img2.jpg" alt="Product Item" />
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
                                        <img src="img/product/img3.jpg" alt="Product Item" />
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
                                        <img src="img/product/img4.jpg" alt="Product Item" />
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
                                        <img src="img/product/img6.jpg" alt="Product Item" />
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
                                        <img src="img/product/img7.jpg" alt="Product Item" />
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
                </div>
                <!--End Related Product-->
            </section>
            <!--End Product Content-->

        </div>
        <!--End Page Body Content -->

 
<?php include 'footer.php';?>
    </div>
    <!-- Site Wraper End -->

    <!-- JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/plugins/modernizr.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.easing.js" type="text/javascript"></script>
    <script src="js/plugins/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.parallax.js" type="text/javascript"></script>
    <script src="js/plugins/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/plugins/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugins/slick.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="js/plugins/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/plugins/instafeed.min.js" type="text/javascript"></script>
    <script src="js/plugins/sticky-sidebar.js" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyDwxfea8ecYMmGKMO39JF1ko5bhF4UocpM" type="text/javascript"></script>
    <script src="js/plugins/jquery.gmap.min.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>

	


</body>
</html>
