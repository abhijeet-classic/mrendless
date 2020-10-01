
<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MrEndless</title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <style type="text/css">
        	*, *:before, *:after {
  box-sizing: border-box;
}

$bg-color: #d9d8c6;
$primary-color: #5b5a5c;
$secondary-color: darken($primary-color, 15%);

body {
  background: $bg-color;
}

li {
  list-style: none;
}

.suga-container {
  background: $primary-color;
  padding: .2em;
  max-width: 950px;
  margin: 5em auto;
  box-shadow: 3px 3px 0px $secondary-color;
  border: 2px solid $secondary-color;
  border-radius: 5px;
}

.suga-slider-wrap {
  overflow: hidden;
  margin: 1em;
}

.suga-slider-group {
  &:before,
  &:after {
    content: " ";
    display: table;
  }

  &:after {
    clear: both;
  }
}

.suga-slide {
  float: left;
  position: relative;
  margin-left: 0;
  padding-right: 8px;
}
.slider-overlay2:before {
   
    /*background: #1b2a2f;*/
    
    }

body { background-color:#1d1d1d !important; font-family: "Asap", sans-serif; color:#989898; margin:10px font-size:16px; } #demo { height:100%; position:relative; overflow:hidden; }; .green{ background-color:#6fb936; } .thumb{ margin-bottom: 30px; } .page-top{ margin-top:85px; } img.zoom { width: 100%; height: 200px; border-radius:5px; object-fit:cover; -webkit-transition: all .3s ease-in-out; -moz-transition: all .3s ease-in-out; -o-transition: all .3s ease-in-out; -ms-transition: all .3s ease-in-out; } .transition { -webkit-transform: scale(1.2); -moz-transform: scale(1.2); -o-transform: scale(1.2); transform: scale(1.2); } .modal-header { border-bottom: none; } .modal-title { color:#000; } .modal-footer{ display:none; }

  .title-fill:after {
    color: #ef0d33;
    background: transparent;
    -webkit-transition-delay: .3s;
    -o-transition-delay: .3s;
    transition-delay: .3s;
}

.tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            color: black;
        }
        .tab button.active {
            color: #f3a73a;
        }
        .tabcontent {
            display: none;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;
        }
