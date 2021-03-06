<!DOCTYPE html>
<html lang="en">
<head>
  <title>See Company Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Select Companies</h2>
  <form action="/seeproducts" method="post">
    @csrf
  
   <div class="form-group">
    <label for="cars">Select a Company:  {{$id}}</label>

<select id="cars" name="company_id">

  @foreach($company as $comp)
   
  <option value="{{$comp->id}}" {{ ( $comp->id == $id) ? 'selected' : '' }} >{{$comp->name}}</option>
  
 @endforeach
</select>
</div>
    <button type="submit" class="btn btn-default">See Products</button>
  </form>
</div>
<div class="container">
  <h2>Product lists</h2>

  <table class="table">
    <thead>
      <tr>
        <th>Check box</th>
        <th>Name</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($product as $pro)
      <tr>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">

        <td>{{$pro->name}}</td>
       
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
</body>
</html>
