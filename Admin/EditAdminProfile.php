<?php		
		
	include "AdminPageBack_Up.php";
	require_once "controllers/AdminController.php";
    $id = $_GET["id"];
	$admin = getAdmin($id);
	
?>
		
		
		<fieldset style="width:650px;border:solid 2px" >
			<legend> <h1>Edit & Update Profile</h1></legend>
			<form action="" method="post" onsubmit="return validate()">
				<table style="margin-left:5px">
					<tr>
						<td><span style="color:green"><?php echo $err_message1;?></span></td>
					</tr>
						
					<tr>
						<td><input  type="hidden" value="<?php echo $admin["id"];?>" name="id"></td>
					</tr>
					
				    <tr>
						<td align="right"><span>Name </span></td>
						
						<td>:<input size="29" type="text" value="<?php echo $admin["name"];?>" id="name" name="name">
						<span style="color:red" id="err_name"></span><span style="color:red"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>User Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $admin["username"];?>" id="uname" name="uname">
						<span style="color:red" id="err_uname"></span><span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					
					
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $admin["email"];?>" id="email" name="email">
						<span style="color:red" id="err_email"></span><span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input style="margin-left:2.3px" size="29" type="text" placeholder="Number" value="<?php echo $admin["phone"];?>" id="number" name="number">
						<span style="color:red" id="err_number"></span><span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" ><span>Address </span></td>
						<td>:<input size="29" type="text" placeholder="Address" value="<?php echo $admin["address"];?>" id="street" name="street">
						<span style="color:red" id="err_address"></span><span style="color:red"><?php echo $err_address;?></td>
					
				    </tr>
					
					
					<tr>
						<td align="right">Date of Birth</td>
						<td>:<input size="29" type="text" placeholder="Address" value="<?php echo $admin["dob"];?>" id="dob" name="dob">
						<span style="color:red" id="err_dob"></span><span style="color:red"><?php echo $err_dob;?></td>
						
					</tr>
					<tr>
						<td align="right"><span>Gender</span></td>
						<td>:
							<select id="gender"  name="gender">
								<option ><?php echo $admin["gender"];?></option>
								<option>Male</option>
								<option>Female</option>
							
							</select><span style="color:red"><?php echo $err_gender;?></span>
						</td>
					</tr>
					
				
					<tr>
						<td align="center" colspan="2"><input type="submit" name="update_admin" value="Update Profile"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
		
		
		<script>
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				cleanUp();
				var hasError=false;
				
				if(get("name").value == ""){
					get("err_name").innerHTML= "*Name Required";
					get("name").style.border="2px solid red";
					hasError=true;
				}
				if(get("uname").value == ""){
					get("err_uname").innerHTML= "*Username Required";
					get("uname").style.border="2px solid red";
					hasError=true;
				}
				if(get("email").value == ""){
					get("err_email").innerHTML= "*Email Required";
					get("email").style.border="2px solid red";
					hasError=true;
				}
				if(get("number").value == ""){
					get("err_number").innerHTML= "*Number Required";
					get("number").style.border="2px solid red";
					hasError=true;
				}
				if(get("street").value == ""){
					get("err_address").innerHTML= "*Address Required";
					get("street").style.border="2px solid red";
					hasError=true;
				}
				if(get("dob").value == ""){
					get("err_dob").innerHTML= "*Date of Birth Required";
					get("dob").style.border="2px solid red";
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
				get("err_uname").innerHTML= "";
				get("uname").style.border="";
				get("err_email").innerHTML= "";
				get("email").style.border="";
				get("err_number").innerHTML= "";
				get("number").style.border="";
				get("err_address").innerHTML= "";
				get("street").style.border="";
				get("err_dob").innerHTML= "";
				get("dob").style.border="";
			}
			
	</script>
		
		
<?php		
		
	include "AdminPageBack_Down.php";
		
?> 	