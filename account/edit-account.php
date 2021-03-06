<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/site.min.js"></script>

    <script type="text/javascript" src="http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/jquery.datetimepicker.full.min.js"></script>
    <link rel="stylesheet" id="jeg-datepicker-css-css" href="http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/css/jquery.datetimepicker.css" type="text/css" media="all">
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
</head>

<body class="page page-id-12 page-template-default logged-in woocommerce-edit-account jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive">
    <script>
        $(document).ready(function() {
            jQuery('#dob').datetimepicker();
        });
    </script>
    <script type="text/javascript">
        tinymce.init({
            selector: ".wp-editor-area",
            menubar: false,
            statusbar: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste "
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter      alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
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
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=0b92bcf249">Logout</a></li>
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
            <div class="container">
                <div class="text-center logo">
                    <a href="http://jobplanet.jegtheme.com/">
                        <img class="logo-desktop" alt="Responsive Job Board WordPress Themes" src="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png" data-at2x="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png">
                        <img class="logo-mobile" alt="Responsive Job Board WordPress Themes" src="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png" data-at2x="http://jobplanet.jegtheme.com/wp-content/themes/jobplanet-themes/assets/theme/images/logo.png">
                    </a>
                </div>
            </div>

        </header>
        <!-- end main-header -->

        <!-- body-content -->
        <div class="body-content clearfix">

            <div class="bg-color2">
                <div class="container">
                    <div class="col-md-3 col-sm-3">

                        <div class="block-section text-center block-account-nav">
                            <img alt="" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg" srcset="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg 2x" class="avatar avatar-128 photo img-rounded" height="128" width="128">
                            <div class="white-space-20"></div>
                            <h4>Demo Employer</h4>
                            <div class="white-space-20"></div>

                            <ul class="list-unstyled nav-sidebar account">
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
                            </ul>

                            <div class="list-unstyled"></div>
                            <a href="http://jobplanet.jegtheme.com/create-vacancy/" class="btn btn-theme btn-t-primary btn-block">
                                Create Job Vacancy                            </a>
                            <a href="http://jobplanet.jegtheme.com/account/create-company/" class="btn btn-theme btn-t-primary btn-block">
                                Create Company                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="block-section box-side-account">

                            <h3 class="no-margin-top">Edit Account</h3>
                            <hr>
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name <span class="mandatory">*</span></label>
                                            <input id="first_name" name="first_name" type="text" class="form-control" value="Demo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name <span class="mandatory">*</span></label>
                                            <input id="last_name" name="last_name" type="text" class="form-control" value="Employer">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email <span class="mandatory">*</span></label>
                                            <input id="email" name="email" type="email" class="form-control" value="demoemployer@gmail.com">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cur_job">Current Employment</label>
                                            <input id="cur_job" name="cur_job" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cur_company">Current Company</label>
                                            <input id="cur_company" name="cur_company" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">DOB</label>
                                            <input id="dob" name="dob" type="text" class="form-control datetimepicker" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input id="phone" name="phone" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Address</label>
                                            <input id="email" name="address" type="text" class="form-control" value="">
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Facebook</label>
                                            <input id="facebook" name="facebook" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Twitter</label>
                                            <input id="twitter" name="twitter" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="google">Google</label>
                                            <input id="google" name="google" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="linkedin">Linkedin</label>
                                            <input id="linkedin" name="linkedin" type="text" class="form-control" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aboutme">About Me</label>
                                            <textarea class="wp-editor-area" rows="10" autocomplete="off" cols="40" name="aboutme" id="aboutme"  aria-hidden="true"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aboutme">Profile Picture</label>
                                            <div id="upload_profile_picture" class="upload_wrapper">
                                                <div class="upload_preview_container">
                                                    <ul>
                                                        <li draggable="true">
                                                            <input type="hidden" name="profile_picture" value="337">
                                                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg">
                                                        </li>
                                                    </ul>
                                                </div>

                                                <strong><span style="color:red;">*</span>&nbsp;Upload functionality disabled on this Demo</strong>

                                                <div class="upload-progress"> Upload Progress ( <span></span> ) </div>
                                            </div>
                                            <script>
                                                (function($) {
                                                    $(document).ready(function() {
                                                        $('#upload_profile_picture').jUploader({
                                                            browse_button: 'btn-upload',
                                                            multi: false,
                                                            name: 'profile_picture',
                                                            extension: 'jpg,jpeg,gif,png',
                                                            swf: 'http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/plupload/js/Moxie.swf',
                                                            upload_url: 'http://jobplanet.jegtheme.com/wp-admin/admin-ajax.php?nonce=5000a3a329',
                                                            maxsize: '1mb',
                                                        });
                                                    });
                                                })(jQuery);
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-space-10"></div>

                                <strong><span style="color:red;">*</span>&nbsp;Edit account disabled on this Demo</strong> </form>




                        </div>
                    </div>
                </div>
            </div>
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
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="c197d6bcd4">
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

    <div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_">
        <div class="xdsoft_datepicker active">
            <div class="xdsoft_mounthpicker">
                <button type="button" class="xdsoft_prev" style="visibility: visible;"></button>
                <button type="button" class="xdsoft_today_button" style="visibility: visible;"></button>
                <div class="xdsoft_label xdsoft_month"><span>June</span>
                    <div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box">
                        <div style="margin-top: 0px;">
                            <div class="xdsoft_option " data-value="0">January</div>
                            <div class="xdsoft_option " data-value="1">February</div>
                            <div class="xdsoft_option " data-value="2">March</div>
                            <div class="xdsoft_option " data-value="3">April</div>
                            <div class="xdsoft_option " data-value="4">May</div>
                            <div class="xdsoft_option xdsoft_current" data-value="5">June</div>
                            <div class="xdsoft_option " data-value="6">July</div>
                            <div class="xdsoft_option " data-value="7">August</div>
                            <div class="xdsoft_option " data-value="8">September</div>
                            <div class="xdsoft_option " data-value="9">October</div>
                            <div class="xdsoft_option " data-value="10">November</div>
                            <div class="xdsoft_option " data-value="11">December</div>
                        </div>
                        <div class="xdsoft_scrollbar">
                            <div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div>
                        </div>
                    </div><i></i></div>
                <div class="xdsoft_label xdsoft_year"><span>2016</span>
                    <div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box">
                        <div style="margin-top: 0px;">
                            <div class="xdsoft_option " data-value="1950">1950</div>
                            <div class="xdsoft_option " data-value="1951">1951</div>
                            <div class="xdsoft_option " data-value="1952">1952</div>
                            <div class="xdsoft_option " data-value="1953">1953</div>
                            <div class="xdsoft_option " data-value="1954">1954</div>
                            <div class="xdsoft_option " data-value="1955">1955</div>
                            <div class="xdsoft_option " data-value="1956">1956</div>
                            <div class="xdsoft_option " data-value="1957">1957</div>
                            <div class="xdsoft_option " data-value="1958">1958</div>
                            <div class="xdsoft_option " data-value="1959">1959</div>
                            <div class="xdsoft_option " data-value="1960">1960</div>
                            <div class="xdsoft_option " data-value="1961">1961</div>
                            <div class="xdsoft_option " data-value="1962">1962</div>
                            <div class="xdsoft_option " data-value="1963">1963</div>
                            <div class="xdsoft_option " data-value="1964">1964</div>
                            <div class="xdsoft_option " data-value="1965">1965</div>
                            <div class="xdsoft_option " data-value="1966">1966</div>
                            <div class="xdsoft_option " data-value="1967">1967</div>
                            <div class="xdsoft_option " data-value="1968">1968</div>
                            <div class="xdsoft_option " data-value="1969">1969</div>
                            <div class="xdsoft_option " data-value="1970">1970</div>
                            <div class="xdsoft_option " data-value="1971">1971</div>
                            <div class="xdsoft_option " data-value="1972">1972</div>
                            <div class="xdsoft_option " data-value="1973">1973</div>
                            <div class="xdsoft_option " data-value="1974">1974</div>
                            <div class="xdsoft_option " data-value="1975">1975</div>
                            <div class="xdsoft_option " data-value="1976">1976</div>
                            <div class="xdsoft_option " data-value="1977">1977</div>
                            <div class="xdsoft_option " data-value="1978">1978</div>
                            <div class="xdsoft_option " data-value="1979">1979</div>
                            <div class="xdsoft_option " data-value="1980">1980</div>
                            <div class="xdsoft_option " data-value="1981">1981</div>
                            <div class="xdsoft_option " data-value="1982">1982</div>
                            <div class="xdsoft_option " data-value="1983">1983</div>
                            <div class="xdsoft_option " data-value="1984">1984</div>
                            <div class="xdsoft_option " data-value="1985">1985</div>
                            <div class="xdsoft_option " data-value="1986">1986</div>
                            <div class="xdsoft_option " data-value="1987">1987</div>
                            <div class="xdsoft_option " data-value="1988">1988</div>
                            <div class="xdsoft_option " data-value="1989">1989</div>
                            <div class="xdsoft_option " data-value="1990">1990</div>
                            <div class="xdsoft_option " data-value="1991">1991</div>
                            <div class="xdsoft_option " data-value="1992">1992</div>
                            <div class="xdsoft_option " data-value="1993">1993</div>
                            <div class="xdsoft_option " data-value="1994">1994</div>
                            <div class="xdsoft_option " data-value="1995">1995</div>
                            <div class="xdsoft_option " data-value="1996">1996</div>
                            <div class="xdsoft_option " data-value="1997">1997</div>
                            <div class="xdsoft_option " data-value="1998">1998</div>
                            <div class="xdsoft_option " data-value="1999">1999</div>
                            <div class="xdsoft_option " data-value="2000">2000</div>
                            <div class="xdsoft_option " data-value="2001">2001</div>
                            <div class="xdsoft_option " data-value="2002">2002</div>
                            <div class="xdsoft_option " data-value="2003">2003</div>
                            <div class="xdsoft_option " data-value="2004">2004</div>
                            <div class="xdsoft_option " data-value="2005">2005</div>
                            <div class="xdsoft_option " data-value="2006">2006</div>
                            <div class="xdsoft_option " data-value="2007">2007</div>
                            <div class="xdsoft_option " data-value="2008">2008</div>
                            <div class="xdsoft_option " data-value="2009">2009</div>
                            <div class="xdsoft_option " data-value="2010">2010</div>
                            <div class="xdsoft_option " data-value="2011">2011</div>
                            <div class="xdsoft_option " data-value="2012">2012</div>
                            <div class="xdsoft_option " data-value="2013">2013</div>
                            <div class="xdsoft_option " data-value="2014">2014</div>
                            <div class="xdsoft_option " data-value="2015">2015</div>
                            <div class="xdsoft_option xdsoft_current" data-value="2016">2016</div>
                            <div class="xdsoft_option " data-value="2017">2017</div>
                            <div class="xdsoft_option " data-value="2018">2018</div>
                            <div class="xdsoft_option " data-value="2019">2019</div>
                            <div class="xdsoft_option " data-value="2020">2020</div>
                            <div class="xdsoft_option " data-value="2021">2021</div>
                            <div class="xdsoft_option " data-value="2022">2022</div>
                            <div class="xdsoft_option " data-value="2023">2023</div>
                            <div class="xdsoft_option " data-value="2024">2024</div>
                            <div class="xdsoft_option " data-value="2025">2025</div>
                            <div class="xdsoft_option " data-value="2026">2026</div>
                            <div class="xdsoft_option " data-value="2027">2027</div>
                            <div class="xdsoft_option " data-value="2028">2028</div>
                            <div class="xdsoft_option " data-value="2029">2029</div>
                            <div class="xdsoft_option " data-value="2030">2030</div>
                            <div class="xdsoft_option " data-value="2031">2031</div>
                            <div class="xdsoft_option " data-value="2032">2032</div>
                            <div class="xdsoft_option " data-value="2033">2033</div>
                            <div class="xdsoft_option " data-value="2034">2034</div>
                            <div class="xdsoft_option " data-value="2035">2035</div>
                            <div class="xdsoft_option " data-value="2036">2036</div>
                            <div class="xdsoft_option " data-value="2037">2037</div>
                            <div class="xdsoft_option " data-value="2038">2038</div>
                            <div class="xdsoft_option " data-value="2039">2039</div>
                            <div class="xdsoft_option " data-value="2040">2040</div>
                            <div class="xdsoft_option " data-value="2041">2041</div>
                            <div class="xdsoft_option " data-value="2042">2042</div>
                            <div class="xdsoft_option " data-value="2043">2043</div>
                            <div class="xdsoft_option " data-value="2044">2044</div>
                            <div class="xdsoft_option " data-value="2045">2045</div>
                            <div class="xdsoft_option " data-value="2046">2046</div>
                            <div class="xdsoft_option " data-value="2047">2047</div>
                            <div class="xdsoft_option " data-value="2048">2048</div>
                            <div class="xdsoft_option " data-value="2049">2049</div>
                            <div class="xdsoft_option " data-value="2050">2050</div>
                        </div>
                        <div class="xdsoft_scrollbar">
                            <div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div>
                        </div>
                    </div><i></i></div>
                <button type="button" class="xdsoft_next" style="visibility: visible;"></button>
            </div>
            <div class="xdsoft_calendar">
                <table>
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-date="29" data-month="4" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title="">
                                <div>29</div>
                            </td>
                            <td data-date="30" data-month="4" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title="">
                                <div>30</div>
                            </td>
                            <td data-date="31" data-month="4" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title="">
                                <div>31</div>
                            </td>
                            <td data-date="1" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>1</div>
                            </td>
                            <td data-date="2" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>2</div>
                            </td>
                            <td data-date="3" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>3</div>
                            </td>
                            <td data-date="4" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>4</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="5" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>5</div>
                            </td>
                            <td data-date="6" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>6</div>
                            </td>
                            <td data-date="7" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>7</div>
                            </td>
                            <td data-date="8" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>8</div>
                            </td>
                            <td data-date="9" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>9</div>
                            </td>
                            <td data-date="10" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>10</div>
                            </td>
                            <td data-date="11" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>11</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="12" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>12</div>
                            </td>
                            <td data-date="13" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>13</div>
                            </td>
                            <td data-date="14" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>14</div>
                            </td>
                            <td data-date="15" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>15</div>
                            </td>
                            <td data-date="16" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>16</div>
                            </td>
                            <td data-date="17" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>17</div>
                            </td>
                            <td data-date="18" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>18</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="19" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>19</div>
                            </td>
                            <td data-date="20" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>20</div>
                            </td>
                            <td data-date="21" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>21</div>
                            </td>
                            <td data-date="22" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_current xdsoft_today" title="">
                                <div>22</div>
                            </td>
                            <td data-date="23" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>23</div>
                            </td>
                            <td data-date="24" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>24</div>
                            </td>
                            <td data-date="25" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>25</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="26" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>26</div>
                            </td>
                            <td data-date="27" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>27</div>
                            </td>
                            <td data-date="28" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>28</div>
                            </td>
                            <td data-date="29" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>29</div>
                            </td>
                            <td data-date="30" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>30</div>
                            </td>
                            <td data-date="1" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title="">
                                <div>1</div>
                            </td>
                            <td data-date="2" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title="">
                                <div>2</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button>
        </div>
        <div class="xdsoft_timepicker">
            <button type="button" class="xdsoft_prev"></button>
            <div class="xdsoft_time_box xdsoft_scroller_box">
                <div class="xdsoft_time_variant" style="margin-top: 0px;">
                    <div class="xdsoft_time " data-hour="0" data-minute="0">00:00</div>
                    <div class="xdsoft_time " data-hour="1" data-minute="0">01:00</div>
                    <div class="xdsoft_time " data-hour="2" data-minute="0">02:00</div>
                    <div class="xdsoft_time " data-hour="3" data-minute="0">03:00</div>
                    <div class="xdsoft_time " data-hour="4" data-minute="0">04:00</div>
                    <div class="xdsoft_time " data-hour="5" data-minute="0">05:00</div>
                    <div class="xdsoft_time " data-hour="6" data-minute="0">06:00</div>
                    <div class="xdsoft_time " data-hour="7" data-minute="0">07:00</div>
                    <div class="xdsoft_time " data-hour="8" data-minute="0">08:00</div>
                    <div class="xdsoft_time " data-hour="9" data-minute="0">09:00</div>
                    <div class="xdsoft_time " data-hour="10" data-minute="0">10:00</div>
                    <div class="xdsoft_time " data-hour="11" data-minute="0">11:00</div>
                    <div class="xdsoft_time " data-hour="12" data-minute="0">12:00</div>
                    <div class="xdsoft_time " data-hour="13" data-minute="0">13:00</div>
                    <div class="xdsoft_time " data-hour="14" data-minute="0">14:00</div>
                    <div class="xdsoft_time " data-hour="15" data-minute="0">15:00</div>
                    <div class="xdsoft_time xdsoft_current" data-hour="16" data-minute="0">16:00</div>
                    <div class="xdsoft_time " data-hour="17" data-minute="0">17:00</div>
                    <div class="xdsoft_time " data-hour="18" data-minute="0">18:00</div>
                    <div class="xdsoft_time " data-hour="19" data-minute="0">19:00</div>
                    <div class="xdsoft_time " data-hour="20" data-minute="0">20:00</div>
                    <div class="xdsoft_time " data-hour="21" data-minute="0">21:00</div>
                    <div class="xdsoft_time " data-hour="22" data-minute="0">22:00</div>
                    <div class="xdsoft_time " data-hour="23" data-minute="0">23:00</div>
                </div>
                <div class="xdsoft_scrollbar">
                    <div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div>
                </div>
            </div>
            <button type="button" class="xdsoft_next"></button>
        </div>
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
</body>

</html>