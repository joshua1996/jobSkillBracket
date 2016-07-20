<?php

include( 'dbConnect.php'); 
$selectQuery =  "select * from company where id='".$_GET['company']."'";
$result = mysqli_query($conn,$selectQuery);
$companyDetail = mysqli_fetch_array($result);

$selectIndustry = "select type from industry where num = '".$companyDetail[2]."'";
$result2 = mysqli_query($conn,$selectIndustry);
$industryDetail = mysqli_fetch_array($result2);

$selectCompanySzie = "select * from companysize where num = '".$companyDetail[3]."'";
$result3 = mysqli_query($conn,$selectCompanySzie);
$companySizeDetail = mysqli_fetch_array($result3);

$selectdressCode = "select * from dressCode where num = '".$companyDetail[4]."'";
$result4 = mysqli_query($conn,$selectdressCode);
$dressCodeDetail = mysqli_fetch_array($result4);

$selectLanguage = "select * from Language where num in (".$companyDetail[5].")";
$result5 = mysqli_query($conn,$selectLanguage);
$LanguageArr = array();
while($LanguageDetail = mysqli_fetch_array($result5)){
	$LanguageArr[] =  $LanguageDetail[1];
}
$LanguageImplode = implode(',', $LanguageArr);
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/site.min.js"></script>

</head>

