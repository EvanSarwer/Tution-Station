<?php
	require_once 'models/db_config.php';
	        
		$name="";
		$err_name="";
			
		$email="";
		$err_email="";
	
		$institution="";
		$err_institution="";

        $phone="";
		$err_phone="";
		
		$location="";
		$err_location="";	
			
		$Extrainfo="";
		$err_Extrainfo="";
		
		$hasError = false;
	
        if($_SERVER['REQUEST_METHOD']== "POST"){
		 
				if(empty($_POST["name"])){
					$err_name="*Enter your name "; 
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
				
				
                if(empty($_POST["institution"])){
					$err_institution="*Write your institution name";
                    $hasError=true;					
				}
				else{
					$institution=$_POST["institution"];
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
					$err_Extrainfo="*This Box is Empty";
					$hasError=true;
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
				
				if(!$hasError){
					
					$query= "insert into `profile`(`name`, `email`, `institution`, `phone`, `location`, `Extrainfo`) values ('$name','$email','$institution','$phone','$location','$Extrainfo')";
					$result = execute($query);	
					
					
				}
				
	        }

?>