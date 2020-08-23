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


    <?php $mymenu= \App\Menu::find($category->menu_id);
   // echo $mymenu; ?>


<div class="form-group">
    <label for="cars">Menu:</label>

<select   name="menu_id" class="form-control ">

@foreach ($menu as $my )


   <option value="{{$my->menu_id}}" {{ ( $category->menu_id == $my->menu_id) ? 'selected' : '' }}> {{ $my->menu_name }} </option>

   @endforeach
</select>

</div>

    <div class="form-group">

<div class="form-group">
    <label for="cars">Product Category:</label>
<input type="text" value="{{$category->product_category}}" name="product_category" class="form-control " required >
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
