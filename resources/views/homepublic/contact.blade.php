@extends('homepublic.layouts.app')
@section('content')		
					
		@include('homepublic.layouts.header')
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading one starts -->
				
				<div class="page-heading-one">
					<h2>Hello, Say <span class="color">Hi</span></h2>
					<p class="bg-color">Open Your Mind</p>
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
									<h5>Contact Form</h5>
									<!-- Form -->
									<form class="form" role="form">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Phone">
												</div>
											</div>
										</div>										
										<div class="form-group">
											<textarea class="form-control" id="comments" rows="8" placeholder="Enter Message"></textarea>
										</div>
										<!-- Button -->
										<button type="button" class="btn btn-red">Submit</button>&nbsp;
										<button type="button" class="btn btn-default">Reset</button>
									</form>
								</div>
								
								<br />
								
							</div>
							<div class="col-md-4 col-sm-6">
								
								<div class="well">
									<h6><i class="fa fa-user"></i>&nbsp;&nbsp;Get In Touch</h6>
									<p>Itaque earum rerum hic tenetur a atque atatum dele niti atque tenetur volup atatum dele niti atque tenetur a atque atatum tenetur volup tatum.</p>
									<div class="brand-bg">
										<!-- Social Media Icons -->
										<a href="#" class="facebook"><i class="fa fa-facebook circle-3"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter circle-3"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus circle-3"></i></a>
										<a href="#" class="linkedin"><i class="fa fa-linkedin circle-3"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest circle-3"></i></a>
									</div>
								</div>
								
								<div class="well">
									<!-- Heading -->
									<h6><i class="fa fa-home"></i>&nbsp;&nbsp;Hanks Ltd</h6>
									<!-- Paragraph -->
									<p>
										Bharathi Nagar, South Cherry Road,<br />
										North Bangalore - 535089.</p>
									<p> <i class="fa fa-phone"></i>&nbsp;&nbsp;Tel : + (833) - 839 8393<br />
									<i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail : <a href="#">infodesk@uk.com</a><br />
									<i class="fa fa-fax"></i>&nbsp;&nbsp;Fax : 948-582-3285</p>
								</div>
								
								<div class="well">
									<h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;Business Hours</h6>
									<p>Weekdays : 9:00 AM to 6:00 PM<br />
									Saturdays : 9:00 AM to 1:00 PM<br />
									Sundays : Holiday</p>
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