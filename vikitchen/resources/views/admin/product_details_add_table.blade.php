
@extends('layouts.admin')

@section('content')
<style>
    #divtag{
        /* border:2px opaque black ; */
        padding-top: 25;
        padding-bottom: 25px;
        text-align: center;
        background-color: lightblue;

    }

</style>


<div class="box">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
    <form enctype="multipart/form-data" method="post" action="{{url()->current()}}" >
    <div class="box-header">
        <h3 class="box-title">Add Product Size</h3>

    </div><!-- /.box-header -->
    <div class="container" id=""><?php  $mpr= Crypt::encrypt($product_id); ?>
        <a href="{{url('admin/prdetials')}}"  class="btn btn-primary"  ><i class="fa fa-arrow-left "><b> Main Menu</b></i> </a>
        <a href="{{url('admin/prsizelist',$mpr)}}"  class="btn btn-primary"  ><i class="fa fa-list"><b>  Back to List  </b></i>     </a>

    </div>

    <div class="container">
        <div class="row" >
            <div class="form-group">
                <div class="col-lg-4"></div>


                   <!-- <div class="col-lg-3">
                        <label for="cars">Add Stock:</label>
                        <?php  //$prcolor= \App\ProductColor::all();?>
            <input type="text"   name="stock" class="form-control" required  >


                </div>-->
                <div class="col-lg-3">
                    <label for="cars">Choose  Color:</label>
                    <?php
                      $prc=\App\ProductDetailsColor::where('product_id', $product_id)->get();
                    ?>
            <select   name="product_colour_id" class="form-control"  >

            <option value=" ">Select Color</option>

            @foreach ( $prc as $pr )

            <?php $pr->product_color_id?>

<?php  $color= \App\ProductColor::where('product_colour_id',$pr->product_colour_id)->get(); ?>

            <option value="{{$color[0]->product_colour_id}}" ><?php echo $color[0]->product_colour; ?></option>
<?php ?>
            @endforeach
            </select>
            </div>

            </div>


        </div>
      </div>


  <div class="row" >


    <div class="box-body table-responsive">

        <table id="example" class="table table-bordered table-striped">

                @csrf

            <thead>
                <tr>
                    <th  >SL</th>
                    <th>Action</th>
                    <th >Product Size</th>
                    {{-- <th >Quantity In Hand</th> --}}








                </tr>
            </thead>

            <tbody><?php $i=1; ?>
                @foreach ( $prd_size as  $cr)
                <?php
               // $color=\App\ProductColor::where('product_colour_id',$cr->product_colour_id)->get();
               // $product_id;?>
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($cr->product_size_id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                    <input type="checkbox" name="services[]" value="{{$cr->product_size_id}}"/>




                        </td>
                        <td>

                           {{ $cr->size }}
                        </td>

                        {{-- <td><input type="text" name="quantity[]" class=""/>

                        </td> --}}




                </tr>
                @endforeach



            </tbody>

        </table>

    </div><!-- /.box-body -->
    <div  class="form-group">

    </div>
    <div class="row col-lg-4"></div>
    <button type="submit" class="btn btn-success"> Submit  <i class="fa  fa-rocket"></i> </button>
    </div>
</form>
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


