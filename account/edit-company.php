<?php

include( '../dbConnect.php'); 
$selectQuery =  "select * from company where id='".$_GET['company']."'";
$result = mysqli_query($conn,$selectQuery);
$companyDetail = mysqli_fetch_array($result);

$splitLang = explode(',',$companyDetail[5]);

if(isset($_POST['EditCompany'])){
	$updateComp = "update company set CompanyName = '".$_POST['company_title']."', Industry='".$_POST['categories']."', CompanySize='".$_POST['company_size']."', DressCode='".$_POST['dress_code']."', Language='".implode(",",$_POST['spoken_language'])."', Website='".$_POST['website']."', Description='".$_POST['description']."' where id='".$_GET['company']."'";
		$result2 = mysqli_query($conn,$updateComp);
	
	header("location:http://localhost:8080/jobSkillBracket/account/edit-company.php?company=$_GET[company]");
	
	echo  "update company set CompanyName = '".$_POST['company_title']."', Industry='".$_POST['categories']."', CompanySize='".$_POST['company_size']."', DressCode='".$_POST['dress_code']."', Language='".implode(",",$_POST['spoken_language'])."', Website='".$_POST['website']."', Description='".$_POST['description']."' where id='".$_GET['company']."'";
}
?>
<html class="no-js" lang="en-US">
<!--<![endif]-->

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
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=0c8ae2e30d">Logout</a></li>
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

            <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
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

                            <h3 class="no-margin-top">Edit Company Details</h3>
                            <hr>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Company Name <span class="mandatory">*</span></label>
                                            <input id="title" name="company_title" placeholder="Name of your company, ex : Microsoft" type="text" class="form-control" value="<?php echo $companyDetail[1]; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="upload_company_logo">Company Logo</label>
                                            <div id="upload_company_logo" class="upload_wrapper">
                                                <div class="upload_preview_container">
                                                    <ul>
                                                    </ul>
                                                </div>

                                                <strong><span style="color:red;">*</span>&nbsp;Upload functionality disabled on this Demo</strong>

                                                <div class="upload-progress"> Upload Progress ( <span></span> ) </div>
                                            </div>
                                            <script>
                                                (function($) {
                                                    $(document).ready(function() {
                                                        $('#upload_company_logo').jUploader({
                                                            browse_button: 'btn-upload-logo',
                                                            multi: false,
                                                            name: 'company_logo',
                                                            extension: 'jpg,jpeg,gif,png',
                                                            swf: 'http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/plupload/js/Moxie.swf',
                                                            upload_url: 'http://jobplanet.jegtheme.com/wp-admin/admin-ajax.php?nonce=da7642cb77',
                                                            maxsize: '1mb',
                                                            maxwidth: 300,
                                                            maxheight: 200,
                                                        });
                                                    });
                                                })(jQuery);
                                            </script>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="categories">Company Industry Category </label>
                                            <select name="categories" class="chosen-select form-control" data-placeholder="Industry Category" style="display: block;">
                                                <option <?php if($companyDetail[2]=="91"){ ?>selected=""<?php } ?> value="91">Accounting</option>
                                                <option  <?php if($companyDetail[2]=="92"){ ?>selected=""<?php } ?> value="92">Administration &amp; Office Support</option>
                                                <option  <?php if($companyDetail[2]=="93"){ ?>selected=""<?php } ?> value="93">Advertising, Arts &amp; Media</option>
                                                <option  <?php if($companyDetail[2]=="94"){ ?>selected=""<?php } ?> value="94">Banking &amp; Financial Services</option>
                                                <option  <?php if($companyDetail[2]=="95"){ ?>selected=""<?php } ?> value="95">Call Centre &amp; Customer Service</option>
                                                <option  <?php if($companyDetail[2]=="90"){ ?>selected=""<?php } ?> value="90">CEO &amp; General Management</option>
                                                <option  <?php if($companyDetail[2]=="96"){ ?>selected=""<?php } ?> value="96">Community Services &amp; Development</option>
                                                <option  <?php if($companyDetail[2]=="97"){ ?>selected=""<?php } ?> value="97">Construction</option>
                                                <option <?php if($companyDetail[2]=="98"){ ?>selected=""<?php } ?> value="98">Consulting &amp; Strategy</option>
                                                <option <?php if($companyDetail[2]=="99"){ ?>selected=""<?php } ?> value="99">Design &amp; Architecture</option>
                                                <option <?php if($companyDetail[2]=="100"){ ?>selected=""<?php } ?> value="100">Education &amp; Training</option>
                                                <option <?php if($companyDetail[2]=="101"){ ?>selected=""<?php } ?> value="101">Engineering</option>
                                                <option <?php if($companyDetail[2]=="102"){ ?>selected=""<?php } ?> value="102">Farming, Animals &amp; Conservation</option>
                                                <option <?php if($companyDetail[2]=="103"){ ?>selected=""<?php } ?> value="103">Government &amp; Defence</option>
                                                <option <?php if($companyDetail[2]=="104"){ ?>selected=""<?php } ?> value="104">Healthcare &amp; Medical</option>
                                                <option <?php if($companyDetail[2]=="105"){ ?>selected=""<?php } ?> value="105">Hospitality &amp; Tourism</option>
                                                <option <?php if($companyDetail[2]=="106"){ ?>selected=""<?php } ?> value="106">Human Resources &amp; Recruitment</option>
                                                <option <?php if($companyDetail[2]=="107"){ ?>selected=""<?php } ?> value="107">Information &amp; Communication Technology</option>
                                                <option <?php if($companyDetail[2]=="108"){ ?>selected=""<?php } ?> value="108">Insurance &amp; Superannuation</option>
                                                <option <?php if($companyDetail[2]=="109"){ ?>selected=""<?php } ?> value="109">Legal</option>
                                                <option <?php if($companyDetail[2]=="110"){ ?>selected=""<?php } ?> value="110">Manufacturing, Transport &amp; Logistics</option>
                                                <option <?php if($companyDetail[2]=="111"){ ?>selected=""<?php } ?> value="111">Marketing &amp; Communications</option>
                                                <option <?php if($companyDetail[2]=="112"){ ?>selected=""<?php } ?> value="112">Mining, Resources &amp; Energy</option>
                                                <option <?php if($companyDetail[2]=="113"){ ?>selected=""<?php } ?> value="113">Real Estate &amp; Property</option>
                                                <option <?php if($companyDetail[2]=="114"){ ?>selected=""<?php } ?> value="114">Retail &amp; Consumer Products</option>
                                                <option <?php if($companyDetail[2]=="115"){ ?>selected=""<?php } ?> value="115">Sales</option>
                                                <option <?php if($companyDetail[2]=="116"){ ?>selected=""<?php } ?> value="116">Science &amp; Technology</option>
                                                <option <?php if($companyDetail[2]=="117"){ ?>selected=""<?php } ?> value="117">Self Employment</option>
                                                <option <?php if($companyDetail[2]=="118"){ ?>selected=""<?php } ?> value="118">Sport &amp; Recreation</option>
                                                <option <?php if($companyDetail[2]=="119"){ ?>selected=""<?php } ?> value="119">Trades &amp; Services</option>
                                            </select>
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="spoken_language">Language(s) Spoken </label>
                                            <select id="spoken_language" name="spoken_language[]" multiple="" class="chosen-select form-control" data-placeholder="Choose Languages Spoken" style="display: block;">
                                                <option></option>
                                                <option <?php if(in_array("71",$splitLang)){ ?>selected=""<?php } ?> value="71">English</option>
                                                <option <?php if(in_array("75",$splitLang)){ ?>selected=""<?php } ?> value="75">French</option>
                                                <option <?php if(in_array("74",$splitLang)){ ?>selected=""<?php } ?> value="74">German</option>
                                                <option <?php if(in_array("76",$splitLang)){ ?>selected=""<?php } ?> value="76">Japanese</option>
                                                <option <?php if(in_array("73",$splitLang)){ ?>selected=""<?php } ?> value="73">Mandarin</option>
                                                <option <?php if(in_array("72",$splitLang)){ ?>selected=""<?php } ?> value="72">Spanish</option>
                                            </select>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dress_code">Dress Code </label>
                                            <select id="dress_code" name="dress_code" class="chosen-select form-control" data-placeholder="Company Dress Code" style="display: block;">
                                                <option></option>
                                                <option selected="" value="120">Formal (e.g. Shirts + Ties)</option>
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Company Size </label>
                                            <select name="company_size" class="chosen-select form-control" data-placeholder="Choose Your company size" style="display: block;">
                                                <option value="1" <?php if($companyDetail[3]=="1"){ ?>selected=""<?php } ?> >1 - 9 Employee</option>
                                                <option value="2" <?php if($companyDetail[3]=="2"){ ?>selected=""<?php } ?> >10 - 49 Employee</option>
                                                <option value="3" <?php if($companyDetail[3]=="3"){ ?>selected=""<?php } ?>>50 - 99 Employee</option>
                                                <option value="4" <?php if($companyDetail[3]=="4"){ ?>selected=""<?php } ?>>100 - 500 Employee</option>
                                                <option value="5" <?php if($companyDetail[3]=="5"){ ?>selected=""<?php } ?>>500 - 999 Employee</option>
                                                <option value="6" <?php if($companyDetail[3]=="6"){ ?>selected=""<?php } ?>>1000+ Employee</option>
                                            </select>
                                          
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Website URL</label>
                                            <input id="website" name="website" placeholder="Your Company Website URL" type="text" class="form-control" value="<?php echo $companyDetail[6]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="official_facebook">Official Facebook Page</label>
                                            <input id="official_facebook" name="official_facebook" placeholder="URL of your company official facebook page" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="official_twitter">Official Twitter Account</label>
                                            <input id="official_twitter" name="official_twitter" placeholder="URL of your company official twitter page" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="official_linked_in">Official Linked In Company</label>
                                            <input id="official_linked_in" name="official_linked_in" placeholder="URL of your company official linked in page" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="official_instagram">Official Instagram Page</label>
                                            <input id="official_instagram" name="official_instagram" placeholder="URL of your company official instagram page" type="text" class="form-control" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Company Description</label>
                                            <div id="wp-description-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
                                                <link rel="stylesheet" id="dashicons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/dashicons.min.css" type="text/css" media="all">
                                                <link rel="stylesheet" id="editor-buttons-css" href="http://jobplanet.jegtheme.com/wp-includes/css/editor.min.css" type="text/css" media="all">
                                                <div id="wp-description-editor-container" class="wp-editor-container">
                                                    <textarea class="wp-editor-area" rows="10" autocomplete="off" cols="40" name="description" id="description"  aria-hidden="true"><?php echo $companyDetail[7]; ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="upload_company_gallery">Company Gallery</label>
                                            <div id="upload_company_gallery" class="upload_wrapper">
                                                <div class="upload_preview_container">
                                                    <ul>
                                                    </ul>
                                                </div>

                                                <strong><span style="color:red;">*</span>&nbsp;Upload functionality disabled on this Demo</strong>

                                                <div class="upload-progress"> Upload Progress ( <span></span> ) </div>
                                            </div>
                                            <script>
                                                (function($) {
                                                    $(document).ready(function() {
                                                        $('#upload_company_gallery').jUploader({
                                                            browse_button: 'btn-upload',
                                                            multi: true,
                                                            name: 'company_gallery',
                                                            extension: 'jpg,jpeg,gif,png',
                                                            swf: 'http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/plupload/js/Moxie.swf',
                                                            upload_url: 'http://jobplanet.jegtheme.com/wp-admin/admin-ajax.php?nonce=da7642cb77',
                                                            maxsize: '1mb',
                                                            maxcount: 8,
                                                        });
                                                    });
                                                })(jQuery);
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <input type="hidden" name="company_id" value="1246">
                                    <input type="hidden" name="jeg_action" value="edit-company">
                                    <input type="hidden" name="jobplanet_nonce" value="da7642cb77">
                                    <input type="submit" class="btn btn-theme btn-t-primary btn-block-xs" name ="EditCompany"  value="Edit Company">
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

    <div id="wp-link-backdrop" style="display: none"></div>
    <div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title">
        <form id="wp-link" tabindex="-1">
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="0a276382ee">
            <h1 id="link-modal-title">Insert/edit link</h1>
            <button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button>
            <div id="link-selector">
                <div id="link-options">
                    <p class="howto" id="wplink-enter-url">Enter the destination URL</p>
                    <div>
                        <label><span>URL</span>
                            <input id="wp-link-url" type="text" aria-describedby="wplink-enter-url">
                        </label>
                    </div>
                    <div class="wp-link-text-field">
                        <label><span>Link Text</span>
                            <input id="wp-link-text" type="text">
                        </label>
                    </div>
                    <div class="link-target">
                        <label><span></span>
                            <input type="checkbox" id="wp-link-target"> Open link in a new tab</label>
                    </div>
                </div>
                <p class="howto" id="wplink-link-existing-content">Or link to existing content</p>
                <div id="search-panel">
                    <div class="link-search-wrapper">
                        <label>
                            <span class="search-label">Search</span>
                            <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content">
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
                    <button type="button" class="button">Cancel</button>
                </div>
                <div id="wp-link-update">
                    <input type="submit" value="Add Link" class="button button-primary" id="wp-link-submit" name="wp-link-submit">
                </div>
            </div>
        </form>
    </div>

    <div id="wp-a11y-speak-polite" role="status" aria-live="polite" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
    <div id="wp-a11y-speak-assertive" role="alert" aria-live="assertive" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
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
    <div id="mceu_41" class="mce-toolbar-grp mce-inline-toolbar-grp mce-container mce-panel" hidefocus="1" tabindex="-1" role="group" style="display: none;">
        <div id="mceu_41-body" class="mce-container-body mce-stack-layout">
            <div id="mceu_42" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                <div id="mceu_42-body" class="mce-container-body mce-flow-layout">
                    <div id="mceu_43" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                        <div id="mceu_43-body">
                            <div id="mceu_38" class="wp-link-input">
                                <input type="text" value="" placeholder="Paste URL or type to search" class="ui-autocomplete-input" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="ui-id-1">
                                <input type="text" style="display:none" value="">
                            </div>
                            <div id="mceu_39" class="mce-widget mce-btn mce-primary" tabindex="-1" aria-labelledby="mceu_39" role="button" aria-label="Apply">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-editor-break"></i></button>
                            </div>
                            <div id="mceu_40" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_40" role="button" aria-label="Link options">
                                <button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-dashicon dashicons-admin-generic"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content wplink-autocomplete" id="ui-id-1" role="listbox" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span></body>

</html>