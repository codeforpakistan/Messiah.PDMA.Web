<?php
    require 'inc/api.login_web_controller.php';
    if(isset($_SESSION['pdma_loggedin'])){
    	\ClassLibrary\UsableFunctions::redirect_to("pdma.php");
    }
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
    	<div class="row">
			<div class="large-12 columns">
				<nav class="top-bar" data-topbar>
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name"><h1><a href="."><img src="img/logo.png" width="200" height="auto"></a></h1></li>
					</ul>
				</nav>
			</div>
		</div><br><br><br><br><br><br><br>
		<div class="row">
			<div class="large-4 medium-6 small-10 large-offset-4 medium-offset-3 small-offset-1">
				<div class="alert-box"><h4 style="color:#FFFFFF">Log In Here</h4></div>
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
				</div>
			</div>
		</div><br><br><br><br><br><br>
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
							<li><a href="search.php?search">Search By Report</a></li>
							<li><a href="http://www.messiahapp.com/team.php">About Us</a></li>
							<li><a href="http://www.messiahapp.com/contact.php">Contact Us</a></li>
							<li><a href="login.php">Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			document.write('<script src=js/vendor/' +
			('__proto__' in {} ? 'zepto' : 'jquery') +
			'.js><\/script>')
		</script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
