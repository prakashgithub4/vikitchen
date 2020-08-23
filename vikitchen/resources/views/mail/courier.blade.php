<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
<form id="form1" name="form1" >
    <div id="main-wrap">
        Dear <?php echo $newthing['name'];?>,<br>
        <strong>We are forwarding the invoice and product details for your kind consideration.</strong><br /><br />


    <div>
        <center style="height:12px" ></center>
    </div>
    <?php
    $id=  $newthing['id'];

    $cart= \App\ProductCart::where('invoice_no_id', $id)->get();
      //  return $cart;
      $invoice= \App\Invoice::where('invoice_no_id', $id)->get();
      $shipping= \App\ShippingAddress::where('invoice_no_id', $id)->get();
     // return $shipping;
      $shipping= \App\ShippingAddress::where('invoice_no_id', $id)->get(); ?>

    <h3 class="heading" align="center"><strong> Invoice Details</strong></h3>
    <div style="width:100%">
       <table style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px; border: 1px solid #a0a0a0;" cellspacing="0" cellpadding="2" class="table table-bordered">
             <tr>
               <th colspan="2" class="RightBorder LeftBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px;text-align:center;background-color:#CCC;  border: 1px solid #a0a0a0;"><strong>Seller Details</strong></th>
               <th colspan="4" class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px;text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;"><strong>Shipping  Details</strong></th>
            </tr>
             <tr>
               <td class="RightBorder BottomBorder LeftBorder" style="font-family:Calibri; font-size:12px; width:12%;  border: 1px solid #a0a0a0;"><strong>Order Date</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:20%; border: 1px solid #a0a0a0;"><?php echo date('d-m-Y',strtotime( $invoice[0]->invoice_date)); ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:13%; border: 1px solid #a0a0a0;"><strong>Name</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:20%; border: 1px solid #a0a0a0;"><?php echo ucfirst($shipping[0]->name);?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; width:18%; border: 1px solid #a0a0a0;"><strong>Contact No</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; width:22%; border: 1px solid #a0a0a0;"><?php echo $shipping[0]->contact_no; ?></td>
             </tr>

             <tr>
               <td class="BottomBorder RightBorder LeftBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><strong>Invoice No</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><?php echo $invoice[0]->invoice_no; ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><strong>Address</strong></td>
               <td colspan="3" class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><?php echo $shipping[0]->address; ?></td>
             </tr>

             <tr>
               <td class="BottomBorder RightBorder LeftBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><strong>Invoice Date</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><?php echo date('d-m-Y',strtotime($invoice[0]->invoice_date)); ?></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><strong>Payment Mode</strong></td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;">COD / Prepaid</td>
               <td class="RightBorder BottomBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><strong>Collect Amount</strong></td>
               <td class="BottomBorder RightBorder" style="font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;"><?php echo number_format($invoice[0]->total_amt-$invoice[0]->use_wallet_amt,2); ?></td>
             </tr>
        </table>
     </div>
     <br />

     <h3 class="heading" align="center"><strong>Product Details</strong></h3>
    <div style="width:100%">
        <table style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px;  border: 1px solid #a0a0a0;" cellspacing="0"  cellpadding="2" class="table table-bordered">
            <tr>
                <th class="RightBorder LeftBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Sl.No.</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:18%;text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Product Name</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Colour</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%;text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Size</th>

                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%;text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Price</th>

                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:5%; text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Qty</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Sub Total</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:12%; text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Delivery Charge</th>
                <th class="RightBorder BottomBorder TopBorder" style="font-family:Calibri; font-size:12px; width:10%; text-align:center;background-color:#CCC; border: 1px solid #a0a0a0;">Grand Total</th>
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
                <td style="text-align:center; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder LeftBorder BottomBorder"><?php echo $icount; ?></td>
                <td style="text-align:left; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo  $product[0]->product_name; ?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php  echo $color[0]->product_colour; ?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php  echo  $size[0]->size; ?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo number_format($cr->price,2)?></td>
                <td style="text-align:center; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo $cr->qty; ?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo number_format($cr->qty*$cr->price,2)?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo number_format($cr->delivery_charge*$cr->qty,2)?></td>
                <td style="text-align:right; font-family:Calibri; font-size:12px; border: 1px solid #a0a0a0;" class="RightBorder BottomBorder"><?php echo number_format($cr->qty*$cr->price + $cr->delivery_charge*$cr->qty,2)?></td>
                </tr>
            <?php
            $icount++;
            }
            ?>
            <tr>
            <th colspan="4" class="LeftBorder RightBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:right;background-color:#CCC">Total :</th>
            <td style="text-align:right; border: 1px solid #a0a0a0;" class="RightBorder"><strong><?php echo number_format($price,2)?></strong></td>
            <td style="text-align:center; border: 1px solid #a0a0a0;" class="RightBorder"><strong><?php echo $total_qty?></strong></td>
            <td style="text-align:right; border: 1px solid #a0a0a0;" class="RightBorder"><strong><?php echo number_format($sub_total,2)?></strong></td>
            <td style="text-align:right; border: 1px solid #a0a0a0;" class="RightBorder"><strong><?php echo number_format($total_delivery_charge,2)?></strong></td>
            <td style="text-align:right; border: 1px solid #a0a0a0;" class="LeftBorder RightBorder"><strong><?php echo number_format($sub_total+$total_delivery_charge,2)?></strong></td>
            </tr>

            <tr class="AllBorder">
            <th colspan="11" class="AllBorder" style="font-family:Calibri; font-size:12px; width:5%;text-align:left;background-color:#CCC; border: 1px solid #a0a0a0;">Amount in words : <?php
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
    <br>

    Thanks & Regards,<br>
    <strong>Attire Boutique</strong>
    </div>

   </form>

</div>


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
