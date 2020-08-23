
@extends('layouts.admin')

@section('content')
<form id="form1" name="form1" method="post" action="{{ url()->current()}}" >
    @csrf
    <div id="main-wrap">
        <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div><br />
            @endif
        </div>


    <div>
        <center style="height:12px" ></center>
    </div>

    <h3 class="heading" align="center"><strong>Tax Invoice Details</strong></h3>
    <div style="width:100%">
       <table style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px;" cellspacing="0" cellpadding="2" class="table table-bordered">
             <tr>
               <th colspan="2" class="RightBorder LeftBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px;text-align:center;background-color:#CCC"><strong>Seller Details</strong></th>
               <th colspan="4" class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px;text-align:center;background-color:#CCC"><strong>Shipping  Details</strong></th>
            </tr>
             <tr>
               <td class="RightBorder BottomBorder LeftBorder" style="font-family:Calibri; font-size:12px; width:12%;"><strong>Order Date</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:20%;"><?php echo date('d-m-Y',strtotime( $invoice[0]->invoice_date)); ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:13%;"><strong>Name</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:20%;"><?php echo ucfirst($shipping[0]->name);?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:18%;"><strong>Contact No</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; width:22%;"><?php echo $shipping[0]->contact_no; ?></td>
             </tr>

             <tr>
               <td class="BottomBorder RightBorder LeftBorder" style="font-family:Calibri; font-size:12px;"><strong>Invoice No</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px;"><?php echo $invoice[0]->invoice_no; ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px;"><strong>Address</strong></td>
               <td colspan="3" class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px;"><?php echo $shipping[0]->address; ?></td>
             </tr>

             <tr>
               <td class="BottomBorder RightBorder LeftBorder" style="font-family:Calibri; font-size:12px;"><strong>Invoice Date</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px;"><?php echo date('d-m-Y',strtotime($invoice[0]->invoice_date)); ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px;"><strong>Payment Mode</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px;">COD / Prepaid</td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px;"><strong>Collect Amount</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px;"><?php echo number_format($invoice[0]->total_amt-$invoice[0]->use_wallet_amt,2); ?></td>
             </tr>
        </table>
     </div>
     <br />

     <h3 class="heading" align="center"><strong>Product Details</strong></h3>
    <div style="width:100%">
        <table style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px;" cellspacing="0"  cellpadding="2" class="table table-bordered">
            <tr>
                <th class="RightBorder LeftBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:center;background-color:#CCC">Sl.No.</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:18%;text-align:center;background-color:#CCC">Product Name</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC">Colour</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%;text-align:center;background-color:#CCC">Size</th>

                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%;text-align:center;background-color:#CCC">Price</th>

                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:5%; text-align:center;background-color:#CCC">Qty</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC">Sub Total</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:12%; text-align:center;background-color:#CCC">Delivery Charge</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC">Grand Total</th>
            </tr>
            <?php
            $icount = 1; $price=0;
             $total_qty=0;$sub_total=0; $total_delivery_charge=0;

           foreach($cart as $cr)
            {
                $price=$price+$cr->price;
                $total_qty=$total_qty+$cr->qty;
                $sub_total=$sub_total+($cr->qty*$cr->price);
                $total_delivery_charge=$total_delivery_charge+($cr->delivery_charge*$cr->qty);
            $product = \App\ProductDetails::where('product_id',$cr->product_id)->get();
            $color = \App\ProductColor::where('product_colour_id',$cr->product_colour_id)->get();
            $size = \App\ProductSize::where('product_size_id',$cr->product_size_id)->get();
               // echo $product; exit;

            ?>
            <tr>
                <td style="text-align:center; font-family:Calibri; font-size:12px;" class="RightBorder LeftBorder BottomBorder"><?php echo $icount; ?></td>
                <td style="text-align:left; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo  $product[0]->product_name; ?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php  echo $color[0]->product_colour; ?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php  echo  $size[0]->size; ?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo number_format( $product[0]->actual_price,2)?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo $cr->qty; ?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo $subbtot=number_format($cr->qty*$cr->price,2)?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo $delvc=number_format($cr->delivery_charge*$cr->qty,2)?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px;" class="RightBorder BottomBorder"><?php echo number_format($cr->qty*$cr->price + $cr->delivery_charge*$cr->qty,2) ;?></td>
                </tr>
            <?php
            $icount++;
            }
            ?>
            <tr>
            <th colspan="4" class="LeftBorder RightBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:right;background-color:#CCC">Total :</th>
            <td style="text-align:right" class="RightBorder"><strong><?php echo number_format($price,2)?></strong></td>
            <td style="text-align:center" class="RightBorder"><strong><?php echo $total_qty?></strong></td>
            <td style="text-align:right" class="RightBorder"><strong><?php echo number_format($sub_total,2)?></strong></td>
            <td style="text-align:right" class="RightBorder"><strong><?php echo number_format($total_delivery_charge,2)?></strong></td>
            <td style="text-align:right" class="LeftBorder RightBorder"><strong><?php echo number_format($sub_total+$total_delivery_charge,2)?></strong></td>
            </tr>

            <tr class="AllBorder">
            <th colspan="11" class="AllBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:left;background-color:#CCC">Amount in words : <?php
             $number = $sub_total+$total_delivery_charge;
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Ttwenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " .
          $words[$point = $point % 10] : '';
  echo $result . "Rupees  " . $points . " Only.";
 ?> </th>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="cars">Select Courier:</label>

    <select   name="select" class="form-control">
        <option value=" ">Select Courier</option>
        <?php $courier= \App\Courier::all(); ?>
     @foreach ( $courier as $c )
    <option value="{{$c->courier_services_id}}" >{{$c->courier_services_name}}</option>
     @endforeach

    </select>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Send to Courier &nbsp;<i class="fa fa-rocket"></i></button>
        </div>

    </div>

   </form>

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
