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
</div>


<div class="form-group">
    <label for="cars">Name:</label>
<input type="text" value="" name="name" id="name"class="form-control " required    >

<div class="form-group">
    <label for="cars">
        Amount:</label>

<input type="text" value="" class="form-control " required name="amount"  id="amount" required>
</div>
<div class="form-group">
    <label for="cars">Max discount:</label>
<input type="text" value="" name="max_discount" class="form-control " id="max_discount" required>
</div>
<div class="form-group">
    <label for="cars">Discount percentage:</label>
<input type="text" value="" name="dis_percentage" class="form-control " required >
</div>
{{-- <div class="form-group">
<input type="checkbox" id="offers" name="offers" value="1"  class="form-control">
<label for="cars">:-> Just Arrived</label>
</div> --}}
<div class="form-group">
<input type="checkbox" id="active" name="active" value="1"  class="form-control">
<label for="cars">:-> Active</label>
</div>

{{-- <div class="form-group">
<input type="checkbox" id="bestselling" name="bestselling" value="1"  class="form-control">
<label for="cars">:-> Best Selling</label>
</div> --}}
{{--
<div class="form-group">
<input type="checkbox" id="home" name="home" value="1"  class="form-control">
<label for="cars">:-> Recommended Products </label>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


@endsection
