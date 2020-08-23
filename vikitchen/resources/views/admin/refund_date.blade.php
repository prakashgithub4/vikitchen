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
<h3 class="box-title"> Refund/Return Edit Details</h3>



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
<h4> Set Product Recieved Date</h4>
<div class="form-group col-lg-12"></div>


<div class="form-group col-lg-6">
    <label for="cars">Set Recieve Date:</label>
<input type="date"  name="product_received_date" class="form-control "  >
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
