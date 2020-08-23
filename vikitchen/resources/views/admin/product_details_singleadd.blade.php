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
<h3 class="box-title">Add Image</h3>


<div class="row col-lg-12">
</div>
<!-- /.box-header -->
<!-- form start -->
<?php //////$encryptid=$offer[0]->offer_id;
       // $encryptid=encrypt($encryptid)?>
<form role="form" enctype="multipart/form-data" method="post" action="{{url('admin/prdetails_gallerylist/'.$id.'/'.$id2.'/'.$id3)}}">
@csrf

<div class="box-body ">

    <div class="row col-lg-4">
    </div>
<div class=" row col-lg-4"  id="divtag">




    <div class="form-group">
        <label>Insert Image</label>
    <input type="file" accept="image/*" onchange="loadFile(event)" name="image">
    <img id="output" width="380px" height="200px" src="{{asset("uploads/icon/addimg.png")}}"/>

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


@endsection
<script>

var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};

</script>
