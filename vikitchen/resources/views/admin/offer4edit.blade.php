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
<h3 class="box-title"> Details</h3>



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

<div class="form-group">
    <label>Insert Image</label>
<input type="file" accept="image/*" onchange="loadFile(event)" name="image" >
<img id="output" width="400px" height="200px" src="{{asset('uploads/offer/'.$myoffer->image)}}"/>

</div>

<?php $category= \App\Category::all();
// echo $mymenu[0]->menu_name; exit;?>

<div class="form-group  col-lg-12">
    <label for="cars">URL:</label>
    <input type="text" value="{{$myoffer->url}}" name="url" class="form-control " required>

</div>

</div><!-- /.box-body -->
<div class="form-group  col-lg-12">
<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
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
