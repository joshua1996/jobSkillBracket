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
            <?php require( 'header.php'); ?>
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
                            <li class="active"><a href="job_list.php"><strong>Find a Job</strong></a></li>
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


            <!-- form search area-->
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <!-- logo -->
                        <div class="logo text-center-sm">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- form search -->
                        <form class="form-search-list">
                            <div class="row">
                                <div class="col-sm-5 col-xs-6 ">
                                    <div class="form-group">
                                        <label class="color-white">What</label>
                                        <input class="form-control" placeholder="job title, keywords or company name">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-6 ">
                                    <div class="form-group">
                                        <label class="color-white">Where</label>
                                        <input class="form-control" placeholder="city, province, or region">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-12 ">
                                    <div class="form-group">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="btn btn-block btn-theme  btn-success">Search</button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-right"><a href="#modal-advanced" data-toggle="modal" class="link-white">Advanced Search</a></p>
                        </form>
                        <!-- form search -->
                    </div>


                </div>


                <!-- modal Advanced search -->
                <div class="modal fade" id="modal-advanced">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Advanced Job Search</h4>
                                </div>
                                <div class="modal-body">
                                    <h5>Find Jobs</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>With all of these words</label>
                                                <input type="text" class="form-control " name="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>With the exact phrase</label>
                                                <input type="text" class="form-control " name="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Show jobs of type</label>
                                        <select class="form-control">
                                            <option value="all">All job types</option>
                                            <option value="fulltime">Full-time</option>
                                            <option value="parttime">Part-time</option>
                                            <option value="contract">Contract</option>
                                            <option value="internship">Internship</option>
                                            <option value="temporary">Temporary</option>
                                        </select>
                                    </div>
                                    <div class="white-space-10"></div>
                                    <h5>Where and When</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Radius </label>
                                                <select id="radius" class="form-control">
                                                    <option value="0">only in</option>
                                                    <option value="5">within 5 kilometers </option>
                                                    <option value="10">within 10 kilometers </option>
                                                    <option value="15">within 15 kilometers </option>
                                                    <option selected="" value="25">within 25 kilometers </option>
                                                    <option value="50">within 50 kilometers </option>
                                                    <option value="100">within 100 kilometers </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Of </label>
                                                <input type="text" class="form-control" maxlength="250" value="United States">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age - Jobs published </label>
                                                <select class="form-control">
                                                    <option value="any">anytime</option>
                                                    <option value="15">within 15 days</option>
                                                    <option value="7">within 7 days</option>
                                                    <option value="3">within 3 days</option>
                                                    <option value="1">since yesterday</option>
                                                    <option value="last">since my last visit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Display</label>
                                                <select class="form-control">
                                                    <option selected="" value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success btn-theme">Find Jobs</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal forgot password -->




            </div>
            <!-- end form search area-->

        </header>
        <!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix">

            <!-- link top -->
            <div class="bg-color2 block-section-xs line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div>Job details :</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right"><a href="#">« Go back to job listings</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end link top -->

            <div class="bg-color2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">

                            <!-- box item details -->
                            <div class="block-section box-item-details">
                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="company_page.php"><img src="./assets/theme/images/patner/4.png" alt=""></a>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-right"><a href="#">Go to our website »</a></p>
                                    </div>
                                </div>

                                <h2 class="title"><a href="#"><?php echo 'ss'; ?></a></h2>
                                <div class="job-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-briefcase"></i> Contract Full-Time</li>
                                        <li><i class="fa fa-map-marker"></i> San Diego, CA</li>
                                        <li><i class="fa fa-money"></i> $50k - $140k</li>
                                    </ul>
                                </div>
                                <p>Location: New York, NY Type: Contracted to Full Time Min. Experience: Experienced Krossover is looking for a Web Application Developer to join our team of smart developers. We build web and mobile applications and games for coaches, athletes and fans. If you're a talented programmer, and like sports and sports analytics, this is the position for you.</p>
                                <p>Our ideal candidate is technically curious, has a solid understanding of OOP and web development, and wants to build applications that improve people's lives.</p>
                                <p>We're interested in filling this position on either a contract or full-time basis. </p>

                                <h4>What you'll do:</h4>
                                <ul>
                                    <li>Build operations related applications for daily use</li>
                                    <li>Create dashboards and daily / weekly reports </li>
                                    <li>Architect features with the development team</li>
                                    <li>PHP and/or JavaScript development. (We use Silex and AngularJS.)</li>
                                </ul>
                                <h4>What we're looking for:</h4>
                                <ul>
                                    <li>Experience with the web. Know your GET vs. POST</li>
                                    <li>OOP concepts</li>
                                    <li>Experience with at least one OOP language, such as:
                                        <ul>
                                            <li>PHP</li>
                                            <li>Java</li>
                                            <li>C#</li>
                                            <li>Ruby</li>
                                            <li>etc.</li>
                                        </ul>
                                    </li>
                                    <li>A love of clean, understandable code and interface</li>
                                    <li>You can SELECT, INSERT, UPDATE and DELETE in your SQL database all day</li>
                                    <li>Experience working on a team</li>
                                    <li>Smarts, humility, and the desire to teach and learn</li>
                                </ul>

                                <p>Krossover is a sports media and analytics startup that brings easy video breakdown and in-depth analytics to coaches and athletes at all levels. Think Friday Night Lights meets Moneyball. We're located in New York's Chelsea neighborhood. It's a spacious, sunny office with not a single grey wall anywhere. Our culture is one of intelligence and collaboration. Every now and then we talk sports.</p>
                                <p>We offer a competitive salary and benefits.</p>
                            </div>
                            <!-- end box item details -->

                        </div>
                        <div class="col-md-3">

                            <!-- box affix right -->
                            <div class="block-section affix-top" id="affix-box">
                                <div class="text-right">
                                    <p><a href="#" class="btn btn-theme btn-line dark btn-block-xs">Aplly WIth Linkedin</a></p>
                                    <p><a href="#modal-apply" data-toggle="modal" class="btn btn-theme btn-t-primary btn-block-xs">Apply This Job</a></p>
                                    <p><a href="#" class="btn btn-theme btn-t-primary btn-block-xs">Login to Save This Job</a></p>
                                    <p><a href="#map-toogle" id="btn-map-toogle" data-toggle="collapse" class="btn btn-theme btn-t-primary btn-block-xs">Ofice Location</a></p>
                                    <p>Share This Job <span class="space-inline-10"></span> :</p>
                                    <p class="share-btns">
                                        <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="fa fa-envelope"></i></a>
                                    </p>
                                </div>
                            </div>
                            <!-- box affix right -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- block map -->
            <div class="collapse" id="map-toogle">
                <div class=" bg-color2" id="map-area">
                    <div class="container">
                        <div class="marker-description">
                            <div class="inner">
                                <h4 class="no-margin-top">Office Location</h4> Central Jakarta No 1234, Jakarta, Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="map-area-detail">
                        <!-- change data  lat abd lng here -->
                        <div class="box-map-detail" id="map-detail-job" data-lat="48.856318" data-lng="2.351866"></div>
                    </div>
                </div>
            </div>
            <!-- end block map -->





            <!-- modal apply -->
            <div class="modal fade" id="modal-apply">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Apply</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="email" class="form-control " placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control " placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Tell us why you better?</label>
                                    <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Your Resume</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                        <span class="btn btn-default btn-theme btn-file">
                          File  <input type="file">
                        </span>
                                        </span>
                                        <input type="text" class="form-control form-flat" readonly="">
                                    </div>
                                    <small>Upload your CV/resume. Max. file size: 24 MB.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success btn-theme">Send Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal  apply -->
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