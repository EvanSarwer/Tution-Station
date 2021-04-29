<?php 

	require_once 'controllers/StudentController.php';	
	$username=$_GET["uname"];
	$res =trim( checkUsernameValidity($username));
	echo $res;




?> 