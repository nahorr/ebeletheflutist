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
						<h2>#WordsByEbeleTheFlutist <span>Words by Ebele</span></h2>
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
							<div class="col-md-7">
							
								<!-- Blog item starts -->
								<div class="blog-two-item">
									<!-- blog two Content -->
									<div class="blog-two-content">
										<!-- Heading -->
										<h3><a href="#">{{$word->word_title}}</a></h3>
										<!-- Blog meta -->
										<div class="blog-meta">
											<!-- Date -->
											<a href="#"><i class="fa fa-calendar"></i> {{$word->created_at}}</a> &nbsp; 
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
													<img src="{{asset('/words/images/'.$word->word_image )}}" alt="">
												</div>
												
											</div>
											
										</div>
														
										
										<!-- Paragraph -->
										<p>{!! $word->word_body !!}</p>
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
							<div class="col-md-5">
								<!-- Sidebar -->
								<div class="sidebar">

							<!-- Categories Widget -->
									<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-folder color"></i>&nbsp; All #WordsByEbeleTheFlutist</h5>
										<!-- Widgets Content -->
										<div class="widget-content categories">

											<ul class="list-6">
												@foreach($latest_words as $latest_word)
													<li><a href="{{ url('/showwordsbyebele/'.$latest_word->id)}}">{{$latest_word->word_title}} <span class="color">({{$latest_word->created_at}})</span></a></li>
												@endforeach
												
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

