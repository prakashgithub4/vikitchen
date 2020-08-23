
@extends('layouts.admin')

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">COUPON LIST</h3>

    </div><!-- /.box-header -->
<div>
    <a href="{{url('admin/add-coupon')}}"  class="btn btn-success"  ><i class="fa fa-plus "><b> Add More</b></i> </a>

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
                    <th>Coupon Name</th>
                    <th>Amount</th>
                    <th>Max discount</th>

                    <th> discount Percentage</th>






                </tr>
            </thead>
            <tbody><?php $i=1; ?>
                @foreach ( $promo as  $sl)
                <tr>     <td>{{ $i++}}
                        </td>
                        <?php $parameter= encrypt($sl->promocode_id);?>
                    <td><a href="{{url('admin/coupon-edit',$parameter)}}"><i class="fa fa-pencil-square-o"></i></a>
                        &nbsp;
                            <a href="{{url('admin/coupon-delete',$parameter)}}" ><i class="fa fa-times-circle"></i></a>


                        </td>
                    <td>{{ $sl->name}}</td>
                    <td>{{ $sl->amount}}</td>
                    <td>{{ $sl->max_discount}}</td>
                    <td>{{ $sl->dis_percentage}}</td>




                </tr>
                @endforeach



            </tbody>

        </table>
    </div><!-- /.box-body -->
</div>
<?php
function shorten($strText,$strLenth)
{
	if(strlen($strText) > $strLenth)
	{
		return substr($strText,0,$strLenth) . "...";
	}
	else
	{
		return $strText . "...";
	}
}
?>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



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


