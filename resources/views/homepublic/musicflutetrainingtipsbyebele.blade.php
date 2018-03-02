@extends('homepublic.layouts.app')

@section('content')		
		
	@include('homepublic.layouts.header')

			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>#MusicFluteTrainingTipsByEbele <span>Tips By Ebele</span></h2>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->

				
				<!-- Image Box #6 Starts -->
		
				<div class="img-box-6">
					<!-- Container -->
					<div class="container">
						<div class="row">
							@foreach($tips as $tip)
							<div class="col-md-4">
								<!-- Image Box #6 Item -->
								<div class="img-box-6-item">
									<!-- Image Box #6 Image -->
									<div class="img-box-6-img">
										<!-- Image -->
										<a href="{{url('/musicflutetrainingtipsbyebeletip/'.$tip->id)}}" ><img src="{{asset('/tips/images/'.$tip->tip_image )}}" alt="" class="img-responsive" /></a>
									</div>	
									<!-- Image Box #6 Content -->
									<div class="img-box-6-content">
										<h4><a href="{{url('/musicflutetrainingtipsbyebeletip/'.$tip->id)}}">{{$tip->tip_title}}</a></h4>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				
				<!-- Image Box #6 Ends -->
				
				<hr />


				
				<br />
				
			</div>
			
			<!-- Main content ends -->
			
		
	@include('homepublic.layouts.footer')
	
	
@endsection

