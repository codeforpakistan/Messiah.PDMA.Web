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
		<link rel="stylesheet" href="css/normalize.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,700,900' rel='stylesheet' type='text/css'>
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
					<a style="margin-left:55px;" href="."><img src="img/logo.png" width="100" height="auto"></a>
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
						<?php if(isset($_SESSION['pdma_loggedin'])){ ?>
						<li><a href="pdma.php">Dashboard</a></li>
						<li class="divider"></li>
						<?php } ?>
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
								<li class="name"><h1><a href="."><img src="img/logo.png" width="100" height="auto"></a></h1></li>
								<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
							</ul>
							<section class="top-bar-section">
								<!-- Right Nav Section -->
								<ul class="off-canvas-list">
									<li class="divider"></li>
									<li><a href="."><img src="img/logo.png" width="180" height="auto"></a></li>
									<li class="divider"></li>
									<li><a href=".">Home</a></li>
									<li class="divider"></li>
									<li><a href="search.php">Search By Report</a></li>
									<li class="divider"></li>
									<?php if(isset($_SESSION['pdma_loggedin'])){ ?>
									<li><a href="pdma.php">Dashboard</a></li>
									<li class="divider"></li>
									<?php } ?>
									<li><a href="http://www.messiahapp.com/team.php">About Us</a></li>
									<li class="divider"></li>
									<li><a href="http://www.messiahapp.com/contact.php">Contact Us</a></li>
									<li class="divider"></li>
									<li><a href="#" data-options="align:left" data-dropdown="login" class="">Log In</a></li>
								</ul>
								<ul class="right">
									<li><a href="#" data-options="align:left" data-dropdown="login" class="">Log In</a></li>
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
									<div class="small-9 large-10 columns"><input type="text"  name="Username" id="Username" placeholder="Enter your Username" required></div>
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
					<div class="row">
						<div><h4>Search Report Here</h4></div>
						<div class="large-10 medium-10 small-10 large-offset-1 medium-offset-1 small-offset-1">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="large-5 columns">
										<div class="row collapse">
											<label>
												<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-credit-card"></span> NIC</span></div>
												<div class="small-9 large-10 columns"><input name="CNIC" id="CNIC" type="text" placeholder="Enter your NIC"></div>
											</label>
										</div>
									</div>
									<div class="large-5 columns">
										<div class="row collapse">
											<label>
												<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-barcode"></span> GID</span></div>
												<div class="small-9 large-10 columns"><input type="text" name="GID" id="GID" placeholder="Enter the Grievance ID provided to you"></div>
											</label>
										</div>
									</div>
									<div class="large-2 columns">
										<div class="row collapse">
											<label>
												<div class="small-9 large-10 columns"><input type="submit" name="search" value="Search" class="button tiny" ></div>
											</label>
										</div>
									</div>
								</div>
							</form>
						</div>
							<?php
								if(isset($_POST['CNIC']) || isset($_POST['GID'])){
									var_dump($_POST['GID']);
									$dbFunctions = new \ClassLibrary\DBFunctions();
									$response  = $dbFunctions->searchByNIC($_POST['CNIC']);
								}
							?>
							<div class="small-12">
								<table>
									<thead>
										<tr>
											<th width="200">Name</th>
											<th>Father Name</th>
											<th>Address</th>
											<th>Contact</th>
											<th width="150">Damage Type</th>
											<th width="150">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Content Goes Here</td>
											<td>Content Goes Here</td>
											<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
											<td>Content Goes Here</td>
											<td>Content Goes Here</td>
											<td>Content Goes Here</td>
										</tr>
									</tbody>
								</table>
							</div>
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
									<li><a href=".">Overview</a></li>
									<li><a href="features.php">Features</a></li>
									<li><a href="team.php">Team</a></li>
									<li><a href="contact.php">Contact Us</a></li>
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
