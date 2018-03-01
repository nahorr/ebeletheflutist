@extends('homepublic.layouts.app')

@section('content')		
		<!-- Outer Starts -->
		<div class="outer">
			
		@include('homepublic.layouts.header')

						<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>#MusicFluteTrainingTipsByEbele <span>Tips by Ebele</span></h2>
						<div class="breads">
							Home / <a href="#">Page</a> / <a href="#">Sub Page</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->
			
				<div class="container">
					
					<!-- blog two -->
					<div class="blog-two">
						<div class="row">
							<!-- Mainbar column -->
							<div class="col-md-8">
							
								<!-- Blog item starts -->
								<div class="blog-two-item">
									<!-- blog two Content -->
									<div class="blog-two-content">
										<!-- Heading -->
										<h3><a href="blog-single.html">5 TIPS TO INCREASE YOUR FLUTE FINGERING</a></h3>
										<!-- Blog meta -->
										<div class="blog-meta">
											<!-- Date -->
											<a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp; 
											<!-- Author -->
											<a href="#"><i class="fa fa-user"></i> &nbsp; Ebele</a> &nbsp;
											
										</div>
										
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
											
											<!-- Slides. You can also add captions -->
											<div class="carousel-inner">
												<!-- Item, First item should have extra class "active" -->
												<div class="item active">
													<!-- Image -->
													<img src="{{asset('brave/img/backgrounds/s1.jpg')}}" alt="">
												</div>
												
											</div>
											
										</div>
														
										
										<!-- Paragraph -->
										<p>Hello Fans, Happy New Month....psalm 65:11,"He crown the year with His goodness". welcome to #MusicFluteTrainingTipsByEbele

This topic today concerns all instrumentalist of different instruments, especially the woodwind instruments. 

 Do You Ever Struggle With Your Fingerings and Think to Yourself...

- I often hit wrong notes during fast passages or the
   notes don't sound clearly.

- The normal aging process must be slowing my fingers down a little.

- I can't play my scales evenly, there are often extra notes.

- My fingers start to feel stiff after playing for only a short time.

"5TIPS TO INCREASE YOUR FLUTE FINGERING "

Tip1) Always warm up with scales, try and hit 3octaves in your warm up routine. Make this a regular exercise. Take away materials you normally use to aid you,just be left with  practising the scales. Sometimes try flexing your fingers with the instrument.(this is to make the fingers flexible and ready to play fast).

Tip2) Allow the brain to first fully focus on this task and learn it well so when you finally do go to your instrument to play music, a very large part of the equation is solved, leaving you with more brain power to devote to the music itself, the fingering as well.

Tip3) When working on a difficult music,try and take one problematic measure at a time, play it forwards and backwards....you can use a metronome (metronome is a device that helps to count timing in music) to gradually increase your tempo. You can try memorizing it....then focus on increasing your fingering.

Tip4) Train only your fingers first and the rest will fall into place more quickly.  Learn the complex fingering patterns first, away from your instrument, so they are ingrained, permanently.

Tip5) Practice the difficult phrase with a phrase or two that comes before it, do this slowly first. While doing this, release your tension, especially those area you feel pain...like the shoulders for example, focus on getting better in what you're practising. Think rightly also, because when you think you already know...this can affect what you do
</p>
									</div>
								</div>
								<!-- Blog item ends -->
								
								<!-- Author section -->
								<div class="blog-author well">
									
									<!-- Author details -->
									<div class="blog-author-content">
										<p>I welcome questions/suggestions/comments. Follow on Instagram/Twitter @ebeletheflutist for more information.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								
							
								
								
							
							</div>

							<!-- Sidebar column -->
							<div class="col-md-4">
								<!-- Sidebar -->
								<div class="sidebar">

							<!-- Categories Widget -->
									<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-folder color"></i>&nbsp; Leatest #MusicFluteTrainingTipsByEbele</h5>
										<!-- Widgets Content -->
										<div class="widget-content categories">
											<ul class="list-6">
												<li><a href="#">Web Designing <span class="color">(5)</span></a></li>
												<li><a href="#">Graphic Design <span class="color">(5)</span></a></li>
												<li><a href="#">PHP Dev <span class="color">(5)</span></a></li>
												<li><a href="#">Android Dev <span class="color">(5)</span></a></li>
												<li><a href="#">Photoshop <span class="color">(5)</span></a></li>
												<li><a href="#">WordPress <span class="color">(5)</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			
			<!-- Main content ends -->
			<!-- main-container end -->

		
			
		
	@include('homepublic.layouts.footer')
	
	</div>
	
	<!-- Outer Ends -->	
@endsection

