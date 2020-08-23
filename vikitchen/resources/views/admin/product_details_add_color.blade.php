
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Add Product Color</h3>

    </div><!-- /.box-header -->
    <div><?php  $mpr= Crypt::encrypt($details_id); ?>
        <a href="{{url('admin/prdetials')}}"  class="btn btn-success"  ><i class="fa fa-arrow-left "><b> Main Menu</b></i> </a>
        <a href="{{url('admin/prcolorlist',$mpr)}}"  class="btn btn-success"  ><i class="fa fa-arrow-left "><b> Back to List</b></i> </a>

    </div>

    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
  <form enctype="multipart/form-data" method="post" action="{{url()->current()}}" >
  <div class="row">

    <div class="box-body table-responsive">

        <table id="example" class="table table-bordered table-striped">

                @csrf

            <thead>
                <tr>
                    <th  >SL</th>
                    <th>Action</th>
                    <th >Product Color Name</th>
                    <th >Product color</th>








                </tr>
            </thead>

            <tbody><?php $i=1; ?>
                @foreach ( $prdcolor as  $cr)
                <?php
                $color=\App\ProductColor::where('product_colour_id',$cr->product_colour_id)->get();
               // $product_id;?>
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($cr->product_details_colour_id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                    <input type="checkbox" name="services[]" value="{{$color[0]->product_colour_id}}"/>




                        </td>
                        <td>

                           {{ $color[0]->product_colour }}
                        </td>

                        <td><span id="colorid" style="  background-color: <?php echo $color[0]->product_colour_code ?>;
                            width: 400px;
                              height:200px;

                            border: solid <?php  echo $color[0]->product_colour_code ?>;"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </td>




                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
    <div  class="form-group"></div>
    <div class="row col-lg-4"></div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>

</div>

@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>


