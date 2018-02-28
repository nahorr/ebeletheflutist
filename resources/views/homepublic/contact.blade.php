@extends('homepublic.layouts.app')
@section('content')		
					
		@include('homepublic.layouts.header')
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading one starts -->
				
				<div class="page-heading-one">
					<h2>Hello, Say <span class="color">Hi To</span></h2>
					<p class="bg-color">Ebele The Flutist</p>
				</div>
					
				<!-- Page heading one ends -->

						
				<div class="container">
					<div class="contact-us-three">
					
						<div class="row">
							<div class="col-md-8">
							
								<!-- Contact map -->
								<div class="contact-map">
									<!-- Map Link -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15615.590366449029!2d79.823997513746!3d11.912214884509545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x948a846878ea738c!2sAchariya+Bala+Siksha+Mandir!5e0!3m2!1sen!2sin!4v1402563074325" ></iframe>
								</div>
								<hr />
								
								<!-- Contact Form -->
								<div class="contact-form">
									@include('flash::message')
									<h5>Contact Form</h5>
									<!-- Form -->
									<form class="form" role="form" action="{{url('/postcontactform/')}}" method="POST">
										{{ csrf_field() }}
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" name="full_name" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" name="email" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control"  name="phone" placeholder="Enter Phone">
												</div>
											</div>
										</div>										
										<div class="form-group">
											<textarea class="form-control" id="comments" rows="8" name="message" placeholder="Enter Message"></textarea>
										</div>

										<!-- Recaptha-->
										<div class="form-group">
											<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
										</div>

										<!-- Button -->
										<button type="submit" class="btn btn-red">Submit</button>&nbsp;
										<button type="button" class="btn btn-default">Reset</button>
									</form>
								</div>
								
								<br />
								
							</div>
							<div class="col-md-4 col-sm-6">
								
								<div class="well">
									<h6><i class="fa fa-user"></i>&nbsp;&nbsp;Get In Touch</h6>
									<p>I will be happy to hear from. Please complete the form below and I shall get back to you as soon as possible.</p>
									<div class="brand-bg">
										<!-- Social Media Icons -->
										<a href="https://free.facebook.com/NigForemostFemaleFlutist/?_rdc=1&_rdr" class="facebook" target="_blank"><i class="fa fa-facebook circle-3"></i></a>
										<a href="https://twitter.com/ebeletheflutist" class="twitter" target="_blank"><i class="fa fa-twitter circle-3"></i></a>
										<a href="https://plus.google.com/109824567381646809495" class="google-plus" target="_blank"><i class="fa fa-google-plus circle-3"></i></a>
										<a href="https://ng.linkedin.com/in/ebele-the-flutist-43a60555" class="linkedin" target="_blank"><i class="fa fa-linkedin circle-3"></i></a>
										<a href="https://www.instagram.com/explore/tags/ebeletheflutist/" class="instagram" target="_blank"><i class="fa fa-instagram circle-3"></i></a>
										<a href="https://www.youtube.com/channel/UCn48QmMqWzNbQdajNElQfTg" class="youtube" target="_blank"><i class="fa fa-youtube circle-3"></i></a>
									</div>
								</div>
								
								<div class="well">
									<!-- Heading -->
									<h6><i class="fa fa-home"></i>&nbsp;&nbsp;Ebele The Flutist</h6>
									<!-- Paragraph -->
									<p class="add">
									   55 Westlynn Spur, Claresholm<br />
									   Alberta - T0L0T0.</p>
									<p class="tel"> <i class="fa fa-phone"></i> Tel : +2348037104996<br />
									<i class="fa fa-envelope"></i>  Mail : <a href="#">ebele@ebeletheflutist.com</a><br />
								</div>
														
							</div>
						</div>
												
					</div>			
				</div>
			</div>
			
			<!-- Main content ends -->
			
			@include('homepublic.layouts.footer')
		
		</div>
		
		<!-- Outer Ends -->	
@endsection	