
@extends('layouts.admin')

@section('content')
<?php //if($prdcolor->isEmpty()){
   // echo $product_id;
   // $parameter2= Crypt::encrypt($product_id);
   // session()->flash('message', 'Please add atleast one color');
  // echo  redirect('admin/prd_coloradd/'.$parameter2);

    ?>

<?php  {?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Size Lists</h3>

    </div><!-- /.box-header -->
    <div><?php  $parameter2= Crypt::encrypt($product_id); ?>

        <a href="{{url('admin/prdetials')}}"  class="btn btn-primary"  ><i class="fa fa-arrow-left "><b>  Main menu</b></i> </a>
        <a href="{{url('admin/prd_size_add',$parameter2)}}"  class="btn btn-primary"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

    </div>

    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th  >SL</th>
                    <th width="15">Action</th>
                    <th >Product Color Name</th>
                    <th >Product color</th>
                    <th >Size</th>
                    <th >Quantity In Hand</th>


                </tr>
            </thead>

            <tbody>

                <tr>     <td>
                        </td>

                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>





                </tr>




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


