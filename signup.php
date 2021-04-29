<?php
	
	require_once "controllers/signupController.php";	
	
?>


<html>
	<head>
	    <title>Tution Station</title>
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body style="background:rgb(151, 117, 250);">
	    
		
		<div class="menu-bar">
		
			<a href="tution_station.php"><img src="logo.png" class="logo"></a>
		
			<ul>
			
				<li class="active"><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
				
				<li><a href="#"><i class="fa fa-clone"></i>Find A Tutor</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">Search for Tutors</a></li>
								<li><a href="#">Rrequest A Tutor</a></li>
								<li><a href="#">Online Tutoring</a></li>
						 </ul>	
					 </div>	
				</li>					 
				<li><a href="#"><i class="fa fa-clone"></i>How It Works</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">For Student</a></li>
								<li><a href="#">For Higher Ed</a></li>
								<li><a href="#">What Customer Say</a></li>
						 </ul>	
					 </div>
				</li>
				<li><a href="#"><i class="fa fa-user"></i>About Us</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#"></i>Contact Us</a></li>
						 </ul>	
					 </div>	
				</li>
				
			</ul>
			
		</div>
		<div>
			
			<div class="center1">
				<fieldset style="border:solid 10px;color:rgb(177, 151, 252);background-color:rgb(208, 191, 255);padding:20px" >
				<legend> <h1 style="color:rgb(166, 30, 77);font-weight:250px;font-size:50px;padding-bottom:20%;">Registration</h1></legend>
					<form action="" method="post" onsubmit="return validate()">
						<table align="center">
							<tr>
								<td><span style="color:green"><b><?php echo $err_message1;?></b></span><span style="color:red"><b><?php echo $err_message;?></b></span><td>
							</tr>
							<tr>
								<td><span class="my-font1">Name</span></td>
								<td style="padding:8px 0px 10px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $name;?>" placeholder="name" id="name" name="name">
								<span style="color:red" id="err_name"></span><span style="color:red"><?php echo $err_name;?></span></td>			
							</tr>
							</tr>
					<tr>
						<td ><span class="my-font1">User Name</span></td>
						<td style="padding:8px 0px 10px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" id="uname" onfocusout="checkUsername(this)" name="uname">
						<span style="color:red" id="err_uname"></span><span class="err-msg"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td><span class="my-font1"> Name of the Institution</span></td>
						<td style="padding:8px 0px 10px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $instituate;?>" placeholder="institution" id="instituate" name="instituate">
						<span style="color:red" id="err_instituate"></span><span class="err-msg"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td><span class="my-font1">Password</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="password" value="<?php echo $password;?>" placeholder="password" id="pass" name="pass">
						<span style="color:red" id="err_pass"></span><span class="err-msg"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td><span class="my-font1">Confirm Password </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="password" value="<?php echo $confirmPassword;?>" placeholder="confirm password" id="cpass" onfocusout="checkPassword()" name="cpass">
						<span style="color:red" id="err_cpass"></span><span class="err-msg"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td class="my-font1"><span>Email </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $email;?>" id="email" name="email">
						<span style="color:red" id="err_email"></span><span class="err-msg"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td class="my-font1"><span>Phone </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span> +88 <input class="my-font num-text-field" type="text" placeholder="Number" value="<?php echo $number;?>" id="number" name="number">
						<span style="color:red" id="err_number"></span><span class="err-msg"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td class="my-font1" style="vertical-align: top" rowspan="2"><span>Address</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" placeholder="Street Address" value="<?php echo $street;?>" id="street" name="street">
						</td>
					
				    </tr>
					<tr>
						<td style="padding:8px 0px 15px 0px"><input style="margin-left:4.9px" size="12" class="my-font" type="text" placeholder="City" value="<?php echo $city;?>" id="city" name="city"> - <input style="margin-left:2.3px" size="12" class="my-font" type="text" placeholder="State" value="<?php echo $state;?>" id="state" name="state">
						<span style="color:red" id="err_address"></span><span style="color:red"><?php echo $err_address;?></span></td>
				    </tr>
					
					<tr>
						<td class="my-font1">Birth Date</td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><select class="my-font1" id="day" name="day">
								<option value="0">Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select class="my-font1" id="month" name="month">
								<option value="0">Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select class="my-font1" id="year" name="year">
								<option value="0">Year</option>
								
								<?php
									for($y=2021;$y>=1900;$y--){
										echo "<option>$y</option>";
									}
								?>
							</select><span style="color:red" id="err_dob"></span>
						</td>
					</tr>
					<tr>
						<td class="my-font1"><span>Gender</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">: <input type="radio" value="Male" id="male" name="gender">Male <span class="my-font1"><input type="radio" value="Female" id="female" name="gender">Female</span></span>
						<span style="color:red" id="err_gender"></span><span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
							
					<tr>
						<td class="my-font1"><span>Select  medium </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:<input type="radio" value="Bangla" id="bangla" name="medium">Bangla <input type="radio" value="English" id="english" name="medium">English
						<input type="radio" value="Others" id="others" name="medium">Others</span>
						<span style="color:red" id="err_medium"></span><span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					
					<tr><td class="my-font1">Select Class</td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span>
							<select class="my-font1" id="class" name="class">
								<option value="0">  Kg*  </option>
								<option>  Kg*  </option>
								<option> Nursery</option>
								<option>playpen </option>
								<option>class 1 </option>
								<option>class 2</option>
								<option> class 3 </option>
								 <option>class 4</option>
								<option>class 5</option>
								<option> class 6</option>
								<option>class 7 </option>
								<option>class 8</option>
								<option> class 9 </option>
								<option>class 10</option>
								<option> class 11 </option>
								 <option>class 12 </option>
								<option>Secondary</option>
								<option> Higher Secondary </option>
								<option>Admission test </option>
								<option>others</option>
							
							</select><span style="color:red" id="err_class"></span><span style="color:red"><?php echo $err_class;?></span>
						</td>
				    </tr>		
							
							
							
							<tr>
								<td class="radio-style" ><input type="radio" value="Tutor" id="tutor" name="userType"><div class="radio-back"><img src="tutor.png" class="logo2"><span class="radio-text">as a<br>Tutor</span></div></td>
								<td class="radio-style" ><input type="radio" value="Student" id="student" name="userType"><div class="radio-back"><img src="StudentGuardian.png" class="logo2"><span class="radio-text">as a<br> Student/Guardian</span></div>
								
								<span style="color:red" id="err_userType"></span><span style="color:red"><?php echo $err_userType;?></span></td>
						    </tr>
							
							<tr>
								<td style="padding:24px 0px 15px 29px" colspan="2" align="left"><input type="checkbox" value="" id="policy" name="policy"><span class="my-font1" >Agree with all the terms & condition</span>
								<span style="color:red" id="err_policy"></span><span style="color:red"><?php echo $err_policy;?></span></</td>
							</tr>
							<tr>
								<td style="padding:20px 0 0 23px" colspan="2" align="right" ><input class="btn-mine my-font" type="submit"  value="Registration" name="signup">
							</tr>
						</table>
					</form>
				</fieldset>	
		</div>
		
	</body>
	<script>
	function get(id){
		return document.getElementById(id);
	}
	
	function checkUsername(control){
		var username = control.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				var rsp = this.responseText;
				rsp = rsp.trim();
				if(rsp == "true"){
					get("err_uname").innerHTML = "Valid Username";
					get("err_uname").style.color="green";
				}
				else{
					get("err_uname").innerHTML = "*Username already exist";
				}
				
			}
		};
		xhttp.open("GET","checkUsername.php?uname="+username,true);
		xhttp.send();
	}
	
	function checkPassword(){
		cleanUp();
		if(get("cpass").value == get("pass").value){
			get("err_cpass").innerHTML= "*Password Matched";
			get("err_cpass").style.color="green";
		}
		else{
			get("err_cpass").innerHTML= "*Password Not Matched";
			get("cpass").style.border="3px solid red";
		}
	}
	
	
	function validate(){
		cleanUp();
		var hasError=false;
		
		if(get("name").value == ""){
			get("err_name").innerHTML= "*Name Required";
			get("name").style.border="3px solid red";
			hasError=true;
		}
		if(get("uname").value == ""){
			get("err_uname").innerHTML= "*Username Required";
			get("uname").style.border="3px solid red";
			hasError=true;
		}
		if(get("instituate").value == ""){
			get("err_instituate").innerHTML= "*Intitution Required";
			get("instituate").style.border="3px solid red";
			hasError=true;
		}
		if(get("pass").value == ""){
			get("err_pass").innerHTML= "*Password Required";
			get("pass").style.border="3px solid red";
			hasError=true;
		}
		if(get("cpass").value == ""){
			get("err_cpass").innerHTML= "*Password Required";
			get("cpass").style.border="3px solid red";
			hasError=true;
		}
		if(get("email").value == ""){
			get("err_email").innerHTML= "*Email Required";
			get("email").style.border="3px solid red";
			hasError=true;
		}
		if(get("number").value == ""){
			get("err_number").innerHTML= "*Number Required";
			get("number").style.border="3px solid red";
			hasError=true;
		}
		if((get("street").value == "")||(get("city").value == "")||(get("state").value == "")){
			get("err_address").innerHTML= "*Address Required";
			get("street").style.border="3px solid red";
			get("city").style.border="3px solid red";
			get("state").style.border="3px solid red";
			hasError=true;
		}
		if(get("day").value == "0" || get("month").value == "0" || get("year").value == "0" ){
			get("err_dob").innerHTML= "*Select Date of Birth";
			get("day").style.border="3px solid red";
			get("month").style.border="3px solid red";
			get("year").style.border="3px solid red";
			hasError=true;
		}
		if(!(get("male").checked || get("female").checked)){
			get("err_gender").innerHTML= "*Gender Required";
			hasError=true;
		}
		if(!(get("bangla").checked || get("english").checked || get("others").checked)){
			get("err_medium").innerHTML= "*Medium Required";
			hasError=true;
		}
		if(get("class").value == "0"){
			get("err_class").innerHTML= "*Select Class";
			get("class").style.border="3px solid red";
			hasError=true;
		}
		if(!(get("tutor").checked || get("student").checked)){
			get("err_userType").innerHTML= "*User Type Required";
			hasError=true;
		}
		if(!(get("policy").checked)){
			get("err_policy").innerHTML= "*Must follow all terms & condition";
			hasError=true;
		}
		if(!hasError){
			return true;
		}
		return false;
		
	}
	function cleanUp(){
		get("err_name").innerHTML= "";
		get("name").style.border="";
		get("err_uname").innerHTML="";
		get("uname").style.border="";
		get("err_instituate").innerHTML="";
		get("instituate").style.border="";
		get("err_pass").innerHTML="";
		get("pass").style.border="";
		get("err_cpass").innerHTML="";
		get("cpass").style.border="";
		get("err_email").innerHTML="";
		get("email").style.border="";
		get("err_number").innerHTML="";
		get("number").style.border="";
		get("err_address").innerHTML="";
		get("street").style.border="";
		get("city").style.border="";
		get("state").style.border="";
		get("err_dob").innerHTML="";
		get("day").style.border="";
		get("month").style.border="";
		get("year").style.border="";
		get("err_gender").innerHTML= "";
		get("err_medium").innerHTML= "";
		get("err_class").innerHTML= "";
		get("class").style.border="";
		get("err_userType").innerHTML= "";
		get("err_policy").innerHTML= "";
		
		
	}
	
	
	</script>
</html>