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
                            <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                            <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                            <li class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                            <li><a href="login.html"><strong>Login</strong></a></li>
                            <li><a href="register.html"><strong>Register</strong></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="blog.html">Articles &amp; Blog</a></li>
                                    <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                                    <li><a href="error_404.html">Error 404</a></li>
                                    <li><a href="shortcode.html">Short Code</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Features <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="job_list.html">Find a Job</a></li>
                                    <li><a href="job_details.html">Job Details</a></li>
                                    <li><a href="resume_list.html">Find Resumes</a></li>
                                    <li><a href="resume_details.html">Resume Details</a></li>
                                    <li><a href="job_post_2.html">Post a Job</a></li>
                                    <li><a href="company_page.html">Company Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- mobile navbar -->


            <div class="container">
                <div class="text-center logo">
                    <a href="http://localhost:8080/jobSkillBracket/index.php"><img src="../images/logo.png" alt=""></a>
                </div>
                <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
            </div>

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
                                    <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Login with Facebook</a></p>
                                    <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Login with Google</a></p>
                                    <!-- end buttons top -->

                                    <div class="white-space-10"></div>
                                    <p class="text-center"><span class="span-line">OR</span></p>

                                    <!-- form login -->
                                    <form method="post" action="../registerPhp.php">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Your Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="fa fa-check"></span> Remember me?
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <p class="help-block"><a href="#myModal" data-toggle="modal">Forgot password?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group no-margin">
                                            <button class="btn btn-theme btn-lg btn-t-primary btn-block" name="loginButton">Log In</button>
                                        </div>
                                    </form>
                                    <!-- form login -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="white-space-20"></div>
                    <div class="text-center color-white">Not a member? &nbsp; <a href="#" class="link-white"><strong>Create an account free</strong></a></div>
                </div>
            </div>

            <!-- box bottom -->
            <div class="block-section bg-color2">
                <div class="container text-center">
                    <i class="fa fa-mobile-phone fa-5x box-icon"></i>
                    <h2 class=""> Find jobs with your phone</h2>

                    <p>Download the JobPlanet app from the</p>
                    <a href="#" class="btn btn-theme btn-default"><i class="fa fa-android bordered-right dark"></i> Android</a>
                    <span class="space-inline-10"></span>
                    <a href="#" class="btn btn-theme btn-default"><i class="fa fa-apple bordered-right dark"></i> Iphone</a>
                </div>
            </div>
            <!-- end box bottom -->

            <!-- modal forgot password -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Forgot Password</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Enter Your Email</label>
                                    <input type="email" class="form-control " name="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success btn-theme">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal forgot password -->
        </div>
        <!--end body-content -->


        <!-- main-footer -->
        <footer class="main-footer">


            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline link-footer text-center-xs">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
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




  


</body>