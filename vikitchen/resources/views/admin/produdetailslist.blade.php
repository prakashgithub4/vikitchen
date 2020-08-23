
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Details List</h3>

    </div><!-- /.box-header -->
<div>
    <a href="{{url('admin/addprodetails')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

</div>
    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th> SL</th>
                    <th> Action</th>
                    {{-- <th>Image</th> --}}
                    <th>Menu</th>
                    <th>Ctegory</th>
                    <th>Detaials Name</th>
                    <th>Image</th>
                    <th>Description</th>

                    {{-- <th>Just Arrived</th> --}}
                    <th>Featured</th>
                    {{-- <th>Best Selling</th>
                    <th>Recommended Products</th> --}}



                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $prdetails as  $pr)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $product_id= encrypt($pr->product_id);?>
                    <td><a href="{{url('admin/predit',$product_id)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                            <a href="{{url('admin/prdelete',$product_id)}}" ><i class="fa fa-times-circle"></i></a>
                           <a href="{{url('admin/prcolorlist',$product_id)}}"><img src="{{ asset('uploads/icon/color.jpg')}}" alt="color" height="20px" width="20px"  /></a>
                           <a href="{{url('admin/prsizelist',$product_id)}}"><img src="{{ asset('uploads/icon/cloth.png')}}" alt="size" height="20px" width="20px"  /><i class="fa fa-inr" aria-hidden="true"></i></a>


                        </td>
                    {{-- <td><img src="{{ asset('uploads/slider/'.$sl->image)}}" alt="" height="100 px" width="100px"  /> </td> --}}
                    <td> <?php  $mymenu=\App\Menu::find($pr->menu_id);
                       $prcat_id=\App\Category::find($pr->product_category_id);
                       $prcolor=\App\ProductDetailsColor:: where('product_id',$pr->product_id)->where('default_colour',1)->get();
                       //$prcolorid=
                      // $primgid=\App\ProductImage   :: where('product_id',$pr->product_id)->where('default_image',1)->get();


                       ?>
                       {{ $mymenu->menu_name }}</td>
                    <td>{{ $prcat_id->product_category}}</td>
                    <td>{{ $pr->product_name}}</td>


                    <td>
                     @if($prcolor->isNotEmpty())


                    <?php
                     $mycolor=\App\ProductDetailsColor:: where('product_id',$pr->product_id)->where('default_colour',1)->get();
                    // echo $prcolor[0]->product_colour_id;
                      $myimg =\App\ProductImage   :: where('product_id',$pr->product_id)->where('default_image',1)->where('product_colour_id',$prcolor[0]->product_colour_id)->get();
                     //echo    $myimg;?>
                      @if( sizeof($myimg) > 0)
                          <img src="{{ asset('uploads/products/'.$myimg[0]->image)}}" alt="" height="100 px" width="100px"  />
                          @else
                          <img src="{{ asset('uploads/products/noimg.png')}}" alt="" height="100 px" width="100px"  /></td>
                          @endif

                      @else
                      <img src="{{ asset('uploads/products/noimg.png')}}" alt="" height="100 px" width="100px"  /></td>
                       @endif

                         </td>

                    <td><ul><li>{{ substr(strip_tags($pr->description),0,50)}}</li></ul></td>



                    <td><?php  if($pr->feature_products==0){?>

                       <span class="badge badge-success" style="background-color: red;"><strong>NO</strong></span>
                    <?php } else { ?>
                        <span class="badge badge-success" style="background-color: green;"><strong>YES</strong></span>
                    <?php }?>
                  </td>


                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>


