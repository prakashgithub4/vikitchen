
@extends('layouts.admin')

@section('content')
<?php if($prdcolor->isEmpty()){
   // echo $product_id;
    $parameter2= Crypt::encrypt($product_id);
    session()->flash('message', 'Please add atleast one color');
   echo  redirect('admin/prd_coloradd/'.$parameter2);

    ?>

<?php }  else {?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Color Lists</h3>

    </div><!-- /.box-header -->
    <div><?php  $parameter2= Crypt::encrypt($prdcolor[0]->product_id); ?>

        <a href="{{url('admin/prdetials')}}"  class="btn btn-success"  ><i class="fa fa-arrow-left "><b>  Main menu</b></i> </a>
        {{-- <a href="{{url('admin/prd_coloradd',$parameter2)}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a> --}}

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
                    <th  >SL</th>
                    <th width="15">Action</th>
                    <th >Product Color Name</th>
                    <th >Product color</th>
                    <th >Set As Default</th>
                    <th >Total Image</th>







                </tr>
            </thead>

            <tbody><?php $i=1; ?>
                @foreach ( $prdcolor as  $cr)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($cr->product_details_colour_id);
                          $color=\App\ProductColor::where('product_colour_id',$cr->product_colour_id)->get();
                          $product_colour_id = $color[0]->product_colour_id

                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                        <a href="{{url('admin/prdetails_gallerylist/'.$parameter.'/'.$parameter2.'/'. $product_colour_id)}}"> <img src="{{ asset('uploads/icon/galary.png')}}" alt="Galary" height="20 px" width="20px"  /></i></a>
                        &nbsp;
                        <a href="{{url('admin/prdetails_delete/'.$parameter.'/'.$parameter2)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>
                        <td>
                            <?php

                           // $product_id;?>
                           {{ $color[0]->product_colour }}
                        </td>

                        <td><span id="colorid" style="  background-color: <?php echo $color[0]->product_colour_code ?>;
                            width: 400px;
                              height:200px;

                            border: solid <?php  echo $color[0]->product_colour_code ?>;"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </td>
                        @if($cr->default_colour==1)
                        <td> <a href="{{url('admin/set_default_color/'.$parameter.'/'.$parameter2.'/'.'0')}}" ><span style="color:red;"><u>Cancel Default</u></a></td>
                        @else
                        <td> <a href="{{url('admin/set_default_color/'.$parameter.'/'.$parameter2.'/'.'1')}}" ><span style="color:green;"><u>Set As Default</u></a></td>

                        @endif
                        <td>
                            <?php $total_image= \App\ProductDetailsImage::where('product_details_colour_id',$cr->product_details_colour_id)->get(); ?>
                            {{count($total_image)}}
                        </td>



                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
</div>
<?php }?>

@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



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


