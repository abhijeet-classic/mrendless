<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MrEndless</title>

		<!-- fonts -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style type="text/css">
		
.fa {
    margin-top: 22%;
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}


.float {
    position: absolute;
    width: 60px;
    height: 60px;
    bottom: 70px;
    right: 0px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}
	</style>
	</head>
	<body class="loader">
		<!-- loading start -->
		<?php include('loader.php'); ?>
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
		<?php include("header.php")?>
	<!-- nav-container end -->
	    
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-1">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/backgrounds/double-exposure-2390185_1920.jpg);"></div>

				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-10 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
				  				<h2 class="large-title-bold">
									<span class="load-title-fill tr-delay03" data-text="Always reday">Always reday</span><br>
									<span class="load-title-fill tr-delay03" data-text=" to help you">to help you</span><br>
									
								</h2>
								<p class="d-flex-wrap top-margin-20 text-color-4">
									<a href="#down"><span class="small-title-oswald text-height-20 fade-loading tr-delay07 top-margin-10">Contact us for any help</span></a>
								</p>
								
				  			</div>
			  			</div><!-- column end -->
		  			</div><!-- flex-container end -->
	  			</div><!-- flex-min-height-inner end -->
	  			
	  			<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- page-head end -->
			
			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container top-padding-120 bottom-padding-60">
						<div data-animation-container style="text-align: center;">
							<h2 class="large-title text-center">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Contact us">Contact us</span>
							</h2>
							<p data-animation-child class="p-style-small text-color-5 fade-anim-box tr-delay03" data-animation="fade-anim" style="color: white">I’m always excited to take up new projects and meet new people.drop me a line about your next project or say hello!	</p>
						</div>
						
						<!-- flex-container start -->
						<div class="flex-container top-padding-90 contact-box" style="text-align: center;">
							<!-- column start -->
							<div class="four-columns bottom-padding-60" >
								<i class="material-icons" style="font-size: 80px;color:#EF0D33">&#xe0b0;</i>
								<br><br>
								<p style="color: white">Call Us</p>
								<br>
								<p style="color: white">70 20 260599</p>
								<p style="color: white">80 87 837371</p>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns bottom-padding-60">
								<i class="material-icons" style="font-size: 80px;color:#EF0D33">&#xe55f;</i>
								<br><br>
								<p style="color: white">Office Address</p>
								<br>
								<p style="color: white">Near Kunjan Vihar,<br>kasarwadi,<br>Pune 411-006</p>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns bottom-padding-60">
								<i class="material-icons" style="font-size: 80px;color:#EF0D33" >&#xe0be;</i>
								<br><br>
								<p style="color: white">email</p>
								<br>
								<p style="color: white">tejasbokde@gmail.com</p>
								
							</div><!-- column end -->
							<a style="float: right" href="https://api.whatsapp.com/send?phone=918087837371&amp;text=Hi! I'm interested in one of your Services at MrEndless Creation." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
							
						</div><!-- flex-container end -->
						
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->
			
			<!-- contact-form-box start -->
			<section class="contact-form-box flex-min-height-box" style="background-image:url(assets/images/backgrounds/pexels-photo-1287145.jpg)">
				<div class="bg-overlay"></div>
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<h4 class="small-title-oswald text-color-4 text-center">Lets Get In Touch!</h4>
						<!-- flex-container start -->
						<form class="flex-container top-padding-90">
							<!-- column start -->
							<div class="four-columns">
								<div class="content-right-margin-10">
		                       		<input type="text" placeholder="Enter your name" class="contact-form-control pointer-small">
							   	</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns">
								<div class="content-left-right-margin-5">
		                       		<input type="text" placeholder="Enter your last name" class="contact-form-control pointer-small">
								</div>
							</div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="email" placeholder="Enter your email address" class="contact-form-control pointer-small">
			                    </div>
		                    </div><!-- column end -->
		                    <!-- column start -->
							<div class="twelve-columns">
	                       		<textarea placeholder="Enter your message" class="contact-form-control pointer-small"></textarea>
							</div><!-- column end -->
							<!-- column start -->
	                        <div class="twelve-columns text-center top-padding-90">
								<button class="border-btn-box pointer-large">
									<span class="border-btn-inner">
								      	<span class="border-btn" data-text="submit">submit</span>
								    </span>
								</button>
							</div><!-- column end -->
						</form><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- contact-form-box end -->
		</main><!-- animsition-overlay end -->
		
		<!-- footer start -->
		<?php include("footer1.php")?>
		<!-- footer end -->
		
		<!-- scripts --> 
        <script src="assets/js/plugins.js"></script> 
        <script src="assets/js/main.js"></script>
	</body>


</html>