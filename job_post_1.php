<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/site.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <script type="text/javascript" src="js/site.min.js"></script>

</head>

<body>
	
    <!-- wrapper page -->
    <div class="wrapper">
        <!-- main-header -->
        <header class="main-header">


            <!-- main navbar -->
            <?php require('header.php'); ?>
            <!-- end main navbar -->

            <!-- mobile navbar -->
            <div class="container">
                <nav class="mobile-nav hidden-md hidden-lg">

                    <ul class="nav navbar-nav nav-block-left">
                        <li class="dropdown">
                            <a href="#" class="link-profile dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/theme/images/people/4.jpg" alt="" class="img-profile"> &nbsp; Jhon <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="my_alerts.php"> My Alerts </a></li>
                                <li><a href="my_notifications.php"> Notifications <span class="badge ">5</span></a></li>
                                <li><a href="change_password.php"> Change Password</a></li>
                                <li><a href="index.php"> Logout</a></li>
                            </ul>
                        </li>
                    </ul>


                    <a href="#" class="btn-nav-toogle first">
                        <span class="bars"></span> Menu
                    </a>
                    <div class="mobile-nav-block">
                        <h4>Navigation</h4>
                        <a href="#" class="btn-nav-toogle">
                            <span class="barsclose"></span> Close
                        </a>

                        <ul class="nav navbar-nav">
                            <li class=""><a href="job_list.php"><strong>Find a Job</strong></a></li>
                            <li class=""><a href="resume_list.php"><strong>Find Resumes</strong></a></li>
                            <li class="active"><a href="job_post_1.php"><strong>Post a Job</strong></a></li>
                            <li><a href="login.php"><strong>Login</strong></a></li>
                            <li><a href="register.php"><strong>Register</strong></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="blog.php">Articles &amp; Blog</a></li>
                                    <li><a href="terms_privacy.php">Terms &amp; Privacy</a></li>
                                    <li><a href="error_404.php">Error 404</a></li>
                                    <li><a href="shortcode.php">Short Code</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Features <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="job_list.php">Find a Job</a></li>
                                    <li><a href="job_details.php">Job Details</a></li>
                                    <li><a href="resume_list.php">Find Resumes</a></li>
                                    <li><a href="resume_details.php">Resume Details</a></li>
                                    <li><a href="job_post_2.php">Post a Job</a></li>
                                    <li><a href="company_page.php">Company Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- mobile navbar -->


            <div class="container">
                <div class="text-center logo no-margin-bottom">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
                <h3 class="color-white text-center ">For Employers</h3>
                <p class="text-center "><a href="#" class="link-white">Contact Sales »</a></p>
                <div class="white-space-40"></div>
            </div>
            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
        </header>
        <!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix">


            <!-- pricing 3 cols -->
            <div class="block-section bg-color1 line-bottom">
                <div class="container ">
                    <!-- text centered -->
                    <div class="text-center">
                        <strong class="text-uppercase">select your plan</strong>
                        <h2>Plan pricing three columns no space.</h2>
                        <div class="white-space-30"></div>
                    </div>
                    <!-- text centered -->

                    <div class="row plan-nospace">
                        <div class=" col-md-4 plan-item">
                            <!-- plan box -->
                            <div class="plan">
                                <div class="plan-title">
                                    <h3>1 Job Posting</h3>
                                </div>

                                <div class="plan-price">
                                    <span class="price ">$25</span>
                                </div>

                                <div class="plan-list">
                                    <ul class="item-list list-unstyled">
                                        <li><strong>1</strong> Credit</li>
                                        <li><strong>1 Year</strong> Credit Expires</li>
                                        <li><strong>Unable</strong> Search Resume</li>

                                    </ul>
                                    <button type="button" class="btn btn-t-primary btn-theme btn-lg btn-square btn-block"> Purchase</button>
                                </div>
                            </div>
                            <!-- plan box -->
                        </div>

                        <div class=" col-md-4 plan-item">
                            <!-- plan box -->
                            <div class="plan popular">
                                <div class="plan-title">
                                    <h3>5 Job Postings</h3>

                                </div>

                                <div class="plan-price">
                                    <span class="price ">$35</span>
                                </div>

                                <div class="plan-list">
                                    <ul class="item-list list-unstyled">
                                        <li><strong>5</strong> Credits</li>
                                        <li><strong>1 Year</strong> Credit Expires</li>
                                        <li><strong>Enable</strong> Search Resume</li>
                                    </ul>
                                    <button type="button" class="btn btn-t-primary btn-theme btn-lg btn-square btn-block"> Purchase</button>
                                </div>
                            </div>
                            <!-- end plan box -->
                        </div>

                        <div class=" col-md-4 plan-item">
                            <!-- plan box -->
                            <div class="plan">
                                <div class="plan-title">
                                    <h3>20 Job Postings</h3>
                                </div>

                                <div class="plan-price">
                                    <span class="price ">$45</span>
                                </div>

                                <div class="plan-list">
                                    <ul class="item-list list-unstyled">
                                        <li><strong>20</strong> Credits</li>
                                        <li><strong>1 Year</strong> Credit Expires</li>
                                        <li><strong>Enable</strong> Search Resume</li>
                                    </ul>
                                    <button type="button" class="btn btn-t-primary btn-theme btn-lg btn-square btn-block"> Purchase</button>
                                </div>
                            </div>
                            <!-- end plan box -->
                        </div>

                    </div>

                    <p class="text-center"><span class="span-line">Learn More</span></p>

                </div>
            </div>
            <!-- end pricing 3 cols -->

            <!-- block promo -->
            <div class="block-section bg-color2 line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center-sm">
                            <h2>Post a Job</h2>
                            <p>Post your jobs directly to JobPlanet in minutes. You'll get quality applicants sent directly to your inbox, no website required.</p>
                            <p><a href="job_post_2.php" class=" btn btn-theme btn-t-primary">Post On JobPlanet</a></p>
                            <p><a href="#">Learn more about posting your jobs on JobPlanet</a></p>
                        </div>
                        <div class="col-md-6 text-center hidden-sm hidden-xs">
                            <img src="images/mac1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end block promo -->

            <!-- block promo -->
            <div class="block-section bg-color1 line-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 text-center hidden-sm hidden-xs"> <img src="images/mac.png" alt=""></div>
                        <div class="col-md-6 text-center-sm">
                            <h2>Company Profile</h2>
                            <p>Post your jobs directly to JobPlanet in minutes. You'll get quality applicants sent directly to your inbox, no website required.</p>
                            <p><a href="company_page.php" class=" btn btn-theme btn-t-primary">Learn more about company pages</a></p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end block promo -->


            <!-- block promo -->
            <div class="block-section bg-color2 line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center-sm">
                            <h2>Resume Search</h2>
                            <p>Post your jobs directly to JobPlanet in minutes. You'll get quality applicants sent directly to your inbox, no website required.</p>
                            <p><a href="resume_list.php" class=" btn btn-theme btn-t-primary">Find Resumes</a></p>
                            <p><a href="#">Learn more about JobPlanet Resume</a></p>
                        </div>
                        <div class="col-md-6 text-center hidden-sm hidden-xs">
                            <img src="images/mac2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end block promo -->

            <!-- block bottom -->
            <div class="block-section bg-color1">
                <div class="container text-center">
                    <strong class="text-uppercase">support</strong>
                    <h2>Any questions?</h2>
                    <div class="white-space-20"></div>
                    <a href="#" class="btn btn-t-primary  btn-theme">Contact Us</a>
                </div>
            </div>
            <!-- end block bottom -->

        </div>
        <!--end body-content -->


        <!-- main-footer -->
        <footer class="main-footer">


            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline link-footer text-center-xs">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 ">
                        <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
                        <div class="socials text-right text-center-xs">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end main-footer -->

    </div>
    <!-- end wrapper page -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="assets/plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="assets/theme/js/map-detail.js"></script>


</body>