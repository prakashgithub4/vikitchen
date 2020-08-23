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
<h3 class="box-title">Add Slider Details</h3>



</div><!-- /.box-header -->
<!-- form start -->
<form role="form" enctype="multipart/form-data" method="post" action="{{ url()->current()}}">
@csrf
@if(session()->has('status'))
<div class="alert alert-success" role="alert">
    Hurray!! Image Uploaded  Successfully
  </div>
  @endif
<div class="box-body">

  <div class="form-group">
      <label>Insert Image</label>
  <input type="file" accept="image/*" onchange="loadFile(event)" name="image">
  <img id="output" width="400px" height="200px" src="{{asset("noimg.jpg")}}"/>

  </div>
<div class="form-group">
    <label for="cars">Select Sequence:</label>

<select   name="sequence" >
    <option value=" ">Select Sequence</option>

 @for ($myslide =1 ; $myslide <=10 ; $myslide++)



  <option value="{{$myslide}}" >{{$myslide}}</option>
  @endfor
</select>
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
