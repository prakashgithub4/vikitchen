
@extends('layouts.admin')

@section('content')


  <form action="/product" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Product name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter the name of the product" name="name">
    </div>
   <div class="form-group">
    <label for="cars">Choose a Company:</label>

<select id="cars" name="product_id">
  @foreach($company as $comp)
  <option value="{{$comp->id}}" >{{$comp->name}}</option>
 @endforeach
</select>
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>


@endsection
