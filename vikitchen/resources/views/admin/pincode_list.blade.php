
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pincode List</h3>

    </div><!-- /.box-header -->
    <div>
        <a href="{{url('admin/pincode')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

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

                    <th>Product Category </th>





                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $pin as  $p)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($p->id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                        <a href="{{url('admin/pinedit',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                        <a href="{{url('admin/deletepin',$parameter)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>

                        <td>{{ $p->pin }}
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


