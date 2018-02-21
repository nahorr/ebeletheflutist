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
										<a href="#"><img src="{{asset('brave/img/flat-icons/ebeletheflutist_audios.png')}}" alt="" class="img-responsive" /></a>
									</div>
									<h4><a href="#">Audios</a></h4>
									<div class="bor bg-red"></div>
									<p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
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
									<p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
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
									<p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
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
									<p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
								</div>
							</div>
						</div>	
					</div>
					
					<!-- Image Box #3 Ends -->
					
										
					<div class="block-heading-two">
						<h3><span>Recent Works</span></h3>
					</div>					
					
					<div class="img-box-4 text-center">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- Image Box #4 Item -->
								<div class="img-box-4-item">
									<!-- Image -->
									<a href="{{asset('brave/img/gallery/small/1.jpg')}}" class="lightbox"><img src="{{asset('brave/img/gallery/small/1.jpg')}}" alt="" class="img-responsive" /></a>
									<!-- Image Box #4 Content -->
									<div class="img-box-4-content">
										<!-- Icon -->
										<a href="#"><i class="fa fa-picture-o bg-red"></i></a>
										<!-- Heading -->
										<h4><a href="#">Blinded Desire</a></h4>
										<!-- Border -->
										<div class="bor bg-red"></div>
										<!-- Paragraph -->
										<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="img-box-4-item">
									<a href="{{asset('brave/img/gallery/small/2.jpg')}}" class="lightbox"><img src="{{asset('brave/img/gallery/small/2.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="img-box-4-content">
										<a href="#"><i class="fa fa-video-camera bg-lblue"></i></a>
										<h4><a href="#">Itaque Earum</a></h4>
										<div class="bor bg-lblue"></div>
										<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="img-box-4-item">
									<a href="{{asset('brave/img/gallery/small/3.jpg')}}" class="lightbox"><img src="{{asset('brave/img/gallery/small/3.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="img-box-4-content">
										<a href="#"><i class="fa fa-music bg-green"></i></a>
										<h4><a href="#">Rerum Tenetur</a></h4>
										<div class="bor bg-green"></div>
										<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>
									</div>
								</div>
							</div><div class="col-md-3 col-sm-6">
								<div class="img-box-4-item">
									<a href="{{asset('brave/img/gallery/small/4.jpg')}}" class="lightbox"><img src="{{asset('brave/img/gallery/small/4.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="img-box-4-content">
										<a href="#"><i class="fa fa-picture-o bg-purple"></i></a>
										<h4><a href="#">Maiores Alias</a></h4>
										<div class="bor bg-purple"></div>
										<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>
									</div>
								</div>
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
									<h3>At vero eos et accusamus et iusto odio dignissimos ducimus indignation qui blanditiis praesentium voluptatum.</h3>
									- Helon Thomas
								</div>
								<div class="item">
									<h3>Indignation qui blanditiis praesentium voluptatum at vero eos et accusamus et iusto odio dignissimos ducimus.</h3>
									- Helon Peter
								</div>
								<div class="item">
									<h3>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</h3>
									- John Mark 
								</div>
							</div>
						</div>
					</div>					
				</div>
				
				<br />
				
				<div class="container">
				
					<!-- Block heading two -->
					<div class="block-heading-two">
						<h3><span>My Speciality</span></h3>
					</div>	
					
					<div class="row">
						<div class="col-md-7 col-sm-6">
							<p class="para-big">Praesent orci eros, rhoncus et neque sit amet, lobortis auctor libero. Vivamus sed laoreet enim. Donec iaculis eros ac leo venenatis porta. Ut eget velit nec velit varius tincidunt. Etiam vel egestas dolor, ac interdum felis.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut euismod sapien. Donec eu feugiat enim, sed tempus arcu. Pellentesque magna nisi, consectetur eget interdum non, interdum a nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent orci eros, rhoncus et neque sit amet, lobortis auctor libero. Vivamus sed laoreet enim. Donec iaculis eros ac leo venenatis porta. Cras tincidunt nisl id lobortis mollis. Ut pretium, quam ut rhoncus pharetra, dui lectus tincidunt risus, eu rhoncus odio tortor fermentum augue. Nulla rutrum bibendum nisl sagittis mollis. Duis adipiscing libero nisi, nec cursus risus dapibus ac.</p>
							<br />
						</div>
						<div class="col-md-5 col-sm-6 text-center">
							<a href="#"><img src="{{asset('brave/img/rev-slider/mockup1.png')}}" alt="" class="img-responsive" /></a>
						</div>
					</div>
					
					<br />
					<hr />
					<br />
				
					<div class="block-heading-two text-center">
						<h3><span>Company Status</span></h3>
					</div>	
					<!-- Client One Starts -->
					<br />
				
					<!-- Counter #4 starts -->
					<div class="counter-four">
						<div class="counter-content">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-trophy color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="95" data-speed="3000" data-refresh-interval="50"></span><small>Award</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-coffee color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="75" data-speed="3000" data-refresh-interval="50"></span><small>Coffee</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-calendar color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="69" data-speed="3000" data-refresh-interval="50"></span><small>Year's</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-share-alt color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="85" data-speed="3000" data-refresh-interval="50"></span><small>Likes</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-cloud color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="43" data-speed="3000" data-refresh-interval="50"></span><small>Money</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-gift color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="89" data-speed="3000" data-refresh-interval="50"></span><small>Download</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-desktop color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="49" data-speed="3000" data-refresh-interval="50"></span><small>Watch</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- counter item -->
									<div class="counter-item">
										<!-- icon -->
										<i class="fa fa-twitter color"></i>
										<!-- Heading -->
										<h4><span class="number-count" data-from="10" data-to="75" data-speed="3000" data-refresh-interval="50"></span><small>Twitter</small></h4>
										<!-- Paragraph -->
										<p>Printing and typesetting some industry.</p>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Counter #4 ends -->
					
					<br />
					
					<div class="block-heading-two text-center">
						<h3><span>Our Clients</span></h3>
					</div>	
					<!-- Client One Starts -->
					<br />
					
					<div class="client-one">
						<div class="owl-carousel" data-items="5" data-auto-play="true" data-pagination="false" data-single-item="false">
							<!-- Item -->
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-1.png')}}" alt=""  class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Variations</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-2.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Repetition</a></h5>
							</div>
							<div class="c1-item">			
								<a href="#"><img src="{{asset('brave/img/clients/c1-3.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Pleasure</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-4.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Molestiae</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-5.png')}}" alt=""  class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Extremely</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-6.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Annoying</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-2.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Doloribus</a></h5>
							</div>
							<div class="c1-item">
								<a href="#"><img src="{{asset('brave/img/clients/c1-3.png')}}" alt="" class="img-responsive" /></a>
								<div class="img-hover"></div>
								<h5><a href="#">Repellat</a></h5>
							</div>
						</div>
					</div>
					
					<!-- Client One Ends -->
					
					
				</div>
			</div>
			
			<!-- Main content ends -->
			
			@include('homepublic.layouts.footer')
		
		</div>
		
		<!-- Outer Ends -->	
@endsection	