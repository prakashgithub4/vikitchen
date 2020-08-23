<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Attire</title>
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
                                <h1 class="breadcrumb-title">Checkout</h1>
                                <nav class="breadcrumb-link">
                                    <span><a href="index.php">Home</a></span>
                                    <span>Checkout</span>
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
                    <!--Alert-->
                    <div class="alert-info" role="alert">
                        <!--<a class="button" href="#">View Cart</a>-->
                        Returning customer? <a href="#">Click here to login</a>
                    </div>
                    <!--Alert-->

                    <form class="row product-checkout">
                        <div class="col-md-6 pr-md-5">
                            <div class="product-checkout-customer_details">
                                <h3>Billing Details</h3>
                                <div class="row billing-fields__field-wrapper">
                                    <p class="form-field-wrapper col-sm-6">
                                        <label for="billing_first_name">First Name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_first_name" title="First Name" value="" placeholder="First Name" required aria-required="true" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-6">
                                        <label for="billing_last_name" class="">Last Name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_last_name" id="billing_last_name" placeholder="" value="" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_company" class="">Company Name &nbsp;<span class="optional">(optional)</span></label>
                                        <input class="form-full input--lg" name="billing_company" id="billing_company" placeholder="" value="" type="text" />
                                    </p>
                                    
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_address_1" class="">Street address &nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <input class="form-full input--lg" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_city">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_city" title="" value="" placeholder="" required aria-required="true" type="text" />
                                    </p>
                                    
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_postcode">ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_postcode" title="" value="" placeholder="" required aria-required="true" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_phone">Phone &nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_phone" title="" value="" placeholder="" required aria-required="true" type="text" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <label for="billing_email">Email address  &nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input class="form-full input--lg" name="billing_email" title="" value="" placeholder="" required aria-required="true" type="email" />
                                    </p>
                                    <p class="form-field-wrapper col-sm-12">
                                        <label class="woocommerce-form__label" for="ship_to_different_address">
                                            <input id="ship_to_different_address" class="" name="ship_to_different_address" value="1" type="checkbox">
                                            <span>&nbsp;Ship to a different address?</span>
                                        </label>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-checkout-review-order">
                                <h3>Your Order</h3>
                                <div class="order_review">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">United Colors of Benetton&nbsp;<strong class="product-qty">× 1</strong></td>
                                                <td class="product-total"><span class="amount"><span class="Price-currencySymbol">&#8377;</span>49.00</span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">United Colors of Benetton&nbsp;<strong class="product-qty">× 1</strong></td>
                                                <td class="product-total"><span class="amount"><span class="Price-currencySymbol">&#8377;</span>49.00</span></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>98.00</span></td>
                                            </tr>
                                            
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>108.00</span></strong> </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="product-pin-check">
                                             <form action="">
                                              <input type="text" id="" name="" placeholder="Coupon Code" class="txt-input">
                                              <input type="submit" class="submit-input" value="Apply">
                                            </form> 
                                        </div>
                                    <div class="checkout-payment">
                                        <ul>
                                            <li>
                                                
                                                <div class="payment_method_cheque">
                                                    <p>
                                                        Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="place-order">
                                            <div class="terms-and-conditions-wrapper">
                                                <p>
                                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="" name="terms" id="terms" type="checkbox">&nbsp;
                                                    <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website <a href="#" class="woocommerce-terms-and-conditions-link" target="_blank">Terms and Conditions</a></span>
                                                    </label>
                                                </p>
                                            </div>
                                            <button type="submit" class="btn btn--lg btn--primary btn--full" name="checkout_place_order" id="place_order" value="Place order" data-value="Place Order">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

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
