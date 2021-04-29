<?php		
		
	include "AdminPageBack_Up.php";
	require_once "controllers/TutorController.php";
?> 
		
		
	    <fieldset style="width:650px;border:solid 2px" >
			<legend> <h1>Add Tutor Form</h1></legend>
			<form action="" method="post" onsubmit="return validate()">
				<table style="margin-left:5px">
					<tr>
						<td><span style="color:green"><?php echo $err_message1;?></span><span style="color:red"><?php echo $err_message;?></span><td>
					</tr>
				    <tr>
						<td align="right"><span>Tutor Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" id="name" name="name">
						<span style="color:red" id="err_name"></span><span style="color:red"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>User Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $uname;?>" id="uname" onfocusout="checkUsername(this)" name="uname">
						<span style="color:red" id="err_uname"></span><span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Name of the Institution</span></td>
						<td>:<input size="29" type="text" value="<?php echo $instituate;?>" id="instituate" name="instituate">
						<span style="color:red" id="err_instituate"></span><span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $password;?>" id="pass" name="pass">
						<span style="color:red" id="err_pass"></span><span style="color:red"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Confirm Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $confirmPassword;?>" id="cpass" onfocusout="checkPassword()" name="cpass">
						<span style="color:red" id="err_cpass"></span><span style="color:red"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" id="email" name="email">
						<span style="color:red" id="err_email"></span><span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="8" type="text" placeholder="code" value="<?php echo $code;?>" id="code" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" id="number" name="number">
						<span style="color:red" id="err_number"></span><span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" rowspan="2"><span>Address </span></td>
						<td>:<input size="29" type="text" placeholder="Street Address" value="<?php echo $street;?>" id="street" name="street">
						</td>
					
				    </tr>
					<tr>
						
						<td> <input style="margin-left:4.9px" size="10" type="text" placeholder="City" value="<?php echo $city;?>" id="city" name="city"> - <input style="margin-left:2.3px" size="12" type="text" placeholder="State" value="<?php echo $state;?>" id="state" name="state">
						<span style="color:red" id="err_address"></span><span style="color:red"><?php echo $err_address;?></span></td></td>
				    </tr>
					
					<tr>
						<td align="right">Date of Birth</td>
						<td>:<select id="day" name="day">
								<option value="0">Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select id="month" name="month">
								<option value="0">Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select id="year" name="year">
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
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="Male" id="male" name="gender">Male<input type="radio" value="Female" id="female" name="gender">Female
						<span style="color:red" id="err_gender"></span><span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
					
					<tr>
						<td align="right"><span>Select  medium </span></td>
						<td>:<input type="radio" value="Bangla" id="bangla" name="medium">Bangla <input type="radio" value="English" id="english" name="medium">English
						<input type="radio" value="Others" id="others" name="medium">Others
						<span style="color:red" id="err_medium"></span><span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					
					<tr><td align="right"><span>Select Class </span></td>
						<td>:
							<select id="class" name="class">
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
					</tr>
					
						<td></td>
				
					<tr>
						<td align="center" colspan="2"><input type="submit" name="add_tutor" value="Add Tutor"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
		<script>
		
			function get(id){
				return document.getElementById(id);
			}
			
			function checkUsername(control){
				var username = control.value;
				
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange=function(){
					if(this.readyState == 4 && this.status == 200){
						var rsp = this.responseText;
						rsp = rsp.trim();
						if(rsp == "true"){
							get("err_uname").innerHTML = "Valid Username";
							get("err_uname").style.color="green";
						}else{
							get("err_uname").innerHTML = "*Username already exist";
						}
					}
				};
				xhttp.open("GET","checkUsernameTutor.php?uname="+username,true);
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
				if((get("code").value == "") || (get("number").value == "")){
					get("err_number").innerHTML= "*Number Required";
					get("number").style.border="3px solid red";
					get("code").style.border="3px solid red";
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
				get("code").style.border="";
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
			}
	
	
	</script>
		
		
<?php		
	
include "AdminPageBack_Down.php";
		
?> 	