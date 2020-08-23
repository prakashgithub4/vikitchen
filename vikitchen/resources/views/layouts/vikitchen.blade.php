<header id="header" class="header header--sticky" data-header-hover="true">
        <link href="{{asset('frontconnect/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontconnect/css/theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontconnect/css/skins/skin-default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontconnect/css/plugins.css')}}" rel="stylesheet" type="text/css" />

            <div class="header-topbar topbar--dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="topbar-left d-none d-lg-block">
                            <div class="topbar-component">
                                <a href="mailto:sales@mazaar.com"><i class="fa fa-envelope-o"></i>
                                <span>{{@$user->email}}</span>
                                </a>
                            </div>
                            <div class="topbar-component">
                                <i class="fa fa-phone"></i>
                                <span>Contact us - +91 9051317265</span>
                            </div>
                        </div>
                        <div class="topbar-right">
                            <div class="topbar-component">
                                @if(@$user->name!='')
                                <a href="" ><span>Hi {{$user->name}}</span></a>
                                @else
                                  <a href="" data-toggle="modal" data-target="#exampleModallogin"><span>Login</span></a>
                                  @endif
                            </div>
                             <div class="topbar-component">

                                <div class="dropdowna">
                                  <button class="dropbtn">My Account</button>
                                  <div class="dropdown-content">
                                  <a href="profile.php">Profile</a>
                                  <a href="order.php">Order</a>
                                  </div>
                                </div>

                            </div>
                            <div class="topbar-component">
                                <a href="#" data-toggle="modal" data-target="#exampleModalenquiry"><span>Enquiry</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header Navigation-->
            <nav id="navigation" class="header-nav">
                <div class="container-fluid">
                    <div class="row">
                        <!--Logo-->
                        <div class="site-logo">
                            <a href="index.php">
                                <img src="{{asset('frontconnect/img/logo--light.png')}}" class="logo-light" alt="Mazaar" />
                            </a>
                        </div>
                        <!--End Logo-->

                        <!--Navigation Menu-->
                        <div class="nav-menu">
                            <ul>
                                <li class="nav-menu-item">
                                    <a href="index.php">Home</a>
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="about.php" class="menulia">About Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-menu-item">
                                    <a href="#">Chimney</a>
                                    <!--Dropdown-->
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Bosch</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Hafele</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Kaff</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>
                                <li class="nav-menu-item">
                                    <a href="#">Hob</a>
                                    <!--Dropdown-->
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Bosch</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Hafele</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Kaff</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>
                                <li class="nav-menu-item">
                                    <a href="#">Micro</a>
                                    <!--Dropdown-->
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Bosch</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Hafele</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Kaff</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>

                                <li class="nav-menu-item">
                                    <a href="#">Oven</a>
                                    <!--Dropdown-->
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Bosch</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Hafele</a>
                                            </li>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Kaff</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>
                                <li class="nav-menu-item">
                                    <a href="#">Sink & Faucet</a>
                                    <!--Dropdown-->
                                    <div class="nav-dropdown dropdown-top">
                                        <ul>
                                            <li class="nav-menu-item">
                                                <a href="#" class="menulia">Blanco</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Dropdown-->
                                </li>
                                <li class="nav-menu-item">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!--End Navigation Menu-->

                        <!--Nav Icons-->
                        <div class="nav-icons">
                            <ul>
                                <li class="nav-icon-item d-lg-none">
                                    <div class="nav-icon-trigger menu-mobile-btn" title="Navigation Menu"><span><i class="ti-menu"></i></span></div>
                                </li>
                          <li class="nav-icon-item">
                                    <div class="nav-icon-trigger search-menu-btn" title="Search"><span><i class="ti-search nav-icon-st"></i></span></div>
                                </li>

                                <a href="cart.php"><li class="nav-icon-item">
                                    <div class="nav-icon-trigger cart-sidebar-btn" title="Shopping Cart"><span><i class="ti-bag nav-icon-st"></i><span class="nav-icon-count">3</span></span></div>
                                </li></a>

                            </ul>
                        </div>
                        <!--End Nav Icons-->

                        <!--Search Bar-->
                        <div class="searchbar-menu">
                            <div class="searchbar-menu-inner">
                                <!--Search Bar-->
                                <div class="search-form-wrap">
                                    <form>
                                        <button class="search-icon btn--lg"><i class="ti-search"></i></button>
                                        <input class="search-field input--lg" placeholder="Search here..." value="" name="s" title="Search..." type="search" autocomplete="off" />
                                        <span class="search-close-icon"><i class="ti-close"></i></span>
                                    </form>
                                </div>
                                <!--End Search Bar-->
                                <!--Search Result Bar-->
                                <div class="search-results-wrap">
                                    <div class="search-results-loading">
                                        <span class="fa fa-spinner fa-spin"></span>
                                    </div>
                                    <div class="search-results-text woocommerce">
                                        <ul>
                                            <li>Nothing found</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End Search Result Bar-->
                            </div>
                        </div>
                        <!--End Search Bar-->
                    </div>
                </div>
            </nav>
            <!--End Header Navigation-->

        </header>

