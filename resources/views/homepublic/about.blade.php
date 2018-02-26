@extends('homepublic.layouts.app')
@section('content')		
					
		@include('homepublic.layouts.header')

						
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>About <span>Ebele The Flutist</span></h2>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->
			
				<div class="container">

					<!-- Outer layer -->
					<div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true">
						<!-- Slides. You can also add captions -->
						<div class="carousel-inner">
							<!-- Item, First item should have extra class "active" -->
							<div class="item active">
								<!-- Image -->
								<img src="{{asset('brave/img/backgrounds/s1.jpg')}}" alt="">
								<div class="carousel-caption c-bottom-full">
									<!-- Heading -->
									<h4><a href="#">Some heading here</a></h4>
									<!-- Para -->
									<p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('brave/img/backgrounds/s2.jpg')}}" alt="">
								<div class="carousel-caption c-bottom-full">
									<!-- Heading -->
									<h4><a href="#">Some heading here</a></h4>
									<!-- Para -->
									<p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('brave/img/backgrounds/s3.jpg')}}" alt="">
								<div class="carousel-caption c-bottom-full">
									<!-- Heading -->
									<h4><a href="#">Some heading here</a></h4>
									<!-- Para -->
									<p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('brave/img/backgrounds/s4.jpg')}}" alt="">
								<div class="carousel-caption c-bottom-full">
									<!-- Heading -->
									<h4><a href="#">Some heading here</a></h4>
									<!-- Para -->
									<p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
								</div>
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
					
					<br>
					<br>

					<!-- Nav tab starts -->
					<div class="nav-tabs-two">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#history" data-toggle="tab">History</a></li>
							<li><a href="#terms-conditions" data-toggle="tab">Worldview</a></li>
							<li><a href="#disclaimer" data-toggle="tab">Who She is</a></li>
							<li><a href="#privacy-policy" data-toggle="tab">Brand Personality</a></li>
						</ul>
						<!-- Tab content -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="history">
								<h4>History</h4>
								<p>Ebele was exposed to music as a little child and she learnt rudiments of music at a very early stage of her life. To be a complete musician Ebele learnt to play the flute to complement her high pitched voice. She was 14yrs old when she got her first flute as a gift from her Dad after which and she devoted herself to persistent playing and regular practise. <br />
								She studied accounting for her first degree and obtained a post graduate degree in Business Administration, all through which she never stopped singing and/or playing my flute. She was an active member of a musical group in her Institution of higher learning and was invited to perform her music in several events/programs on numerous occasions. Her passion for music propelled her to get further training in contemporary music, learning genres different from the classical background she was used to from childhood making her a vast musician. <br />
								Against all odds as a flutist and contrary to public opinion, Ebele resigned from active work as an accountant to pursuit a career in music, going in for  studio recordings sessions of songs she had written by inspiration over the previous years, some of which she has released as singles and has performed on several platforms in numerous events/gatherings. Ebele also plays the keyboard on which she still seeks improved dexterity.<br />
								Music was initially to her a hobby, then it became a passion. Now music is more than a career to Ebele, it is her life’s story.</p>
							</div>
							<div class="tab-pane fade" id="terms-conditions">
								<h4>Worldview</h4>
								<p>The Ebele spirit is the one that advocates for godly transformation by creating an atmosphere of friendliness that encourages people to get comfortable in their own skin, connect with their inmost desires, advance their highest hope and challenge their deepest fears.</p>
								<p>She is a staunch believer in the use of godly music as a route to progressive positive transformation. She opines that good and excellently performed pieces can reach farther beyond mere words, stimulating reactions to the soul and message of the song.</p>
								<p>She believes that with the help of God and believe in one’s self, anyone can perpetually improve as long as he/she is willing and committed to the learning/change process.</p>

								
							</div>
							<div class="tab-pane fade" id="disclaimer">
								<h4>Who She is</h4>
								<p>Ebele is a versatile, creative and innovative MUSICIAN AND PERSONAL DEVELOPMENT COACH. She believes in the power of music and its ability to induce progressive positive transformation in an individual. Ebele continually strives for excellence in music compositions, performances and interpersonal relationships and in the process inspire, influence, motivate and raise a generation of people that thrive in Spiritual development, Personal Effectiveness, Stress Management and Social Etiquette.<br />
								In addition to her music, Ebele evinces her passion by engaging her audience in Personal development activities through Talk Shows, Health & Fitness Talks and Music Trainings.<br />
								She is particularly passionate about empowering individuals and groups by enhancing their productivity, with health and fitness tips, Relaxation advices and Skills development guidelines. This she does to motivate them to total wellness.</p>
							</div>
							<div class="tab-pane fade" id="privacy-policy">
								<h4>Brand Personality</h4>
								<p>The Ebele brand is active, youthful and driven. I have a strong belief in God and His purpose for mankind and He takes utmost priority in all things. I believe that with His help, hard work and determination, all goals are achievable. So I am practical, and I do my best at every point in time to be articulate my versatility, creativity, intelligence and skill.</p>
								<p>I am friendly, warm and extremely passionate about music. I am not a stereotype. I am very comfortable with change. I am always learning and always giving myself to what I believe in. I am I am principled, yet approachable, full of vigor yet collected. I am confident, articulate, fit and socially learned.</p>
								<p>I am fun to be with and I derive joy in making people happy and relaxed. I also enjoy sharing moments, knowledge and experience I have acquire over the years in a bit to bring about self-improvement and personal development in people.</p>

							</div>
						</div>
					</div>
					<!-- Nav tabs ends -->
					
				</div>
			</div>
			
			<!-- Main content ends -->
			
	@include('homepublic.layouts.footer')
		
@endsection	