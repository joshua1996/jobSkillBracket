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
                <div class="text-center logo">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
            </div>

        </header>
        <!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix">

            <div class="bg-color2 block-section line-bottom">
                <div class="container">
                    <h1 class="text-center no-margin">Post a Job</h1>
                </div>
            </div>

            <div class="bg-color1 block-section line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- form post a job -->
                            <form method="post" action="registerPhp.php">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control " placeholder="Enter Company Name" name="company">
                                </div>
                                <div class="form-group">
                                    <label>Job title</label>
                                    <input type="text" class="form-control " placeholder="Enter Job Title" name="jobTitle">
                                </div>
                                <div class="form-group">
                                    <label>Job description</label>
                                    <div class="color-white-mute"><small>Describe the responsibilities of this job, required work experience, skills, or education.</small></div>
                                    <textarea class="form-control" rows="6" placeholder="Enter Job Description" name="jobDescription"></textarea>
                                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                                </div>
                                <div class="form-group">
                                    <label>Locations (optional)</label>
                                    <input type="text" class="form-control " placeholder="Enter Location" name="locations">
                                </div>

                                <!-- checkboxs -->
                                <div class="form-group">
                                    <label>Job Categories</label>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Accounting">
                                                    <span class="fa fa-check"></span> Accounting
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Admin & HR">
                                                    <span class="fa fa-check"></span> Admin &amp; HR
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Banking / Finance">
                                                    <span class="fa fa-check"></span> Banking / Finance
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Beauty Care / Health">
                                                    <span class="fa fa-check"></span> Beauty Care / Health
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Building & Construction">
                                                    <span class="fa fa-check"></span> Building &amp; Construction
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Design">
                                                    <span class="fa fa-check"></span> Design
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Education">
                                                    <span class="fa fa-check"></span> Education
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Engineering">
                                                    <span class="fa fa-check"></span> Engineering
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Hospitality / F & B">
                                                    <span class="fa fa-check"></span> Hospitality / F &amp; B
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Information Technology (IT)">
                                                    <span class="fa fa-check"></span> Information Technology (IT)
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Insurance">
                                                    <span class="fa fa-check"></span> Insurance
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Management">
                                                    <span class="fa fa-check"></span> Management
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Manufacturing">
                                                    <span class="fa fa-check"></span> Manufacturing
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Media & Advertising">
                                                    <span class="fa fa-check"></span> Media &amp; Advertising
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Property">
                                                    <span class="fa fa-check"></span> Property
                                                </label>
                                            </div>
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="jobCategories[]" value="Others">
                                                    <span class="fa fa-check"></span> Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end checkboxs -->


                                <div class="form-group">
                                    <label>Salary (optional)</label>
                                    <div class="row clearfix">
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control " placeholder="Example: 50,000.00" name="salary">
                                        </div>
                                        <div class="col-xs-6">
                                            <select class="form-control" name="salaryTime">
                                                <option value="hour">per hour</option>
                                                <option value="day">per day</option>
                                                <option value="weel">per week</option>
                                                <option value="month">per month</option>
                                                <option value="year">per year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Experience (optional)</label>
                                    <div class="row clearfix">
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control " placeholder="Example: Accounting" name="experience">
                                        </div>
                                        <div class="col-xs-6">
                                            <select class="form-control" name="experienceTime">
                                                <option value="1">1 year</option>
                                                <option value="2">2 years</option>
                                                <option value="3">3 years</option>
                                                <option value="4">4 years</option>
                                                <option value="5">5 years</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p>Applications will be emailed to: <a href="#">your@email.com</a> – <a href="#">change email</a></p>

                                <div class="form-group ">
                                    <button class="btn btn-t-primary btn-theme" name="continue">Continue</button>
                                </div>


                            </form>
                            <!-- end form post a job -->
                        </div>
                    </div>
                </div>
            </div>
            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
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