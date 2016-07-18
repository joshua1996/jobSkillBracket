<html>

<head>
       <link rel="stylesheet" type="text/css" href="../css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/site.min.js"></script>

</head>

<body>
    <!-- wrapper page -->
    <div class="wrapper">
        <!-- main-header -->
        <header class="main-header">


            <!-- main navbar -->
           <?php require '../header.php'; ?>
            <!-- end main navbar -->

            <!-- mobile navbar -->
            <div class="container">
                <nav class="mobile-nav hidden-md hidden-lg">
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
                            <li class=""><a href="job_post_1.php"><strong>Post a Job</strong></a></li>
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
                <div class="text-center logo">
                    <a href="index.php"><img src="../images/logo.png" alt=""></a>
                </div>
            </div>

            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
        </header>
        <!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix">

            <div class="block-section bg-color4">
                <div class="container">
                    <div class="panel panel-md">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- buttons top -->
                                    <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Register with Facebook</a></p>
                                    <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Register with Google</a></p>
                                    <!-- end buttons top -->

                                    <div class="white-space-10"></div>
                                    <p class="text-center"><span class="span-line">OR</span></p>

                                    <!-- form login -->
                                    <form  action="registerPhp.php" method="post">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Your Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Re-type Password</label>
                                            <input type="password" class="form-control" placeholder="Re-type Your Password" name="repassword">
                                        </div>
                                        <div class="white-space-10"></div>
                                        <div class="form-group no-margin">
                                            <button class="btn btn-theme btn-lg btn-t-primary btn-block" name="regisButton" type="submit">Register</button>
                                        </div>
                                    </form>
                                    <!-- form login -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="white-space-20"></div>
                    <div class="text-center color-white">By creating an account, you agree to JobPlanet
                        <br><a href="#" class="link-white"><strong>Terms of Service</strong></a> and consent to our <a href="#" class="link-white"><strong>Privacy Policy</strong></a>.</div>
                </div>
            </div>

            <div class="block-section bg-color2">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <i class="fa fa-question fa-5x box-icon"></i>
                            <h2 class=""> Why create an account?</h2>
                            <hr>
                            <p><i class="fa fa-check"></i> Manage, create and delete your job alerts</p>
                            <p><i class="fa fa-check"></i> Access your saved jobs and notes from any computer</p>

                        </div>
                    </div>
                </div>
            </div>

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