
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pending Orders</h3>

    </div><!-- /.box-header -->

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
                        <?php $parameter= encrypt($in->invoice_no_id);?>
                         <td> <a href="javascript:pending_order_approved('<?php  echo $in->invoice_no_id; ?>');" type="button" class="btn btn-danger">Approve It ?</a>
                        </td>
                        <td><strong class="badge badge-secondary" ><h4>{{$in->invoice_no}}</h4></strong>
                        </td>
                        <td>{{$in->invoice_date}}
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
                            @elseif($in->status==2)Packed
                            @elseif($in->status==3)Shipped
                            @elseif($in->status==4)<strong  class="badge badge-secondary" style="color:green">Delivered</strong>
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
    </script>

