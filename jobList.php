<?php include('dbConnect.php');
if(isset($_GET['keyword'])){
	$keyword = $_GET['keyword'];
	$isSearch = 'true';
	$limit=1; 
	$start=( $_GET['searchPage'] - 1)*$limit; 
	$selectQuery='select * from job' ;
	$a=' limit ' .$start. ','.$limit. ''; 
	$searchQuery = ' where Jobtitle like "%'.$_GET['keyword'].'%"';
	$result=mysqli_query($conn,$selectQuery.$searchQuery); 
	$pageResult=mysqli_query($conn,$selectQuery.$searchQuery.$a); 
	//echo $selectQuery.$searchQuery.$a;
}else{
	$keyword = "";
	$isSearch='false';
	$limit=1; 
	$start=( $_GET[ 'page'] - 1)*$limit; 
	$selectQuery='select * from job' ;
	$a=' limit ' .$start. ','.$limit. ''; 
	$searchQuery = '';
	$result=mysqli_query($conn,$selectQuery); 
	$pageResult=mysqli_query($conn,$selectQuery.$a); 
	//echo 'none';
}

$row=mysqli_num_rows($result);
$pages=$row / $limit;
//echo $pages;
?>

    <div class="box-list-wrapper" >

        <!-- desc top -->
        <div class="row hidden-xs">
            <div class="col-sm-6 ">
                <p><strong class="color-black">Job Vacancy Filter :  </strong></p>
            </div>
            <div class="col-sm-6">
                <p class="text-right">
                    Job 1 to 4 of 10 </p>
            </div>
        </div>
        <!-- end desc top -->

        <!-- item list -->
        <div class="box-list">
            <?php while($column=mysqli_fetch_array($pageResult)){ ?>
            <div class="item job-item  post-274 job type-job status-publish hentry job-type-contract job-location-binghamton job-category-education-training">
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="img-item">
                            <img src="http://jobplanet.jegtheme.com/wp-content/uploads/2016/01/logo_box-9-option-1.png" alt="Dream Estate Property">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h3 class="no-margin-top"><a href="http://localhost:8080/jobSkillBracket/job.php?jobitem=<?php echo $column[0]; ?>" class=""><?php echo $column[2]; ?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                        <h5>
                <a href="http://jobplanet.jegtheme.com/company/dream-estate-property/"><span class="color-black"><?php echo $column[1]; ?></span></a>
                                – <span class="color-white-mute"><?php $column[12]; ?></span>
                            </h5>
                        <p class="text-truncate "></p>
                        <p>About Us Nulla in arcu interdum, consectetur est non, elementum purus. Pellentesque semper, elit eu…</p>
                        <p></p>
                        <div>
                            <span class="color-white-mute">5 months ago</span> –

                            <?php if(isset($_SESSION['level']) && $_SESSION[ 'level']=='applicant' ){ ?><a href="#" data-bookmarked="0" data-id="273" class="bookmark-job btn btn-xs btn-theme btn-default">bookmark job</a>
                            <?php }?>
                            <!-- Login -->
                            <a href="#login" data-toggle="modal" class="btn btn-xs btn-theme btn-default">
                                <?php 
																 if(isset($_SESSION['level']) && $_SESSION['level']=='applicant' )
																 {echo 'apply job'; }
																 elseif (isset($_SESSION['level']) && $_SESSION['level']=='employer')
																 {echo 'login as applicant to save job';}
																 else
																 {echo 'login to save job';} 
								?>
                            </a> –
                            <!-- Modal Email --><a href="#" data-id="274" class="send-email btn btn-theme btn-xs btn-default"> email </a>
                        </div>
                    </div>
                </div>
            </div> <?php }?>
            <!-- end item list -->

        </div>

        <nav>
            <ul class="pagination pagination-theme no-margin ajax-paging">
                <?php 
				if(isset($_GET['page'])){
				if($_GET['page']!=1)
				{ ?>
				<li><a class="prev page-numbers" data-page="<?php echo ($_GET['page']-1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo ($_GET['page']-1) ?>">←</a></li>
				<?php } 
				for($i=0;$i<$pages;$i++)
				{ if($_GET['page']==($i+1))
				{?><li><span class="page-numbers current"><?php echo ($i+1) ?></span></li><?php $nextPage = ($i+2); }
				 else
				 { ?> <li><a class="page-numbers" data-page="<?php echo($i+1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo($i+1) ?>" ><?php echo ($i+1) ?></a></li><?php }
				} 
				if($_GET[ 'page']==round($pages))
				{ }
				else
				{ ?> <li><a class="next page-numbers" data-page="<?php echo ($_GET['page']+1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo ($_GET[ 'page']+1)?>">→</a><?php }
				}else{
					if($_GET['searchPage']!=1){
							?><li><a class="prev page-numbers" data-page="<?php echo ($_GET['searchPage']-1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo ($_GET['searchPage']-1) ?>">←</a></li><?php
						}
							for($i=0;$i<$pages;$i++){
								if($_GET['searchPage']==($i+1))
									{?><li><span class="page-numbers current"><?php echo ($i+1) ?></span></li><?php $nextPage = ($i+2); }
								else
					 				{ ?> <li><a class="page-numbers" data-page="<?php echo($i+1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo($i+1) ?>" ><?php echo ($i+1) ?></a></li><?php }
					}
					if($_GET[ 'searchPage']!=round($pages))
						{ ?> <li><a class="next page-numbers" data-page="<?php echo ($_GET['searchPage']+1) ?>" href="http://localhost:8080/jobSkillBracket/job-list.php?page=<?php echo ($_GET[ 'searchPage']+1)?>">→</a><?php }
				}
				
				
				?>
            </ul>
        </nav>
    </div>
