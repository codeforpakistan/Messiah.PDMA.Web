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
	<body style="background-color:#ecf0f1">
		<!-- Off Canvas -->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<nav class="tab-bar">
					<section class="left-small">
						<a class="left-off-canvas-toggle menu-icon"><span></span></a>
					</section>
					<section class="right">
						<a href="#" data-dropdown="user-details" data-options="align:left" class="fa fa-2x fa-user user-icon dropdown">
							<span style="font-size:18px; font-family:Lato"> User</span>
						</a>&nbsp;&nbsp;&nbsp;
					</section>
					<a style="margin-left:55px;" href="."><img src="img/logo.png" width="200" height="auto"></a>
				</nav>
				<ul id="user-details" data-dropdown-content class="f-dropdown">
					<li><a href="#">Logout</a></li>
				</ul>
                <!-- Right Nav Section -->
				<!-- Off Canvas Menu -->
				<aside class="left-off-canvas-menu">
					<!-- whatever you want goes here -->
					<ul class="off-canvas-list">
						<li class="divider"></li>
						<li><a href="#"><img src="img/logo.png" width="180" height="auto"></a></li>
						<li class="divider"></li>
						<li><a href=".">Home</a></li>
						<li class="divider"></li>
						<li><a href="search.php">Search By Report</a></li>
						<li class="divider"></li>
						<li><a href="pdma.php#revieved-sms">Recieved SMSs</a></li>
						<li class="divider"></li>
					</ul>
				</aside>
				<!-- main content goes here -->
				<!-- close the off-canvas menu -->
				<a class="exit-off-canvas"></a><br><br>
				<div class="small-12 columns">
					<!-- All to PDMA Content goes here -->
					<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
				</div>
				<footer>
					<div class="large-12 columns">
						<hr>
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
				</footer>
			</div>
			<!-- End of inner-wrap -->
		</div>
        <!-- End of off-canvas -->
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation({
				offcanvas : {
					open_method: 'move', // Sets method in which offcanvas opens, can also be 'overlap'
					close_on_click : true
				}
			});
			$(document).on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
				$('html').css('overflow', 'hidden');
			}).on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
				$('html').css('overflow', 'auto');
			})
		</script>
	</body>
</html>