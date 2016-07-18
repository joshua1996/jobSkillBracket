<?php
//company php....list company
 include('../dbConnect.php');
	$selectQuery = "select * from company where userID='".$_SESSION['userID']."'";
	$result = mysqli_query($conn,$selectQuery);
	$row = mysqli_num_rows($result);


?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/bootflat.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/site.min.js"></script>
    <script src="http://www.uitutorial.com/demos/chosen-demo/jquery.min.js"></script>
    <script type='text/javascript' src='http://www.uitutorial.com/demos/chosen-demo/chosen.jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="http://www.uitutorial.com/demos/chosen-demo/chosen.min.css" />

</head>

<body class="page page-id-15 page-template-default logged-in jobplanet wpb-js-composer js-comp-ver-4.9.1 vc_responsive">
    <script>
        $(document).ready(function() {
            $('.chosen-select').chosen();
        });
    </script>
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
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
                                <li class="btn-highlight"><a href="http://jobplanet.jegtheme.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fjobplanet.jegtheme.com%2Faccount%2F&amp;_wpnonce=4d3b74b25e">Logout</a></li>
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
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-156"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Vacancy <span class="caret"></span></a></li>
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
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-307"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Job <span class="caret"></span></a></li>
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
            <div class="bg-color2 block-section line-bottom progress-step">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <ol class="progress-meter ">
                                <li class="progress-point done">Login / Register</li>
                                <!--

                                        -->
                                <li class="progress-point done">
                                    <a href="http://jobplanet.jegtheme.com/create-vacancy/package/">Package</a> </li>
                                <!--
                                        -->
                                <li class="progress-point done">
                                    <a href="http://jobplanet.jegtheme.com/create-vacancy/company/">Company</a> </li>
                                <!--
                                        -->
                                <li class="progress-point todo">
                                    Vacancy </li>
                                <!--
                    
                    -->
                                <li class="progress-point todo">Review</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-color1 block-section line-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel-group no-margin" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne">
                                                <h5 class=" no-margin with-ic">Choose Company</h5>
                                                <div class="collapse-toogle">
                                                    <i class="fa fa-plus ic-open ic-circle-md bg-color1"></i>
                                                    <i class="fa fa-minus ic-close ic-circle-md bg-color1"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body  panel-body-lg">
                                            <!-- list of company here -->
                                            <form method="POST" action="../registerPhp.php">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="company_id">Choose Company </label>
                                                            <select id="company_id" name="company_id" class="form-control chosen-select" data-placeholder="Industry Category" style="display: none;">
																<?php while($column = mysqli_fetch_array($result)){
																  ?>  <option value="1155"><?php echo $column[1] ?></option>
																<?php
																} ?>
                                                                <!-- <option value="1172">Golden Pot</option>
                                                                <option value="1155">Moviles de Mexico</option>
                                                                <option value="1153">Bamz.co.id</option>
                                                                <option value="1103">plus</option>
                                                                <option value="1089">Hello</option>
                                                                <option value="1084">Microsox</option>
                                                                <option value="1066">xper</option>
                                                                <option value="1064">xper</option>
                                                                <option value="1063">Luster</option>
                                                                <option value="1052">Next</option>
                                                                <option value="1039">test-company</option>
                                                                <option value="1007">Test Clubhouse</option>
                                                                <option value="1001">efsefgseg</option>
                                                                <option value="998">Sisint di Raffaele Gurrado</option>
                                                                <option value="978">microsoft</option>
                                                                <option value="940">PIPAPO</option>
                                                                <option value="939">PIPAPO</option>
                                                                <option value="938">PIPAPO</option>
                                                                <option value="901">mundo</option>
                                                                <option value="860">rerere</option>
                                                                <option value="854">Satya</option>
                                                                <option value="850">AAA</option>
                                                                <option value="845">Tres</option>
                                                                <option value="827">xxxmiix</option>
                                                                <option value="822">Helloworld</option>
                                                                <option value="786">Jeff</option>
                                                                <option value="780">ITRUST</option>
                                                                <option value="755">Xtgrhdv</option>
                                                                <option value="750">Dave Person</option>
                                                                <option value="737">safsadfsdf</option>
                                                                <option value="733">PuneWebDesigners</option>
                                                                <option value="721">Oxumber</option>
                                                                <option value="672">test</option>
                                                                <option value="668">hhh</option>
                                                                <option value="633">mbv</option>
                                                                <option value="627">ingeniousesolutions</option>
                                                                <option value="559">COHA</option>
                                                                <option value="554">fhj</option>
                                                                <option value="534">Testing123</option>
                                                                <option value="512">Microsoft</option>
                                                                <option value="510">test1</option>
                                                                <option value="506">XyZx</option>
                                                                <option value="498">Test Enterpirse</option>
                                                                <option value="465">sdsadasd</option>
                                                                <option value="406">54534534</option>
                                                                <option value="403">Test Company</option>
                                                                <option value="399">softags</option>
                                                                <option value="393">Harrods</option>
                                                                <option value="382">Huppy Tuppy</option>
                                                                <option value="364">Testeo</option>
                                                                <option value="351">ztetubz</option>-->
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="white-space-20"></div>
                                                <div class="form-group text-right">
                                                    <input type="hidden" name="jeg_action" value="choose-company">
                                                    <input type="hidden" name="jobplanet_nonce" value="89e486b05f">
                                                    <input type="submit" class="btn btn-theme btn-t-primary btn-block-xs" value="Choose Company" name="chooseCompany">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <h5 class=" no-margin with-ic">Create Company</h5>
                                                <div class="collapse-toogle">
                                                    <i class="fa fa-plus ic-open ic-circle-md bg-color1"></i>
                                                    <i class="fa fa-minus ic-close ic-circle-md bg-color1"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body  panel-body-lg">
                                            <form method="post" action="../registerPhp.php" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title">Company Name <span class="mandatory">*</span></label>
                                                            <input id="title" name="company_title" placeholder="Name of your company, ex : Microsoft" type="text" class="form-control" value="">
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
                                                                            browse_button: 'btn-upload-logo    ',
                                                                            multi: false,
                                                                            name: 'company_logo',
                                                                            extension: 'jpg,jpeg,gif,png',
                                                                            swf: 'http://jobplanet.jegtheme.com/wp-content/plugins/jobplanet-plugin/assets/js/plupload/js/Moxie.swf',
                                                                            upload_url: 'http://jobplanet.jegtheme.com/wp-admin/admin-ajax.php?nonce=89e486b05f',
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
                                                            <select name="categories" id="chosenIndustry" class="form-control chosen-select" data-placeholder="Industry Category" style="display: block;">
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="spoken_language">Company Spoken Language </label>
                                                            <select id="spoken_language" name="spoken_language[]" multiple="" class="chosen-select form-control" data-placeholder="Choose Languages Spoken" style="display: none;">
                                                                <option></option>
                                                                <option value="71">English</option>
                                                                <option value="75">French</option>
                                                                <option value="74">German</option>
                                                                <option value="76">Japanese</option>
                                                                <option value="73">Mandarin</option>
                                                                <option value="72">Spanish</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dress_code">Dress Code </label>
                                                            <select id="dress_code" name="dress_code" class="form-control chosen-select" data-placeholder="Company Dress Code" style="display: none;">
                                                                <option></option>
                                                                <option value="120">Formal (e.g. Shirts + Ties)</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="size">Company Size </label>
                                                            <select name="company_size" class="form-control chosen-select" data-placeholder="Choose Your company size" style="display: none;">
                                                                <option value="1">1 - 9 Employee</option>
                                                                <option value="2">10 - 49 Employee</option>
                                                                <option value="3">50 - 99 Employee</option>
                                                                <option value="4">100 - 500 Employee</option>
                                                                <option value="5">500 - 999 Employee</option>
                                                                <option value="6">1000+ Employee</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="website">Website URL</label>
                                                            <input id="website" name="website" placeholder="Your Company Website URL" type="text" class="form-control" value="">
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
                                                            <textarea name="content" style="width:100%"></textarea>
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
                                                                            upload_url: 'http://jobplanet.jegtheme.com/wp-admin/admin-ajax.php?nonce=89e486b05f',
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
                                                    <input type="hidden" name="jeg_action" value="create-company">
                                                    <input type="hidden" name="redirect" value="http://jobplanet.jegtheme.com/create-vacancy/vacancy/">
                                                    <input type="hidden" name="save_session" value="1">
                                                    <input type="hidden" name="with_flash_msg" value="0">
                                                    <input type="hidden" name="jobplanet_nonce" value="89e486b05f">
                                                    <input type="submit" class="btn btn-theme btn-t-primary btn-block-xs" value="Create Company" name="CreateCompany">
                                                </div>
                                            </form>
                                            <div class="white-space-20"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="9182be7f1a">
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
</body>

</html>