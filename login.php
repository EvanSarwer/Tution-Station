<?php

	require_once "controllers/loginController.php";

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
				
				<li class="active"><a href="signup.php"><i class="fa fa-sign-in"></i>Sign Up</a></li>
				
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
			
			<div class="center">
				<fieldset style="border:solid 10px;color:rgb(177, 151, 252);background-color:rgb(208, 191, 255);padding:20px" >
				<legend> <h1 style="color:rgb(166, 30, 77);font-weight:250px;font-size:50px;padding-bottom:30%;">Log in</h1></legend>
					
					<form action="" method="post">
						<table align="center">
							<tr>
								<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
							</tr>
							<tr>
								<td><span class="my-font1">Username:</span> </td>
								<td style="padding:8px 0px 10px 0px"><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
								<br><span class="err-msg"><?php echo $err_uname;?></span>
								</td>
							</tr>
							<tr>
								<td><span class="my-font1">Password: </span></td>
								<td style="padding:8px 0px 15px 0px"><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
								<br><span class="err-msg"><?php echo $err_pass;?></span></td>
							</tr>
							
							<tr>
								<td style="padding:20px 0 0 23px" colspan="2" align="right" ><input class="btn-mine my-font" type="submit"  value="Login" name="login">
							</tr>
						</table>
					</form>
				</fieldset>	
				
			<div class="buttons">
			<p><br></p>
			<span><h2>Don't have account, Please <a href="signup.php" class="signup-text" >Sign Up</a> first.</h2></span>
			
			</div>
		</div>
		
	</body>
</html>