
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Offer 4 Panel Details</h3>

    </div><!-- /.box-header -->

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
                    <th >Image</th>


                    <th width="100">Url</th>



                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $offer as  $ol)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php
                          $parameter= Crypt::encrypt($ol->offer_id);
                         // $parameter= encrypt($ol->offer_id);?>
                    <td>
                        <a href="{{url('admin/off4edit',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>



                        </td>
                    <td>
                        <img src="{{ asset('uploads/offer/'.$ol->image)}}" alt="" height="100 px" width="100px"  />
                        </td>

                        <td>{{ $ol->url }}</td>
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


