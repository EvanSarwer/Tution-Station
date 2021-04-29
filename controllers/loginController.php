<?php

	require_once "models/db_config.php";

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$err_message="";
	
	
	
	if(isset($_POST["login"])){
		
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hassError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			
			if(authenticateUser($uname,$pass)){
				$types=checkUsername($uname);
				foreach($types as $type){
					if($type["type"] == "Admin"){
						session_start();
						$_SESSION["loggedin"]=$uname;
						header("Location: Admin/AdminHome.php");
					}
					else if($type["type"] == "Tutor"){
						header("Location: Tutor/TutorHome.php");
					}
					else if($type["type"] == "Student"){
						header("Location: Student/Home.php");
					}
					else {
						$err_message="Invalid Action, Try Again";
					}
				}
				
			}
			$err_message="Invalid username or password";
			
					
		}
		
		
	}
	
	
	function authenticateUser($uname,$pass){
		$query = "select * from users where username='$uname' and password='$pass'";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;	
	}
	
	
	function checkUsername($uname){
		$query = "select type from users where username='$uname'";
		$result = get($query);
		return $result;
	}
	
	
	
?>