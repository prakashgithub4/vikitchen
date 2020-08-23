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
                <div class="background-image" data-background="img/slide_img/bread.jpg" data-bg-posx="center" data-bg-posy="center" data-bg-overlay="4"></div>
                <div class="breadcrumb-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="breadcrumb-title">Product List Page</h1>
                                <nav class="breadcrumb-link">
                                    <span><a href="index.php">Home</a></span>
                                    <span>Product List</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Breadcrumb-->

            <!--Product Content-->
            <section class="sec-padding--md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12 order-lg-2">
                            <!--Product Filter-->
                            <div class="product-filter-content">
                                <div class="product-filter-content-inner">
                                    <!--Product Showing Text-->
                                    <p>Showing 18 of 22 Results</p>

                                    <!--Product Ouder By-->
                                    <form class="ordering">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by Popularity</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>

                                    <!-- Product Filter -->
                                    <div class="product-select-filter">
                                        <a href="javascript:void(0);" class="filter-menu-btn btn btn--gray"><i class="ti-filter left"></i>Filter</a>
                                        <!--Filter Dropdown Menu-->
                                        <div class="filterbar-dropdown-menu">
                                            <div class="filterbar-dropdown-inner">
                                                <h4 class="widget-title">Filter</h4>
                                                <span class="filter-close-icon"><i class="ti-close"></i></span>
                                                <form>
                                                    <div class="form-field-wrapper">
                                                        <label>Categories</label>
                                                        <select name="filter_categries" class="form-full">
                                                            <option value="">Select a Category</option>
                                                            <option value="accessories">Chimney</option>
                                                            <option value="bags">Hobs</option>
                                                            <option value="footwear">Micro</option>
                                                            <option value="man">Oven</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <label>Color</label>
                                                        <select name="filter_color" class="form-full">
                                                            <option value="">Any Color</option>
                                                            <option value="grey">Grey</option>
                                                            <option value="navyblue">NavyBlue</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-field-wrapper">
                                                        <label>Price</label>
                                                        <div class="price-range-slider"></div>
                                                        <div class="price-range-amount">
                                                            <input class="price_range_min" name="price_range_min" value="" data-min="140" placeholder="Min price" style="display: none;" type="text">
                                                            <input class="price_range_max" name="price_range_max" value="" data-max="1100" placeholder="Max price" style="display: none;" type="text">
                                                            <div class="price-range-from-to"></div>
                                                        </div>
                                                        <button class="btn btn--secondary btn--full">Filter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End Filter Dropdown Menu-->
                                    </div>

                                    <!--Product List/Grid view-->
                                    <!--<div class="product-view-switcher">
                                        <label class="d-none"></label>
                                        <div class="product-view-icon product-grid-switcher product-view-icon-active">
                                            <a href="javascript:void(0);"><i class="fa ti-layout-grid2" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="product-view-icon product-list-switcher">
                                            <a href="javascript:void(0);"><i class="fa ti-view-list-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </div>-->

                                </div>
                            </div>
                            <!--End Product Filter-->
                            <!--Product Items-->
                            <div class="row product-list-item product-list">
                                <!--Item1-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                    <div class="product-item">
                                <!--Product Img-->
                                <div class="product-item-img">
                                    <!--Image-->
                                    <a class="product-item-img-link">
                                        <img src="img/product/img1.jpg" alt="Product Item" />
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
                                <!--Item2-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
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
                                <!--Item3-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
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
                                <!--Item4-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
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
                                            <span class="product-price-currency-symbol">&#8377;</span>59.99
                                        </span>
                                    </p> 
                                </div>
                            </div>
                                </div>
                                <!--Item5-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
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
                                <!--Item6-->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
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
                                <!--Item7-->
                                
                                <!--Item8-->
                                
                                <!--Item9-->
                                
                               
                               
                            </div>
                            <!--End Product Items-->
                            <!--Paginattion-->
                            <div class="pagination-wraper">
                                <div class="pagination">
                                    <ul class="pagination-numbers">
                                        <!--<li>
                                            <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                        </li>-->
                                        <li>
                                            <a href="#" class="page-number current">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">3</a>
                                        </li>
                                        <li>
                                            <span class="page-number dots">...</span>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">29</a>
                                        </li>
                                        <li>
                                            <a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Paginattion-->
                        </div>
                        <div class="col-lg-3 col-12 order-lg-1 sidebar-container">
                            <aside class="widget-area">
                                <!--Widget-->
                                <div class="widget widget-st">
                                    <!--Title-->
                                    <h4 class="widget-title" style="border-bottom: 1px solid #000;padding-bottom: 5px;color: #c42024;">Shop Categories</h4>
                                    <!--End Title-->

                                    <!-- Content -->
                                    <div class="widget-content widget_nav_menu">
                                        <ul class="menu">
                                            <li class="menu-item"><a href="#">Chimney</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Bosch</a></li>
                                                    <li class="menu-item"><a href="#">Hafele</a></li>
                                                    <li class="menu-item"><a href="#">Kaff</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item"><a href="#">Hobs</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Bosch</a></li>
                                                    <li class="menu-item"><a href="#">Hafele</a></li>
                                                    <li class="menu-item"><a href="#">Kaff</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item"><a href="#">Micro</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Bosch</a></li>
                                                    <li class="menu-item"><a href="#">Hafele</a></li>
                                                    <li class="menu-item"><a href="#">Kaff</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item"><a href="#">Oven</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Bosch</a></li>
                                                    <li class="menu-item"><a href="#">Hafele</a></li>
                                                    <li class="menu-item"><a href="#">Kaff</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- End Content -->
                                </div>
                                <!--End Widget-->

                                <!--Widget-->
                                <div class="widget widget-st">
                                    <!--Title-->
                                    <h4 class="widget-title" style="border-bottom: 1px solid #000;padding-bottom: 5px;color: #c42024;">Filter by Price</h4>
                                    <!--End Title-->

                                    <!-- Content -->
                                    <div class="widget-content">
                                        <form>
                                            <div class="price_range">
                                            	<div class="ist_price">
                                                	<input type="text"> to
                                                </div>
                                                <div class="ist_price">
                                                	<input type="text">
                                                </div>
                                            </div>
                                            <button class="btn btn--secondary btn--full">Filter</button>
                                        </form>
                                    </div>
                                    <!-- End Content -->
                                </div>
                                <!--End Widget-->

                                <!--Widget-->
                                
                                <!--End Widget-->

                                <!--Widget-->
                                
                                <!--End Widget-->

                                <!--Widget-->
                                
                                <!--End Widget-->

                                <!--Widget-->
                                
                                <!--End Widget-->

                                <!--Widget-->
                                
                                <!--End Widget-->
                            </aside>
                        </div>
                    </div>
                </div>
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
