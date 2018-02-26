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
					
					<div class="about-us-two">
					
						<div class="block-heading-two">
							<h3><span>Ebele The Flutist</span></h3>
						</div>
						
						<div class="row">
							<div class="col-md-5 col-sm-8">
							
								<!-- Carousel -->
								<!-- Bootstrap carousel usage 
									Bootstrap carousel should have id. Below i am using "bs-carousel-X". Where "X" denotes number". If a page has more than 1 carousel, then add the new carousel with the id "bs-carousel-1", "bs-carousel-2". You also need to update the id in, "carousel indicators" section and "carousel control" section.  
									
									Carousel comes with 3 main data attributes which you can customize. They are...
									data-interval - Time delay between item cycle. Default value "5000".
									data-pause - Pause on hover. Default value "pause".
									data-wrap - Continues cycle or stop at the end. Default value "true".
								-->
							
								<!-- Outer layer -->
								<div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true">
									<!-- Bootstrap indicators. If you don't need indicators, remove the below section -->
									<ol class="carousel-indicators">
										<li data-target="#bs-carousel-1" data-slide-to="0" class="active"></li>
										<li data-target="#bs-carousel-1" data-slide-to="1"></li>
										<li data-target="#bs-carousel-1" data-slide-to="2"></li>
									</ol>
									<!-- Slides. You can also add captions -->
									<div class="carousel-inner">
										<!-- Item, First item should have extra class "active" -->
										<div class="item active">
											<!-- Image -->
											<img src="{{asset('brave/img/aboutus/about-office-1.jpg')}}" alt="">
										</div>
										<div class="item">
											<img src="{{asset('brave/img/aboutus/about-office-2.jpg')}}" alt="">
										</div>
										<div class="item">
											<img src="{{asset('brave/img/aboutus/about-office-3.jpg')}}" alt="">
										</div>
									</div>
									<!-- Carousel controls (arrows). If you don't need controls, remove the below section -->
									<a class="left carousel-control" href="#bs-carousel-1" role="button" data-slide="prev">
										<span class="fa fa-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#bs-carousel-1" role="button" data-slide="next">
										<span class="fa fa-chevron-right"></span>
									</a>
								</div>
								
							</div>	
							<div class="col-md-7 col-sm-12">
								<h4>Something About <span class="color">Brave</span></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut euismod sapien. Donec eu feugiat enim, sed tempus arcu. Pellentesque magna nisi, consectetur eget psum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent orci eros, rhoncus et neque sit amet, lobortis auctor libero.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut euismod sapien. Donec eu feugiat enim, sed tempus arcu. Pellentesque magna nisi, consectetur eget ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent orci eros, rhoncus et neque sit amet, lobortis auctor libero.</p>
								<ul class="list-2">
									<li>Denounce 1with rhoncus et neque sit ame righteous indignation</li>
									<li>Dislike so rhoncus et neque sit ame beguiled and demoralized</li>
									<li>The charms rhoncus et neque sit ame of pleasure of the moment</li>
									<li>That cannot rhoncus et neque sit ame foresee the pain trouble</li>
									<li>Dislike so rhoncus et neque sit ame beguiled and demoralized</li>
								</ul>
							</div>
						</div>
						
						<hr />
						
						<div class="block-heading-two">
							<h3><span>Our Service</span></h3>
						</div>						
						
						<div class="icon-box-4">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Icon Box Four Item -->
									<div class="icon-box-4-item">
										<!-- Icon -->
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-cog"></i> </a>
										<!-- Heading -->
										<h4><a href="#">Web Designing</a></h4>
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-road"></i>  </a>
										<h4><a href="#">Web Developing</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-qrcode"></i> </a>
										<h4><a href="#">Mobile Apps</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-tags"></i> </a>
										<h4><a href="#">UI Designing</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Icon Box Four Item -->
									<div class="icon-box-4-item">
										<!-- Icon -->
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-power-off"></i> </a>
										<!-- Heading -->
										<h4><a href="#">Web Designing</a></h4>
										<!-- Paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-map-marker"></i> </a>
										<h4><a href="#">Web Developing</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-umbrella"></i> </a>
										<h4><a href="#">Mobile Apps</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="icon-box-4-item">
										<a href="#" class="icon-box-4-icon bg-color"> <i class="fa fa-tint"></i> </a>
										<h4><a href="#">UI Designing</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing elit.</p>
									</div>
								</div>
							</div>
						</div>
						
						<hr />
						
												
						<hr />
						<br />
						
						<!-- Client Three Starts -->
						
						<h4 class="text-center">Our Clients</h4>
		
						<div class="client-three">
							<div id="owl-carousel" class="owl-carousel" data-items="5" data-auto-play="2500" data-pagination="false" data-single-item="false">
								<!-- Item -->
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-1.png" alt=""  class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-2.png" alt="" class="img-responsive" /></a>
								</div>
								<div class="c3-item">			
									<a href="#"><img src="img/clients/c2-3.png" alt="" class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-4.png" alt="" class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-5.png" alt=""  class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-6.png" alt="" class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-2.png" alt="" class="img-responsive" /></a>
								</div>
								<div class="c3-item">
									<a href="#"><img src="img/clients/c2-3.png" alt="" class="img-responsive" /></a>
								</div>
							</div>
						</div>
						
						<!-- client Three Ends -->
						
						<br />						
						
						<!-- CTA starts -->
						<div class="cta-two">
							<!-- CTA Two Content -->
							<div class="cta-two-content">
								<div class="row">
									<div class="col-md-8 col-sm-8">
										<!-- Heading -->
										<h4>Dignissimos ducimus qieouseform voluptae denoucsding</h4>
										<!-- Paragraph -->
										<p>On the other hand, we denounce with righteous  make of the   make of the indignation and dislike men who are so beguiled and demoaralized by the charmes or pleasure take of make charmes or pleasure of the moment.</p>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
										<!-- CTA Button -->
										<a class="btn btn-color btn-lg"><i class="fa fa-download"></i>&nbsp; Download Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- CTA ends -->
						
					</div>
									
				</div>
			</div>
			
			<!-- Main content ends -->
			
			@include('homepublic.layouts.footer')
		
		</div>
		
		<!-- Outer Ends -->	
@endsection	