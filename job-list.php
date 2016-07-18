<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" type="text/css" href="css/chosen.css">
    <script type="text/javascript" src="js/site.min.js"></script>
</head>

<body class="page page-id-109 page-template-default logged-in jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive" >
	
<?php require( 'dbConnect.php');?>
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
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=e38b093819">Logout</a></li>
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
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-109 current_page_item menu-item-154"><a href="http://jobplanet.jegtheme.com/job-list/">Find Job <span class="caret"></span></a></li>
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
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-158 dropdown dropdown"><a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">Features <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="http://jobplanet.jegtheme.com/shop/">Shop Page <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Job <span class="caret"></span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-109 current_page_item menu-item-301"><a href="http://jobplanet.jegtheme.com/job-list/">Ajax Job Search <span class="caret"></span></a></li>
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
                        <form class="form-search-list" action="http://localhost:8080/jobSkillBracket/job-list.php?page" method="get">
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
										<input class="form-control location-autocomplete" name="searchPage" placeholder="preferred job location" value="1" autocomplete="off" type="hidden">
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
        <div class="body-content clearfix">
            <div class="bg-color2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- box listing -->
							<div class="block-section-sm box-list-area filter-content">
                            <?php require('jobList.php'); ?>
								<?php $a =  $isSearch;?>
									<script  type="text/javascript">
									var isSelect = '<?=$a?>';
									var keyword = '<?=$keyword?>';
									//alert(isSelect);
									</script>
								<script src="js/jobListRefresh.js" type="text/javascript"></script>
							</div>
                            <!-- end box listing -->
                            <div class="filter-overlay">
                                <div class="load8 load-wrapper">
                                    <div class="loader"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block-section-sm side-right">

                                <form class="search-filter">
                                    <div class="result-filter">
                                        <div class="filter-item">
                                            <h5 class="no-margin-top font-bold margin-b-20 ">Search Keyword</h5>
                                            <div class="form-group">
                                                <input id="keyword" name="keyword" value="" placeholder="Search Keyword" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <h5 class="no-margin-top font-bold margin-b-20 ">Location</h5>
                                            <div class="form-group location-form">
                                                <input class="form-control location-autocomplete filter-location location" name="place" placeholder="preferred job location" value="" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <h5 class="no-margin-top font-bold margin-b-20 ">Contract Type</h5>
                                            <div class="form-group">
                                                <div class="checkbox contract-type flat-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="type[]" value="7" checked="">
                                                        <span class="fa fa-check"></span> Contract </label>
                                                </div>
                                                <div class="checkbox contract-type flat-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="type[]" value="8" checked="">
                                                        <span class="fa fa-check"></span> Freelance </label>
                                                </div>
                                                <div class="checkbox contract-type flat-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="type[]" value="9" checked="">
                                                        <span class="fa fa-check"></span> Full Time </label>
                                                </div>
                                                <div class="checkbox contract-type flat-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="type[]" value="10" checked="">
                                                        <span class="fa fa-check"></span> Part Time </label>
                                                </div>
                                                <input type="hidden" name="type[]" value="">
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <h5 class="no-margin-top font-bold margin-b-20 ">Categories</h5>
                                            <div class="form-group">
                                                <select name="categories" multiple="" class="chosen-select form-control categories" data-placeholder="Choose Category" style="display: none;">
                                                    <option value="91">Accounting</option>
                                                    <option value="92">Administration &amp; Office Support</option>
                                                    <option value="93">Advertising, Arts &amp; Media</option>
                                                    <option value="94">Banking &amp; Financial Services</option>
                                                    <option value="95">Call Centre &amp; Customer Service</option>
                                                    <option value="90">CEO &amp; General Management</option>
                                                    <option value="96">Community Services &amp; Development</option>
                                                    <option value="97">Construction</option>
                                                    <option value="98">Consulting &amp; Strategy</option>
                                                    <option value="99">Design &amp; Architecture</option>
                                                    <option value="100">Education &amp; Training</option>
                                                    <option value="101">Engineering</option>
                                                    <option value="102">Farming, Animals &amp; Conservation</option>
                                                    <option value="103">Government &amp; Defence</option>
                                                    <option value="104">Healthcare &amp; Medical</option>
                                                    <option value="105">Hospitality &amp; Tourism</option>
                                                    <option value="106">Human Resources &amp; Recruitment</option>
                                                    <option value="107">Information &amp; Communication Technology</option>
                                                    <option value="108">Insurance &amp; Superannuation</option>
                                                    <option value="109">Legal</option>
                                                    <option value="110">Manufacturing, Transport &amp; Logistics</option>
                                                    <option value="111">Marketing &amp; Communications</option>
                                                    <option value="112">Mining, Resources &amp; Energy</option>
                                                    <option value="113">Real Estate &amp; Property</option>
                                                    <option value="114">Retail &amp; Consumer Products</option>
                                                    <option value="115">Sales</option>
                                                    <option value="116">Science &amp; Technology</option>
                                                    <option value="117">Self Employment</option>
                                                    <option value="118">Sport &amp; Recreation</option>
                                                    <option value="119">Trades &amp; Services</option>
                                                </select>
                                               
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <h5 class="no-margin-top font-bold margin-b-20">Salary Range</h5>
                                            <select class="form-control chosen-select salary-range" name="salary_range" data-placeholder="Salary Range" style="display: none;">
                                                <option></option>
                                                <option value="hourly">Hourly</option>
                                                <option value="weekly">Weekly</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="yearly">Yearly</option>
                                            </select>
                                           
                                        </div>

                                        <div class="filter-item salary-filter">
                                            <h5 class="no-margin-top font-bold margin-b-20 ">Salary Filter</h5>
                                            <div class="jobplanet_price_slider">
                                                <div class="price_label">
                                                    Salary : <span class="from">1</span> — <span class="to">10.000.000.000</span>
                                                </div>
                                                <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                                <div class="price_slider_amount">
                                                    <input type="hidden" id="min_price" name="min_salary" value="1" data-min="1" placeholder="Min price">
                                                    <input type="hidden" id="max_price" name="max_salary" value="10000000000" data-max="10000000000" placeholder="Max price">
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="paged" class="paged" value="2">
                                        <input type="hidden" name="jobplanet_nonce" value="934b0e2184">
                                        <input type="hidden" name="action" value="search_job_ajax">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal need login -->
            <div class="modal fade" id="login">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Login</h4>
                        </div>
                        <div class="modal-body">

                            <!-- buttons top -->
                            <p><a href="https://www.facebook.com/v2.2/dialog/oauth?client_id=267719674352&amp;state=ac062c7b8a7dc5df3d8ce11dfff3f194&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=http%3A%2F%2Fjobplanet.jegtheme.com%2Fsocial-callback%2Ffacebook&amp;scope=email" class="btn btn-fb btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Login with Facebook</a></p>
                            <p><a href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=http%3A%2F%2Fjobplanet.jegtheme.com%2Fsocial-callback%2Fgoogle&amp;client_id=289784784617-o1m0qspb9pj84t4cjm672bia81g4kkpb.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;access_type=online&amp;approval_prompt=auto" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Login with Google</a></p>
                            <p><a href="https://www.linkedin.com/uas/oauth2/authorization?response_type=code&amp;client_id=759505w2i0mivq&amp;scope=r_basicprofile%20r_emailaddress&amp;state=576390d9c124c6.06487854&amp;redirect_uri=http%3A%2F%2Fjobplanet.jegtheme.com%2Fsocial-callback%2Flinkedin" class="btn btn-linkedin btn-theme btn-block"><i class="fa fa-linkedin pull-left bordered-right"></i> Login with Linked In</a></p>
                            <div class="white-space-10"></div>
                            <p class="text-center"><span class="span-line">OR</span></p>
                            <!-- end buttons top -->

                            <div class="alert alert-info fade in" role="alert">
                                Applicant Role user : <strong>demo-applicant</strong>
                                <br> Employer Role user : <strong>demo-employer</strong>
                                <br> Password : <strong>password</strong>
                                <br>
                            </div>
                            <!-- form login -->
                            <form id="jeg_form_login" class="jeg_form" action="registerPhp.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="email" class="form-control" placeholder="Your Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Your Password">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="user_remember">
                                                    <span class="fa fa-check"></span> Remember me? </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p class="help-block"><a href="http://jobplanet.jegtheme.com/account/lost-password/">Forgot password ?</a></p>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group no-margin">
                                    <input type="hidden" name="redirect" value="http://jobplanet.jegtheme.com/job-list/">
                                    <input type="hidden" name="jeg_action" value="login">
                                    <input type="hidden" name="role" value="">
                                    <input type="hidden" name="jobplanet_nonce" value="934b0e2184">
                                    <input type="submit" class="btn btn-theme btn-lg btn-t-primary btn-block" value="Log In" name="loginJobList">
                                </div>
                            </form>
                            <!-- form login -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- end modal  need login -->
            <!-- modal need login -->
            <div class="modal fade" id="modal-email">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <form class="send-job-form">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Share this job posting with a friend</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>From my email address</label>
                                    <input type="email" name="from" class="form-control" placeholder="Enter Email" value="demoemployer@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label>To email address</label>
                                    <input type="email" name="to" class="form-control " placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label>Comment (optional)</label>
                                    <textarea class="form-control" name="comment" rows="6" placeholder="Add a Comment"></textarea>
                                </div>

                                <div class="modal-body-overlay"></div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="action" value="send_job">
                                <input type="hidden" name="job_id" value="" class="job_id">
                                <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success btn-theme" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal  need login -->
            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
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
 

    <div class="pac-container pac-logo" style="display: none; width: 237px; position: absolute; left: 689px; top: 187px;"></div>
    <div class="pac-container pac-logo" style="display: none; width: 211px; position: absolute; left: 824px; top: 512px;"></div>
</body>
</html>