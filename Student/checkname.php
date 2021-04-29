<?php
	require_once 'controllers/PostTuitionController.php';
	$name=$_GET["name"];
	$res = checkNameValidity($name);
	echo $res;

?>