.large-title-bold {
    t
    font-weight: 400 !important;
   
    font-family: initial !important;
}
.medium-title {
    text-transform: uppercase;
    line-height: 1.13;
    font-weight: 500;
    letter-spacing: 0px;
    font-family: initial;
}


        </style>

        <!-- css for mobile view -->
    <style type="text/css">
        @media (max-width: 769px) {
           .top-bottom-padding-120 {
    padding-top: 60px;
    padding-bottom: 10px;
}
.portfolio-content-bg {
    height: 35vh;
}

        }
    </style>

	</head>
	<body class="loader">
		<!-- loading start -->
		<?php include('loader.php')?>
		<!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="index-2.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-white" src="assets/images/logo/endless-logo-1.png" alt="logo">
				        <img class="logo-black" src="assets/images/logo/endless-logo-1.png" alt="logo">
			        </div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->	
		
		<!-- nav-container start -->	
		<!-- nav-container end -->
	    <?php include('header.php')?>
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- home-slider start -->
			<section class="home-slider" id="up">
				<!-- swiper-wrapper start -->
			  	<div class="swiper-wrapper">
				  	<!-- swiper-slide start -->
				  	<div class="swiper-slide flex-min-height-box home-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg" style="background-image:url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg)"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-2">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset">
							      	<div class="content-left-margin-40">
								      	<h2 class="slider-overlay2 medium-title red-color">Welcome to MrEndless</h2>
								      	<h3 class="large-title-bold text-color-4">
							  				<span class="slider-overlay2 slider-tr-delay01">Best Solutions</span><br>
							  				<span class="slider-overlay2 slider-tr-delay02">& ideas for</span><br>
							  				<span class="slider-overlay2 slider-tr-delay03">You Business</span>
						  				</h3>
									  	<div class="slider-fade slider-tr-delay04 top-margin-30">
										  	<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
										      		<a href="#" class="border-btn" data-text="Read more">Read more</a>
										    	</div>
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
				    <!-- swiper-slide start -->
				    <div class="swiper-slide flex-min-height-box home-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg" style="background-image:url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg)"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-2">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset">
							      	<div class="content-left-margin-40">
								      	<h2 class="slider-overlay2 medium-title red-color">Welcome MrEndless</h2>
								      	<h3 class="large-title-bold text-color-4">
							  				<span class="slider-overlay2 slider-tr-delay01">Best Solutions</span><br>
							  				<span class="slider-overlay2 slider-tr-delay02">& ideas for</span><br>
							  				<span class="slider-overlay2 slider-tr-delay03">You Business</span>
						  				</h3>
									  	<div class="slider-fade slider-tr-delay04 top-margin-30">
										  	<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
										      		<a href="#" class="border-btn" data-text="Read more">Read more</a>
										    	</div>
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
				   <div class="swiper-slide flex-min-height-box home-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg" style="background-image:url(assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg)"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-2">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset">
							      	<div class="content-left-margin-40">
								      	<h2 class="slider-overlay2 medium-title red-color">Welcome to MrEndless</h2>
								      	<h3 class="large-title-bold text-color-4">
							  				<span class="slider-overlay2 slider-tr-delay01">Best Solutions</span><br>
							  				<span class="slider-overlay2 slider-tr-delay02">& ideas for</span><br>
							  				<span class="slider-overlay2 slider-tr-delay03">You Business</span>
						  				</h3>
									  	<div class="slider-fade slider-tr-delay04 top-margin-30">
										  	<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
										      		<a href="#" class="border-btn" data-text="Read more">Read more</a>
										    	</div>
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
			  	</div><!-- swiper-wrapper end -->
			  	
			  	<!-- swiper-button-next start -->
			  	<div class="swiper-button-next">
				  	<div class="slider-arrow-next-box">
					  	<span class="slider-arrow-next"></span>
				  	</div>
			  	</div><!-- swiper-button-next end -->
			  	<!-- swiper-button-prev start -->
			  	<div class="swiper-button-prev">
				  	<div class="slider-arrow-prev-box">
					  	<span class="slider-arrow-prev"></span>
				  	</div>
			  	</div><!-- swiper-button-prev end -->
			  	
			  	<!-- swiper-pagination -->
			  	<div class="swiper-pagination"></div>
			  	
			  	<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- home-slider end -->
			
			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-60">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 data-animation-container class="medium-title" style="text-align: center;">
						<span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="can you hear us now..??"> can you hear us now..??</span><br>
						<h2 data-animation-container class="medium-title" style="text-align: center;">
						<span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="we are mrendless">we are mrendless</span><br>

					</h2>
							</div><!-- column end -->
							<div class="row" style="margin-top: 40px;margin-bottom: 50px">
								<div class="col-md-12">
									<span style="color: white;text-align: justify-all;font-size: 18px" >However, there are some situations in which this page has more value, for example a pureplay retailer with no offline brand presence – visitors are more likeVideo is a proven way to communicate longer messages, as not all businesses can be summed up in a sentence or two.Here’s an example from Smart Pansions:ly to want to know about them as they don’t have another reference point.My view is that not having an ‘About’ page is an oversight – it’s a relatively simple task to get this written and maintained and it could make a difference in persuading new users to trust you and make a purchasekjnvkdnvk onionsvo oi nioif ionj It’s about communicating your core values and culture and, to a certain extent, inspiring people with your vision and ambition.For companies with heritage, it should also provide a timeline to showcase how the company has grown/evolved since launch, using photos from the different periods to provide a visual trailVideo is a proven way to communicate longer messages, as not all businesses can be summed up in a sentence or two.Here’s an example from Smart Pansions:</span>
								</div>
								
							</div>
							
								<div class="row" style="margin: auto;">
									<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
										      		<a href="about.php" class="border-btn" data-text="Read more about us">Read more about us</a>
										    	</div>
											</div>
								</div>
								
							
							
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->
		
			<!-- section start -->
			<section class="light-bg-1 bottom-padding-30 top-padding-60" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-container class="medium-title" style="text-align: center;">
						<span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Services we provides"> Services we provides</span><br>
					</h2>
					<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Offer Digital Solutions</p>
				</div><!-- container end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span style="font-size:30px" class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Logo Designs</span>
										<h3 class="title-style text-color-1">
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">we have lot's of ideas and </span><br>
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">creativy for your logo</span><br>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Narwhal pop-up intelligentsia tbh pinterest, microdosing tilde cloud bread gochujang tattooed leggings cornhole 8-bit. Austin fam chia cold-pressed raw denim. Glossier drinking vinegar portland lo-fi, polaroid bespoke lomo. Banjo art party XOXO, fashion axe sustainable retro ethical gentrify.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="logo.php" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="logo.php" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/logodesign.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="3dmodelling.php" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/3d.jpg)"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span style="font-size:30px" class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">3-D Modelling</span>
										<h3 class="title-style text-color-1">
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Turn your concept into</span><br>
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">reality with perfection </span><br>
											
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Slow-carb green juice subway tile bicycle rights, fanny pack raclette palo santo put a bird on it mustache actually fam mumblecore iPhone. Iceland post-ironic health goth snackwave, mixtape synth four dollar toast sartorial. Health goth la croix vexillologist, before they sold out shabby chic.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="3dmodelling.php" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span style="font-size:30px" class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Architectural Interior Modeling</span>
										<h3 class="title-style text-color-1">
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Turn your vision</span><br>
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2"> into reality</span><br>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Mlkshk YOLO wolf, leggings vinyl crucifix stumptown tousled. Pabst venmo gentrify deep v microdosing migas occupy master cleanse intelligentsia sartorial chia activated charcoal. Iceland small batch live-edge raclette roof party dreamcatcher austin pickled. Chillwave cronut messenger bag truffaut.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="architectural.php" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="architectural.php" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/interior.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
				
				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="videoediting.php" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/videoeditor.jpg)"></div>
									</a>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-left-margin-40">
										<span style="font-size:30px" class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Video  Editing</span>
										<h3 class="title-style text-color-1">
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">add an extraw touch of</span><br>
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">emotions and reality to your </span><br>
											<span style="font-size:20px" data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">creation and memories</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Tote bag cornhole pork belly swag, cronut hoodie snackwave 90's messenger bag pour-over disrupt chartreuse. Vape ugh cardigan hell of. Vaporware umami master cleanse neutra, chartreuse flexitarian lo-fi selvage hella hoodie freegan gentrify. 8-bit air plant umami asymmetrical franzen semiotics before.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="videoediting.php" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->

				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40">
										<span style="font-size:30px" class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">VFX</span>
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">batch kombucha</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">subway tile</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">salvia brooklyn</span>
										</h3>
										<p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">Mlkshk YOLO wolf, leggings vinyl crucifix stumptown tousled. Pabst venmo gentrify deep v microdosing migas occupy master cleanse intelligentsia sartorial chia activated charcoal. Iceland small batch live-edge raclette roof party dreamcatcher austin pickled. Chillwave cronut messenger bag truffaut.</p>
										
										<div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="vfx.php" class="arrow-btn pointer-large animsition-link">Read more</a>
										</div>
										
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<a href="vfx.php" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/vfx.jpg)"></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->
			</section><!-- section end -->


			<section id="gallery" style="background-color: white" >
				<!-- container start -->
				<div class="container small top-bottom-padding-90">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title" style="text-align: center;">
						<span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Image Gallery" > Image Gallery</span><br>
					</h2><!-- medium-title end -->
					
					<!-- client-list start -->
					<div class="row">
            <div class="tab" style="margin: auto;padding-top: 30px">
                <button class="tablinks active" onclick="openCity(event, 'London')">Logo Designing</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">3 -D Modelling</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">VFX</button> 
                <button class="tablinks" onclick="openCity(event, 'German')">Architectural Interior Modelling</button>
                <button class="tablinks" onclick="openCity(event, 'Ind')">Video Editing</button>
                
            </div>
        </div>

        <div id="London" class="tabcontent" >
            <div class="row" style="margin-top: 50px">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

            </div>
            <div class="row" >
            	<div class="col-md-4"></div>
            	<div class="col-md-4" style="text-align: center;font-size: 16px"><a href="logo.php">See more about logo</a> </div>
            	<div class="col-md-4"></div>
            </div>
        </div>

         <div id="Paris" class="tabcontent" >
            <div class="row" style="margin-top: 50px">
            	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

            </div>
            <div class="row" >
            	<div class="col-md-4"></div>
            	<div class="col-md-4" style="text-align: center;font-size: 16px"><a href="3dmodelling.php">See more about 3-D modelling</a> </div>
            	<div class="col-md-4"></div>
            </div>
        </div>

          <div id="Tokyo" class="tabcontent" >
            <div class="row" style="margin-top: 50px">
            	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

            </div>
            <div class="row" >
            	<div class="col-md-4"></div>
            	<div class="col-md-4" style="text-align: center;font-size: 16px"><a href="vfx.php">See more about VFX</a> </div>
            	<div class="col-md-4"></div>
            </div>
        </div>

          <div id="German" class="tabcontent" >
            <div class="row" style="margin-top: 50px">
            	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

            </div>
            <div class="row" >
            	<div class="col-md-4"></div>
            	<div class="col-md-4" style="text-align: center;font-size: 16px"><a href="architectural.php">See more about Architecural interior modelling</a> </div>
            	<div class="col-md-4"></div>
            </div>
        </div>

          <div id="Ind" class="tabcontent" >
            <div class="row" style="margin-top: 50px">
            	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                        
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                                        <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

            </div>
            <div class="row" >
            	<div class="col-md-4"></div>
            	<div class="col-md-4" style="text-align: center;font-size: 16px"><a href="videoediting.php">See more about video editing</a> </div>
            	<div class="col-md-4"></div>
            </div>
        </div>
					<!-- client-list end -->
				</div><!-- container end -->
			</section>

			
			<!-- section start -->
			<section class="dark-bg-2">
				<!-- container start -->
				<div class="container small top-bottom-padding-120">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title" style="text-align: center;">
						<span  data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Our Happy Clients"> Our Happy Clients</span><br>
					</h2><!-- medium-title end -->
					
					<!-- client-list start -->
					<div id="logos">
					  <ul>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>
					   <li><img src="http://placehold.it/145x145" /></li>

					   


					  </ul>
					</div>
					<!-- client-list end -->
				</div><!-- container end -->
			</section><!-- section end -->

			

			


			<!-- light-bg-2 start -->
			<div class="light-bg-2 top-bottom-padding-120" data-midnight="black">
				<!-- testimonials-slider start -->
				<div class="testimonials-slider container small">
					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/adult-beanie-black-background-1529350.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha authentic chia. IPhone glossier schlitz fam, la croix keytar retro offal. Artisan selfies mlkshk pinterest gastropub knausgaard live-edge.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Balanchaev Balancha, <span class="text-color-2">Investor</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-428340.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin coffee pop-up, whatever air plant austin hexagon selfies tattooed. Fixie taxidermy forage hot chicken, locavore church-key authentic coloring book.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Fred Kinney, <span class="text-color-2">Designer</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-764529.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast. Messenger bag keffiyeh church-key, synth iPhone pabst leggings ethical. PBR&B cred hot chicken pork belly.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Steve Kong, <span class="text-color-2">Web developer</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-809433.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct trade, food truck tacos biodiesel craft beer. Af hammock listicle vape banjo echo park meditation organic cred subway tile. Echo park DIY.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Balanchaev Balancha, <span class="text-color-2">Investor</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="assets/images/testimonials/pexels-photo-894156.jpg" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw denim swag drinking vinegar. Yuccie jianbing bespoke retro, photo booth salvia hella meh post-ironic cornhole tacos plaid.</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Fred Kinney, <span class="text-color-2">Designer</span>
							</div>
						</div><!-- slide end -->
					</div><!-- swiper-wrapper end -->
					
					<!-- swiper-pagination -->
					<div class="swiper-pagination"></div>
				</div><!-- testimonials-slider end -->
			</div><!-- light-bg-2 end -->
			
			
		</main><!-- animsition-overlay end -->
		
		<!-- footer start -->
		 <?php include('footer1.php')?>
		<!-- footer end -->
		
		<!-- scripts --> 
        <script src="assets/js/plugins.js"></script> 
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">


        	/*

Suga Slider

Usage ---------

$(window).load(function(){
  $('#logos').suga({
    'transitionSpeed': 2000,
    'snap': false
  });
});

The markup should resemble the markup here

*/

