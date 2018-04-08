@extends('homepublic.layouts.app')
@section('content')		
					
		@include('homepublic.layouts.header')
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>About Ebele The Flutist <span></span></h2>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->
			
				<div class="container">
					
					<div class="row">

						<div class="col-md-6 col-sm-6">
							
							<div class="image-style-seven">
								<!-- Image -->
								
								<iframe  width="100%" height="315" src="https://www.youtube.com/embed/YCSRSe6nPY8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
							</div>
							
							<!-- Heading -->
							<div class="block-heading-two">
								<h3><span>Intro Video</span></h3>
							</div>
						
						</div>
						<div class="col-md-6 col-sm-6">
							
							<div class="image-style-seven">
								<!-- Image -->
								<iframe  width="100%" height="315" src="https://ebeletheflutist.com/training/videos/rudiment_of_music.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
							</div>
							
							<!-- Heading -->
							<div class="block-heading-two">
								<h3><span>Rudiments Of Music part 1</span></h3>
							</div>
						
						</div>
					@foreach($videos as $video)
					
						<div class="col-md-6 col-sm-6">
							
							<div class="image-style-seven">
								<!-- Image -->
								
								<iframe  width="100%" height="315" src="{{$video->video_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
							</div>
							
							<!-- Heading -->
							<div class="block-heading-two">
								<h3><span>{{$video->video_title}}</span></h3>
							</div>
						
						</div>
					@endforeach
						
					</div>
					

									
				</div>
			</div>
			
			@include('homepublic.layouts.footer')
		
		</div>
		
		<!-- Outer Ends -->	
@endsection	