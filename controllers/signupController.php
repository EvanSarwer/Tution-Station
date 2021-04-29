<?php 

	require_once "models/db_config.php";
	
	
	$hasError=false;
	
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
	
	$number="";
	$phone="";
	$err_phone="";
	
	$street="";
	$city="";
	$state="";
	$address="";
	$err_address="";
	
	$day="";
	$month="";
	$year="";
	$dob="";
	
	$gender="";
	$err_gender="";
	
	$medium="";
	$err_medium="";
	
	$class="";
	$err_class="";
	
	$err_message="";
	$err_message1="";
	
	$userType="";
	$err_userType="";
	
	$err_policy="";
	
	$link="";
	
	
	if(isset($_POST["signup"])){
		
		$code="88";
		$number=$_POST["number"];
		$phone=$code.$number;
		$street=$_POST["street"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$com=", ";
		$address=$street.$com.$city.$com.$state;
		
		$day=$_POST["day"];
		$sls="/";
		$month=$_POST["month"];
		$year=$_POST["year"];
		$dob=$day.$sls.$month.$sls.$year;
		
		
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["uname"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["uname"])<5){
			$err_uname="*Username should be at least 5 characters";
			$hasError = true;
		}
		else{
			if(ctype_alnum($_POST["uname"])){
			
				$uname=htmlspecialchars($_POST["uname"]);
			}
			else{
				
				$err_uname="*Username only contain characters(space,symbon not allowed)";
				$hasError = true;
			
			}
		}
		
		
		if(empty($_POST["instituate"])){
			$err_instituate="*Institiation Name Required";  
			$hasError=true;
		}
		else{
			$instituate=$_POST["instituate"];
		}
		
		
		if(empty($_POST["pass"])){
			$err_password="*Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"])<6){
			$err_password="*Password should be at least 6 characters";
			$hasError = true;
		}
		else{
			$password=$_POST["pass"];
		}
		if(empty($_POST["cpass"])){
			$err_confirmPassword="*Confirm Password Required";
			$hasError = true;
		}
		else if(($_POST["cpass"])!=$_POST["pass"]){
			$err_confirmPassword="*Password Not Matched";
			$hasError = true;
		}
		else{
			$confirmPassword=$_POST["cpass"];
		}
		if(empty($_POST["email"])){
			$err_email="*Email Required";
			$hasError = true;
		}
		else if(strpos($_POST["email"],"@")!=null){
			$s= strpos($_POST["email"],"@");
			if(strpos($_POST["email"],".",$s+1)!=null){
				$email=$_POST["email"];
			}
			else{
				$err_email="*Email missing (.) after @";
				$hasError = true;
			}
		}
		else{
			$err_email="*Email missing @";
			$hasError = true;
			
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
		if(empty($_POST["street"])||empty($_POST["city"])||empty($_POST["state"])){
			$err_address="*Address Required";
			$hasError = true;
		}
		else{
			$street=$_POST["street"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			
		}
		if (!isset($_POST["gender"])){
			$err_gender="*Gender Not Selected";
			$hasError = true;
		}
		else{
			if (isset($_POST["gender"]) && ($_POST["gender"]=="Male")){
				$gender=$_POST["gender"];
			}
			else if (isset($_POST["gender"]) && ($_POST["gender"]=="Female")){
					$gender=$_POST["gender"];
			}
		}
		
		if (!isset($_POST["medium"])){
			$err_medium="*medium Not Selected";
			$hasError=true;
		}
		else{
			if (isset($_POST["medium"]) && ($_POST["medium"]=="Bangla")){
				$medium=$_POST["medium"];
			}
			else if (isset($_POST["medium"]) && ($_POST["medium"]=="English")){
				$medium=$_POST["medium"];
			}
			else if (isset($_POST["medium"]) && ($_POST["medium"]=="Others")){
					$medium=$_POST["medium"];
			}
			
		}
		if(isset($_POST["class"]) && ($_POST["class"] == '0')) { 
		  $err_class="*please select Class";
		  $hasError=true;
		}
		else{
			$class=$_POST["class"];
		}
		
		
		if (!isset($_POST["userType"])){
            $err_userType="*User Type Not Selected";
			$hasError = true;
			
        }
		else{
			if (isset($_POST["userType"]) && ($_POST["userType"]=="Student")){
				$userType=$_POST["userType"];
				
			}
			else if (isset($_POST["userType"]) && ($_POST["userType"]=="Tutor")){
					$userType=$_POST["userType"];
			}
		}
		
		
		if(isset($_POST["policy"])){
			//echo $checked . '<br>';	
		}
		else {
			$err_policy="*Must follow all terms & condition";
			$hasError = true;
		}
		
		if(!$hasError){
			if(checkUsername($uname)){
				$err_message="Username Alreaday Exist";
			}
			else{
				insertUser($name,$uname,$instituate,$password,$email,$phone,$address,$dob,$gender,$medium,$class,$userType);
				$err_message1="Student Added Successfully";
				
			}	
		}
		
		
	}
	
	function insertUser($name,$uname,$instituate,$password,$email,$phone,$address,$dob,$gender,$medium,$class,$userType){
		$query= "insert into users values(NULL,'$name','$uname','$instituate','$password','$email','$phone','$address','$dob','$gender','$medium','$class','$userType','','')";
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
	function checkUsernameValidity($username){
		$query = "select * from users where username='$username'";
		$result = get($query);
		if(count($result)>0){
			return "false";
		}
		return "true";
	}
	
	
	?> 	