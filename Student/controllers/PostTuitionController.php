<?php
		require_once "models/db_config.php";    
		    
		    $title="";
			$err_title="";
			
			$name="";
			$err_name="";
			
	        $email="";
			$err_email="";
			
			
			$salary="";
			$err_salary="";
			
			$phone="";
			$err_phone="";
		
			$location="";
			$err_location="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
			$hasError=false;
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["title"])){
					$err_title="*Title Required @Exmple:Need a tutor...";
					$hasError=true;
				}
				else{
					$title=$_POST["title"];
				}
			
			
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
					
				}
				else{
					$name=$_POST["name"];
				}
				
				
				if(empty($_POST["email"])){
					$err_email="*Email Required";
					$hasError=true;
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
						$hasError=true;
					}
				}
				else{
					$err_email="*Email missing @";
					$hasError=true;
					
				}
				
			
				
				if(empty($_POST["salary"])){                                   
					$err_salary="*Please select salary";
					$hasError=true;
				}
				
				else{
					$salary=$_POST["salary"];
				}
				
			
				if(empty($_POST["phone"])){
					$err_phone="*Phone Number Required";
					$hasError=true;
				}
				else{
					$phone=$_POST["phone"];
				}
			
				
				if(empty($_POST["location"])){
					$err_location="*Please provide your location";
					$hasError=true;
				}
				else{
					$location=$_POST["location"];
				}
			
				
				if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*This  Box is Empty";
					$hasError=true;
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
				if(!$hasError){
					
					$query= "insert into `post_tuition`(`title`, `name`, `email`, `phone`, `location`, `salary`, `Extrainfo`) values ('$title','$name','$email','$phone','$location','$salary','$Extrainfo')";
					$result = execute($query);	
					
				}
				
				
			}
			
			function checkNameValidity($name){
					$query = "select * from post_tuition where name='$name'";
					
					$result=get($query);
					if(count($result) > 0){
						return "false";
					}
					return "true";
				}
			
		?>