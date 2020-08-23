@extends('layouts.admin')

@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
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
<form role="form" enctype="multipart/form-data" method="post" action="{{ url()->current()}}">
@csrf

<div class="box-body">

<div class="form-group">
    <label>Terms Of Use</label>
<textarea name="editor1" >{{$about->content  }}</textarea>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>

</div>




</div><!-- /.box-body -->

<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>



@endsection
