<?php include "AdminPageBack_Up.php";
      require_once "controllers/AdminController.php";
	  
	  $result = getAdminValue($_SESSION["loggedin"]);
	  
	  
	foreach($result as $row){
		
		echo "<p><b>Name: </b>".$row["name"]."</p>";
		echo "<p><b>Username: </b>".$row["username"]."</p>";
		echo "<p><b>Password: </b>".$row["password"]."</p>";
		echo "<p><b>Email: </b>".$row["email"]."</p>";
		echo "<p><b>Phone: </b>".$row["phone"]."</p>";
		echo "<p><b>Address: </b>".$row["address"]."</p>";
		echo "<p><b>Date of Birth: </b>".$row["dob"]."</p>";
		echo "<p><b>Gender: </b>".$row["gender"]."</p>";
		echo '<p style="text-align:right;"><a href="EditAdminProfile.php?id='.$row["id"].'">Edit Profile</a></p>';
        echo '<p style="text-align:right;"><a href="EditPassword.php?id='.$row["id"].'">Change Password</a></p>';	
	}
	

?> 
		

		
<?php		
		
	include "AdminPageBack_Down.php";
		
?> 	