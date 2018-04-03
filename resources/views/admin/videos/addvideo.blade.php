@extends('admin.layouts.app')

@section('content')

<div class="page-header">
    <h1>
       Add a new YouTube Video Link
   </h1>
</div><!-- /.page-header -->
@include('flash::message')

<div class="row">
    <div class="col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Add a new YouTube video Link</h4>
                
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <form class="form-group" action="{{ url('/admin/videos/postaddvideo') }}" method="POST" enctype="mulvideoart/form-data">
                
                    {{ csrf_field() }}

	                    <div class="widget-body">
	                        <div class="widget-main">
	                                

	                            <label for="school-year"><strong>Title</strong></label>

	                            <div class="row">
	                                <div class="col-xs-8 col-sm-11">
	                                    <div class="input-group">
	                                        <input class="form-control" id="video_title" type="text" name="video_title" required="required" />
	                                        <span class="input-group-addon">
	                                            <i class="fa fa-pencil bigger-110"></i>
	                                        </span>
	                                    </div>
	                                </div>
	                            </div>

	                            <hr />

	                                         

	                            <label for="YouTube-Link"><strong>YouTube Link</strong></label>

	                            <div class="row">
	                                <div class="col-xs-8 col-sm-11">
	                              
	                                <textarea id="video_link" class="form-control" name="video_link"></textarea>
	                            </div>
	                            </div>

	                            <hr />

	                                            
	                            <div class="clearfix form-actions">
	                                <div class="col-md-offset-3 col-md-9">
	                                    
	                                    <input type="submit" value="Add video Link">

	                                    &nbsp; &nbsp; &nbsp;
	                                    <button class="btn" type="reset">
	                                        <i class="ace-icon fa fa-undo bigger-110"></i>
	                                        Reset
	                                    </button>
	                                </div>
	                            </div>
	                
	                        </div>
	                    </div>
                           
               	     </form>


                                    	  
                </div>
            </div>
        </div>
    </div>

</div>


<div class="hr hr-18 dotted hr-double"></div>
<br>

<div class="alert-danger">
	
		<ul>
			@foreach($errors->all() as $error)

				<li> {{ $error }}</li>

			@endforeach

		</ul>

</div>



@endsection


