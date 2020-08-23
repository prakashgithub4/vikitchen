<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) {
    *[class="table_width_100"] {
		width: 96% !important;
	}
	*[class="border-right_mob"] {
		border-right: 1px solid #dddddd;
	}
	*[class="mob_100"] {
		width: 100% !important;
	}
	*[class="mob_center"] {
		text-align: center !important;
	}
	*[class="mob_center_bl"] {
		float: none !important;
		display: block !important;
		margin: 0px auto;
	}
	.iage_footer a {
		text-decoration: none;
		color: #929ca8;
	}
	img.mob_display_none {
		width: 0px !important;
		height: 0px !important;
		display: none !important;
	}
	img.mob_width_50 {
		width: 40% !important;
		height: auto !important;
	}
}
.table_width_100 {
	width: 680px;
}
table {
  border-collapse: collapse;
}

.cart_summary {
  border: 1px solid black;
}
.bordering_class{
    border: 1px solid black;

}
</style>

<?php
$web_user_id =@auth::user()->id ;
$invoice_no_id=  $newthing['invoice_id'];

$cart=\App\ProductCart::where('web_user_id',$web_user_id)->where('invoice_no_id',$invoice_no_id) ->get();
$myinvoice=\App\Invoice::where('invoice_no_id',$invoice_no_id) ->get();
//print_r($cart) ; exit;
 ?>