$.fn.suga = function(options) {
  var settings = $.extend({
      'transitionSpeed': 3000,
      'snap': false
  }, options);

  var $this = $(this);

  // add plugin specific classes
  $this.addClass('suga-slider-wrap');
  $this.children('ul').addClass('suga-slider-group');
  $this.find('li').addClass('suga-slide');  

  // caching $$$
  var $slide = $('.suga-slide'),
			$firstEl = $('.suga-slide:first'),
      $group = $('.suga-slider-group'),
      $wrap = $('.suga-slider-wrap');

  var slideWidth = $slide.outerWidth(),
  		slideHeight = $('.suga-slide').height(),
      slideCount = $slide.length,
      totalWidth = slideWidth * slideCount;

  // set width on group element
  $group.width(totalWidth);
  $wrap.height(slideHeight);
  $wrap.wrap('<div class="suga-container"></div>');

  // add first class at start
  if (!$group.find($firstEl).hasClass("suga-first")) {
    $group.find($firstEl).addClass("suga-first");
  }

  // lets move baby
  var transitionSnap = function() {
    var $firstEl = $group.find('.suga-first').html();
    
    $group.find('.suga-first').animate({
      'margin-left': '-' + slideWidth + 'px'
    }, function(){
     $group.append('<li class="suga-slide">' + $firstEl + '</li>');
     $(this).remove(); 
     $group.find('li:first').addClass("suga-first");
      
    });  
  };

  var transitionScroll = function() {
     var $firstEl = $group.find('.suga-first').html();

    $group.find('.suga-first').animate({
      'margin-left': '-' + slideWidth + 'px'
    }, settings.transitionSpeed, 'linear', function(){
     $group.append('<li class="suga-slide">' + $firstEl + '</li>');
     $(this).remove(); 
     $group.find('li:first').addClass("suga-first");
     transitionScroll();
    });       
  };

  if (settings.snap) {
    window.setInterval(transitionSnap, settings.transitionSpeed);  
  } else {
    transitionScroll();
  }
}

$(window).load(function(){
  $('#logos').suga({
    'transitionSpeed': 2000,
    'snap': true
  });
});

        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });

                    $(".zoom").hover(function() {

                        $(this).addClass('transition');
                    }, function() {

                        $(this).removeClass('transition');
                    });
                });
            </script>
            <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    function openCity2(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks ");
        tablinks[0].className = tablinks[0].className.replace("active", "active");
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    openCity2(event, "London");
</script>
	</body>


</html>