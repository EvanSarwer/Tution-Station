<html>
	<head>
	    <title>Tution Station</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body style="background:rgb(151, 117, 250);">
	    
		
		<div class="menu-bar">
		
				<a href="TutorHome.php"><img src="logo.png" class="logo"></a>
			
			
				<ul>
					
					<li class="active"><a href="TutorHome.php"><i class="fa fa-home"></i>Home</a></li>
					
					<li><a href="SearchTution.php"><i class="fa fa-clone"></i>Find Tution</a>
						<!--<div class="sub-menu-1">
							<ul>
									<li><a href="#">Search for Tutors</a></li>
									<li><a href="#">Rrequest A Tutor</a></li>
									<li><a href="#">Online Tutoring</a></li>
							 </ul>	
						 </div>-->
					</li>					 
					<li><a href="#"><i class="fa fa-clone"></i>How It Works</a>
						<!--<div class="sub-menu-1">
							<ul>
									<li><a href="#">For Student</a></li>
									<li><a href="#">For Higher Ed</a></li>
									<li><a href="#">What Customer Say</a></li>
							 </ul>	
						 </div>-->
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
					<li><a href="../Tution_station.php"><i class="fa fa-sign-out"></i>Log Out</a>
					
				</ul>
			
		</div>
		<div class="lef-menu">
			<h1 style="textalign:center; color:RGB(134, 46, 156)" >TUTOR</h1>
			<p><br></p>
			<img src="user.jpg" width="100px" height="100px">
			<p><br></p>
			<div class="left-menu-text">
			<ul>
				<li><a href="edittutor.php">Profile</a></li>
				<li><a href="Applicationform.php">Application as Tutor</a></li>
				<li><a href="TutionBoard.php">Tution Board</a></li>
				<li><a href="advertisement.php">Make an Advertisement</a></li>
				<li><a href="">Payment</a></li>
			</ul>
			</div>
		</div>
		<div>
			<div class="center">
			
			
			
			<h1></h1>
			<h2><?php
			/*echo "Name: ". $_POST["uname"]."<br>";
			echo "User Type: ".$_POST["userType"]."<br>";
			*/
			?></h2>
			<div class="buttons">
			<p><br></p>
			
			<button onclick="window.location.href='searchstudent.php';">Search Student</button>
			
		</div>
		
	</body>
</html>