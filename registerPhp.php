<?php
include('dbConnect.php');

//insert - register
if(isset($_POST['regisButton'])){
	$insertQuery = "insert into userlogin (email,password) values ('".$_POST['email']."', '".$_POST['password']."')";	
		if($result = mysqli_query($conn ,$insertQuery)){
			header('location:http://localhost:8080/jobSkillBracket/index.php');
		}
}

//create vacancy / vacancy.php - post job
if(isset($_POST['createVacancy'])){
	echo $insertQuery = "insert into job(Jobtitle,NotificationEmailAddress,FeaturedListing,Jobdescription,JobType,JobCategories,MinimumSalary,MaximumSalary,SalaryRange,ClosingDate,JobLocation,Address)values('".$_POST['job_title']."','".$_POST['application_email']."','".$_POST['featured']."','".$_POST['content']."','".$_POST['job_type']."','".implode(',',$_POST['categories'])."','".$_POST['salary_bottom']."','".$_POST['salary_top']."','".$_POST['salary_range']."','".$_POST['closing']."','".$_POST['location']."','".$_POST['address']."')";
//	$insertQuery = "insert into job (JobCategories) values ('".implode(',',$_POST['categories'])."')";
		if	($result = mysqli_query($conn,$insertQuery)){
			header('location:http://localhost:8080/jobSkillBracket/index.php');
		}	
}



//login button - header
if(isset($_POST['loginButton'])){ 
	$loginQuery = "select * from userlogin where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$result=mysqli_query($conn,$loginQuery);
	$row = mysqli_num_rows($result);
	$rowArr = mysqli_fetch_array($result);
	if($row==1){
		$_SESSION['email'] = $rowArr[1];
		$_SESSION['level'] = $rowArr[3];
		$_SESSION['userID'] = $rowArr[4];
		//print_r($_SESSION['email']); 
		header('location:http://localhost:8080/jobSkillBracket/index.php');
	}else{
		echo $loginQuery;  
	}
}

//login button - job-list
if(isset($_POST['loginJobList'])){ 
	$loginQuery = "select * from userlogin where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$result=mysqli_query($conn,$loginQuery);
	$row = mysqli_num_rows($result);
	$rowArr = mysqli_fetch_array($result);
	if($row==1){
		$_SESSION['email'] = $rowArr[1];
		$_SESSION['level'] = $rowArr[3];
		header('location:http://localhost:8080/jobSkillBracket/job-list.php?page=1');
	}else{
		echo $loginQuery;
	}
}

//logout
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
	unset($_SESSION['email']);
	unset($_SESSION['level']);
	session_destroy();
	session_unset();
	
	header('location:http://localhost:8080/jobSkillBracket/index.php');
}

//account - login button
if(isset($_POST['login'])){ 
	$loginQuery = "select * from userlogin where email='".$_POST['username']."' and password='".$_POST['password']."'";
	$result=mysqli_query($conn,$loginQuery);
	$row = mysqli_num_rows($result);
	$rowArr = mysqli_fetch_array($result);
	if($row==1){
		$_SESSION['email'] = $rowArr[1];
		$_SESSION['level'] = $rowArr[3];
		//print_r($_SESSION['email']); 
		header('location:http://localhost:8080/jobSkillBracket/create-vacancy/company.php');
	}else{
		echo $loginQuery;
	}
}

//company insert
if(isset($_POST['CreateCompany'])){
	$insertQuery = "insert into company (CompanyName,Industry,CompanySize,DressCode,Language,Website,Description) values ('".$_POST['company_title']."','".$_POST['categories']."','".$_POST['company_size']."','".$_POST['dress_code']."','".implode(',',$_POST['spoken_language'])."','".$_POST['website']."','".$_POST['content']."')";
	if($result = mysqli_query($conn,$insertQuery)){
		echo 'success';
	}else{
		echo 'fail';
	}
}

//choose company
if(isset($_POST['chooseCompany'])){
		header('location:http://localhost:8080/jobSkillBracket/create-vacancy/vacancy.php');
}

if(isset($_POST['createVacancy'])){
	echo $insertQuery = "insert into job(Jobtitle,NotificationEmailAddress,FeaturedListing,Jobdescription,JobType,JobCategories,MinimumSalary,MaximumSalary,SalaryRange,ClosingDate,JobLocation,Address)values('".$_POST['job_title']."','".$_POST['application_email']."','".$_POST['featured']."','".$_POST['content']."','".$_POST['job_type']."','".implode(',',$_POST['categories'])."','".$_POST['salary_bottom']."','".$_POST['salary_top']."','".$_POST['salary_range']."','".$_POST['closing']."','".$_POST['location']."','".$_POST['address']."')";
		if	($result = mysqli_query($conn,$insertQuery)){
			header('location:http://localhost:8080/jobSkillBracket/index.php');
		}	
}

?>	