@yield('content')
    <script src="{{asset('frontconnect/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/modernizr.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.parallax.js')}}"type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/instafeed.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/sticky-sidebar.js')}}" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyDwxfea8ecYMmGKMO39JF1ko5bhF4UocpM" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/plugins/jquery.gmap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontconnect/js/theme.js')}}" type="text/javascript"></script>
<footer class="footer footer-bg">
            <!--Footer Widget Bar-->
            <section class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget col-lg-4 col-12 mb-lg-0 mb-4 pr-lg-4">
                            <img class="footer-logo" src="{{asset('frontconnect/img/logo--dark.png')}}" alt="Mullar">
                            <!--<p>Mazaar is a Mulltipurpose Ecommerce Template, The spread of computers and layout programmes thus made dummy text better known.</p>-->
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>11,Netaji Road, PO- Gorabazar<br>
Tollygunge, Kolkata, Pin- 700082</span></li>
                                <li><i class="fa fa-phone"></i><span> +91 9051317265</span></li>
                                <li><i class="fa fa-envelope-open"></i><span>formsandfunctions1@gmail.com</span></li>
                            </ul>
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-widget col-sm-4 col-md-4 col-lg-2 col-12 mb-lg-0 mb-4">
                            <h6 class="footer-widget-title">Quick View</h6>
                            <ul class="for-underline">
                                <li><a href="#">Chimney</a></li>
                                <li><a href="#">Hobs</a></li>
                                <li><a href="#">Micro Oven</a></li>
                                <li><a href="#">Microwave</a></li>
                                <li><a href="#">Kaff</a></li>
                                <li><a href="#">Hafele</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget col-sm-4 col-md-4 col-lg-2 col-12 mb-lg-0 mb-4">
                            <h6 class="footer-widget-title">Quick Links</h6>
                            <ul class="for-underline">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                       <div class="footer-widget col-sm-4 col-md-4 col-lg-4 col-12 mb-lg-0 mb-4">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.6673823648493!2d88.24586951453242!3d24.113189884411813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f97de052ea2bb5%3A0xf29ed39dd24cd29b!2s11%2C+Netaji+Rd%2C+Khagra%2C+Berhampore%2C+West+Bengal+742103!5e0!3m2!1sen!2sin!4v1550406796343" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </section>

            <!--Footer Copyright Bar-->
            <section class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-left">
                            <p class="footer-copyright">© 2018 Kitchen | All Rights Reservers</p>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <img src="{{asset('frontconnect/img/payment_logos.png')}}" alt="payment logos" />
                        </div>
                    </div>
                </div>
            </section>
        </footer>
<!--End Footer-->




<div class="modal fade" id="exampleModalenquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enquiry Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
                                    <!--<p class="large">If you don’t have an account, register now!</p>-->
                                    <p class="form-field-wrapper">
                                        <label for="reg_username" class="lebel-st-career">Name&nbsp;<span class="required">*</span></label>
                                        <input class="input--lg form-full input-st-career" name="reg_username" id="reg_username" autocomplete="username" value="" type="text">
                                    </p>
                                    <p class="form-field-wrapper">
                                        <label for="reg_email" class="lebel-st-career">Email Address&nbsp;</label>
                                        <input class="input--lg form-full input-st-career" name="reg_email" id="reg_email" autocomplete="email" value="" type="email">
                                    </p>
                                    <p class="form-field-wrapper">
                                        <label for="reg_email" class="lebel-st-career">Contact Number&nbsp;<span class="required">*</span></label>
                                        <input class="input--lg form-full input-st-career" name="reg_email" id="reg_email" autocomplete="email" value="" type="email">
                                    </p>
                                    <p class="form-field-wrapper">
                                        <label for="reg_username" class="lebel-st-career">Address &nbsp;<span class="required">*</span></label>
                                        <input class="input--lg form-full input-st-career" name="reg_username" id="reg_username" autocomplete="username" value="" type="text">
                                    </p>
                                    <p class="form-field-wrapper">
                                        <label for="reg_password" class="lebel-st-career">Product Description&nbsp;<span class="required">*</span></label>
                                        <input class="input--lg form-full input-st-career" name="reg_password" id="reg_password" autocomplete="current-password" type="password">
                                    </p>

                                    <p class="form-field-wrapper form-row">
                                        <button type="submit" class="btn btn--lg btn-color" name="send" value="Send">Send</button>
                                    </p>

                                </form>
      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="{{url('auth/facebook')}}"><div class="fb-login">
            <div class="fb-left">
                <img src="{{asset('frontconnect/img/fb.png')}}" />
            </div>
            <div class="fb-right">
                <h3>Login with Facebook</h3>
            </div>
        </div></a>
        <a href="{{url('auth/google')}}"><div class="fb-login">
            <div class="fb-left">
                <img src="{{asset('frontconnect/img/gmail.png')}}" />
            </div>
            <div class="fb-right">
                <h3>Login with Gmail</h3>
            </div>
        </div></a>
      </div>

    </div>
  </div>
</div>
