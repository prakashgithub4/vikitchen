@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title"> Return/Refdun list</h3>

    </div><!-- /.box-header -->

    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
    {{-- <div class="box-body table-responsive">
        <div class="form-group" style="padding-left:300px;">
            <label for="cars">Order Status:</label>

        <select   name="sequence" class="form-control" style="width:200px;" onChange="document.location.href ='{{url("/admin/approved-orders-by-status")}}'+'/'+this.value">
            <option value=" ">Select Orders</option>




           <option value="1" >New Orders </option>
           <option value="2" >Packed </option>
           <option value="3" >Shipped </option>
           <option value="4" >Delivered </option>


        </select>
        </div> --}}

        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th> SL</th>
                    <th width="8%"> Action</th>
                    <th>Invoice No.</th>
                    <th> Refund Mode</th>
                    <th>Cancel Date</th>
                    <th>Recieved Date</th>
                    <th>Refund Status</th>
                    <th>Refund Date</th>
                    <th>Invoice Amount</th>
                    <th>Return Amount</th>
                    <th>Return Delivery Charge</th>

                    <th>Grand Total</th>




                </tr>
            </thead>
            <tbody>
                <?php $i=1; $return_amount=0;$return_delivery=0;?>
                @foreach ( $return as  $rtn)
                <?php $invoice= \App\Invoice::where('invoice_no_id', $rtn->invoice_no_id)->get();
                  ?>
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $parameter= $rtn->return_product_id;?>
                         <td>@if($rtn->refund_date!=null|| $rtn->refund_date!=0)

                            <a href="{{url('/admin/view_replace_refund'.'/'.$parameter)}}" ><i class="fa fa-search"></i></a>
                         @elseif($rtn->product_received_date==null || $rtn->product_received_date==0)
                          <a href="{{url('/admin/edit_replace_date'.'/'.$parameter)}}" ><i class="fa fa-pencil-square-o"></i></a>
                         @elseif( $rtn->refund_mode==1)

                         <a href="{{url('/admin/edit_refund'.'/'.$parameter)}}" ><i class="fa fa-pencil-square-o"></i></a>
                         @elseif($rtn->refund_mode==2)
                          <a href="{{url('/admin/edit_replace'.'/'.$parameter)}}" ><i class="fa fa-pencil-square-o"></i></a>
                          @endif

                        </td>
                        <td><strong class="badge badge-secondary" ><h4>{{$invoice[0]->invoice_no}}</h4></strong>
                        </td>
                        <td> @if($rtn->refund_mode==1)
                        Refund To Bank
                        @else
                        Product Replacement
                        @endif
                            </td>
                        <td>{{$rtn->return_date}}
                        </td>
                        <td>{{$rtn->product_received_date}}
                        </td>
                        <td>@if($rtn->refund_status==1)
                            <span class="badge badge-secondary" style="background-color:red;">NO</span>
                            @else
                             <span class="badge badge-secondary" style="background-color:green;">YES</span>
                            @endif
                        </td>
                        <td>   {{$rtn->refund_date}}
                        </td>
                    <td>{{number_format($invoice[0]->total_amt,2)}}
                    </td>
                    <td><?php $cart= \App\ProductCart::where('invoice_no_id', $invoice[0]->invoice_no_id)->get();
                    foreach($cart as $ct){
                        $return_amount+=$ct->price;
                        $return_delivery+=$ct->delivery_charge;
                    }

                    ?>
                    <?php echo number_format($return_amount,2);?>

                     </td>
                <td>  <?php echo number_format($return_delivery,2);?></td>

                <td> {{number_format($return_amount+$return_delivery,2)}}</td>
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
