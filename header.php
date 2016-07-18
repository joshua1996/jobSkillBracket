<?php require( 'dbConnect.php');?>
<nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="menu-primary" class="nav navbar-nav">
                <li id="menu-item-154" class="  <?php if($_SERVER['PHP_SELF']=='job-list.php' ){
	echo 'menu-item menu-item-type-post_type menu-item-object-page menu-item-155';}else{
		echo'menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-109 current_page_item menu-item-154';
	}
 ?>"><a href="http://localhost:8080/jobSkillBracket/job-list.php?page=1">Find Job <span class="caret"></span></a>
                    <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe>
                </li>

                <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="http://localhost:8080/jobSkillBracket/resume-list.php">Find Resume <span class="caret"></span></a></li>
                <li id="menu-item-156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156"><a href="http://localhost:8080/jobSkillBracket/create-vacancy/<?php if(isset($_SESSION['email'])){echo'company.php';}else{echo'login.php';} ?>">Create Vacancy <span class="caret"></span></a></li>
                <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-157 dropdown"><a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a href="select-plan.php">Select Plan <span class="caret"></span></a></li>
                        <li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="about-us.php">About Us <span class="caret"></span></a></li>
                        <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206"><a href="contact.php">Contact Us <span class="caret"></span></a></li>
                        <li id="menu-item-207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-207"><a href="term-of-service.php">Term &amp; Privacy <span class="caret"></span></a></li>
                        <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="blog.php">Article &amp; Blog <span class="caret"></span></a></li>
                        <li id="menu-item-464" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-464"><a href="company-listing.php">Company Listing <span class="caret"></span></a></li>
                        <li id="menu-item-161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-161"><a href="404">Error 404 <span class="caret"></span></a></li>
                        <li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="shortcode.php">Shortcode <span class="caret"></span></a></li>
                    </ul>
                </li>
                <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158 dropdown"><a href="#" data-toggle="dropdown" role="button" class="dropdown-toggle">Features <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="http://jobplanet.jegtheme.com/shop/">Shop Page <span class="caret"></span></a></li>
                        <li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="http://jobplanet.jegtheme.com/create-vacancy/">Create Job <span class="caret"></span></a></li>
                        <li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a href="http://jobplanet.jegtheme.com/job-list/">Ajax Job Search <span class="caret"></span></a></li>
                        <li id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302"><a href="http://jobplanet.jegtheme.com/resume-list/">Ajax Resume Search <span class="caret"></span></a></li>
                        <li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-job menu-item-305"><a href="http://jobplanet.jegtheme.com/job/ios-applications-developer/">Job Detail <span class="caret"></span></a></li>
                        <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-resume menu-item-303"><a href="http://jobplanet.jegtheme.com/resume/senior-database-manager/">Resume Detail <span class="caret"></span></a></li>
                        <li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-company menu-item-306"><a href="http://jobplanet.jegtheme.com/company/dream-estate-property/">Company Detail <span class="caret"></span></a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION[ 'level']) && $_SESSION[ 'level']=='employer' ){ ?> '
                <li class="dropdown">
                    <a href="http://jobplanet.jegtheme.com/account/" class="link-profile dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg" srcset="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/4-3.jpg 2x" class="avatar avatar-80 photo img-profile" height="80" width="80"> &nbsp; <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://jobplanet.jegtheme.com/account/edit-account/"> Edit Account </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/change-password/"> Change Password </a></li>
                        <li><a href="http://localhost:8080/jobSkillBracket/account/jobs.php"> Job List </a></li>
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
                </li>
                <li class="link-btn"><a href="http://localhost:8080/jobSkillBracket/registerPhp.php?action=logout"><span class="btn btn-theme  btn-pill btn-xs btn-line">Logout</span></a></li>
                <?php }elseif((isset($_SESSION[ 'level']) && $_SESSION[ 'level']=='applicant' )){?>
                <li class="dropdown">
                    <a href="http://jobplanet.jegtheme.com/account/" class="link-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img alt="" src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/7-2.jpg" srcset="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/7-2.jpg 2x" class="avatar avatar-80 photo img-profile" height="80" width="80"> &nbsp; <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://jobplanet.jegtheme.com/account/edit-account/"> Edit Account </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/change-password/"> Change Password </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/manage-application/"> Manage Application </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/resumes/"> My Resume </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/follow-company/"> Followed Company </a></li>
                        <li><a href="http://localhost:8080/jobSkillBracket/account/bookmarked-job.php"> Bookmarked Job </a></li>
                        <li><a href="http://jobplanet.jegtheme.com/account/job-alert/"> Job Alert List </a></li>
                        <li class="btn-highlight">
                            <a href="http://jobplanet.jegtheme.com/account/create-resume/">
        Create Resume    </a>
                        </li>
                        <li class="btn-highlight">
                            <a href="http://jobplanet.jegtheme.com/account/create-alert/">
        Create Job Alert    </a>
                        </li>
                    </ul>
                </li>
                <li class="link-btn"><a href="http://localhost:8080/jobSkillBracket/registerPhp.php?action=logout"><span class="btn btn-theme  btn-pill btn-xs btn-line">Logout</span></a></li>
                <?php } else{ echo ' <li class="link-btn"><a href="http://localhost:8080/jobSkillBracket/account/login.php"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a href="http://localhost:8080/jobSkillBracket/account/register.php"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>'; } ?>
            </ul>
        </div>
    </div>
</nav>