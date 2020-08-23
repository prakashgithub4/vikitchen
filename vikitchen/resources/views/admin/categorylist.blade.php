
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Category List</h3>

    </div><!-- /.box-header -->
    <div>
        <a href="{{url('admin/catadd')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

    </div>

    @if(session()->has('newstat'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Deleted Successfully!
      </div>

  @endif
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>SL</th>
                    <th width="15">Action</th>
                    <th>Menu</th>
                    <th>Product Category </th>





                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $category as  $cr)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($cr->product_category_id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                        <a href="{{url('admin/catedit',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                        <a href="{{url('admin/deletecat',$parameter)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>
                          <td>
                              <?php  $mymenu=\App\Menu::find($cr->menu_id);?>
                              {{ $mymenu->menu_name }}
                        </td>
                        <td>{{ $cr->product_category }}
                        </td>


                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
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


