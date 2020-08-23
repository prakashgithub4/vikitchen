@extends('layouts.admin')

@section('content')

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
<h3 class="box-title">  Courier  Edit Details</h3>



</div><!-- /.box-header -->
<!-- form start -->
<?php //////$encryptid=$offer[0]->offer_id;
       // $encryptid=encrypt($encryptid)?>
<form role="form" enctype="multipart/form-data" method="post" action="{{url()->current()}}">
@csrf
@if(session()->has('status'))
<div class="alert alert-success" role="alert">
    Hurray!! Image Uploaded  Successfully
  </div>
  @endif
<div class="box-body">

<div class="form-group col-lg-6">
    <label for="cars">Courier Service Name:</label>
<input type="text" value="{{$courier->courier_services_name}}" name="courier_services_name" class="form-control " required >
</div>
<div class="form-group col-lg-6">
    <label for="cars">Address:</label>
<input type="text" value="{{$courier->address}}" name="address" class="form-control " required >
</div>
<div class="form-group col-lg-6">
    <label for="cars">Contact Person Name:</label>
<input type="text" value="{{$courier->contact_person_name}}" name="contact_person_name" class="form-control " required >
</div>
<div class="form-group col-lg-6">
    <label for="cars">Contact No. :</label>
<input type="text" value="{{$courier->contact_no}}" name="contact_no" class="form-control " required >
</div><div class="form-group col-lg-6">
    <label for="cars">Email:</label>
<input type="email" value="{{$courier->email}}" name="email" class="form-control " required >
</div><div class="form-group col-lg-6">
    <label for="cars">Website:</label>
<input type="text" value="{{$courier->website}}" name="website" class="form-control "  >
</div>



</div><!-- /.box-body -->

<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection
