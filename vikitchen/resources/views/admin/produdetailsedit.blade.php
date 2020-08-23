@extends('layouts.admin')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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

<div class="row">
    <div class=" row col-lg-1"  id="divtag">

    </div>
<div class=" row col-lg-3"  id="divtag">




<?php $mymenu= \App\Menu::all();
// echo $mymenu[0]->menu_name; exit;?>
<div class="form-group">
    <label for="cars">Product Menu:</label>

<select   name="menu_id"  class="form-control dynamic" id="category" >
    <option value=" ">Select Menu</option>

    @foreach ($mymenu as $pr )

  <option value="{{ $pr->menu_id}}" {{ ( $prdetails->menu_id == $pr->menu_id) ? 'selected' : '' }}>{{ $pr->menu_name}}</option>
  @endforeach
</select>
</div>

<div class="form-group">
    <label for="cars">Product Category:</label>
    <?php $category= \App\Category::all();
    // echo $mymenu; ?>
<select   name="product_cat_id"  class="form-control newdynamic" id="undercat" >
    @foreach ($category as $cr )




<option value="{{ $cr->product_category_id	}}" {{ ( $prdetails->product_category_id == $cr->product_category_id) ? 'selected' : '' }}> {{  $cr->product_category	}} </option>

@endforeach

</select>
</div>

<div class="form-group">
    <label for="cars">Product Name:</label>
    <?php // $mymenu=\App\Menu::find($cr->menu_id);
    $productname=\App\Productname::where('product_category_id',$prdetails->product_category_id)->get();
   // $product_id;?>

<select   name="product_name_id"  class="form-control " id="undername"  >
    <option value=" ">Select Name</option>
    @foreach ($productname as $prn )
<option value=" {{$prn->product_name_id }}"  {{ ( $prdetails->product_name_id == $prn->product_name_id) ? 'selected' : '' }} >{{$prn->product_name}}</option>

    @endforeach

</select>
</div>

<?php // $mymenu=\App\Menu::find($cr->menu_id);
    //$brand=\App\Brand::where('id',$prdetails->brand_id)->get();
    $mybrand=\App\Brand::all();
   // $product_id;?>
<div class="form-group">
    <label for="cars">Select Brand:</label>

<select   name="brand_id"  class="form-control "  >
    <option value=" ">Chooose Brand...</option>

    @foreach ($mybrand as $br )

  <option value="{{ $br->id }}" {{ ( $prdetails->brand_id == $br->id) ? 'selected' : '' }} >{{ $br->brand_name}}</option>
  @endforeach
</select>
</div>

<div class="form-group">
    <label for="cars">Product Details Name:</label>
<input type="text" value="{{$prdetails->product_name}}" name="product_name" class="form-control " required >
</div>
</div>
</div>
<div class="row">
    <div class=" row col-lg-1"  id="divtag">

    </div>
<div class="row col-lg-11">
<div class="form-group">

    <label>Descriptions</label>
<textarea name="description" >{{$prdetails->description}}</textarea>
    <script>
            CKEDITOR.replace( 'description' );
    </script>

</div>
</div>

</div>
<div class="row">
    <div class=" row col-lg-1"  id="divtag">

    </div>
<div class=" row col-lg-3"  id="divtag">




<div class="form-group">
    <label for="cars">Price:</label>
<input type="text" value="{{$prdetails->price}}" name="txt_price" id="txt_price"class="form-control " required   onkeyup="return gst_cal(),chk_discount()" onkeypress="return isNumberKey(event)" >

<div class="form-group">
    <label for="cars">Discount (%):</label>

<input type="number" value="{{$prdetails->discount}}" class="form-control " required name="txt_discount"  id="txt_discount"   onkeyup="return chk_discount(),gst_cal()" onkeypress="return isNumberKey(event)">
</div>
<div class="form-group">
    <label for="cars">Actual Price:</label>
<input type="text" value="{{$prdetails->actual_price}}" name="actual_price" class="form-control " id="txt_actual_price" readonly>
</div>
<div class="form-group">
    <label for="cars">Delivery Charge:</label>
<input type="text" value="{{$prdetails->delivery_charge}}" name="delivery_charge" class="form-control " required  onkeypress="return isNumberKey(event)">
</div>
{{-- <div class="form-group">
    @if($prdetails->offers==1)
<input type="checkbox" id="offers" name="offers" value="1"  class="form-control" checked>
    @else
 <input type="checkbox" id="offers" name="offers" value="1"  class="form-control">
    @endif
<label for="cars">:-> Offers</label>
</div> --}}
<div class="form-group">
    @if($prdetails->feature_products==1)
    <input type="checkbox" id="featured" name="featured" value="1"  class="form-control" checked>
    @else
    <input type="checkbox" id="featured" name="featured" value="1"  class="form-control">
    @endif

<label for="cars">:-> Featured Product</label>
</div>

{{-- <div class="form-group">
    @if($prdetails->best_selling==1)
    <input type="checkbox" id="bestselling" name="bestselling" value="1"  class="form-control" checked>
    @else
    <input type="checkbox" id="bestselling" name="bestselling" value="1"  class="form-control">
    @endif --}}

{{-- <label for="cars">:-> Best Selling</label>
</div>

<div class="form-group">
    @if($prdetails->home==1)
<input type="checkbox" id="home" name="home" value="1"  class="form-control" checked>
@else
<input type="checkbox" id="home" name="home" value="1"  class="form-control">
@endif
<label for="cars">:-> Show In Home Page</label>
</div> --}}
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

<script>


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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




<script>

    $(document).ready(function(){

$('.newdynamic').change(function(){

  var select = $(this).attr("id");

  var cat_id = $(this).val();
// alert(cat_id);
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

</script>
@endsection
