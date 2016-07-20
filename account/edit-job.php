<?php
include( '../dbConnect.php'); 
$selectQuery =  "select * from company where userID='".$_SESSION[ 'userID']."'";
$result = mysqli_query($conn,$selectQuery);

$selectQueryPage = "select * from job where ID = '".$_GET['item']."'";
$result2 = mysqli_query($conn,$selectQueryPage);
$jobDetail = mysqli_fetch_array($result2);

$jobCateArr = "select JobCategories from job where ID = '".$_GET['item']."'";
$result3 = mysqli_query($conn,$jobCateArr);
$jobCate = mysqli_fetch_array($result3);
//echo $jobCate[0];
$splitJobCate = explode(',',$jobCate[0]);

if(isset($_POST['editJobVacancy'])){
	$updateJobVacancy = "update job set company='".$_POST['company_id']."', Jobtitle = '".$_POST['job_title']."', NotificationEmailAddress = '".$_POST['application_email']."', Jobdescription='".$_POST['content']."', JobType='".$_POST['job_type']."', JobCategories='".implode(',',$_POST['categories'])."', MinimumSalary='".$_POST['salary_bottom']."', MaximumSalary='".$_POST['salary_top']."', SalaryRange='".$_POST['salary_range']."', ClosingDate='".$_POST['closing']."', JobLocation='".$_POST['location']."' where id='".$_GET['item']."'";
	$result4 = mysqli_query($conn,$updateJobVacancy);
		$_SESSION['showCompleteMsg'] = 'true';
	header("location:http://localhost:8080/jobSkillBracket/account/edit-job.php?item=$_GET[item]");

}

?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/site.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://www.uitutorial.com/demos/chosen-demo/chosen.min.css" />
    <script type='text/javascript' src='http://www.uitutorial.com/demos/chosen-demo/chosen.jquery.min.js'></script>
    <script src="../js/icheck.js"></script>
    <link href="../css/skins/flat/red.css" rel="stylesheet">
	
    <script type="text/javascript" src="http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/jquery.datetimepicker.full.min.js"></script>
    <link rel="stylesheet" id="jeg-datepicker-css-css" href="http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/css/jquery.datetimepicker.css" type="text/css" media="all">
	    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>

</head>

