
@extends('layouts.admin')

@section('content')
<?php if($prdimg->isEmpty()){
    // echo $product_id;
     //$parameter2= Crypt::encrypt($product_id);
     session()->flash('message', 'Please add atleast one color');
    echo  redirect('admin/prdetails_gallery_add/'.$id.'/'.$id2);

     ?>

 <?php }  else {?>
<style>
    #divtag{
        border:2px opaque black ;
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: lightblue;

    }

</style>

 <div class="box box-primary">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
<div class="box-header">
<h3 class="box-title"> Add Details</h3>


<div class="row col-lg-12">
</div>
<!-- /.box-header -->
<!-- form start -->
<?php //////$encryptid=$offer[0]->offer_id;
       // $encryptid=encrypt($encryptid)?>
<form role="form" enctype="multipart/form-data" method="post" action="{{url()->current()}}">
@csrf

<div class="box-body ">

    <div class="row col-lg-4">
    </div>

<div class=" row col-lg-4"  id="divtag">





    <div class="form-group">
        <label>Insert Image</label>
    <input type="file" accept="image/*" onchange="loadFile(event)" name="image">
    <img id="output" width="380px" height="200px" src="{{asset("uploads/icon/addimg.png")}}"/>

    </div>
<div  class="form-group"></div>
<button type="submit" class="btn btn-primary" class="btn btn-success"><i class="fa fa-plus "><b> Add</b></i></button>
</div>
</div>


</form>
</div>
    {{-- <a href="{{url('admin/addslide')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a> --}}

</div>
    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
  <div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Image List</h3>

    </div><!-- /.box-header -->
<div>  <?php $parameter3= encrypt($prdimg[0]->product_id);
                 $parameter2= encrypt($prdimg[0]->product_details_colour_id);?>
    <a href="{{url('admin/prcolorlist', $parameter3)}}"  class="btn btn-success"  ><i class="fa fa-arrow-left ">Previous Menu</i> </a>

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
                    <th width="15"> Action</th>
                    <th> Product Image</th>
                    <th>Set As Default</th>




                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $prdimg as  $sl)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $parameter= encrypt($sl->product_image_details_id);
                        ?>
                    {{-- <td><a href="{{url('admin/sledt',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a> --}}
                        &nbsp;
                          <td>  <a href="{{url('admin/prdetails_img_delete/'.$parameter.'/'. $parameter2.'/'.$parameter3)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>
                    <td><img src="{{ asset('uploads/products/'.$sl->image)}}" alt="" height="100 px" width="100px"  />
                        </td>
                        @if($sl->default_image==1)
                        <td>
                            <a href="{{url('admin/set_default_product_image/'.$parameter.'/'.$parameter2.'/'.$parameter3.'/'.'0')}}" ><span style="color:red;"><u>Cancel Default</u></a></td>
                        </td>
                        @else
                        <td>

                            <a href="{{url('admin/set_default_product_image/'.$parameter.'/'.$parameter2.'/'.$parameter3.'/'.'1')}}" ><span style="color:green;"><u> Set As  Default</u></a></td>
                        </td>
                        @endif
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

var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};

</script>

