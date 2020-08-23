@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')

<div class="container">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #91fffa; color:black;">
                                <?php $product = \App\ProductDetails::all();
                                        $color= \App\ProductColor::all();
                                        $courier= \App\Courier::all();
                                        $category= \App\Category::all();
                                        $names= \App\Productname::all();
                                        $size= \App\ProductSize::all();
                                        $invoice= \App\Invoice::where('status',1)->get();
                                        $return_product= \App\ReturnProduct::all();

                                ?>
                                <div class="inner">
                                    <h3>
                                      {{count($product)}}
                                    </h3>
                                    <p>
                                       Products
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            <a href="{{url('admin/prdetials')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        {{-- <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #faa86e; color:black;">
                                <div class="inner">
                                    <h3>
                                       {{count($courier)}}
                                    </h3>
                                    <p>
                                       Courier
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa  fa-truck"></i>
                                </div>
                            <a href="{{ url('admin/courier')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div> --}}
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #ff33f1; color:black;">
                                <div class="inner">
                                    <h3>
                                        {{count($color)}}
                                    </h3>
                                    <p>
                                       Color
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa  fa-tint"></i>
                                </div>
                            <a href="{{ url('admin/prcolor')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #47ff60; color:black;">
                                <div class="inner">
                                    <h3>
                                        {{count($category)}}
                                    </h3>
                                    <p>
                                        Categories
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-flag"></i>
                                </div>
                            <a href="{{ url('admin/prcatlist')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #ff3b4e; color:black;">
                                <div class="inner">
                                    <h3>
                                       {{count($names)}}
                                    </h3>
                                    <p>
                                        Product Names
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-female"></i>
                                </div>
                            <a href="{{url('admin/prnamelist')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #85f21f; color:black">
                                <div class="inner">
                                    <h3>
                                       {{count($size)}}
                                    </h3>
                                    <p>
                                        Product Size
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-cut"></i>
                                </div>
                            <a href="{{url('admin/prsize')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box " style="background-color: #f2621f; color:black">
                                <div class="inner">
                                    <h3>
                                       {{count($invoice)}}
                                    </h3>
                                    <p>
                                      New  Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-thumb-tack"></i>
                                </div>
                            <a href="{{url('/admin/pending-orders')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>






@endsection
