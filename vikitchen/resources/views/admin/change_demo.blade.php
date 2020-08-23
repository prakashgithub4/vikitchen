
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
</div>
<div class="row col-lg-4">
</div>
<div class="row col-lg-4"  id="divtag">
    <h4 style="text-align: center;">Change Demo Size</h4>



<form action="{{ url()->current()}}" method="post">
    @csrf
    <div class="form-group">

    </div>
    <div class="form-group">
        <label for="cars">Size :</label>

    <select   name="product_size" class="form-control ">
        <option value=" ">Select size</option>
        <?php $size= \App\ProductSize::all();
        // echo $mymenu; ?>
     @foreach ($size as $cr )




       <option value="{{ $cr->product_size_id	}}"> {{  $cr->size	}} </option>

       @endforeach
    </select>

    </div>


<button type="submit" class="btn btn-success">Submit</button>
  </form>

</div>
@endsection
<script>
function addstock() {
    var stock= parseInt(document.getElementById('stock').value);
    var current=parseInt(document.getElementById('current').value);
    mystock= current- stock ;
   //alert(mystock);
   if( stock==''){
    document.getElementById('newstock').innerHTML=0;
   }
   else{
    document.getElementById('newstock').innerHTML=mystock;
   }


}



</script>