<body class="single single-company postid-251 logged-in jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive" style="transform: none;">

    <!-- wrapper page -->
    <div class="wrapper" style="transform: none;">

        <!-- main-header -->
        <header class="main-header">

            <!-- main navbar -->
            <?php require 'header.php'; ?>
            <!-- end main navbar -->
            <!-- mobile navbar -->
            <div class="container">
                <nav class="mobile-nav hidden-md hidden-lg">
                    <ul class="nav navbar-nav nav-block-left">
                        <li class="dropdown">
                            <a href="http://jobplanet.jegtheme.com/account/" class="link-profile dropdown-toggle" data-toggle="dropdown">
                                <img alt="" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg" srcset="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg 2x" class="avatar avatar-80 photo img-profile" height="80" width="80"> &nbsp; <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://jobplanet.jegtheme.com/account/edit-account/"> Edit Account </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/change-password/"> Change Password </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/jobs/"> Job List </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/manage-application/"> Manage Application </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/manage-company/"> Manage Company </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/saved-resume/"> Saved Resume </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/manage-package/">Manage Package</a></li>
                                <li class="btn-highlight">
                                    <a href="http://jobplanet.jegtheme.com/create-vacancy/" class="btn-highlight">
        Create Job Vacancy    </a>
                                </li>
                                <li class="btn-highlight">
                                    <a href="http://jobplanet.jegtheme.com/account/create-company/" class="btn-highlight">
        Create Company    </a>
                                </li>
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=fda9397fcb">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="btn-nav-toogle first">
                        <span class="bars"></span> Menu </a>
                    <div class="mobile-nav-block">
                        <h4>Navigation</h4>
                        <a href="#" class="btn-nav-toogle">
                            <span class="barsclose"></span> Close </a>
                        <ul id="menu-primary-1" class="nav navbar-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-154"><a href="http://jobplanet.jegtheme.com/job-list/">Find Job <span class="caret"></span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="http://jobplanet.jegtheme.com/resume-list/">Find Resume <span class="caret"></span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Vacancy <span class="caret"></span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-157 dropdown dropdown"><a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a href="http://jobplanet.jegtheme.com/select-plan/">Select Plan <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="http://jobplanet.jegtheme.com/about-us/">About Us <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206"><a href="http://jobplanet.jegtheme.com/contact/">Contact Us <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-207"><a href="http://jobplanet.jegtheme.com/term-of-service/">Term &amp; Privacy <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="http://jobplanet.jegtheme.com/blog/">Article &amp; Blog <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-464"><a href="http://jobplanet.jegtheme.com/company-listing/">Company Listing <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-161"><a href="http://jobplanet.jegtheme.com/404">Error 404 <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://jobplanet.jegtheme.com/shortcode/">Shortcode <span class="caret"></span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158 dropdown dropdown"><a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">Features <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="http://jobplanet.jegtheme.com/shop/">Shop Page <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Job <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a href="http://jobplanet.jegtheme.com/job-list/">Ajax Job Search <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302"><a href="http://jobplanet.jegtheme.com/resume-list/">Ajax Resume Search <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-job menu-item-305"><a href="http://jobplanet.jegtheme.com/job/ios-applications-developer/">Job Detail <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-resume menu-item-303"><a href="http://jobplanet.jegtheme.com/resume/senior-database-manager/">Resume Detail <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-company menu-item-306"><a href="http://jobplanet.jegtheme.com/company/dream-estate-property/">Company Detail <span class="caret"></span></a></li>
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
                        <div class="logo text-center-sm">
                            <a href="http://jobplanet.jegtheme.com/">
                                <img class="logo-desktop" alt="Responsive Job Board WordPress Themes" src="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png" data-at2x="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png">
                                <img class="logo-mobile" alt="Responsive Job Board WordPress Themes" src="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png" data-at2x="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- form search -->
                        <form class="form-search-list" action="http://jobplanet.jegtheme.com/job-list/" method="get">
                            <div class="row">
                                <div class="col-sm-5 col-xs-6 ">
                                    <div class="form-group">
                                        <label class="color-white">What</label>
                                        <input class="form-control" name="keyword" value="" placeholder="job title, keywords or tags">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-6 ">
                                    <div class="form-group location-form">
                                        <label class="color-white">Where</label>
                                        <input class="form-control location-autocomplete" name="place" placeholder="preferred job location" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-12 ">
                                    <div class="form-group">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="btn btn-block btn-theme  btn-success">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </header>
        <!-- end main-header -->
        <!-- body-content -->
        <div class="body-content clearfix" style="transform: none;">

            <!-- top link -->
            <div class="bg-color2 block-section-xs line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div>Company profile</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <a href="http://jobplanet.jegtheme.com/job-list/">
                            « Go back to job listings                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end top link -->

            <!-- company profile -->
            <div class="bg-color2" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row wrapper" style="transform: none;">
                        <div class="col-md-9 content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                            <!-- box item details -->
                            <div class="block-section box-item-details theiaStickySidebar sticky-content" style="padding-top: 0px; padding-bottom: 0px; position: static;">

                                <!-- logo company-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="company-logo">
                                            <a href="http://jobplanet.jegtheme.com/company/fast-company/">
                                                <img width="265" height="94" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/logo_box-1-option-2.png" class="attachment-full size-full wp-post-image" alt="logo_box-1-option"> </a>
                                        </div>
                                        <div class="company-title text-right">
                                            <a href="http://jegtheme.com" target="_blank">
                                            Go to our website »                                        </a>
                                        </div>
                                    </div>

                                </div>
                                <!-- end logo company-->

                                <!-- Bout Company-->
                                <h3 class="title " id="cp-about">
                            <a href="http://jobplanet.jegtheme.com/company/fast-company/"><?php echo $companyDetail[1]; ?></a>
                        </h3>
                               <?php echo $companyDetail[7]; ?>
                                <h3 class="title" id="cp-detail">Company Detail</h3>

                                <div class="row">
                                    <div class="col-sm-6">

                                        <!-- industry -->
                                        <h5>Industry</h5>
                                        <p><?php echo $industryDetail[0]; ?></p>

                                        <!-- company size -->
                                        <h5>Company Size</h5>
                                        <p><?php echo $companySizeDetail[1]; ?></p>

                                        <!-- dress code -->
                                        <h5>Dress Code</h5>
                                        <p><?php echo $dressCodeDetail[1]; ?></p>

                                        <!-- language -->
                                        <h5>Language</h5>
                                        <p><?php echo $LanguageImplode; ?></p>




                                    </div>
                                    <div class="col-sm-6">


                                        <!-- facebook page -->
                                        <h5>Facebook Page</h5>
                                        <p>
                                            <a class="grey-link" target="_blank" href="http://facebook.com/jegtheme">Visit our Facebook page</a>
                                        </p>

                                        <!-- twitter page -->
                                        <h5>Twitter Page</h5>
                                        <p>
                                            <a class="grey-link" target="_blank" href="http://twitter.com/jegtheme">Visit our Twitter page</a>
                                        </p>

                                        <!-- linked in page -->
                                        <h5>Linked In Page</h5>
                                        <p>
                                            – </p>

                                        <!-- instagram page -->
                                        <h5>Instagram Page</h5>
                                        <p>
                                            – </p>
                                    </div>
                                </div>

                                <!-- galery photos-->
                                <h3 class="title" id="cp-photos">Photos <small>(4)</small></h3>
                                <div class="row company-photos galery-popup-area">
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Work-Table.jpg" class="galery-popup" title="Fast Company">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Work-Table-500x350.jpg" alt="Fast Company" class="img-full">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Work-Desk.jpg" class="galery-popup" title="Fast Company">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Work-Desk-500x350.jpg" alt="Fast Company" class="img-full">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Roundtable.jpg" class="galery-popup" title="Fast Company">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Roundtable-500x350.jpg" alt="Fast Company" class="img-full">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Holiday.jpg" class="galery-popup" title="Fast Company">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Holiday-500x350.jpg" alt="Fast Company" class="img-full">
                                        </a>
                                    </div>
                                </div>

                                <!-- jobs list-->
                                <h3 class="title" id="cp-jobs">Latest Jobs                                <small>(2)</small>
                            </h3>
                                <div class="mt-20">
                                    <h4>
                                    <a href="http://jobplanet.jegtheme.com/job/ios-applications-developer/">
                                        IOS Applications Developer <i class="fa fa-link color-white-mute font-1x"></i>
                                    </a>
                                </h4>
                                    <p>San Francisco, California</p>
                                </div>
                                <div class="mt-20">
                                    <h4>
                                    <a href="http://jobplanet.jegtheme.com/job/automation-test-analyst/">
                                        Automation Test Analyst <i class="fa fa-link color-white-mute font-1x"></i>
                                    </a>
                                </h4>
                                    <p>Long Beach, New York</p>
                                </div>
                            </div>
                            <!-- end box item details -->


                            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
                        </div>
                        <div class="col-md-3 sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                            <!-- box afix right -->
                            <div class="block-section theiaStickySidebar sticky-sidebar" style="padding-top: 0px; padding-bottom: 0px; position: static; top: 30px; left: 1259px;">
                                <div class="text-center ">


                                    <!-- navigator -->
                                    <ul class="list-unstyled nav-sidebar">
                                        <li>
                                            <a href="#cp-about" class="link-innerpage">About</a>
                                        </li>
                                        <li>
                                            <a href="#cp-detail" class="link-innerpage">Detail</a>
                                        </li>
                                        <li>
                                            <a href="#cp-photos" class="link-innerpage">Photos</a>
                                        </li>
                                        <li>
                                            <a href="#cp-jobs" class="link-innerpage">Jobs</a>
                                        </li>
                                    </ul>

                                    <p>Share This Company</p>
                                    <p class="share-btns socials-share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://jobplanet.jegtheme.com/?p=251" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/home?status=Working+on+Fast+Company.+http%3A%2F%2Fjobplanet.jegtheme.com%2F%3Fp%3D251" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                                        <a href="https://plus.google.com/share?url=http://jobplanet.jegtheme.com/?p=251" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
                                        <a href="mailto:someone@example.com?Subject=Working on Fast Company" class="email btn btn-warning"><i class="fa fa-envelope"></i></a>
                                    </p>
                                </div>
                            </div>
                            <!-- end box afix right -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end company profile -->

        </div>
        <!--end body-content -->


        <footer class="footer-widget text-center-sm">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="footer-widget-content widget widget_jeg_about_me" id="jeg_about_me-3">
                            <div class="about-us-widget">
                                <div class="about-image">
                                    <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/jonplanet-logo-blue.png" alt="">
                                </div>
                                <div class="about-description">
                                    JobPlanet - Responsive JobBoard WordPress Themes. Quisque eget lacus turpis. Curabitur ac pretium felis, vel lobortis leo. Praesent quis mi viverra, sodales mi id, dapibus tortor. Mauris sed venenatis dui. Aliquam sed convallis erat. </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="footer-widget-content widget widget_nav_menu" id="nav_menu-3">
                            <h3 class="widget-title">Job by Location</h3>
                            <div class="menu-location-menu-container">
                                <ul id="menu-location-menu" class="menu">
                                    <li id="menu-item-276" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-276"><a href="http://jobplanet.jegtheme.com/job-location/los-angeles/">Los Angeles, California</a></li>
                                    <li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a href="http://jobplanet.jegtheme.com/job-location/oakland/">Oakland, California</a></li>
                                    <li id="menu-item-278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278"><a href="http://jobplanet.jegtheme.com/job-location/san-francisco/">San Francisco, California</a></li>
                                    <li id="menu-item-279" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-279"><a href="http://jobplanet.jegtheme.com/job-location/san-jose/">San Jose, California</a></li>
                                    <li id="menu-item-280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-280"><a href="http://jobplanet.jegtheme.com/job-location/binghamton/">Bringhamton, New York</a></li>
                                    <li id="menu-item-281" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-281"><a href="http://jobplanet.jegtheme.com/job-location/long-beach/">Long Beach, New York</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="footer-widget-content widget widget_tag_cloud" id="tag_cloud-3">
                            <h3 class="widget-title">Tag Cloud</h3>
                            <div class="tagcloud"><a href="http://jobplanet.jegtheme.com/tag/assessment/" class="tag-link-153 tag-link-position-1" title="1 topic" style="font-size: 8pt;">assessment</a>
                                <a href="http://jobplanet.jegtheme.com/tag/bos/" class="tag-link-128 tag-link-position-2" title="1 topic" style="font-size: 8pt;">bos</a>
                                <a href="http://jobplanet.jegtheme.com/tag/classy/" class="tag-link-129 tag-link-position-3" title="1 topic" style="font-size: 8pt;">classy</a>
                                <a href="http://jobplanet.jegtheme.com/tag/deal/" class="tag-link-130 tag-link-position-4" title="2 topics" style="font-size: 22pt;">deal</a>
                                <a href="http://jobplanet.jegtheme.com/tag/distraction/" class="tag-link-131 tag-link-position-5" title="1 topic" style="font-size: 8pt;">distraction</a>
                                <a href="http://jobplanet.jegtheme.com/tag/dozen/" class="tag-link-132 tag-link-position-6" title="1 topic" style="font-size: 8pt;">dozen</a>
                                <a href="http://jobplanet.jegtheme.com/tag/excel/" class="tag-link-133 tag-link-position-7" title="1 topic" style="font-size: 8pt;">excel</a>
                                <a href="http://jobplanet.jegtheme.com/tag/first-day/" class="tag-link-134 tag-link-position-8" title="1 topic" style="font-size: 8pt;">first day</a>
                                <a href="http://jobplanet.jegtheme.com/tag/focus/" class="tag-link-135 tag-link-position-9" title="1 topic" style="font-size: 8pt;">focus</a>
                                <a href="http://jobplanet.jegtheme.com/tag/holiday/" class="tag-link-136 tag-link-position-10" title="1 topic" style="font-size: 8pt;">holiday</a>
                                <a href="http://jobplanet.jegtheme.com/tag/impression/" class="tag-link-137 tag-link-position-11" title="1 topic" style="font-size: 8pt;">impression</a>
                                <a href="http://jobplanet.jegtheme.com/tag/job/" class="tag-link-138 tag-link-position-12" title="1 topic" style="font-size: 8pt;">job</a>
                                <a href="http://jobplanet.jegtheme.com/tag/new-job/" class="tag-link-139 tag-link-position-13" title="1 topic" style="font-size: 8pt;">new job</a>
                                <a href="http://jobplanet.jegtheme.com/tag/office/" class="tag-link-140 tag-link-position-14" title="1 topic" style="font-size: 8pt;">office</a>
                                <a href="http://jobplanet.jegtheme.com/tag/party/" class="tag-link-141 tag-link-position-15" title="1 topic" style="font-size: 8pt;">party</a>
                                <a href="http://jobplanet.jegtheme.com/tag/perks/" class="tag-link-142 tag-link-position-16" title="2 topics" style="font-size: 22pt;">perks</a>
                                <a href="http://jobplanet.jegtheme.com/tag/presentation/" class="tag-link-143 tag-link-position-17" title="1 topic" style="font-size: 8pt;">presentation</a>
                                <a href="http://jobplanet.jegtheme.com/tag/promotion/" class="tag-link-144 tag-link-position-18" title="1 topic" style="font-size: 8pt;">promotion</a>
                                <a href="http://jobplanet.jegtheme.com/tag/raise/" class="tag-link-145 tag-link-position-19" title="2 topics" style="font-size: 22pt;">raise</a>
                                <a href="http://jobplanet.jegtheme.com/tag/resign/" class="tag-link-146 tag-link-position-20" title="1 topic" style="font-size: 8pt;">resign</a>
                                <a href="http://jobplanet.jegtheme.com/tag/tips/" class="tag-link-147 tag-link-position-21" title="1 topic" style="font-size: 8pt;">tips</a>
                                <a href="http://jobplanet.jegtheme.com/tag/top/" class="tag-link-148 tag-link-position-22" title="1 topic" style="font-size: 8pt;">top</a>
                                <a href="http://jobplanet.jegtheme.com/tag/trick/" class="tag-link-149 tag-link-position-23" title="2 topics" style="font-size: 22pt;">trick</a>
                                <a href="http://jobplanet.jegtheme.com/tag/value/" class="tag-link-150 tag-link-position-24" title="1 topic" style="font-size: 8pt;">value</a>
                                <a href="http://jobplanet.jegtheme.com/tag/work/" class="tag-link-151 tag-link-position-25" title="1 topic" style="font-size: 8pt;">work</a>
                                <a href="http://jobplanet.jegtheme.com/tag/workplace/" class="tag-link-152 tag-link-position-26" title="1 topic" style="font-size: 8pt;">workplace</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright © Jegtheme 2015. Brands are the property of their respective owners. </div>
                    <div class="col-sm-6 ">
                        <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connected</p>
                        <div class="socials text-right text-center-xs">
                            <a target="_blank" href="http://facebook.com/jegtheme">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a target="_blank" href="http://twitter.com/jegtheme">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a target="_blank" href="http://plus.google.com/+jegtheme">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end wrapper page -->

    <div class="scroll-back-to-top-wrapper">
        <span class="scroll-back-to-top-inner">
					<i class="fa fa-2x fa-angle-up"></i>
			</span>
    </div>

    <div id="wp-a11y-speak-polite" role="status" aria-live="polite" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
    <div id="wp-a11y-speak-assertive" role="alert" aria-live="assertive" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
    <div class="pac-container pac-logo" style="display: none; width: 293px; position: absolute; left: 1097px; top: 187px;"></div>
</body>

</html>