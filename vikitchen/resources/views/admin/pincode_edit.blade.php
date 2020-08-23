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
<h3 class="box-title"> Edit Details</h3>


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




<div class="form-group">
    <label for="cars">Pin code:</label>
<input type="text" name="pincode" class="form-control "   value="{{$pin->pin}}">
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
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection
