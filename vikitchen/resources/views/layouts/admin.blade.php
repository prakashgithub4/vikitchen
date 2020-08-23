<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('adminlte/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ asset('adminlte/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{ asset('adminlte/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->

        <!-- jvectormap -->
        <link href="{{ asset('adminlte/css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="{{ asset('adminlte/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('adminlte/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('adminlte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('adminlte/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>

        .myclass{
            background-color: skyblue;
            border-radius: 5px;

        }
        </style>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{url('/admin')}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <i class="fa fa-home"></i>Vikitchen, F&F
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->


                        <!-- User Account: style can be found in dropdown.less -->
                         <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ Auth::user()->name }}  <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{{asset('frontconnect/img/logo--light.png')}}"  alt="apple ways" >
                                    <p>
                                        {{ Auth::user()->name }} - VIKITCEN , FORMS & FUNCTION
                                        <small></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{url('admin/pswchange')}}" class="btn btn-default btn-flat">Change Password</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{url('/signout')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('frontconnect/img/logo--light.png')}}"  alt="apple ways" style="width:200px;" >
                        </div>
                        {{-- <div class="pull-left info">
                            <p>Hello,  {{ Auth::user()->name }} </p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div> --}}
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        {{-- <li class="active">
                            <a href="#">
                                <i class="fa fa-home"></i> <span>Website</span>
                            </a>
                        </li> --}}
                            <li>
                                <a href="{{url('admin')}}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>

                        <li class="treeview">
                            <a href="#">
                                <i class=" fa fa-home"></i>
                                <span>Master</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>


                            <ul class="treeview-menu">

                                <li><a href="{{url('admin/slider')}}"><i class="fa fa-angle-double-right"></i> Slider List</a></li>
                                <li><a href="{{url('admin/about-us')}}"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="{{url('admin/company-policy')}}"><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                                <li><a href="{{url('admin/privacy-policy')}}"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                                <li><a href="{{url('admin/faq')}}"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="{{url('admin/our-portfolio')}}"><i class="fa fa-angle-double-right"></i> Our Portfolio</a></li>
                                 <li><a href="{{url('admin/offer4')}}"><i class="fa fa-angle-double-right"></i>6st Panel List</a></li>
                                 <!-- <li><a href="{{url('admin/offer2')}}"><i class="fa fa-angle-double-right"></i> 2nd Panel List</a></li> -->
                                  <!-- <li><a href="{{url('admin/pincode-list')}}"><i class="fa fa-angle-double-right"></i>Add/Change Pincode</a></li> -->

                                    <!-- <li><a href="{{url('admin/offer3')}}"><i class="fa fa-angle-double-right"></i> 3rd Panel List</a></li> -->
                                    <li><a href="{{url('admin/pincode_list')}}"><i class="fa fa-angle-double-right"></i> Pincode</a></li>




                                {{-- <center><h4 class="myclass  ">Products</h4  ></center>
                                    <li><a href="{{url('admin/prcatlist')}}"><i class="fa fa-angle-double-right"></i>Product Category List</a></li>
                                    <li><a href="{{url('admin/prnamelist')}}"><i class="fa fa-angle-double-right"></i>Product Name List</a></li>
                                    <li><a href="{{url('admin/prsize')}}"><i class="fa fa-angle-double-right"></i>Product Size List</a></li>
                                    <li><a href="{{url('admin/prcolor')}}"><i class="fa fa-angle-double-right"></i>Product Color List</a></li>
                                    <li><a href="{{url('admin/prdetials')}}"><i class="fa fa-angle-double-right"></i>Product details List</a></li>
 --}}

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span> Orders</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('admin/pending-orders')}}"><i class="fa fa-angle-double-right"></i> Pending Orders</a></li>
                                <?php $stat=1; ?>
                                <li><a href="{{url('admin/all-approved-orders')}}"><i class="fa fa-angle-double-right"></i> List Of  Orders</a></li>
                                <li><a href="{{url('admin/returnorrefund')}}"><i class="fa fa-angle-double-right"></i>Return/Replace Products</a></li>

                            </ul>
                        </li>
                       <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tag"></i>
                                <span> Products</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                {{-- <li><a href="{{url('admin/blog-list')}}"><i class="fa fa-angle-double-right"></i> Blog list</a></li> --}}
                                 <li><a href="{{url('admin/coupon-list')}}"><i class="fa fa-angle-double-right"></i>Apply Coupon</a></li>
                                <li><a href="{{url('admin/brand-list')}}"><i class="fa fa-angle-double-right"></i> Brands</a></li>
                                <li><a href="{{url('admin/prcatlist')}}"><i class="fa fa-angle-double-right"></i>Product Category List</a></li>

                                    {{-- <li><a href="{{url('admin/prnamelist')}}"><i class="fa fa-angle-double-right"></i>Product Name List</a></li> --}}
                                    {{-- <li><a href="{{url('admin/prsize')}}"><i class="fa fa-angle-double-right"></i>Product Size List</a></li>
                                    <li><a href="{{url('admin/prcolor')}}"><i class="fa fa-angle-double-right"></i>Product Color List</a></li> --}}
                                    <li><a href="{{url('admin/prdetials')}}"><i class="fa fa-angle-double-right"></i>Product details List</a></li>



                            </ul>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <!--<section class="content-header">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>-->


                <!-- Main content -->
                <section class="content">

                    <div  class="container" style="margin-right: 65px;">

                        <div class="row col-md-10">
                            @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <h5> <strong> {{ Session::get('message') }}</strong></h5>
                              </div>

                            @endif
                    </div>
                        </div>
  @yield('content')



                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="{{asset('adminlte/js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{asset('adminlte/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!--Data table-->
        <script src="{{asset('adminlte/js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminlte/js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

        <!-- Sparkline -->
        <script src="{{asset('adminlte/js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{asset('adminlte/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminlte/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="{{asset('adminlte/js/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('adminlte/js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{asset('adminlte/js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('adminlte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{asset('adminlte/js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{asset('adminlte/js/AdminLTE/app.js')}}" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


    </body>
</html>
