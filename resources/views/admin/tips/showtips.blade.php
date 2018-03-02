@extends('admin.layouts.app')

@section('content')

<div class="page-header">
    <h1>
        Tips By Ebele
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            The table below lists all the tips base on date uploaded.
        </small>
    </h1>
</div><!-- /.page-header -->




<!-- PAGE CONTENT BEGINS -->
<div class="row">
    
    <div class="col-xs-6">
        <div class="pull-left">
            <button class="btn btn-success"><a href="{{url('admin/tips/addtip')}}">Add a New Tip</a></button>
        </div>
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>File</th>
                <th>Date Posted</th>
                <th>Action</th>
            </thead>

            <tbody>
               @foreach ($tips as $key=>$tip)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tip->tip_title }}</td>
                    <td>{{ $tip->tip_image }}</td>
                    <td>{{ $tip->created_at }}</td>
                    <td>
                        <div class="hidden-sm hidden-xs btn-group">
                            
                            <button class="btn btn-xs btn-info">
                                <a href="{{url('admin/tips/edittip/'.$tip->id)}}"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
                            </button>

                            <button class="btn btn-xs btn-danger">
                                <a href="{{url('admin/tips/deletetip/'.$tip->id)}}" onclick="return confirm('Are you sure you want to Delete this record?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>
                            </button>

                        </div>
                    </td>
                </tr>
               @endforeach

            </tbody>
        </table>
    </div><!-- /.span -->
</div><!-- /.row -->

@endsection


