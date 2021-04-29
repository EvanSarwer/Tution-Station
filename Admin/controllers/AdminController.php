<?php 
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: ../login.php");
	}
	
	require_once "models/db_config.php";
			
			
			
		    $name="";
			$err_name="";
			
			$uname="";
			$err_uname="";
			
			$instituate="";
			$err_instituate="";
			
			$password="";
			$err_password="";
			
			$confirmPassword="";
			$err_confirmPassword="";
			
			$email="";
			$err_email="";
			
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			
			
			$street="";
			$city="";
			$state="";
			$err_address="";
			
			$day="";
			$month="";
			$year="";
			$dob="";
			$err_dob="";
			
			$gender="";
			$err_gender="";
			
			$medium="";
			$err_medium="";
			
			$class="";
			$err_class="";
			
			$err_message="";
			$err_message1="";
			
			$hasError=false;
		
            if(isset($_POST["update_admin"])){
				
				$id=$_POST["id"];
				$gender=$_POST["gender"];
				
				
				$phone=$_POST["number"];
				
				$address=$_POST["street"];
				
				$dob=$_POST["dob"];
				
				$name=htmlspecialchars($_POST["name"]);
				$uname=htmlspecialchars($_POST["uname"]);
				
				
				$hasError=false;
				
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"])<5){
					$err_uname="*Username should be at least 5 characters";
					$hasError=true;
				}
				else{
					if(ctype_alnum($_POST["uname"])){
					
						$uname=htmlspecialchars($_POST["uname"]);
				    }
					else{
						
					$err_uname="*Username only contain characters(space,symbon not allowed)";
					$hasError=true;
					}
				}
				
				/*if(empty($_POST["pass"])){
					$err_password="*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["pass"])<8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				/*else if(ctype_lower($_POST["pass"])==false){
					$err_password="*Password should have lowercase character";
				}
				else if (ctype_upper($_POST["pass"])==false){
					$err_password="*Password should have uppercase character";
				}
				else if (ctype_digit($_POST["pass"])==false){
					$err_password="*Password should have one number character";
				}//
				else{
					$password=$_POST["pass"];
				}
				if(empty($_POST["cpass"])){
					$err_confirmPassword="*Confirm Password Required";
					$hasError=true;
				}
				else if(($_POST["cpass"])!=$_POST["pass"]){
					$err_confirmPassword="*Password Not Matched";
					$hasError=true;
				}
				else{
					$confirmPassword=$_POST["cpass"];
				}*/
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
				if(empty($_POST["number"])){
				$err_phone="*Phone Number Required";
				$hasError = true;
				}
				else{
					if(ctype_digit($_POST["number"])){
						$number=$_POST["number"];
					}
					else{
						$err_phone="*Number must be numeric";
						$hasError = true;
					}
				}
				if(empty($_POST["street"])){
					$err_address="*Address Required";
					$hasError=true;
				}
				else{
					$address=htmlspecialchars($_POST["street"]);
				}
				if(empty($_POST["dob"])){
					$err_dob="*Date of Birth Required";
					$hasError=true;
				}
				else{
					$dob=htmlspecialchars($_POST["dob"]);
				}
				if(!$hasError){
					
					updateAdmin($id,$name,$uname,$email,$phone,$address,$dob,$gender);
					$err_message1="Tutor Updated Successfully";
						
				}
				
			}
			
			
			if(isset($_POST["change_pass"])){
				
				$id=$_POST["id"];
				$hasError=false;
				
				
				if(empty($_POST["pass"])){
					$err_password="*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["pass"])<8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				/*else if(ctype_lower($_POST["pass"])==false){
					$err_password="*Password should have lowercase character";
				}
				else if (ctype_upper($_POST["pass"])==false){
					$err_password="*Password should have uppercase character";
				}
				else if (ctype_digit($_POST["pass"])==false){
					$err_password="*Password should have one number character";
				}*/
				else{
					$password=$_POST["pass"];
				}
				if(empty($_POST["cpass"])){
					$err_confirmPassword="*Confirm Password Required";
					$hasError=true;
				}
				else if(($_POST["cpass"])!=$_POST["pass"]){
					$err_confirmPassword="*Password Not Matched";
					$hasError=true;
				}
				else{
					$confirmPassword=$_POST["cpass"];
				}
				if(!$hasError){
					
					updatePassword($id,$password);
					$err_message1="Password Changed Successfully";
						
				}
				
			}
			
			
			


        function updateAdmin($id,$name,$uname,$email,$phone,$address,$dob,$gender){
			$query= "update users set name='$name', username='$uname', email='$email', phone='$phone', address = '$address', dob='$dob', gender='$gender' where id='$id'";
			$result = execute($query);
		}

		function updatePassword($id,$password){
			$query= "update users set password='$password' where id='$id'";
			$result = execute($query);
		}
			
		function checkUsername($username){
			$query = "select * from users where username='$username'";
			$result = get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		
	function getAdmin($id){
		$query = "select * from users where id='$id'";
		$result = get($query);
		if(count($result)>0){
			return $result[0];
		}
		return false;
	}	
	
	
	
	function getAdminValue($username){
		$query = "select * from users where username='$username' and type='Admin'";
	    $result = get($query);
		return $result;
	}
	
	
	
	
?>	