<body class="page page-id-12 page-template-default logged-in jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive">

    <script>
        $(document).ready(function() {
            $('.chosen-select').chosen();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat',
                radioClass: 'iradio_flat'
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
        });
    </script>
	
	  <script>
        $(document).ready(function() {
            jQuery('#closing').datetimepicker({
 i18n:{
  de:{
   months:[
    'Januar','Februar','März','April',
    'Mai','Juni','Juli','August',
    'September','Oktober','November','Dezember',
   ],
   dayOfWeek:[
    "So.", "Mo", "Di", "Mi", 
    "Do", "Fr", "Sa.",
   ]
  }
 },
 timepicker:false,
 format:'d.m.Y'
});
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
            toolbar: " bold italic underline blockquote strikethrough alignleft aligncenter alignright alignjustify  bullist numlist undo redo link unlink fullscreen "
        });
    </script>
    <!-- wrapper page -->
    <div class="wrapper">

        <!-- main-header -->
        <header class="main-header">

            <!-- main navbar -->
            <?php require( '../header.php') ?>
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
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=87ea61cc9f">Logout</a></li>
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
							<?php if(isset($_SESSION['showCompleteMsg']) && $_SESSION['showCompleteMsg']=='true'){ echo '<div class="alert-success alert alert-dismissible fade in" role="alert">Job Vacancy Details Successfully Edited</div>'; $_SESSION['showCompleteMsg'] = 'false'; }
                           echo $_SESSION['showCompleteMsg'];
							?>
                            <h3>Edit Job Vacancies</h3>
                            <hr>
                            <form method="post" action="">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Job title <span class="mandatory">*</span></label>
                                            <input id="title" name="job_title" placeholder="Job Title, ex : Full Stack Web Developer" type="text" class="form-control" value="<?php echo $jobDetail[2]; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company_id">Company </label>
                                            <select id="company_id" name="company_id" class="form-control chosen-select" data-placeholder="Choose company for this job vacancy" style="display: block;">
                                               
												<?php 
												while($column = mysqli_fetch_array($result)){ ?>
												 <option <?php if($column[1] == $jobDetail[1]){ ?>selected<?php } ?> value="1237"><?php echo $column[1]; ?></option>
												
												<?php }
												?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="application_email">Notification Email</label>
                                            <input id="application_email" name="application_email" placeholder="Notification email sent" type="text" class="form-control" value="<?php echo $jobDetail[3]; ?>">
                                            <small class="color-white-mute">Leave the notification email address field empty if you wish to send notifications to your default user registration email</small>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Job Description</label>
                                            <div id="wp-description-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
                                                <link rel="stylesheet" id="dashicons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/dashicons.min.css" type="text/css" media="all">
                                                <link rel="stylesheet" id="editor-buttons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/editor.min.css" type="text/css" media="all">
                                                <div id="wp-description-editor-container" class="wp-editor-container">
													<textarea class="wp-editor-area" name="content" style="width:100%"><?php echo $jobDetail[5]; ?></textarea>
                                                </div>
                                            </div>

                                            <small class="color-white-mute">You may use the job template as a starter in writing your job description, you may also use your own format for the job description.</small>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="job_type">Job Type <span class="mandatory">*</span></label>
                                            <select id="job_type" name="job_type" class="form-control chosen-select" data-placeholder="Job Type" style="display: block;">
                                                <option <?php if($jobDetail[6] == 'Contract'){ echo 'selected'; } ?> value="7">Contract</option>
                                                <option <?php if($jobDetail[6] == 'Freelance'){ echo 'selected'; } ?> value="8">Freelance</option>
                                                <option <?php if($jobDetail[6] == 'Full Time'){ echo 'selected'; } ?> value="9">Full Time</option>
                                                <option <?php if($jobDetail[6] == 'Part Time'){ echo 'selected'; } ?> value="10">Part Time</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="categories">Job Category <span class="mandatory">*</span></label>
                                            <div class="row">
                                                <!-- buka -->
                                                <div class="col-md-6">
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="91" <?php if(in_array("91",$splitJobCate)){ echo 'checked'; } ?>> Accounting </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="92" <?php if(in_array("92",$splitJobCate)){ echo 'checked'; } ?>> Administration &amp; Office Support </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="93" <?php if(in_array("93",$splitJobCate)){ echo 'checked'; } ?>> Advertising, Arts &amp; Media </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="94" <?php if(in_array("94",$splitJobCate)){ echo 'checked'; } ?>> Banking &amp; Financial Services </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="95" <?php if(in_array("95",$splitJobCate)){ echo 'checked'; } ?>> Call Centre &amp; Customer Service </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="90"  <?php if(in_array("90",$splitJobCate)){ echo 'checked'; } ?>> CEO &amp; General Management </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="96"  <?php if(in_array("96",$splitJobCate)){ echo 'checked'; } ?>> Community Services &amp; Development </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="97"  <?php if(in_array("97",$splitJobCate)){ echo 'checked'; } ?>> Construction </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="98"  <?php if(in_array("98",$splitJobCate)){ echo 'checked'; } ?>> Consulting &amp; Strategy </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="99"  <?php if(in_array("99",$splitJobCate)){ echo 'checked'; } ?>> Design &amp; Architecture </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="100"  <?php if(in_array("100",$splitJobCate)){ echo 'checked'; } ?>> Education &amp; Training </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="101"  <?php if(in_array("101",$splitJobCate)){ echo 'checked'; } ?>> Engineering </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="102"  <?php if(in_array("102",$splitJobCate)){ echo 'checked'; } ?>> Farming, Animals &amp; Conservation </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="103"  <?php if(in_array("103",$splitJobCate)){ echo 'checked'; } ?>> Government &amp; Defence </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="104"  <?php if(in_array("104",$splitJobCate)){ echo 'checked'; } ?>> Healthcare &amp; Medical </label>
                                                    </div>
                                                </div>
                                                <!-- tutup -->
                                                <!-- buka -->
                                                <div class="col-md-6">
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="105"  <?php if(in_array("105",$splitJobCate)){ echo 'checked'; } ?>> Hospitality &amp; Tourism </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="106"  <?php if(in_array("106",$splitJobCate)){ echo 'checked'; } ?>> Human Resources &amp; Recruitment </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="107"  <?php if(in_array("107",$splitJobCate)){ echo 'checked'; } ?>> Information &amp; Communication Technology </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="108"  <?php if(in_array("108",$splitJobCate)){ echo 'checked'; } ?>> Insurance &amp; Superannuation </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="109"  <?php if(in_array("109",$splitJobCate)){ echo 'checked'; } ?>> Legal </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="110"  <?php if(in_array("110",$splitJobCate)){ echo 'checked'; } ?>> Manufacturing, Transport &amp; Logistics </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="111"  <?php if(in_array("111",$splitJobCate)){ echo 'checked'; } ?>> Marketing &amp; Communications </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="112"  <?php if(in_array("112",$splitJobCate)){ echo 'checked'; } ?>> Mining, Resources &amp; Energy </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="113"  <?php if(in_array("113",$splitJobCate)){ echo 'checked'; } ?>> Real Estate &amp; Property </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="114"  <?php if(in_array("114",$splitJobCate)){ echo 'checked'; } ?>> Retail &amp; Consumer Products </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="115"  <?php if(in_array("115",$splitJobCate)){ echo 'checked'; } ?>> Sales </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="116"  <?php if(in_array("116",$splitJobCate)){ echo 'checked'; } ?>> Science &amp; Technology </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="117"  <?php if(in_array("117",$splitJobCate)){ echo 'checked'; } ?>> Self Employment </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="118"  <?php if(in_array("118",$splitJobCate)){ echo 'checked'; } ?>> Sport &amp; Recreation </label>
                                                    </div>
                                                    <div class="checkbox flat-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="categories[]" value="119"  <?php if(in_array("119",$splitJobCate)){ echo 'checked'; } ?>> Trades &amp; Services </label>
                                                    </div>
                                                </div>
                                                <!-- tutup -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="salary_bottom">Minimum Salary <span class="mandatory">*</span></label>
                                            <input id="salary_bottom" placeholder="ex : 5000" name="salary_bottom" type="text" class="form-control number" value="<?php echo $jobDetail[8]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="salary_top">Maximum Salary <span class="mandatory">*</span></label>
                                            <input id="salary_top" placeholder="ex : 10000" name="salary_top" type="text" class="form-control number" value="<?php echo $jobDetail[9]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="salary_range">Salary Range <span class="mandatory">*</span></label>
                                            <select id="salary_range" class="form-control chosen-select" name="salary_range" style="display: none;">
                                                <option value="hourly" <?php if($jobDetail[10] == 'hourly'){ echo 'selected'; } ?>>Hourly</option>
                                                <option value="weekly" <?php if($jobDetail[10] == 'weekly'){ echo 'selected'; } ?>>Weekly</option>
                                                <option value="monthly" <?php if($jobDetail[10] == 'monthly'){ echo 'selected'; } ?>>Monthly</option>
                                                <option value="yearly" <?php if($jobDetail[10] == 'yearly'){ echo 'selected'; } ?>>Yearly</option>
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="closing">Closing Date</label>
                                            <input id="closing" name="closing" placeholder="Closing Date" type="text" class="form-control datetimepicker" value="<?php echo $jobDetail[11]; ?>">
                                            <small class="color-white-mute">Closing date for applicants to apply for this job, leave empty if you do not have a closing date.</small>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="white-space-20"></div>
                                        <h4>Job Location</h4>
                                        <hr>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="location">Job Location </label>
                                            <select name="location" id="location" class="form-control chosen-select" style="display: block;">
                                                <option class="level-0" value="77" <?php if($jobDetail[12] == '77'){ echo 'selected="selected"'; } ?>>California</option>
                                                <option class="level-1" value="78" <?php if($jobDetail[12] == '78'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;Los Angeles</option>
                                                <option class="level-1" value="79" <?php if($jobDetail[12] == '79'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;San Jose</option>
                                                <option class="level-1" value="80" <?php if($jobDetail[12] == '80'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;San Francisco</option>
                                                <option class="level-1" value="81" <?php if($jobDetail[12] == '81'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;Oakland</option>
                                                <option class="level-0" value="82" <?php if($jobDetail[12] == '82'){ echo 'selected="selected"'; } ?>>New York</option>
                                                <option class="level-1" value="83" <?php if($jobDetail[12] == '83'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;New York City</option>
                                                <option class="level-1" value="84" <?php if($jobDetail[12] == '84'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;Binghamton</option>
                                                <option class="level-1" value="85" <?php if($jobDetail[12] == '85'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;Long Beach</option>
                                                <option class="level-1" value="86" <?php if($jobDetail[12] == '86'){ echo 'selected="selected"'; } ?>>&nbsp;&nbsp;&nbsp;Rochester</option>
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="map_location">Location (Drag marker to the job's location)</label>
                                            <input type="hidden" name="map_location" class="form-control" id="map_location" value="40.71359727284219,-73.99837868515016">
                                            <div id="jobmap" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
                                                <div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                                                    <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 124px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 124px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 380px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 380px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -132px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -132px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 636px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 636px; top: 178px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 124px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 124px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 380px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 380px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -132px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -132px; top: 178px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 636px; top: -78px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 636px; top: 178px;"></div>
                                                                    </div>
                                                                </div>
                                                                <div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 371px; top: 160px; z-index: 200;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            </div>
                                                            <div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;">
                                                                <div style="overflow: hidden; width: 764px; height: 400px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i4939652&amp;2i6307662&amp;2e1&amp;3u16&amp;4m2&amp;1u764&amp;2u400&amp;5m5&amp;1e0&amp;5sen-GB&amp;6sus&amp;10b1&amp;12b1&amp;token=10973" style="width: 764px; height: 400px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 124px; top: -78px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24639!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=75833" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 124px; top: 178px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24640!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=35370" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 380px; top: -78px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24639!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=36112" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 380px; top: 178px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24640!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=126720" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: -132px; top: -78px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24639!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=115554" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: -132px; top: 178px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24640!4i256!2m3!1e0!2sm!3i355025358!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=55112" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 636px; top: -78px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19298!3i24639!4i256!2m3!1e0!2sm!3i355025358!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=107483" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="transform: translateZ(0px); position: absolute; left: 636px; top: 178px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i19298!3i24640!4i256!2m3!1e0!2sm!3i355025369!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=86999" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;" class="gm-style-pbc">
                                                            <p class="gm-style-pbt">Use two fingers to move the map</p>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                                <div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 371px; top: 160px; z-index: 200;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                    <map name="gmimap0" id="gmimap0">
                                                                        <area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;">
                                                                    </map>
                                                                </div>
                                                            </div>
                                                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" href="https://maps.google.com/maps?ll=40.713597,-73.998379&amp;z=16&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                        </a>
                                                    </div>
                                                    <div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 232px; top: 110px; background-color: white;">
                                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                                        <div style="font-size: 13px;">Map data ©2016 Google</div>
                                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;">
                                                        <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2016 Google</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 Google</div>
                                                    </div>
                                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div>
                                                    </div>
                                                    <div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@40.7135973,-73.9983787,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div>
                                                    </div>
                                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                                        <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;">
                                                            <div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);">
                                                                <div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div>
                                                                <div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
                                                            <div style="position: absolute; left: 1px; top: 1px;"></div>
                                                            <div style="position: absolute; left: 1px; top: 1px;">
                                                                <div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                <div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                            <div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                        <div class="gm-style-mtc" style="float: left;">
                                                            <div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map</div>
                                                            <div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 42px; text-align: left; display: none; background-color: white;">
                                                                <div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span>
                                                                    <label style="vertical-align: middle; cursor: pointer;">Terrain</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gm-style-mtc" style="float: left;">
                                                            <div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 40px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satellite</div>
                                                            <div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 42px; text-align: left; display: none; background-color: white;">
                                                                <div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span>
                                                                    <label style="vertical-align: middle; cursor: pointer;">Labels</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="white-space-20"></div>
                                        <div class="form-group text-right">
                                            <input type="hidden" name="jeg_action" value="edit-job">
                                            <input type="hidden" name="job_id" value="1238">
                                            <input type="hidden" name="jobplanet_nonce" value="3066066de8">
                                            <input type="submit" class="btn btn-theme btn-t-primary btn-block-xs" name="editJobVacancy" value="Edit Job Vacancy">
                                        </div>
                                    </div>

                                </div>


                            </form>

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

        <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
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
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="b032520e9c">
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
                <div class="xdsoft_label xdsoft_month"><span>July</span>
                    <div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box">
                        <div style="margin-top: 0px;">
                            <div class="xdsoft_option " data-value="0">January</div>
                            <div class="xdsoft_option " data-value="1">February</div>
                            <div class="xdsoft_option " data-value="2">March</div>
                            <div class="xdsoft_option " data-value="3">April</div>
                            <div class="xdsoft_option " data-value="4">May</div>
                            <div class="xdsoft_option " data-value="5">June</div>
                            <div class="xdsoft_option xdsoft_current" data-value="6">July</div>
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
                            <td data-date="26" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title="">
                                <div>26</div>
                            </td>
                            <td data-date="27" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title="">
                                <div>27</div>
                            </td>
                            <td data-date="28" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title="">
                                <div>28</div>
                            </td>
                            <td data-date="29" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title="">
                                <div>29</div>
                            </td>
                            <td data-date="30" data-month="5" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title="">
                                <div>30</div>
                            </td>
                            <td data-date="1" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>1</div>
                            </td>
                            <td data-date="2" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>2</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="3" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>3</div>
                            </td>
                            <td data-date="4" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>4</div>
                            </td>
                            <td data-date="5" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>5</div>
                            </td>
                            <td data-date="6" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>6</div>
                            </td>
                            <td data-date="7" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>7</div>
                            </td>
                            <td data-date="8" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>8</div>
                            </td>
                            <td data-date="9" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>9</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="10" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>10</div>
                            </td>
                            <td data-date="11" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_today" title="">
                                <div>11</div>
                            </td>
                            <td data-date="12" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>12</div>
                            </td>
                            <td data-date="13" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>13</div>
                            </td>
                            <td data-date="14" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>14</div>
                            </td>
                            <td data-date="15" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>15</div>
                            </td>
                            <td data-date="16" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>16</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="17" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>17</div>
                            </td>
                            <td data-date="18" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>18</div>
                            </td>
                            <td data-date="19" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>19</div>
                            </td>
                            <td data-date="20" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>20</div>
                            </td>
                            <td data-date="21" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>21</div>
                            </td>
                            <td data-date="22" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>22</div>
                            </td>
                            <td data-date="23" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title="">
                                <div>23</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="24" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>24</div>
                            </td>
                            <td data-date="25" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title="">
                                <div>25</div>
                            </td>
                            <td data-date="26" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title="">
                                <div>26</div>
                            </td>
                            <td data-date="27" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title="">
                                <div>27</div>
                            </td>
                            <td data-date="28" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title="">
                                <div>28</div>
                            </td>
                            <td data-date="29" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title="">
                                <div>29</div>
                            </td>
                            <td data-date="30" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_current xdsoft_weekend" title="">
                                <div>30</div>
                            </td>
                        </tr>
                        <tr>
                            <td data-date="31" data-month="6" data-year="2016" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title="">
                                <div>31</div>
                            </td>
                            <td data-date="1" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title="">
                                <div>1</div>
                            </td>
                            <td data-date="2" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title="">
                                <div>2</div>
                            </td>
                            <td data-date="3" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title="">
                                <div>3</div>
                            </td>
                            <td data-date="4" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title="">
                                <div>4</div>
                            </td>
                            <td data-date="5" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title="">
                                <div>5</div>
                            </td>
                            <td data-date="6" data-month="7" data-year="2016" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title="">
                                <div>6</div>
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
                    <div class="xdsoft_time xdsoft_current" data-hour="0" data-minute="0">00:00</div>
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
                    <div class="xdsoft_time " data-hour="16" data-minute="0">16:00</div>
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