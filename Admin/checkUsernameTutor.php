<?php 

	require_once 'controllers/TutorController.php';	
	$username=$_GET["uname"];
	$res =trim( checkUsernameValidity($username));
	echo $res;




?> 