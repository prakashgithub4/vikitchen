@extends('layouts.admin')

@section('content')

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
<h3 class="box-title"> Refund/Return Edit Details</h3>



</div><!-- /.box-header -->
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">

        <thead>
            <tr>
                <th> SL</th>

                <th>Prouct  Name</th>
                <th>Prouct  Image</th>
                <th>Quantity</th>
                <th>Price</th>

                <th> Delivery charge</th>






            </tr>
        </thead>
        <tbody><?php $i=1;
         $invoice= \App\Invoice::where('invoice_no_id',$return->invoice_no_id)->where('cancel',1)->get();
        $cart= \App\ProductCart::where('invoice_no_id',$invoice[0]->invoice_no_id)->where('cancel',1)->get();
        ?>
            @foreach ( $cart as  $sl)
            <tr>     <td>{{ $i++}}
                    </td>
<?php $product=\App\ProductDetails::where('product_id',$sl->product_id)->get();
 $image=\App\ProductDetailsImage::where('product_id',$sl->product_id)->get();  ?>
                <td>{{$product[0]->product_name}}</td>
                <td>   <img src="{{ asset('uploads/products/'.$image[0]->image)}}" alt="" height="100 px" width="100px"  /></td>
                <td>{{ $sl->qty}}</td>
                <td><?php echo $sl->qty.'X'.$sl->price.'='; ?> {{ $sl->qty*$sl->price}}</td>
                <td>{{ $sl->delivery_charge}}</td>




            </tr>
            @endforeach
        </tbody></table></div>
<!-- form start -->
<?php //////$encryptid=$offer[0]->offer_id;
       // $encryptid=encrypt($encryptid)?>
<form role="form" enctype="multipart/form-data" method="post" action="{{url()->current()}}">
@csrf
@if(session()->has('status'))
<div class="alert alert-success" role="alert">
    Hurray!! Image Uploaded  Successfully
  </div>
  @endif
<div class="box-body">
<h4> Product Recieved Date: {{$return->product_received_date}}</h4>
<div class="form-group col-lg-12"></div>

<div class="form-group col-lg-6">
    <label for="cars">Return Mode:</label>
<input type="text" value="REPLACEMENT" name="bank_name" class="form-control " disabled >
</div>
<div class="form-group col-lg-6">
    <label for="cars">Ammount:</label>
<input type="text" value="{{$return->amount}}" name="amount" class="form-control " disabled >
</div>






</div><!-- /.box-body -->

<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection
