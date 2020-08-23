
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Slider List</h3>

    </div><!-- /.box-header -->
<div>
    <a href="{{url('admin/addslide')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

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
                    <th> SL</th>
                    <th> Action</th>
                    <th>Image</th>
                    <th>Sequence</th>



                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $slider as  $sl)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $parameter= encrypt($sl->slider_id);?>
                    <td><a href="{{url('admin/sledt',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                            <a href="{{url('admin/sldlt',$parameter)}}" ><i class="fa fa-times-circle"></i></a> 


                        </td>
                    <td><img src="{{ asset('uploads/slider/'.$sl->image)}}" alt="" height="100 px" width="100px"  />
                        </td>
                        <td>{{$sl->sequence}}
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


