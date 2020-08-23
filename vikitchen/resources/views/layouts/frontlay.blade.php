
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<!-- Mobile specific metas  -->
<!--<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS Style -->
<link rel="stylesheet" href="{{asset('frontdesign/style.css')}}">



<link href="https://fonts.googleapis.com/css?family=Monda:400,700" rel="stylesheet">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('frontdesign/css/main.css')}}">
<link rel="stylesheet" href="{{asset('frontdesign/css/my-css.css')}}">
<link rel="stylesheet" href="{{asset('frontdesign/css/my-pro.css')}}">




</head>
<body class="cms-index-index cms-home-page">
    <?php  $category= \App\Category::all();?>
<div id="page">
  <!-- Header -->
  <header id="header">
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <!-- top links -->
            <div class="headerlinkmenu col-md-4 col-sm-7 col-xs-6">
              <!-- Default Welcome Message -->


              <div class="welcome-msg hidden-xs">Welcome to Attire Boutique</div>

              <div class="links"><!--
                <div class="jtv-user-info">
                  <div class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account </span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Account</a></li>
                      <li><a href="#">Wishlist</a></li>
                      <li><a href="#">Checkout</a></li>

                    </ul>
                  </div>
                </div>-->
              </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs hidden-sm">

            </div>
            @if (Auth::guest())
            <div class="col-md-3 col-sm-5 col-xs-6">
              <div class="language-currency-wrapper pull-right">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <span class="lg-fr"><a href="#" data-toggle="modal" data-target="#loginModal" style="  border-right: 2px solid #4397db;     padding: 0px 16px 0px 0; line-height: 10px;">Log in</a></span></span> </div>

                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span><a href="#" data-toggle="modal" data-target="#registerModal">Register</a> </span></div>

                  </div>
                </div>
              </div>
            </div>
            @else
            <div class="col-md-3 col-sm-5 col-xs-6">
                <div class="language-currency-wrapper pull-right">
                  <div class="inner-cl">
                    <div class="block block-language form-language">
                      <div class="lg-cur"> <span> <span class="lg-fr"><a href="#" data-toggle="modal" data-target="#loginModal" style="  border-right: 2px solid #4397db;     padding: 0px 16px 0px 0; line-height: 10px;">
                     Hi  {{ Auth::user()->name }} </a></span></span> </div>

                    </div>
                    <div class="block block-language form-language">
                        <div class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span style="color:whitesmoke">My Account <i class="fa fa-angle-down"></i></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php $wish= \App\Wishlist::where('web_user_id', auth::user()->id )->get();?>
                            <li><a href="{{url('/wishlist')}}">Wishlist({{count($wish)}})</a></li>
                            <li><a href="{{url('/order-history')}}">Order History</a></li>
                            <li><a href="{{url('/profile-update')}}">Profile Update</a></li>
                            <li><a href="{{url('/change-my-password')}}">Change Password</a></li>
                              <!--<li class="divider"></li>
                              <li><a href="account_page.html">Log In</a></li>
                              <li><a href="account_page.html">Sign Up</a></li>-->
                            </ul>
                          </div>
                        </span></span>

                      </div>
                    <div class="block block-currency">
                      <div class="item-cur"> <span><a href="{{url('/signout')}}" data-toggle="modal" data-target="">logout</a> </span></div>

                    </div>
                  </div>
                </div>
              </div>
              @endif

          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <!-- Start Menu Area -->
          <div class="menu-area">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="main-menu">
                    <nav> <!-- Header Logo -->
                      <div class="logo"><a title="e-commerce" href="{{url('/')}}"><img alt="e-commerce" src="{{asset('frontdesign/images/logo.png')}}"></a> </div>
                      <!-- End Header Logo -->
                      <ul class="hidden-xs">
                        <li class="active custom-menu"><a href="{{url('/')}}">Home</a></li>
                        <li class="custom-menu"><a href={{url('/about-us')}}>About Us</a>
                          {{-- <ul class="dropdown">
                            <li> <a href="about_us.html"> About Attire </a></li>
                            <li> <a href="#"> History of Attire </a></li>
                          </ul> --}}
                        </li>
                        <!--<li class="custom-menu"><a href="#">Collection</a>
                          <ul class="dropdown">
                            <li> <a href="#"> Men's </a></li>
                            <li> <a href="#"> Women's </a></li>
                          </ul>
                        </li>-->
                        <!--<li class="custom-menu"><a href="#">Products</a>
                          <ul class="dropdown">
                            <li> <a href="#"> Handicrafts </a></li>
                            <li> <a href="#"> Jewellery </a></li>
                            <li> <a href="#"> Sandalwood </a></li>
                            <li> <a href="#"> Bronze Articles </a></li>
                            <li> <a href="#"> Jute Items</a></li>
                            <li> <a href="#"> Bamboo Items </a></li>
                            <li> <a href="#"> Leather </a></li>
                          </ul>
                        </li>-->
                        <li class="megamenu"><a href="#">Products</a>
                          <div class="mega-menu">
                            <div class="menu-block menu-block-center">
                              <div class="menu-block">
                                @foreach ( $category as $cat )
                                <ul>
                                <li> <a class="mega-title" href="{{url('/category'.'/'.$cat->product_category_id)}}">{{$cat->product_category}} </a></li>
                                  <?php  $cat_name=\App\Productname::where('product_category_id',$cat->product_category_id)->get();?>
                                  @foreach ($cat_name as $cn )


                                <li> <a href="{{url('/category-name'.'/'.$cat->product_category_id.'/'.$cn->product_name_id)}}">{{$cn->product_name}}</a> </li>
                                  @endforeach

                                </ul>
                                @endforeach
                               <!-- <ul>
                                  <li> <a class="mega-title" href="#">Sarees </a></li>
                                  <li> <a href="#"> Silk Sarees </a> </li>
                                  <li> <a href="#"> Tussar Sarees </a> </li>
                                  <li> <a href="#"> Linen Sarees </a> </li>
                                  <li> <a href="#"> Handloom Sarees </a> </li>
                                  <li> <a href="#"> Muslin Sarees </a> </li>
                                </ul>
                                <ul>
                                  <li> <a class="mega-title" href="#">Others </a></li>
                                  <li> <a href="#"> Long Dress </a> </li>
                                </ul>-->
                              </div>
                            </div>
                          </div>
                        </li>
                        <li><a href="#">Latest Post</a></li>
                    <li><a href="{{url('/offer')}}">Offers</a></li>
                      </ul>
                      <!-- Start Mobile Menu -->
                      <div class="mobile-menu hidden-sm hidden-md hidden-lg">
                        <nav>
                          <ul>
                            <li class=""><a href="{{url('/')}}">Home</a></li>

                            <li><a href="{{url('/about-us')}}">About Us</a>

                            </li>
                           <!-- <li><a href="#">Collection</a>
                              <ul class="">
                                 <li><a href="#">Men's</a> </li>
                                 <li><a href="#">Women's</a> </li>
                              </ul>
                            </li>
                            <li><a href="#">Products</a>
                              <ul class="">
                                 <li><a href="#">Handicrafts</a> </li>
                                 <li><a href="#">Jewellery</a> </li>
                                 <li><a href="#">Sandalwood</a> </li>
                                 <li><a href="#">Bronze Articles</a> </li>
                                 <li><a href="#">Jute Items</a> </li>
                                 <li><a href="#">Bamboo Items</a> </li>
                                 <li><a href="#">Leather</a> </li>
                              </ul>
                            </li>-->
                            <li><a href="#">Products</a>

                              <ul>
                                @foreach ( $category as $cat )
                                <li><a href="{{url('/category'.'/'.$cat->product_category_id)}}" class="">{{$cat->product_category}}</a>
                                  <ul>
                                    <?php  $cat_name=\App\Productname::where('product_category_id',$cat->product_category_id)->get();?>
                                    @foreach ($cat_name as $cn )
                                      <li> <a href="{{url('/category-name'.'/'.$cat->product_category_id.'/'.$cn->product_name_id)}}">{{$cn->product_name}} </a> </li>
                                     @endforeach
                                  </ul>
                                </li>
                                @endforeach
                                <!--<li><a href="#" class="">Sarees </a>
                                  <ul>
                                      <li> <a href="#"> Silk Sarees </a> </li>
                                      <li> <a href="#"> Tussar Sarees </a> </li>
                                      <li> <a href="#"> Linen Sarees </a> </li>
                                      <li> <a href="#"> Handloom Sarees </a> </li>
                                      <li> <a href="#"> Muslin Sarees </a> </li>
                                  </ul>
                                </li>
                                <li><a href="#" class="">Others </a>
                                  <ul>
                                      <li> <a href="#"> Long Dress </a> </li>
                                  </ul>
                                </li>-->

                              </ul>

                            </li>
                            <li class=""><a href="#">News</a></li>
                            <li class=""><a href="#">Offers</a></li>
                          </ul>
                        </nav>
                      </div>
                      <!-- End Mobile Menu -->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Menu Area -->

        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-sm-8">
            <!-- Search -->

            <div class="top-search">
              <div id="search">
              <form method="post" action="{{url('/searched-products')}}">
                @csrf
                  <div class="input-group">
                   <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                      <option value="0">All Categories</option>
                      @foreach ( $category as $cat )
                   <option value="{{$cat->product_category_id}}">&nbsp;&nbsp;&nbsp;{{$cat->product_category}}   </option>

                      @endforeach
                     <!-- <option>women</option>-->

                     <!-- <option>Men</option>
                      <option>Electronics</option>
                      <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                      <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>-->
                    </select>
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>

            <!-- End Search -->
          </div>
          <div class="col-lg-4 col-sm-4 col-xs-2 top-cart"> <span class="phone hidden-xs hidden-sm"><i class="fa fa-phone fa-lg"></i>033 2423-6140</span>

            <!-- Begin shopping cart trigger  -->
            <?php
             $web_user_id =@auth::user()->id ;
             $webcart=\App\ProductCart::where('web_user_id',$web_user_id)->where('invoice_no_id',0)->get();
             if(count($webcart)>0){
                $mycart=\App\ProductCart::where('web_user_id',$webcart[0]->web_user_id)->where('invoice_no_id',0)->orwhere('browser_id',session_id())->get();
             }
             else {
                $mycart=\App\ProductCart::where('browser_id',session_id())->where('invoice_no_id',0)->get();

             }
             ?>
            <div id="shopping-cart-trigger"> <a href="{{url('/cart')}}" class="cart-icon" title="Shopping Cart"> <i class="fa fa-shopping-bag"></i> <span class="cart-num">{{count($mycart)}}</span> <span class="top-cart-label hidden-xs">My Bag</span></a> </div>
            <!-- End shopping cart trigger -->

          </div>
        </div>
      </div>
    </div>

  </header>
  @yield('content')


  <footer>
    <div class="footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
            <div class="footer-logo"><a href="index.html"><img src="{{asset('frontdesign/images/logo.png')}}" alt="footer_final_logo"></a> </div>
            <div class="footer-content">
              <div class="email"> <i class="fa fa-envelope"></i>
                <p>design@attireboutique.co.in</p>
              </div>
              <div class="phone"> <i class="fa fa-phone"></i>
                <p>033 2423-6140 / 2461-9340
                    +91 9830490133</p>
              </div>
              <div class="address"> <i class="fa fa-map-marker"></i>
                <p>50/B, P.G.H.Sha Road.
                    Golf Green, Kolkata 70003</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Policy<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
              <div class="tabBlock" id="TabBlock-1">
                <ul class="list-links list-unstyled">
                <li><a href="{{url('/company-policy')}}">Company Policy</a></li>
                  <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                  <li><a href="{{url('/return-policy')}}">Return & Cancellation Policy</a></li>
                  <li><a href="{{url('/shipping-policy')}}">Shipping Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Quick Links<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
              <div class="tabBlock" id="TabBlock-3">
                <ul class="list-links list-unstyled">
                    <li> <a href="{{url('/about-us')}}">About Us</a> </li>
                  <li> <a href="#"> Site Map </a> </li>
                  <li> <a href="{{url('/offer')}}">Offers</a> </li>

                  <li> <a href="{{url('/contact-us')}}">Contact Us</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
            <!--<div class="footer-links">
              <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
              <div class="tabBlock" id="TabBlock-4">
                <ul class="list-links list-unstyled">
                  <li> <a href="#">Account</a> </li>
                  <li> <a href="#">Wishlist</a> </li>
                  <li> <a href="#">Shopping Cart</a> </li>
                  <li> <a href="#">Return Policy</a> </li>
                  <li> <a href="#">Special</a> </li>
                  <li> <a href="#">Lookbook</a> </li>
                </ul>
              </div>
            </div>-->
            <div class="fb-page" data-href="https://www.facebook.com/attireboutiquekolkata" data-tabs="timeline" data-width="300px" data-height="240px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/attireboutiquekolkata" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/attireboutiquekolkata">Attire Boutique</a></blockquote></div>
          </div>
        </div>
      </div>
    </div>
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-5">
              <h3 class="">Sign up for newsletter</h3>
              <span>Get the latest deals and special offers</span></div>
            <div class="col-md-5 col-sm-7">
              <form action="mailform1.php">
                <div class="newsletter-inner">
                  <input class="newsletter-email" name='emailid' placeholder='Enter Your Email'/>
                  <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="social">
                <ul class="inline-mode">
                  <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                  <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
                  <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-coppyright">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 coppyright"> © 2018 ||<a href="#"> ATTIRE DESIGNER SHOP </a>||  All Rights Reserved || Powered by  <a href="https://www.digitalgoogly.com/"><img src="{{asset('frontdesign/images/dg-white-logo.png')}}"></a></div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="payment">
                <ul>
                  <li><a href="#"><img title="Visa" alt="Visa" src="{{asset('frontdesign/images/visa.png')}}"></a></li>
                  <li><a href="#"><img title="Paypal" alt="Paypal" src="{{asset('frontdesign/images/paypal.png')}}"></a></li>

                  <li><a href="#"><img title="Master Card" alt="Master Card" src="{{asset('frontdesign/images/master-card.png')}}"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="totop"> </a>
    <!-- End Footer -->

    <div id="modal-cart" class="modal modal-left fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">2 items in your cart</h4>
          </div>
          <div class="modal-body">

            <!-- Begin shopping cart content -->
            <div class="cart-content">
              <ul class="cart-product-list">
                <li>

                  <!-- Begin shopping cart product -->
                  <div class="cart-product"> <a href="#" class="cart-pr-thumb bg-image"><img src="{{asset('frontdesign/images/products/img07.jpg')}}" alt="Lorem ipsum dolor" width="65"></a>
                    <div class="cart-pr-info"> <a href="#" class="cart-pr-title">Lorem ipsum dolor sit amet Consectetur</a>
                      <div class="cart-pr-price">&#8377 920.00</div>
                      <div class="cart-pr-quantity">Quantity: <span>1</span></div>
                    </div>
                    <a href="#0" class="cart-pr-remove" title="Remove from cart">×</a> </div>
                  <!-- End shopping cart product -->
                </li>
                <li>
                  <!-- Begin shopping cart product -->
                  <div class="cart-product"> <a href="#" class="cart-pr-thumb bg-image"><img src="{{asset('frontdesign/images/products/img08.jpg')}}" alt="Lorem ipsum dolor" width="65"></a>
                    <div class="cart-pr-info"> <a href="#" class="cart-pr-title">Sed do eiusmod tempor incidist</a>
                      <div class="cart-pr-price">&#8377 390.00</div>
                      <div class="cart-pr-quantity">Quantity: <span>1</span></div>
                    </div>
                    <a href="#0" class="cart-pr-remove" title="Remove from cart">×</a> </div>
                  <!-- End shopping cart product -->
                </li>
              </ul>
            </div>
            <!-- End shopping cart content -->

          </div>
          <div class="modal-footer padding-vertical-0">
            <div class="cart-total"> <strong>Subtotal:</strong> <span>&#8377 1,310.00</span> </div>
            <div class="row">
              <div class="col-xs-6 no-padding"> <a href="shopping_cart.html" class="view-cart no-margin">View Cart</a> </div>
              <!-- /.col -->

              <div class="col-xs-6 no-padding"> <a href="checkout.html" class="btn-checkout no-margin">Checkout</a> </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!--Newsletter Popup Start -->
   <div id="myModal" class="modal fade">
      <div class="modal-dialog newsletter-popup popup-bg">
        <div class="">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
            @if(Session::has('newmessage'))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">

               <strong> {{ Session::get('newmessage') }}</strong>
              </div>

            @endif
            <div class="img-wrap">
            <img src="{{asset('frontdesign/images/saree.png')}}" class="pop-img-p">
            </div>
            <div class="from-wrap">
            <h2 class="pop-txt">Enquire Now</h2>

                <form action="{{url('/enquiry')}}" method="post">
                    @csrf
                <input type="text" class="box-mr" placeholder="Enter Name" name="uname" required>

                <input type="email" class="box-mr" id="email" placeholder="Enter email" name="emailid">

                <input type="tel" class="box-mr" id="number" placeholder="Contact Number" name="mobileno">

                <button type="submit" class="log-in-btn">Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of Newsletter Popup-->

    <div id="modal-quickview" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-body">
          <button type="button" class="close myclose" data-dismiss="modal">×</button>
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
              <div class="slider-items-products">
                <div id="previews-list-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col6"> <a href="{{asset('frontdesign/images/products/img03.jpg')}}" class="cloud-zoom-gallery" id="zoom1"> <img class="zoom-img" src="{{asset('frontdesign/images/products/img13.jpg')}}" alt="products"> </a> <a href="{{asset('frontdesign/images/products/img13.jpg')}}"class="cloud-zoom-gallery"><img src="{{asset('frontdesign/images/products/img13.jpg')}}" alt = "Thumbnail 2"/></a> <a href="{{asset('frontdesign/images/products/img13.jpg')}}" class="cloud-zoom-gallery"><img src="{{asset('frontdesign/images/products/img11w.jpg')}}" alt = "Thumbnail 1"/></a> <a href="{{asset('frontdesign/images/products/img11w.jpg')}}" class="cloud-zoom-gallery"><img src="{{asset('frontdesign/images/products/img-16.jpg')}}" alt = "Thumbnail 1"/></a> <a href="{{asset('frontdesign/images/products/img-16.jpg')}}" class="cloud-zoom-gallery"><img src="{{asset('frontdesign/images/products/img-3.jpg')}}" alt = "Thumbnail 2"/></a> </div>
                </div>
              </div>

              <!-- end: more-images -->

            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h2>Lorem Ipsum is simply</h2>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $329.99 </span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $359.99 </span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>
              </div>
              <div class="short-description">
                <h3>Quick Overview</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Size</h2>
                  <div class="size">
                    <ul>
                      <li><a href="#">S</a></li>
                      <li><a href="#">L</a></li>
                      <li><a href="#">M</a></li>
                      <li><a href="#">XL</a></li>
                      <li><a href="#">XXL</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer"> <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a> </div>
      </div>
    </div>
  </div>

  <!-- L & G -->
  <div class="modal fade regis-popup-z" id="registerModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <input type="text" class="box-mr " placeholder="Enter Name"  required class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                <input type="email" class="box-mr form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"value="{{ old('email') }}" placeholder="Enter email" name="email">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

                <input type="text" class="box-mr " id="number" placeholder="Contact Number" name="contact_number" value="{{ old('name') }}" required autofocus>

                <input type="password" class="box-mr" placeholder="Enter Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                <input id="password-confirm"  class="box-mr" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                <button type="submit" class="log-in-btn">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </div>

  <div class="modal fade regis-popup-z" id="loginModal" role="dialog">
      <div class="modal-dialog modal-sm modal-size">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Log In</h4>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red;" >{{ $errors->first('email') }}</strong>
            </span>
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red;">{{ $errors->first('password') }}</strong>
            </span>
        @endif
        @endif

          </div>
          <div class="modal-body">
            <form  method="post" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <input type="email" class="box-mr" placeholder="Enter Email Address" name="email" required class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                <input type="password" class="box-mr" placeholder="Enter Password" name="password" required class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" >


                <button type="submit" class="log-in-btn">Login</button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </form>
          </div>

        </div>
      </div>
    </div>
  <!-- L & G -->

  <!-- JS -->




  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


  <!-- jquery js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery.min.js')}}"></script>

  <!-- bootstrap js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/bootstrap.min.js')}}"></script>

  <!-- Mean Menu js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery.meanmenu.min.js')}}"></script>

  <!-- owl.carousel.min js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery.bxslider.js')}}"></script>

  <!--jquery-ui.min js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery-ui.js')}}"></script>

  <!-- countdown js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/countdown.js')}}"></script>

  <!-- wow JS -->
  <script type="text/javascript" src="{{asset('frontdesign/js/wow.min.js')}}"></script>

  <!-- main js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontdesign/js/main.js')}}"></script>

  <!-- nivo slider js -->
  <script type="text/javascript" src="{{asset('frontdesign/js/jquery.nivo.slider.js')}}"></script>



  <script src="{{asset('frontdesign/js/my/cloudzoom.js')}}"></script>

  <!-- Hot Deals Timer 1-->
 <!-- <script type="text/javascript">
        var dthen1 = new Date("12/25/16 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if(CountStepper>0)
            ddiff= new Date((dnow1)-(dthen1));
        else
            ddiff = new Date((dthen1)-(dnow1));
        gsecs1 = Math.floor(ddiff.valueOf()/1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1,"countbox_1", 1);
  </script>-->
  </body>
  </html>