<!--
Responsive Email Template by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div id="mailsub" class="notification" align="center">
    <!--<div align="center">
       <img src="http://talmanagency.com/wp-content/uploads/2014/12/cropped-logo-new.png" width="250" alt="Metronic" border="0"  />
    </div> -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" cellpadding="0" cellspacing="0"  style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<![endif]-->

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" cellpadding="0" cellspacing="0"  style="max-width: 680px; min-width: 300px;">
    <tr><td>
	<!-- padding -->
	</td></tr>
	<!--header -->
	<tr><td align="center" bgcolor="#ffffff">
		<!-- padding -->
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
			    		<span cellpadding="0" cellspacing="0"  style="color: #596167; font-family: Arial, Helvetica, sans-serif; float:left; width:100%; padding:20px;text-align:center; font-size: 13px;">
									<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
                                    <h3> <img src="http://www.lacreasio.com/appleways/frontpanel/images/logo-c.png" height="100px" width="100px" alt="User Image" /> </h3>
                                    <h3>The Apple Ways </h3></font></span>
					</td>
					<td align="right">
				<!--[endif]--><!--

			</td>
			</tr>
		</table>
		<!-- padding -->
	</td></tr>
	<!--header END-->

	<!--content 1 -->
	<tr><td align="center" bgcolor="#fbfcfd">
	    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" cellpadding="0" cellspacing="0"  style="font-size: 15px;">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td>
			    Dear  <?php echo 'Admin'; ?>,<br/>
			    <br>

			A Customer recently  Created an Order(s) <br/>
			    <br>
			   The Details are given below:<br/>
			   <br>


            </td></tr>
            <tr>
                <table class="autoTable " width="100%
                "cellpadding="0" cellspacing="0" border="0" >
                    <thead id="bordering_class" style="background-color: #fad7a0;">


                      <tr "style="background-color:#c71a31;">

                      <th class="cart_product" cellpadding="0" cellspacing="0"  style="text-align:center; border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;"  cellspacing="0" cellpadding="0">Sl</th>
                      <th class="action" cellpadding="0" cellspacing="0"  style="text-align:center; border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Date</i></th>
                      <th class="action" cellpadding="0" cellspacing="0"  style="text-align:center; border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Quantity</i></th>

                      <th class="cart_product" cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Product Name</th>

                      <th class="cart_product"  cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Size</th>
                      <th class="text-center "  cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Price</th>
                      <th class="text-center "  cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Delivery Charge</th>



                      <th class="text-center" cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">Grand Total</th>
                      </tr>





                      </thead>
                    <tbody> <?php  $total=0;  $tot_qty=0; $tot_price=0; $tot_delivery=0; $i=1;  ?>
                         @foreach ($cart as $ct)
                          <?php   $grand=$ct->qty*$ct->price;?>
                          <tr>
                          <td cellpadding="0" cellspacing="0"  style="text-align:center;padding: 10px; border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;"><?php echo $i++; ?> </td>
                          <td cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;" class="action">{{  date("Y/m/d") }}</td>
                          <td cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;" class="action">{{  $ct->qty }}</td>

                          <?php  $product= \App\ProductDetails::where('product_id', $ct->product_id)->get();?>
                          <?php if(count($product)>0){ ?>
                          <td class="cart_description" cellpadding="0" cellspacing="0"  style="border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">{{$product[0]->product_name}}</td>
                          <?php }?>
                          <?php  $color= \App\ProductColor::where('product_colour_id', $ct->product_colour_id)->get();?>


                          <?php  $size= \App\ProductSize::where('product_size_id', $ct->product_size_id)->get();?>
                          <?php if(count($size)>0){  ?>
                          <td cellpadding="0" cellspacing="0"  style="text-align:center;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;">{{ $size[0]->size}}</td>
                          <?php }?>
                          <td cellpadding="0" cellspacing="0"  style="text-align:right;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;" class="price"><span>{{number_format($ct->price,2)}}</span></td>





                          <td cellpadding="0" cellspacing="0" style="text-align:center;padding: 10px; border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;"><span>{{number_format($ct->delivery_charge ,2)}}</span></td>
                          <td cellpadding="0" cellspacing="0"  style="text-align:right;border: 1px dashed #a0a0a0;margin: 20px;font-size: 16px;line-height: 20px;" class="price"><span><?php echo  number_format($grand);?></span></td>
                          </tr>
                          <?php $total+=$ct->price; $tot_qty+=$ct->qty; $tot_price+=$ct->qty*$ct->price; $tot_delivery+=$ct->delivery_charge; ?>
                          @endforeach


                    </tbody>
                    <tfoot>


                      </tfoot>
                  </table>


            </tr><tr>
                <td align="center">
                    <div cellpadding="0" cellspacing="0"  style="line-height: 24px;">
                        <br>
                        <?php $discountprc= $tot_price-$myinvoice[0]->total_amt;
                        if($discountprc!=0){?>
                        <h3> Applied Coupon Amount: RS. <?php echo $discountprc;  ?>.00 </h3>
                        <?php }?>
                         <h3>   Quantity:<?php echo $tot_qty;?> , <strong style="color:#f70546;">Total Price: Rs.{{ number_format(($myinvoice[0]->total_amt)+$tot_delivery,2)}}</strong></h3>

                    </div></td>

                <td></td>
            </tr>
            <tr>
            <td align="left">
                <div cellpadding="0" cellspacing="0"  style="line-height: 24px;">
                	<br>
                	<div  align="left" Style="background-color:#eff3f8; width:400px;; ">
                    <strong>The Above Product(s) Will Be Sent To This Address:</strong>
                    <h5> Address: <?php echo $newthing['address']; ?></h5>
                     <h5> State: <?php echo $newthing['state']; ?></h5>
                     <h5> City: <?php echo $newthing['city']; ?></h5>
                     <h5>Pin Code: <?php echo $newthing['pincode']; ?></h5>

                 </div>

                </div></td>

                <td></td>
            </tr>
                <br>
                <br>



		</table>
		</font>
	</td></tr>
    <!--content 1 END-->
    <div align="left">
        Thank you,<br>
        Please Shop Again,<br>
        Admin@ APPLE WAYS.

    </div>


	<!--footer -->
	<tr><td class="iage_footer" align="center" bgcolor="#ffffff">


		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center" cellpadding="0" cellspacing="0"  style="padding:20px;flaot:left;width:100%; text-align:center;">
				<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" cellpadding="0" cellspacing="0"  style="font-size: 13px;">
				<span cellpadding="0" cellspacing="0"  style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                    THE APPLE WAYS © <?php  echo date("Y"); ?> ALL Rights Reserved.
				</span></font>
			</td></tr>
		</table>
	</td></tr>
	<!--footer END-->
	<tr><td>

	</td></tr>
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->
s
</td></tr>
</table>
