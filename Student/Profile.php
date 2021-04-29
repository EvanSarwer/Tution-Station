<?php
    require_once "controllers/ProfileController.php" 
  ?>
<html>
    <table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
			<tr>
				<td width="20%" height="60px" align="center"><font size="10px" color=""><b></b></font></td>
			</tr>
			<tr>
				
			</tr>
	</table>
    <table border="0px" width="100%" height="60px" cellpadding="0px" cellspacing="0px">
			<tr>
				<td bgcolor="#AFDED3">
				&emsp; &emsp;
					<a href="Home.php">Home</a>
				&emsp; &emsp;
				</td>
				<td height="20px" bgcolor="grey"align="right">
					
					<a href="../tution_station.php"><font color="white"><img align=middle width="35px" height="38px" src="pictures/logOut.png"></font></a>	
				</td>
			</tr>
	</table>
    <body style="background-color:white;">
        <div id="header"></div><br>
        <div class="left">
			
			<p><fieldset style="width:650px;height:600px;border:solid 2px" ><br></p>
			<legend> <h1>Edit and Update profile </h1></legend>
			<form action="" method="post" onsubmit="return validate()">
				<table style="margin-left:5px">
				  
					<tr>
						<td><span> Name </span></td> <br>
						<td>: <input size="29" type="text" id="name" value="<?php echo $name;?>" name="name"><span id="err_name"></span>
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					
					
					<tr>
						<td><span> Edit Email </span></td>
						<td>: <input size="29" type="text" id="email" value="<?php echo $email;?>" name="email"><span id="err_email"></span>
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
				
				
					<tr>
						<td><span> Institution Name</span></td>
						<td>: <input size="29" type="text" id="institution" value="<?php echo $institution;?>" name="institution"><span id="err_institution"></span>
						<span style="color:red"><?php echo $err_institution;?></span></td>
						
					</tr>
		
			   
					<tr>
						<td><span>Edit Phone </span></td>
						<td>:<input size="29" type="text" id="phone" placeholder="Number" value="<?php echo $phone;?>" name="phone">
						<span id="err_phone"></span><span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					
					<tr>
						<td><span> Update  Location  </span></td>
						<td>:<input size="29" type="text" id="location" placeholder="Select location" value="<?php echo $location;?>" name="location">
						<span id="err_location"></span><span style="color:red"><?php echo $err_location;?></span></td></td>
					</tr>
				
				
				    <tr>
						<td><span>Extra Information :</span></td>
						<td><textarea id="Extrainfo" value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea><span id="err_Extrainfo"></span>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
					</tr>
						<tr>
						<td align="center" colspan="2"><input type="submit" value="update "></td>
					</tr>
				</table>
			</form>		
	    </div> 
    </body>	
</html>