<?php
    require 'inc/api.data_controller.php';
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
                            <div class="small-9 large-10 columns"><input type="text" placeholder="Enter your Username" required></div>
                        </div>
                    </label>
                    <label> 
                        <div class="row collapse">
                            <div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-key"></span></span></div>
                            <div class="small-9 large-10 columns"><input type="password" placeholder="Enter your Password" required></div>
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
                <div class="large-12 medium-12 small-12" align="center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><strong>GID</strong></td>
                                <td>
                                    <input type="text" name="GID" id="GID" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Username</strong></td>
                                <td>
                                    <input type="text" name="Username" id="Username" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Applicant Name</strong></td>
                                <td>
                                    <input type="text" name="ApplicantName" id="ApplicantName" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Father Name</strong></td>
                                <td>
                                    <input type="text" name="FatherName" id="FatherName" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>CNIC</strong></td>
                                <td>
                                    <input type="text" name="CNIC" id="CNIC" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Phone Number</strong></td>
                                <td>
                                    <input type="text" name="PhoneNumber" id="PhoneNumber" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td>
                                    <textarea name="Address" id="Address" cols="45" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Damage</strong></td>
                                <td>
                                    <input type="text" name="Damage" id="Damage" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Date</strong></td>
                                <td>
                                    <input type="date" name="Date" id="Date" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Location</strong></td>
                                <td>
                                    <input type="text" name="Location" id="Location" />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Detail</strong></td>
                                <td>
                                    <textarea name="Detail" id="Detail" cols="45" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Raw Data</strong></td>
                                <td>
                                    <textarea name="RawData" id="RawData" cols="45" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="right">
                                        <input type="submit" class="button" name="insert" id="insert" value="Insert" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
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
