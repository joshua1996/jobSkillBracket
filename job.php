<?php include( 'dbConnect.php');
$selectQuery="select * from job where ID='" .$_GET[ 'jobitem']. "'"; 
$result=mysqli_query($conn,$selectQuery); 
$column=mysqli_fetch_array($result); 
?>
<html class="no-js" lang="en-US" style="transform: none;">
<!--<![endif]-->

<head>
   <link rel="stylesheet" type="text/css" href="css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/site.min.js"></script>

</head>

<body class="single single-job postid-274 logged-in jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive" style="transform: none;">

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
                                <img alt="" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/7-2.jpg" srcset="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/7-2.jpg 2x" class="avatar avatar-80 photo img-profile" height="80" width="80"> &nbsp; <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://jobplanet.jegtheme.com/account/edit-account/"> Edit Account </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/change-password/"> Change Password </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/manage-application/"> Manage Application </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/resumes/"> My Resume </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/follow-company/"> Followed Company </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/bookmarked-job/"> Bookmarked Job </a></li>
                                <li><a href="http://jobplanet.jegtheme.com/account/job-alert/"> Job Alert List </a></li>
                                <li class="btn-highlight">
                                    <a href="http://jobplanet.jegtheme.com/account/create-resume/">
        Create Resume    </a>
                                </li>
                                <li class="btn-highlight">
                                    <a href="http://jobplanet.jegtheme.com/account/create-alert/">
        Create Job Alert    </a>
                                </li>
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=6a0bb032d4">Logout</a></li>
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

            <!-- link top -->
            <div class="bg-color2 block-section-xs line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div>Job details</div>
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
            <!-- end link top -->

            <div class="bg-color2" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">
                        <div class="col-md-9 content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                            <!-- box item details -->
                            <div class="block-section box-item-details theiaStickySidebar sticky-content" style="padding-top: 0px; padding-bottom: 0px; position: static;">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="company-logo">
                                            <a href="http://jobplanet.jegtheme.com/company/dream-estate-property/">
                                                <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/logo_box-9-option-1.png" alt="Dream Estate Property">
                                            </a>
                                        </div>
                                        <div class="company-title text-right">
                                            <h4>
                                    <a href="http://jobplanet.jegtheme.com/company/dream-estate-property/"><?php echo $column[1]; ?></a>
                                </h4>
                                            <a href="http://jegtheme.com" target="_blank">
                                        Go to our website »                                    </a>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="title"><a href="http://jobplanet.jegtheme.com/job/head-of-talent-development/"><?php echo $column[2]; ?></a></h2>
                                <div class="job-meta">
                                    <ul class="list-inline">

                                        <li><i class="fa fa-briefcase"></i><?php echo $column[6] ?></li>
                                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Binghamton, New York</li>
                                        <li style="padding-right: 0;">
                                            <i class="fa fa-money"></i><?php echo $column[8]; ?> – <?php echo $column[9]; ?> <span class="salary-range-detail"><?php echo $column[10]; ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <?php
								 echo $column[5];
								?>

                                <h3 class="title" id="cp-photos">Job &amp; Company Detail</h3>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <!-- industry -->
                                        <h5>Company Industry</h5>
                                        <p>
                                            Real Estate &amp; Property </p>

                                        <!-- company size -->
                                        <h5>Company Size</h5>
                                        <p>
                                            100 - 499 Employees </p>

                                        <!-- language -->
                                        <h5>Language</h5>
                                        <p>
                                            English </p>
                                    </div>
                                    <div class="col-sm-6">

                                        <!-- category -->
                                        <h5>Job Category</h5>
                                        <p>
                                            <?php echo $column[7]; ?></p>

                                        <!-- closing date -->
                                        <h5>Applications Accepted Until</h5>
                                        <p>
                                            – </p>
                                    </div>
                                </div>

                                <!-- company galery photos-->
                                <h3 class="title" id="cp-photos">Company Photos <small>(3)</small></h3>
                                <div class="row company-photos galery-popup-area">
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Roundtable-1.jpg" class="galery-popup" title="Head of Talent Development">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Roundtable-1-500x350.jpg" alt="Head of Talent Development" class="img-full">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Confrence-Room-1.jpg" class="galery-popup" title="Head of Talent Development">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Confrence-Room-1-500x350.jpg" alt="Head of Talent Development" class="img-full">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Confrence-Room-Small-1.jpg" class="galery-popup" title="Head of Talent Development">
                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/Confrence-Room-Small-1-500x350.jpg" alt="Head of Talent Development" class="img-full">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end box item details -->
                        </div>
                        <div class="col-md-3 sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                            <!-- box affix right -->

                            <div class="block-section theiaStickySidebar sticky-sidebar" style="padding-top: 0px; padding-bottom: 0px; position: static; top: 30px; left: 806px;">

                                <div class="text-center-sm text-right">
                                    <p><a id="apply_linked" href="#" class="btn btn-theme btn-line dark btn-block-xs">Apply WIth Linkedin</a></p>
                                    <!-- modal apply -->
                                    <div class="modal fade" id="modal-apply-linked-in">
                                        <div class="modal-dialog text-left">
                                            <div class="modal-content">
                                                <form method="post" enctype="multipart/form-data" action="">
                                                    <div class="modal-header ">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title">Apply via Linked In</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row linkedin-profile">
                                                            <div class="col-md-3">
                                                                <img src="">
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h3></h3>
                                                                <h5></h5>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="margin-top: 10px;">
                                                            <label>Email</label>
                                                            <input type="email" disabled="" value="" class="form-control linkedin-email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Cover Letter</label>
                                                            <textarea name="message" class="form-control linkedin-message" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="job_id" value="274">
                                                        <input type="hidden" name="jeg_action" value="apply-job-linked-in">
                                                        <input type="hidden" name="user_data" id="user_data">
                                                        <input type="hidden" name="jobplanet_nonce" value="c0dd8b1f03">
                                                        <input type="submit" class="btn btn-success btn-theme" value="Send Application">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal  apply -->
                                  
                                    <p><a href="#modal-apply" data-toggle="modal" class="btn btn-theme btn-t-primary btn-block-xs">Apply For This Job</a></p>


                                    <p>
                                    </p>
                                    <form action="" method="post">
                                        <input type="hidden" name="job_id" value="274">
                                        <input type="hidden" name="jeg_action" value="bookmark-job">
                                        <input type="hidden" name="jobplanet_nonce" value="c0dd8b1f03">
                                        <input type="submit" class="btn btn-theme btn-t-primary btn-block-xs" value="Bookmark This Job">
                                    </form>
                                    <p></p>


                                    <p><a href="#map-toogle" id="btn-map-toogle" data-toggle="collapse" class="btn btn-theme btn-t-primary btn-block-xs">Office Location</a></p>
                                    <p>Share This Job</p>
                                    <p class="share-btns socials-share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://jobplanet.jegtheme.com/?p=274" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/home?status=Head+of+Talent+Development+Vacancy.+http%3A%2F%2Fjobplanet.jegtheme.com%2F%3Fp%3D274" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                                        <a href="https://plus.google.com/share?url=http://jobplanet.jegtheme.com/?p=274" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
                                        <a href="mailto:someone@example.com?Subject=Head of Talent Development Vacancy" class="email btn btn-warning"><i class="fa fa-envelope"></i></a>
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
                                <h4 class="no-margin-top">Office Location</h4> 10 Ringwood Rd Brimington, Chesterfield </div>
                        </div>
                    </div>
                    <div class="map-area-detail">
                        <div class="box-map-detail" id="map-detail-job" data-lat="-8.690044876531484" data-lng="115.22500820577397"></div>
                    </div>
                </div>
            </div>
            <!-- end block map -->
            <!-- modal apply -->
            <div class="modal fade" id="modal-apply" style="display: none;" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <form method="post" enctype="multipart/form-data" action="http://jobplanet.jegtheme.com/apply-job/head-of-talent-development">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Apply <strong></strong></h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="name" value="Demo Applicant" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" value="demoapplicant@gmail.com" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Tell us why you are the best choice for the job</label>
                                    <div id="wp-apply-message-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
                                        <link rel="stylesheet" id="dashicons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/dashicons.min.css" type="text/css" media="all">
                                        <link rel="stylesheet" id="editor-buttons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/editor.min.css" type="text/css" media="all">
                                        <div id="wp-apply-message-editor-container" class="wp-editor-container">
                                            <div id="mceu_15" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;">
                                                <div id="mceu_15-body" class="mce-container-body mce-stack-layout">
                                                    <div id="mceu_16" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item mce-first" hidefocus="1" tabindex="-1" role="group">
                                                        <div id="mceu_16-body" class="mce-container-body mce-stack-layout">
                                                            <div id="mceu_17" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                                                                <div id="mceu_17-body" class="mce-container-body mce-flow-layout">
                                                                    <div id="mceu_18" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                                                                        <div id="mceu_18-body">
                                                                            <div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-label="Bold">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button>
                                                                            </div>
                                                                            <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_1" role="button" aria-label="Italic">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button>
                                                                            </div>
                                                                            <div id="mceu_2" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-label="Underline">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button>
                                                                            </div>
                                                                            <div id="mceu_3" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-label="Blockquote">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button>
                                                                            </div>
                                                                            <div id="mceu_4" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_4" role="button" aria-label="Strikethrough">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-strikethrough"></i></button>
                                                                            </div>
                                                                            <div id="mceu_5" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_5" role="button" aria-label="Bullet list">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button>
                                                                            </div>
                                                                            <div id="mceu_6" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_6" role="button" aria-label="Numbered list">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button>
                                                                            </div>
                                                                            <div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_7" role="button" aria-label="Align left">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button>
                                                                            </div>
                                                                            <div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_8" role="button" aria-label="Align center">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button>
                                                                            </div>
                                                                            <div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_9" role="button" aria-label="Align right">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button>
                                                                            </div>
                                                                            <div id="mceu_10" class="mce-widget mce-btn mce-disabled" tabindex="-1" aria-labelledby="mceu_10" role="button" aria-label="Undo" aria-disabled="true">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button>
                                                                            </div>
                                                                            <div id="mceu_11" class="mce-widget mce-btn mce-disabled" tabindex="-1" aria-labelledby="mceu_11" role="button" aria-label="Redo" aria-disabled="true">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button>
                                                                            </div>
                                                                            <div id="mceu_12" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_12" role="button" aria-label="Insert/edit link">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button>
                                                                            </div>
                                                                            <div id="mceu_13" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_13" role="button" aria-label="Remove link">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button>
                                                                            </div>
                                                                            <div id="mceu_14" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_14" role="button" aria-label="Fullscreen">
                                                                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-fullscreen"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="mceu_19" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;">
                                                        <iframe id="apply-message_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press Alt-Shift-H for help" src='javascript:""' style="width: 100%; height: 100px; display: block;"></iframe>
                                                    </div>
                                                    <div id="mceu_20" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;">
                                                        <div id="mceu_20-body" class="mce-container-body mce-flow-layout">
                                                            <div id="mceu_21" class="mce-path mce-flow-layout-item mce-first">
                                                                <div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_21-0" aria-level="0">p</div>
                                                            </div>
                                                            <div id="mceu_22" class="mce-flow-layout-item mce-last mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <textarea class="wp-editor-area" rows="10" autocomplete="off" cols="40" name="message" id="apply-message" aria-hidden="true" style="display: none;"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Upload CV</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                    <span class="btn btn-default btn-theme btn-file">
                      File  <input type="file" name="attachment" value="" accept=".doc,.pdf">
                    </span>
                                                </span>
                                                <input type="text" class="form-control form-flat" readonly="">
                                            </div>
                                            <small>Upload your CV/resume. Max. file size: 1 MB.</small>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Or Choose Resume</label>
                                            <select class="form-control" name="resume">
                                                <option></option>
                                                <option value="1207">projet du client</option>
                                                <option value="1162">nn</option>
                                                <option value="1156">APP Tester</option>
                                                <option value="1152">Senior PHP Programmer</option>
                                                <option value="1145">test resume</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>




                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="job_id" value="274">
                                <input type="hidden" name="jeg_action" value="apply-job">
                                <input type="hidden" name="jobplanet_nonce" value="c0dd8b1f03">
                                <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success btn-theme" value="Send Application">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal  apply -->
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
                            <div class="tagcloud"><a href="http://jobplanet.jegtheme.com/tag/assessment/" class="tag-link-153" title="1 topic" style="font-size: 8pt;">assessment</a>
                                <a href="http://jobplanet.jegtheme.com/tag/bos/" class="tag-link-128" title="1 topic" style="font-size: 8pt;">bos</a>
                                <a href="http://jobplanet.jegtheme.com/tag/classy/" class="tag-link-129" title="1 topic" style="font-size: 8pt;">classy</a>
                                <a href="http://jobplanet.jegtheme.com/tag/deal/" class="tag-link-130" title="2 topics" style="font-size: 22pt;">deal</a>
                                <a href="http://jobplanet.jegtheme.com/tag/distraction/" class="tag-link-131" title="1 topic" style="font-size: 8pt;">distraction</a>
                                <a href="http://jobplanet.jegtheme.com/tag/dozen/" class="tag-link-132" title="1 topic" style="font-size: 8pt;">dozen</a>
                                <a href="http://jobplanet.jegtheme.com/tag/excel/" class="tag-link-133" title="1 topic" style="font-size: 8pt;">excel</a>
                                <a href="http://jobplanet.jegtheme.com/tag/first-day/" class="tag-link-134" title="1 topic" style="font-size: 8pt;">first day</a>
                                <a href="http://jobplanet.jegtheme.com/tag/focus/" class="tag-link-135" title="1 topic" style="font-size: 8pt;">focus</a>
                                <a href="http://jobplanet.jegtheme.com/tag/holiday/" class="tag-link-136" title="1 topic" style="font-size: 8pt;">holiday</a>
                                <a href="http://jobplanet.jegtheme.com/tag/impression/" class="tag-link-137" title="1 topic" style="font-size: 8pt;">impression</a>
                                <a href="http://jobplanet.jegtheme.com/tag/job/" class="tag-link-138" title="1 topic" style="font-size: 8pt;">job</a>
                                <a href="http://jobplanet.jegtheme.com/tag/new-job/" class="tag-link-139" title="1 topic" style="font-size: 8pt;">new job</a>
                                <a href="http://jobplanet.jegtheme.com/tag/office/" class="tag-link-140" title="1 topic" style="font-size: 8pt;">office</a>
                                <a href="http://jobplanet.jegtheme.com/tag/party/" class="tag-link-141" title="1 topic" style="font-size: 8pt;">party</a>
                                <a href="http://jobplanet.jegtheme.com/tag/perks/" class="tag-link-142" title="2 topics" style="font-size: 22pt;">perks</a>
                                <a href="http://jobplanet.jegtheme.com/tag/presentation/" class="tag-link-143" title="1 topic" style="font-size: 8pt;">presentation</a>
                                <a href="http://jobplanet.jegtheme.com/tag/promotion/" class="tag-link-144" title="1 topic" style="font-size: 8pt;">promotion</a>
                                <a href="http://jobplanet.jegtheme.com/tag/raise/" class="tag-link-145" title="2 topics" style="font-size: 22pt;">raise</a>
                                <a href="http://jobplanet.jegtheme.com/tag/resign/" class="tag-link-146" title="1 topic" style="font-size: 8pt;">resign</a>
                                <a href="http://jobplanet.jegtheme.com/tag/tips/" class="tag-link-147" title="1 topic" style="font-size: 8pt;">tips</a>
                                <a href="http://jobplanet.jegtheme.com/tag/top/" class="tag-link-148" title="1 topic" style="font-size: 8pt;">top</a>
                                <a href="http://jobplanet.jegtheme.com/tag/trick/" class="tag-link-149" title="2 topics" style="font-size: 22pt;">trick</a>
                                <a href="http://jobplanet.jegtheme.com/tag/value/" class="tag-link-150" title="1 topic" style="font-size: 8pt;">value</a>
                                <a href="http://jobplanet.jegtheme.com/tag/work/" class="tag-link-151" title="1 topic" style="font-size: 8pt;">work</a>
                                <a href="http://jobplanet.jegtheme.com/tag/workplace/" class="tag-link-152" title="1 topic" style="font-size: 8pt;">workplace</a></div>
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

    <div id="wp-link-backdrop" style="display: none"></div>
    <div id="wp-link-wrap" class="wp-core-ui" style="display: none">
        <form id="wp-link" tabindex="-1">
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="caa6d00048">
            <div id="link-modal-title">
                Insert/edit link
                <button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button>
            </div>
            <div id="link-selector">
                <div id="link-options">
                    <p class="howto">Enter the destination URL</p>
                    <div>
                        <label><span>URL</span>
                            <input id="wp-link-url" type="text">
                        </label>
                    </div>
                    <div class="wp-link-text-field">
                        <label><span>Link Text</span>
                            <input id="wp-link-text" type="text">
                        </label>
                    </div>
                    <div class="link-target">
                        <label><span>&nbsp;</span>
                            <input type="checkbox" id="wp-link-target"> Open link in a new tab</label>
                    </div>
                </div>
                <p class="howto"><a href="#" id="wp-link-search-toggle">Or link to existing content</a></p>
                <div id="search-panel">
                    <div class="link-search-wrapper">
                        <label>
                            <span class="search-label">Search</span>
                            <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off">
                            <span class="spinner"></span>
                        </label>
                    </div>
                    <div id="search-results" class="query-results" tabindex="0">
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                    <div id="most-recent-results" class="query-results" tabindex="0">
                        <div class="query-notice" id="query-notice-message">
                            <em class="query-notice-default">No search term specified. Showing recent items.</em>
                            <em class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to select an item.</em>
                        </div>
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submitbox">
                <div id="wp-link-cancel">
                    <a class="submitdelete deletion" href="#">Cancel</a>
                </div>
                <div id="wp-link-update">
                    <input type="submit" value="Add Link" class="button button-primary" id="wp-link-submit" name="wp-link-submit">
                </div>
            </div>
        </form>
    </div>

    <div id="mceu_29" class="mce-toolbar-grp mce-inline-toolbar-grp mce-container mce-panel" hidefocus="1" tabindex="-1" role="group" style="display: none;">
        <div id="mceu_29-body" class="mce-container-body mce-stack-layout">
            <div id="mceu_30" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                <div id="mceu_30-body" class="mce-container-body mce-flow-layout">
                    <div id="mceu_31" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                        <div id="mceu_31-body">
                            <div id="mceu_23" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_23" role="button" aria-label="Align left">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-align-left"></i></button>
                            </div>
                            <div id="mceu_24" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_24" role="button" aria-label="Align center">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-align-center"></i></button>
                            </div>
                            <div id="mceu_25" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_25" role="button" aria-label="Align right">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-align-right"></i></button>
                            </div>
                            <div id="mceu_26" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_26" role="button" aria-label="No alignment">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-align-none"></i></button>
                            </div>
                            <div id="mceu_27" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_27" role="button" aria-label="Edit ">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-edit"></i></button>
                            </div>
                            <div id="mceu_28" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_28" role="button" aria-label="Remove">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-no"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mceu_35" class="mce-toolbar-grp mce-inline-toolbar-grp mce-container mce-panel" hidefocus="1" tabindex="-1" role="group" style="display: none;">
        <div id="mceu_35-body" class="mce-container-body mce-stack-layout">
            <div id="mceu_36" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                <div id="mceu_36-body" class="mce-container-body mce-flow-layout">
                    <div id="mceu_37" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                        <div id="mceu_37-body">
                            <div id="mceu_32" class="wp-link-preview"><a href="#" target="_blank" tabindex="-1">#</a></div>
                            <div id="mceu_33" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_33" role="button" aria-label="Edit ">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-edit"></i></button>
                            </div>
                            <div id="mceu_34" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_34" role="button" aria-label="Remove">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-no"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pac-container pac-logo" style="display: none;"></div>
</body>

</html>