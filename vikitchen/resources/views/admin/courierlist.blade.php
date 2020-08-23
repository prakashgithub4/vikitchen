
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Courier List</h3>

    </div><!-- /.box-header -->
    <div>
        <a href="{{url('admin/addcourier')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

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
                    <th > Courier Name</th>
                    <th>Address </th>
                    <th>Contact Person </th>
                    <th width="100">Contact Person </th>
                    <th width="100">Email</th>
                    <th width="100">Website</th>



                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $courier as  $cr)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($cr->courier_services_id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                        <a href="{{url('admin/courieredit',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                        <a href="{{url('admin/deletecourier',$parameter)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>
                          <td>
                            {{ $cr->courier_services_name }}
                        </td>
                        <td>{{ $cr->address }}
                        </td>
                        <td>{{ $cr->contact_person_name }}</td>
                        <td>{{ $cr->contact_no }}</td>
                        <td>{{ $cr->email }}</td>
                        <td>{{ $cr->website }}</td>
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


