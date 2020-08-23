@extends('layouts.admin')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 <div class="box box-primary">


  <a href="{{url('admin/prdetials')}}"  class="btn btn-primary"  ><i class="fa fa-arrow-left "><b>  Main menu</b></i> </a>
  <a href="{{url('admin/prsizelist/'.$idd2)}}"  class="btn btn-primary"  ><i class="fa fa-arrow-left "><b> Back</b></i> </a>
<div class="box-header">
<h3 class="box-title"> Set/Edit the Price </h3>


<div class="row col-lg-12">
</div>
<!-- /.box-header -->
<!-- form start -->
<?php //////$encryptid=$offer[0]->offer_id;
       // $encryptid=encrypt($encryptid)?>
<form role="form" enctype="multipart/form-data" method="post" action="{{url()->current()}}">
@csrf

<div class="box-body ">

<div class="row">
    <div class=" row col-lg-1"  id="divtag">

    </div>
<div class=" row col-lg-3"  id="divtag">
    <?php $size_id= \App\ProductDetailSize::find($size_id);?>









</div>
</div>

<div class="row">

<div class=" row col-lg-3"  id="divtag">




<div class="form-group">
    <label for="cars">Price:</label>
<input type="text"  name="txt_price" id="txt_price"class="form-control "  value="{{$size_id->price}}"   onkeyup="return gst_cal(),chk_discount()" onkeypress="return isNumberKey(event)" >

<div class="form-group">
    <label for="cars">Discount (%):</label>

<input type="number" value="{{$size_id->discount}}" class="form-control " required name="txt_discount"  id="txt_discount"   onkeyup="return chk_discount(),gst_cal()" onkeypress="return isNumberKey(event)">
</div>
<div class="form-group">
    <label for="cars">Actual Price:</label>
<input type="text" value="{{$size_id->actual_price}}" name="actual_price" class="form-control " id="txt_actual_price" readonly>
</div>
<div class="form-group">
    <label for="cars">Delivery Charge:</label>
<input type="text" value="{{$size_id->delivery_charge}}" name="delivery_charge" class="form-control " required  onkeypress="return isNumberKey(event)">
</div>






</div>

 <div  class="form-group"></div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>


</div>
</div><!-- /.box-body -->
</div>
<div class="box-footer">

</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




<script>

    $(document).ready(function(){

$('.newdynamic').change(function(){

  var select = $(this).attr("id");

  var cat_id = $(this).val();
 alert(cat_id);
//   $.get('ajaxdata?cat_id=' + cat_id, function(data){
// //console.log(data);
// $('#undercat').empty();
// $.each(data, function(index, subcat){
// $('#undercat').append('<option value="'+subcat.product_name_id'">'+subcat.product_name+'</option>')

// });
//  });
 $.ajax({
             url: "{{ url('admin/ajaxdata') }}",
             method: 'get',
             data: {
                cat_id: cat_id

             },

             success: function(data){
                // alert(data);
             // var perform= data.changedone;
             $('#undername').empty();
             $('#undername').html(data);
              //  alert(perform.product_name);
               // jQuery('.alert').html(result.success);
             }

             });



});
});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

</script>

<script>

    $(document).ready(function(){

$('.dynamic').change(function(){

  var select = $(this).attr("id");

  var cat_id = $(this).val();
//  alert(cat_id);
//   $.get('ajaxdata?cat_id=' + cat_id, function(data){
// //console.log(data);
// $('#undercat').empty();
// $.each(data, function(index, subcat){
// $('#undercat').append('<option value="'+subcat.product_name_id'">'+subcat.product_name+'</option>')

// });
//  });
 $.ajax({
             url: "{{ url('admin/menudata') }}",
             method: 'get',
             data: {
                cat_id: cat_id

             },

             success: function(data){
             // var perform= data.changedone;
             //alert(data);
             $('#undercat').empty();
             $('#undercat').html(data);
              //  alert(perform.product_name);
               // jQuery('.alert').html(result.success);
             }

             });



});
});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

</script>
<script type="text/javascript">
function gst_cal()
{
	var price=document.getElementById('txt_price').value;
	var gst=document.getElementById('txt_gst').value;
	var gst1=parseFloat(100)+parseFloat(gst);
	var ex_price=parseFloat(price-(price*(100/gst1)));
	document.getElementById('txt_price_ex_gst').value=parseFloat(price-ex_price).toFixed(0);
	document.getElementById('txt_price_gst').value=parseFloat(ex_price).toFixed(0);
}

function chk_discount()
{
	var price=document.getElementById('txt_price').value;
	var discount=document.getElementById('txt_discount').value;
	var dis_amt=parseFloat((price*discount)/100).toFixed(0);
	var actual_price=parseFloat(price-dis_amt).toFixed(0);
	document.getElementById('txt_actual_price').value=actual_price;

	var price_ex_gst=document.getElementById('txt_price_ex_gst').value;
	var ex_dis_amt=parseFloat((price_ex_gst*discount)/100).toFixed(0);
	var ex_actual_price=parseFloat(price_ex_gst-ex_dis_amt).toFixed(0);
	document.getElementById('txt_ex_discount_gst').value=ex_dis_amt;
	document.getElementById('txt_actual_price_ex_gst').value=parseFloat(ex_actual_price).toFixed(0);

	var price_gst=document.getElementById('txt_price_gst').value;
	var dis_gst_amt=parseFloat((price_gst*discount)/100).toFixed(0);
	var dis_gst_price=parseFloat(price_gst-dis_gst_amt).toFixed(0);
	document.getElementById('txt_discount_gst').value=dis_gst_amt;
	document.getElementById('txt_actual_price_gst').value=parseFloat(dis_gst_price).toFixed(0);

}
</script>


@endsection
