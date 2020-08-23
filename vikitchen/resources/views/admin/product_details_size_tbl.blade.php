
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

                    <th >Size</th>
                    <th >Quantity In Hand</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Actual Price</th>
                    <th>Delivery Charge</th>


                </tr>
            </thead>

            <tbody><?php $i=1; ?>
                @foreach ( $prsize as  $cr)
                <tr>     <td>{{ $i++}}
                        </td>

                    <td>

                        <?php
                        $parameter= Crypt::encrypt($cr->product_details_size_id);
                      //  echo  $parameter= $cr->product_details_size_id;?>

                        &nbsp;
                        <a href="{{url('admin/prsize_delete/'.$parameter.'/'.$parameter2)}}" class="btn btn-danger" ><i class="fa fa-times-circle"></i></a>
                        <a href="{{url('admin/prdetails_stock_add/'.$parameter.'/'.$parameter2.'/'.$cr->stock)}}" class="btn btn-warning"  ><i class="fa fa-plus-square"> Add Stock</i></a>
                        <a href="{{url('admin/prdetails_stock_sub/'.$parameter.'/'.$parameter2.'/'.$cr->stock)}}"  class="btn btn-danger" ><i class="fa fa-minus-square"> Remove Stock</i></a>
                        <a href="{{url('admin/prsetprice/'.$parameter.'/'.$parameter2)}}"  class="btn btn-primary" ><i class="fa fa-inr"> Set/Edit The Price</i></a>



                        </td>




                        <td>
                            <?php $size=\App\ProductSize::where('product_size_id',$cr->product_size_id)->get(); ?>
                            {{$size[0]->size}}
                            <?php if($size[0]->size=='Demo Size'){ ?>
                                <a href="{{url('admin/change_demo/'.$parameter)}}"  class="btn btn-success" ><img src="{{ asset('uploads/icon/cloth.png')}}" alt="size" height="20px" width="20px"  /> Change Demo Size</a>


                            <?php }?>

                        </td>


                        <td>
                           {{ $cr->stock }}
                        </td>
                        <td> {{ $cr->price }}</td>
                        <td> {{ $cr->discount }}</td>
                        <td> {{ $cr->actual_price }}</td>
                        <td> {{ $cr->delivery_charge }}</td>



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


