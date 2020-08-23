
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
    <h4 style="text-align: center;">Add Stock</h4>



<form action="{{ url()->current()}}" method="post">
    @csrf
    <div class="form-group">
   <center>  <h4>  [Current Stock: {{$stock}}] </h4></center>
    </div>
<div class="form-group">
    <label for="new password">Add more:</label>
<input type="hidden" id="current" value="{{$stock}}">
    <input type="number" class=""  name="inhand" id="stock" onkeyup="return addstock()">

  </div>

<p>Total: <span id="newstock">0</span></p>
<button type="submit" class="btn btn-success">Submit</button>
  </form>

</div>
@endsection
<script>
function addstock() {
    var stock= parseInt(document.getElementById('stock').value);
    var current=parseInt(document.getElementById('current').value);
    mystock= stock + current;
   //alert(mystock);
   if( mystock==null){
    document.getElementById('newstock').innerHTML=0;
   }
   else{
    document.getElementById('newstock').innerHTML=mystock;
   }


}



</script>
