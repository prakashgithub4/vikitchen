@extends('layouts.admin')

@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>

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
<!-- form start <a title="Payment" href="" target="">payment</a></h1> -->
<form role="form" enctype="multipart/form-data" method="post" action="{{ url()->current()}}">
@csrf
@if(session()->has('status'))
<div class="alert alert-success" role="alert">
    Hurray!! Image Uploaded  Successfully
  </div>
  @endif
<div class="box-body">

<div class="form-group">
    <label>About Us</label>
<textarea name="editor1" >{{$about->content  }}</textarea>


</div>

<!-- <div class="form-group">
    <label>Image</label>
<input type="file" accept="image/*" onchange="loadFile(event)" name="image" value="{{$about->image}}">

<img id="output" width="200px" height="200px" src="{{asset('uploads/about_us/'.$about->image)}}"/>

</div> -->


</div><!-- /.box-body -->

<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<script type="text/javascript">
  </script>
<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>


@endsection
