@extends('layouts.admin')

@section('content')
<style>
    #divtag{
        border:2px opaque black ;
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: lightblue;

    }

</style>

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

    <div class="row col-lg-4">
    </div>
<div class=" row col-lg-4"  id="divtag">
    <?php $mymenu= \App\Menu::all();
    // echo $mymenu[0]->menu_name; exit;?>

<div class="form-group">
    <label for="cars">Product Menu:</label>

<select   name="menu_id"  class="form-control dynamic" id="category" >
    <option value=" ">Select Category</option>

    @foreach ($mymenu as $pr )

  <option value="{{ $pr->menu_id}}" >{{ $pr->menu_name}}</option>
  @endforeach
</select>
</div>

<div class="form-group">
    <label for="cars">Product Category:</label>

<select   name="product_category_id"  class="form-control " id="undercat" >
    <option value=" ">Select Category</option>

</select>
</div>




<div class="form-group">
    <label for="cars">Product Name:</label>
<input type="text" value="" name="product_name" class="form-control " required >
</div>


{{-- <div class="form-group">
    <label>Insert Image</label>
<input type="file" accept="image/*" onchange="loadFile(event)" name="image" >
<img id="output" width="400px" height="200px" src="{{asset('uploads/offer/side-banner-1.jpg')}}"/>

</div> --}}

{{-- <div class="form-group">
    <input type="checkbox" id="favourite" name="favourite" value="1"  class="form-control">
    <label for="cars">:-> Cutomer's favourite</label>
    </div>
    <div class="form-group">
        <input type="checkbox" id="toys" name="toys" value="1"  class="form-control">
        <label for="cars">:-> Toys</label>
        </div>

        <div class="form-group">
            <input type="checkbox" id="grooming" name="grooming" value="1"  class="form-control">
            <label for="cars">:-> Pet Grooming</label>
            </div> --}}


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
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>


@endsection
