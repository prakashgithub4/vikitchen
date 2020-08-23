@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title"> Orders list</h3>

    </div><!-- /.box-header -->

    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
    <div class="box-body table-responsive">
        <div class="container">
        <div class="form-group row col-md-6" style="padding-left:300px;">
            <label for="cars">Order Status:</label>

        <select   name="sequence" class="form-control" style="width:200px;" onChange="document.location.href ='{{url("/admin/approved-orders-by-status")}}'+'/'+this.value">
            <option value=" ">Select Orders</option>




           <option value="1" >New Orders </option>
           <option value="2" >Packed </option>
           <option value="3" >Shipped </option>
           <option value="4" >Delivered </option>


        </select>
        </div>
        <div class="form-group row col-md-6" style="padding-left:300px;">
        <a href="{{url('admin/all-approved-orders')}}"  class="btn btn-primary"  ><i class="fa fa-arrow-left "><b> ALL APPROVED ORDERS</b></i> </a>
        </div>
        </div>



        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th> SL</th>
                    <th width="8%"> Action</th>
                    <th>Invoice No.</th>
                    <th>Date</th>
                    <th>Transaction ID</th>
                    <th>Payment Mode</th>
                    <th>Order Status</th>
                    <th>No. Of Products</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Delivery Charge</th>
                    <th>Grand Total</th>




                </tr>
            </thead>
            <tbody><?php $i=1;  $price=0; $delivery=0;?>
                @foreach ( $invoice as  $in)

                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $parameter= ($in->invoice_no_id);?>
                         <td>
                         <a href="{{url('/admin/change-order-status'.'/'.$parameter)}}" ><i class="fa fa-pencil-square-o"></i></a>

                              <a  target="_blank" href="{{url('admin/generate-invoice'.'/'.$parameter)}}"  ><i class="fa fa-print"></i></a>
                        </td>
                        <td><strong class="badge badge-secondary" ><h4>{{$in->invoice_no}}</h4></strong>
                        </td>
                        <td>{{$in->status_date}}
                        </td>
                        <td>{{$in->transaction_id}}
                        </td>
                        <td>@if($in->payment_mode==1)
                            COD
                            @else
                            Online
                            @endif
                        </td>
                        <td>
                            @if($in->status==1)<strong style="background-color:red"  class="badge badge-secondary">New Order</strong>
                            @elseif($in->status==2)<strong style="background-color:orange"  class="badge badge-secondary">Packed</strong>
                            @elseif($in->status==3)<strong style="background-color:blue"  class="badge badge-secondary">Shipped</strong>
                            @elseif($in->status==4)<strong  class="badge badge-secondary" style="background-color:green">Delivered</strong>
                            @endif

                        </td>
                    <td><?php $cart= \App\ProductCart::where('invoice_no_id', $in->invoice_no_id)->get(); ?> {{count($cart)}}</td>
                    <td><?php
                         $qnty= 0;
                    foreach($cart as $ct){
                        $qnty+= $ct->qty;
                        $price+=$ct->price;
                        $delivery+=$ct->delivery_charge;
                    }?>
                         {{$qnty}}</td>
                <td> {{ number_format($price,2)}}</td>
                <td> {{ number_format($delivery,2)}}</td>
                <td> {{ number_format($price+$delivery,2)}}</td>
                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Order Status</h4>
      </div>
      <div class="modal-body">

      <form action="" method="post">
          @csrf
        <div class="form-group" style="">
            <label for="cars">Order Status:</label>

        <select   name="order_status" class="form-control" style="width:200px;" >
            <option value=" ">Select Orders</option>




           <option value="1" >New Orders </option>
           <option value="2" >old Orders </option>


        </select>

        </div>
        <div class="form-group" style="padding-left:130px;">
        <button type="submit" class="btn btn-primary">Submit</button></div>
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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
<script type="text/javascript">
    function pending_order_approved(invoice_no_id)
    {
        if (confirm('Approved this payment?'))
        {
            window.location.href = './approve-orders/' + invoice_no_id;
        }
    }

    $(document).ready(function(){
    	$(document).on('click', '#edit', function(){
    		alert('ok')


    		$('#myModal').modal('show');

    });


    </script>

    <script>
$(document).ready(function(){
  $("#button_op").click(function(){
    var id=$(this).val();
    alert(id);
  });
});
</script>
