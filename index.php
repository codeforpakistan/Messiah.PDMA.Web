<?php
    require 'inc/api.login_web_controller.php';
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Messiah | PDMA</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/app.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<!-- Off Canvas -->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<nav class="tab-bar hide-for-medium-up">
					<section class="left-small">
						<a class="left-off-canvas-toggle menu-icon"><span></span></a>
					</section>
					<a style="margin-left:55px;" href="."><img src="img/logo.png" width="200" height="auto"></a>
				</nav>
				<!-- Off Canvas Menu -->
				<aside class="left-off-canvas-menu">
					<!-- whatever you want goes here -->
					<ul class="off-canvas-list">
						<li class="divider"></li>
						<li><a href="."><img src="img/logo.png" width="180" height="auto"></a></li>
						<li class="divider"></li>
						<li><a href=".">Home</a></li>
						<li class="divider"></li>
						<li><a href="search.php">Search By Report</a></li>
						<li class="divider"></li>
						<li><a href="http://www.messiahapp.com/team.php">About Us</a></li>
						<li class="divider"></li>
						<li><a href="http://www.messiahapp.com/contact.php">Contact Us</a></li>
						<li class="divider"></li>
						<li><a href="#" data-options="align:left" data-dropdown="login" class="">Log In</a></li>
					</ul>
				</aside>
				<!-- main content goes here -->
				<!-- close the off-canvas menu -->
				<a class="exit-off-canvas"></a>
				<!-- Navigation -->
				<div class="row show-for-medium-up">
					<div class="large-12 columns">
						<nav class="top-bar" data-topbar>
							<ul class="title-area">
								<!-- Title Area -->
								<li class="name"><h1><a href="."><img src="img/logo.png" width="200" height="auto"></a></h1></li>
								<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
							</ul>
							<section class="top-bar-section">
								<!-- Right Nav Section -->
								<ul class="right">
									<li class="divider"></li>
									<li><a href=".">Home</a></li>
									<li class="divider"></li>
									<li><a href="search.php">Search By Report</a></li>
									<li class="divider"></li>
									<li><a href="http://www.messiahapp.com/team.php">About Us</a></li>
									<li class="divider"></li>
									<li><a href="http://www.messiahapp.com/contact.php">Contact Us</a></li>
									<li class="divider"></li>
									<li><a href="#" data-options="align:left" data-dropdown="login" class="">Log In</a></li>
									<li class="divider"></li>
								</ul>
							</section>
						</nav>
					</div>
				</div>
				<div id="login" class="f-dropdown small content" data-dropdown-content>
					<div class="alert-box">Log In Here</div>
						<form action="" method="post" enctype="multipart/form-data">
							<label>	
								<div class="row collapse">
									<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-user"></span></span></div>
									<div class="small-9 large-10 columns"><input type="text" name="Username" id="Username" placeholder="Enter your Username" required></div>
								</div>
							</label>
							<label>	
								<div class="row collapse">
									<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-key"></span></span></div>
									<div class="small-9 large-10 columns"><input type="password" name="Password" id="Password" placeholder="Enter your Password" required></div>
								</div>
							</label>
							<label>
								<div class="row collapse">
									<div class="large-12 columns"><input name="login" type="submit" class="button expand success" value="Log In" ></div>
								</div>
							</label>
						</form>
					</div><br><br>
					<div id="messenger" class="row panel radius">
						<div class="large-9 columns">
							<h4>One Click Messenger</h4><hr>
							<p>Messiah acts as your one click messenger and allows you to contact your loved ones in case of emergency by just the press of a button. This button also alerts your nearby messiahs of your distress signal.</p>
						</div>
						<div class="large-3 columns"><img src="img/feature-1.png" width="400" height="400"></div>
					</div>
                	<div id="nearby-messiah" class="row panel callout radius">
						<div class="large-3 columns"><img src="img/feature-2.png" width="400" height="400"></div>
						<div class="large-9 columns">
							<h4>Be a Messiah</h4><hr>
							<p>Be a part of a growing community of messiahs and spread the message of humanity across barriers. If someone is in trouble nearby you can help them out. Similarly you can ask for help in case of emergency from nearby messiahs. We take volunteering as a messiah very seriously and verify every messiah's provided information.</p>
						</div>
					</div>
	                <div id="speed-dial" class="row panel radius">
						<div class="large-9 columns">
							<h4>Speed Dial</h4><hr>
							<p>Messiah's built in speed dial is intuitively designed to help you reach out to your loved ones via telephone faster than the stock speed dial application.</p>
						</div>
                    	<div class="large-3 columns"><img src="img/feature-3.png" width="400" height="400"></div>
					</div>
    	            <div id="accident-mode" class="row panel callout radius">
						<div class="large-3 columns"><img src="img/feature-4.png" width="400" height="400"></div>
						<div class="large-9 columns">
							<h4>Accident Mode</h4><hr>
							<p>Messiah's built in accident detection mode can detect collisions and verify if you are ok. In case of a mishap it alerts your loved ones and nearby messiahs of your location and possible distress.</p>
						</div>
					</div>
					<div id="accident-mode" class="row panel radius">
						<div class="large-9 columns">
							<h4>Saftey tip of the day</h4><hr>
							<p>Keep your senses sharp by receiving daily tips on keeping yourself and your neighbourhood safe. These simple tips can help you in your daily routines to be alert and keeping yourself and those around you away from harm.</p>
						</div>
						<div class="large-3 columns"><img src="img/feature-5.png" width="400" height="400"></div>
					</div>
					<footer class="row">
						<div class="large-12 columns">
							<hr>
							<div class="row">
								<div class="large-6 columns">
									<a href="#"><img src="img/messiah-logo.png" width="30" height="auto"></a> 
									<a href="http://www.codeforpakistan.org/"><img src="img/code-for-pakistan.png" width="120" height="auto"></a> 
									<a href="http://www.kpitb.gov.pk/"><img src="img/kp-itboard.png" width="120" height="auto"></a>
							</div>
							<div class="large-6 columns">
								<ul class="inline-list right">
									<li><a href=".">Home</a></li>
									<li><a href="search.php">Search By Report</a></li>
									<li><a href="http://www.messiahapp.com/team.php">About Us</a></li>
									<li><a href="http://www.messiahapp.com/contact.php">Contact Us</a></li>
									<li><a href="login.php">Log In</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- End of inner-wrap -->
		</div>
        <!-- End of off-canvas -->
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
