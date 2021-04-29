<?php		
		
	include "AdminPageBack_Up.php";
	require_once "controllers/TutorController.php";
    $id = $_GET["id"];
	$tutor = getTutor($id);
	
?>
		
		
		<fieldset style="width:650px;border:solid 2px" >
			<legend> <h1>Edit & Update Tutor Form</h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
					<tr>
						<td><span style="color:green"><?php echo $err_message1;?></span></td>
					</tr>
						
					<tr>
						<td><input  type="hidden" value="<?php echo $tutor["id"];?>" name="id"></td>
					</tr>
					
				    <tr>
						<td align="right"><span>Tutor Name </span></td>
						
						<td>:<input size="29" type="text" value="<?php echo $tutor["name"];?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>User Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $tutor["username"];?>" name="uname">
						<span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Name of the Institution</span></td>
						<td>:<input size="29" type="text" value="<?php echo $tutor["institution"];?>" name="instituate">
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $tutor["password"];?>" name="pass">
						<span style="color:red"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Confirm Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $tutor["password"];?>" name="cpass">
						<span style="color:red"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $tutor["email"];?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input style="margin-left:2.3px" size="29" type="text" placeholder="Number" value="<?php echo $tutor["phone"];?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" ><span>Address </span></td>
						<td>:<input size="29" type="text" placeholder="Address" value="<?php echo $tutor["address"];?>" name="street">
						<span style="color:red"><?php echo $err_address;?></td>
					
				    </tr>
					
					
					<tr>
						<td align="right">Date of Birth</td>
						<td>:<input size="29" type="text" placeholder="Address" value="<?php echo $tutor["dob"];?>" name="dob">
						<span style="color:red"><?php echo $err_dob;?></td>
						
					</tr>
					<tr>
						<td align="right"><span>Gender</span></td>
						<td>:
							<select  name="gender">
								<option ><?php echo $tutor["gender"];?></option>
								<option>Male</option>
								<option>Female</option>
							
							</select><span style="color:red"><?php echo $err_gender;?></span>
						</td>
					</tr>
					
					<tr>
						<td align="right"><span>Select  medium </span></td>
						<td>:
							<select  name="medium">
								<option ><?php echo $tutor["medium"];?></option>
								<option>Bangla</option>
								<option>English</option>
								<option>Others</option>
								
							
							</select><span style="color:red"><?php echo $err_medium;?></span>
						</td>
					</tr>
					
					<tr><td align="right"><span>Select Class </span></td>
						<td>:
							<select  name="class">
								<option ><?php echo $tutor["class"];?></option>
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
							
							</select><span style="color:red"><?php echo $err_class;?></span>
						</td>
				    </tr>
					<tr>
					</tr>
					
						<td></td>
				
					<tr>
						<td align="center" colspan="2"><input type="submit" name="update_tutor" value="Update Tutor"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
		
		
		
<?php		
		
	include "AdminPageBack_Down.php";
		
?> 	