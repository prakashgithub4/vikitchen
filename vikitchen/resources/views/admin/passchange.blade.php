
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
    <h4 style="text-align: center;">Change Password</h4>
<form action="{{ url()->current()}}" method="post">
    @csrf

    <div class="form-group">


    <label for=" cur password">Your Current Password</label>
      <input type="password" class="form-control" id="email" placeholder="Enter the Current Password" name="cur_pass">
    </div>
    <div class="form-group">
        <label for="new password">Your New Password</label>
        <input type="password" class="form-control" id="email" placeholder="Enter the New Password" name="new_pass">
      </div>
    <input type="hidden" name="ses_id" value="{{ Auth::user()->id}}">
       <div class="form-group">
        <label for="cnf password">Confirm New Password</label>
        <input type="password" class="form-control"  placeholder="Confirm New Password" name="cnf_pass">
      </div>


    <button type="submit" class="btn btn-success">Submit</button>
  </form>

</div>
@endsection
