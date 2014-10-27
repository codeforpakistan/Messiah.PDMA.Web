<?php
	require 'inc/api.login_web_controller.php';
	// Logout
	if (isset($_GET['logout'])) {
		require 'logout.php';
	}

	if(isset($_SESSION['pdma_loggedin'])){
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
		<script src="https://maps.googleapis.com/maps/api/js"></script>
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
					<li><a href="pdma.php?logout">Logout</a></li>
				</ul>
                <!-- Right Nav Section -->
				<!-- Off Canvas Menu -->
				<aside class="left-off-canvas-menu">
					<!-- whatever you want goes here -->
					<ul class="off-canvas-list">
						<li class="divider"></li>
						<li><a href="#"><img src="img/logo.png" width="180" height="auto"></a></li>
						<li class="divider"></li>
						<li><a href="search.php">Search By Report</a></li>
						<li class="divider"></li>
						<li><a href="pdma.php?table=revieved-sms">Recieved Messages</a></li>
						<li class="divider"></li>
						<li><a href="pdma.php?table=view-all-reports">View All Reports</a></li>
						<li class="divider"></li>
						<li><a href="pdma.php?table=stats">Statistics</a></li>
						<li class="divider"></li>
					</ul>
				</aside>
				<!-- main content goes here -->
				<!-- close the off-canvas menu -->
				<a class="exit-off-canvas"></a><br><br>
				<div class="row">
					<div class="small-12 columns">
						<!-- All to PDMA Content goes here -->
						<?php
							//Code to handle tables
							switch ($_GET['table']) {
								case 'view-all-reports':
									include 'inc/api.view_all_reports_controller.php';
									break;
								
								case 'view_detailed_report':
									if(isset($_GET['GID'])){
										include 'inc/api.view_detailed_reports_controller.php';	
									}
									break;
								
								case 'revieved-sms':
									include 'inc/api.smile_sms_controller.php';
									break;
								
								case 'stats':
									//header("Location: pdma.php?table=stats");
									break;
								
								default:
									header("Location: pdma.php?table=view-all-reports");
									break;
							}
						?>
					</div>
				</div>
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
<?php } else {
	\ClassLibrary\UsableFunctions::redirect_to("login.php");
}?>