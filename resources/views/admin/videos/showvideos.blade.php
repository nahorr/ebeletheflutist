@extends('admin.layouts.app')

@section('content')

<div class="page-header">
    <h1>
        Training Videos
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            The table below lists all the youtube video links base on date link was added.
        </small>
    </h1>
</div><!-- /.page-header -->




<!-- PAGE CONTENT BEGINS -->
<div class="row">
    
    <div class="col-xs-10">
        <div class="pull-left">
            <button class="btn btn-success"><a href="{{url('admin/videos/addvideo')}}">Add a New Video Link</a></button>
        </div>
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>YouTube Link</th>
                <th>Date Posted</th>
                <th>Action</th>
            </thead>

            <tbody>
               @foreach ($videos as $key=>$video)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $video->video_title }}</td>
                    <td>{{ $video->video_link }}</td>
                    <td>{{ $video->created_at }}</td>
                    <td>
                        <div class="hidden-sm hidden-xs btn-group">
                            
                            <button class="btn btn-xs btn-info">
                                <a href="{{url('admin/videos/editvideo/'.$video->id)}}"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
                            </button>

                            <button class="btn btn-xs btn-danger">
                                <a href="{{url('admin/videos/deletevideo/'.$video->id)}}" onclick="return confirm('Are you sure you want to Delete this record?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>
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


