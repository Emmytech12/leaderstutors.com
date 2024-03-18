<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Leaders Tutors'; 
	$website_url='http://localhost/projects/leaderstutors.com';
	//$website_url='https://leaderstutors.com';
?>

<script>
	//////////////////online constants///////////////////////
	//var website_url='https://leaderstutors.com';
	var website_url='http://localhost/projects/leaderstutors.com';
	var staff_picture_directory='https://leaderstutors.com/api/uploaded-files/staff-pix';
	var subjectPixPath= 'https://leaderstutors.com/api/uploaded-files/subject-pix';
	var departmentPixPath= 'https://leaderstutors.com/api/uploaded-files/department-pix';
	var classPixPath= 'https://leaderstutors.com/api/uploaded-files/class-pix';
	var tutorialPixPath= 'https://leaderstutors.com/api/uploaded-files/tutorial-pix';
	var tutorialVideoPath= 'https://leaderstutors.com/api/uploaded-files/tutorial-video';
	var tutorialMaterialPath= 'https://leaderstutors.com/api/uploaded-files/tutorial-material';
	
	
	var apiKey = 'f3f68f9fb56337fbe3842c8fb9ee54e9';
	var site_local_url=website_url+'/config/content-page';
	var endPoint='https://leaderstutors.com/api/dev'; /// admin local portal url
	var admin_login_local_url=website_url+"/admin/config/code"; /// admin login local url
	var admin_portal_url=website_url+"/admin/a";/// admin portal url
	var admin_local_portal_url=website_url+"/admin/a/config/code"; /// admin local portal url
</script>

