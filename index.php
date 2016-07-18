<html>

<head>
   <link rel="stylesheet" type="text/css" href="css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/site.min.js"></script>

</head>

<body>
	
    <!-- wrapper page -->
    <div class="wrapper">
        <!-- main-header -->
        <header class="main-header">

            <!-- main navbar -->
            <?php require 'header.php'; ?>

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


                    </div>
                </nav>
            </div>
            <!-- mobile navbar -->

            <div class="hero-header">
                <div class="inner-hero-header">
                    <div class="container">
                        <div class="text-center logo">
                            <a href="index.php"><img src="images/logoNew.png" alt=""></a>
                        </div>
                        <div class="relative">
                            <i class="fa fa-globe ic-fade-globe"></i>
                            <!-- form search -->
                            <form class="form-search-home" method="post" action="job_list.php?page=1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What</label>
                                            <input class="form-control  input-lg" placeholder="job title, keywords or company name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Where</label>
                                            <input class="form-control input-lg" placeholder="city, province, or region">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block">Find a Jobs</button>
                                </div>
                                <div class="text-center">
                                    <a href="#modal-advanced" data-toggle="modal">Advanced Job Search</a>
                                </div>
                            </form>
                            <!-- end form search -->
                        </div>
                    </div>
                    <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
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
        </header>
        <!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix">

            <!-- box simple static -->
            <div class="block-section bg-color1">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h3 class="font-2x ">203,285</h3>
                            <h4 class="color-text">Registered Member</h4>
                        </div>
                        <div class="col-md-4">
                            <h3 class="font-2x ">3,603,945</h3>
                            <h4 class="color-text">Joblist Posted</h4>
                        </div>
                        <div class="col-md-4">
                            <h3 class="font-2x ">53,945</h3>
                            <h4 class="color-text">Awesome Company</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end box simple static -->

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




    


</body>

</html>