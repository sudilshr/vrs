<!DOCTYPE html><html class='no-js' lang='en'>	<head>		<meta charset='utf-8' />		<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />		<title>VRS | Vehicle Reservation System</title>	
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/uc/favicon.ico" />		<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/uc/images/favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/uc/css/maximage.css" type="text/css" media="screen" charset="utf-8" />		<link rel="stylesheet" href="<?php echo base_url()?>assets/uc/css/styles.css" type="text/css" media="screen" charset="utf-8" />
	</head>
	<body>
		<!-- Social Links -->
		<nav class="social-nav">			<ul>				<li><a href="#"><img src="<?php echo base_url()?>assets/uc/images/icon-facebook.png" /></a></li>				<li><a href="#"><img src="<?php echo base_url()?>assets/uc/images/icon-twitter.png" /></a></li>				<li><a href="#"><img src="<?php echo base_url()?>assets/uc/images/icon-google.png" /></a></li>				<li><a href="#"><img src="<?php echo base_url()?>assets/uc/images/icon-linkedin.png" /></a></li>			</ul>		</nav>
		<!-- Switch to full screen -->		<button class="full-screen" onclick="$(document).toggleFullScreen()"></button>
		<!-- Site Logo -->
		<div id="logo">VRS</div>


		<!-- Main Navigation -->
		<nav class="main-nav">			<ul>				<li><a href="#home" class="active">Home</a></li>				<li><a href="#about">About</a></li>				<li><a href="#contact">Contact</a></li>								<li><a href="/users/login">Login</a></li>				<li><a href="/users/signup">Signup</a></li>			</ul>		</nav>



		<!-- Slider Controls -->

		<a href="" id="arrow_left"><img src="<?php echo base_url()?>assets/uc/images/arrow-left.png" alt="Slide Left" /></a>		<a href="" id="arrow_right"><img src="<?php echo base_url()?>assets/uc/images/arrow-right.png" alt="Slide Right" /></a>



		<!-- Home Page -->

		<section class="content show" id="home">
			<h1>Welcome</h1>			<h5>Site coming soon!</h5>			<p></p>			<!-- <p><a href="#about">More info &#187;</a></p> -->

		</section>


		<!-- About Page -->

		<section class="content hide" id="about">			<h1>About</h1>			<h5>Here's a little about what we're up to.</h5>			<p></p>			<p><a href="#">Follow our updates on Twitter</a></p>		</section>



		<!-- Contact Page -->		<section class="content hide" id="contact">			<h1>Contact</h1>			<h5>Get in touch.</h5>			<p>Email: <a href="#">info@.com</a><br />				Phone: <br /></p>			<p>Street<br />				</p>		</section>



		

		<!-- Background Slides -->

		<div id="maximage">

			<div>

				<img src="<?php echo base_url()?>assets/uc/images/backgrounds/bg-img-1.jpg" alt="" />

				<img class="gradient" src="<?php echo base_url()?>assets/uc/images/backgrounds/gradient.png" alt="" />

			</div>

			<div>

				<img src="<?php echo base_url()?>assets/uc/images/backgrounds/bg-img-2.jpg" alt="" />

				<img class="gradient" src="<?php echo base_url()?>assets/uc/images/backgrounds/gradient.png" alt="" />

			</div>

			<div>

				<img src="<?php echo base_url()?>assets/uc/images/backgrounds/bg-img-3.jpg" alt="" />

				<img class="gradient" src="<?php echo base_url()?>assets/uc/images/backgrounds/gradient.png" alt="" />

			</div>

			<div>

				<img src="<?php echo base_url()?>assets/uc/images/backgrounds/bg-img-4.jpg" alt="" />

				<img class="gradient" src="<?php echo base_url()?>assets/uc/images/backgrounds/gradient.png" alt="" />

			</div>


		</div>

		

		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
		<script src="<?php echo base_url()?>assets/uc/js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/uc/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/uc/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/uc/js/jquery.fullscreen.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/uc/js/jquery.ba-hashchange.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/uc/js/main.js" type="text/javascript" charset="utf-8"></script>

		

		<script type="text/javascript" charset="utf-8">

			$(function(){

				$('#maximage').maximage({

					cycleOptions: {

						fx: 'fade',

						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)

						timeout: 5000,

						prev: '#arrow_left',

						next: '#arrow_right',

						pause: 0,

						before: function(last,current){

							if(!$.browser.msie){

								// Start HTML5 video when you arrive

								if($(current).find('video').length > 0) $(current).find('video')[0].play();

							}

						},

						after: function(last,current){

							if(!$.browser.msie){

								// Pauses HTML5 video when you leave it

								if($(last).find('video').length > 0) $(last).find('video')[0].pause();

							}

						}

					},

					onFirstImageLoaded: function(){

						jQuery('#cycle-loader').hide();

						jQuery('#maximage').fadeIn('fast');

					}

				});

	

				// Helper function to Fill and Center the HTML5 Video

				jQuery('video,object').maximage('maxcover');

	

			});

		</script>

  </body>

</html>

