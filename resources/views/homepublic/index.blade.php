@extends('homepublic.layouts.app')
@section('content')		
		<!-- Outer Starts -->
		<div class="outer">
			
		@include('homepublic.layouts.header')
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Revolution slider full width starts -->
				@include('homepublic.layouts.slider')
				
				<!-- Revolution slider full width ends -->
			
				<div class="container">
					
					<br />
					<div class="text-center">
						<h3><span class="color">Ebele</span> is a versatile, creative and innovative <span class="color">musician</span>.</h3>
						<p>and personal development coach. She believes in the power of music and its ability <br /> to induce progressive positive transformation in an individual.</p>
					</div>
					
					<div class="divider-1"></div>
					
					<!-- Image Box #3 Starts -->
		
					<div class="img-box-3 text-center">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- Image Box #3 Item -->
								<div class="img-box-3-item">
									<div class="img-box-3-icon bg-red">
										<a href="https://www.reverbnation.com/ebeletheflutist" target="_blank"><img src="{{asset('brave/img/flat-icons/ebeletheflutist_audios.png')}}" alt="" class="img-responsive" /></a>
									</div>
									<h4><a href="https://www.reverbnation.com/ebeletheflutist" target="_blank">Audios</a></h4>
									<div class="bor bg-red"></div>
									<p>We are number 9 on the ReverbNation Christian/Gospel charts for Abuja, Nigeria! </p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Image Box #3 Item -->
								<div class="img-box-3-item">
									<div class="img-box-3-icon bg-lblue">
										<a href="#"><img src="{{asset('brave/img/flat-icons/ebeletheflutist_videos.png')}}" alt="" class="img-responsive" /></a>
									</div>
									<h4><a href="#">Videos</a></h4>
									<div class="bor bg-lblue"></div>
									<p>Visit our youtube chanel for inspirational and mind lifting music videos and perfomences.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Image Box #3 Item -->
								<div class="img-box-3-item">
									<div class="img-box-3-icon bg-green">
										<a href="#"><img src="{{asset('brave/img/flat-icons/ebeletheflutist_lyrics.png')}}" alt="" class="img-responsive" /></a>
									</div>
									<h4><a href="#">Lyrics</a></h4>
									<div class="bor bg-green"></div>
									<p>Interested in Learning the Lyrics? Check our Lyrics page out and sign along with Ebele.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- Image Box #3 Item -->
								<div class="img-box-3-item">
									<div class="img-box-3-icon bg-blue">
										<a href="#"><img src="{{asset('brave/img/flat-icons/ebeletheflutist_training.png')}}" alt="" class="img-responsive" /></a>
									</div>
									<h4><a href="#">Taining</a></h4>
									<div class="bor bg-blue"></div>
									<p>We provide music and flute training for companies and individuals - inhouse or remotely.  </p>
								</div>
							</div>
						</div>	
					</div>
					
					<!-- Image Box #3 Ends -->
					
										
					<div class="block-heading-two">
						<h3><span><a href="{{url('/musicflutetrainingtipsbyebele')}}">#MusicFluteTrainingTipsByEbele</a></span></h3>
					</div>					
					
					<div class="img-box-4 text-center">
						<div class="row">
							@foreach($tips->take(8) as $tip)
							<div class="col-md-3">
								<!-- Image Box #4 Item -->
								<div class="img-box-4-item">
									<!-- Image -->
									<a href="{{ url('/musicflutetrainingtipsbyebeletip/'.$tip->id)}}"><img src="{{asset('/tips/images/'.$tip->tip_image )}}" alt="" class="img-responsive" /></a>
									<!-- Image Box #4 Content -->
									<div class="img-box-4-content">
										<!-- Icon -->
										<a href="{{url('/musicflutetrainingtipsbyebeletip/'.$tip->id)}}"><i class="fa fa-picture-o bg-red"></i></a>
										<!-- Heading -->
										<h4><a href="{{ url('/musicflutetrainingtipsbyebeletip/'.$tip->id)}}"> {{$tip->tip_title}} </a></h4>
										<!-- Border -->
										<div class="bor bg-red"></div>
										<!-- Paragraph -->
										<!--<p>{!! $tip->tip_body !!} </p>-->
									</div>
								</div>
							</div>
							@endforeach
							
							</div>
						</div>
					</div>
					
					
					
				</div>
				
				<br /><br />
				
				<div class="quote-two">
					<!-- Container -->
					<div class="container">
						<!-- Quote Two Content -->
						<div class="quote-two-content">
							<span>&#8220;</span>
							<div class="owl-carousel" data-items="1" data-auto-play="true" data-pagination="true" data-single-item="true">
								<!-- Item -->
								<div class="item">
									<h3>Ebele was exposed to music as a little child and she learnt rudiments of music at a very early stage of her life.</h3>
								</div>
								<div class="item">
									<h3>Ebele was 14yrs old when she got her first flute as a gift from her Dad.</h3>
								</div>
								<div class="item">
									<h3>Music was initially to her a hobby, then it became a passion. Now music is more than a career to Ebele, it is her life’s story.</h3>
								</div>
							</div>
						</div>
					</div>					
				</div>
				
				<br />
				
				<div class="container">
				
					<!-- Block heading two -->
					<div class="block-heading-two">
						<h3><span>Brand Personality</span></h3>
					</div>	
					
					<div class="row">
						<div class="col-md-7 col-sm-6">
							<p class="para-big">The Ebele brand is active, youthful and driven. I have a strong belief in God and His purpose for mankind and He takes utmost priority in all things. I believe that with His help, hard work and determination, all goals are achievable. So I am practical, and I do my best at every point in time to be articulate my versatility, creativity, intelligence and skill.</p>
							<p class="para-big">I am friendly, warm and extremely passionate about music. I am not a stereotype. I am very comfortable with change. I am always learning and always giving myself to what I believe in. I am I am principled, yet approachable, full of vigor yet collected. I am confident, articulate, fit and socially learned.</p>
						</div>
						<div class="col-md-5 col-sm-6 text-center">
							<a href="#"><img src="{{asset('brave/img/rev-slider/ebeletheflutist_13.png')}}" alt="" class="img-responsive" /></a>
						</div>
					</div>
					
					<br />
					<br />
				</div>
			</div>
			
			<!-- Main content ends -->
			
			@include('homepublic.layouts.footer')
		
		</div>
		
		<!-- Outer Ends -->	
@endsection	