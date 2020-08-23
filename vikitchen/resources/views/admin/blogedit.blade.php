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
<h3 class="box-title">Update Pin</h3>



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

    <div class="row col-lg-4">
<div class="form-group" style="padding-top:50px;">
        <label for="cars">Title:</label>
<input type="text" value="{{$blog->pin}}" name="title" class="form-control " required >
    </div>
    </div>



        <div class="row col-lg-11">
<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
        </div>

</div><!-- /.box-body -->


</form>
</div>
<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection
