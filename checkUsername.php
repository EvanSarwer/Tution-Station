<?php 

	require_once "controllers/signupController.php";	
	$username=$_GET["uname"];
	$res = trim(checkUsernameValidity($username));
	echo $res;




?> 