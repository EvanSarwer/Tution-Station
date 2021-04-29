
<?php 
        $city="";
	    $err_city="";
			
	    $area="";
		$err_area="";
			
		$class="";
		$err_class="";
			
		$medium="";
		$err_medium="";
			
		$subject="";
		$err_subject="";
			
		$gender="";
		$err_gender="";
		
?>
	<html> 
	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
			<tr>
				<td width="20%" height="60px" align="center"><font size="10px" color=""><b></b></font></td>
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
	
    <title> Search For Tutor</title> 
		   
	<body style="background-color:white;">
			
		<fieldset style="width:800px;border:solid 2px" >
	    <legend> <h1> Search For Tutors</h1></legend>
	 
		<form action="" method="post" onsubmit="return validate()">
			<table>
			   <tr>
					<td><span> Select City  </span></td>
					<td>:<select id="city" name="city">
						    <option> </option>
							<option>Dhaka </option>
							<option>Chittagong </option>
							<option>Nuakhali  </option>
						    <option>Comilla </option>
							<option>Rajshahi </option>
						</select> 
					    <span id="err_city"><?php echo $err_city;?></span>
					</td>
				</tr>
				
				<tr>
					<td><span> Select Area  </span></td>
					<td>:<select id="area" name="area">
						    <option> </option>
							<option>Bashudara Residential Area  </option>
							<option>Mirpur  </option>
							<option>Uttara  </option>
							<option>Khulshi  </option>
							<option>Tangail  </option>
						</select> 
						<span id="err_area"><?php echo $err_area;?></span>
					</td>
				</tr>
		
                <tr>
					<td><span>Select Class </span></td>
					<td>:<select id="class" name="class">
						    <option> </option>
							<option>  Kg  </option>
							<option>Nursery </option>
							<option>playpen </option>
							<option>class 1 </option>
							<option>class 2 </option>
							<option>class 3 </option>
						    <option>class 4 </option>
							<option>class 5 </option>
							<option>class 6 </option>
							<option>class 7 </option>
							<option>class 8 </option>
							<option>class 9 </option>
							<option>class 10 </option>
							<option>class 11 </option>
						    <option>class 12 </option>
							<option>Secondary </option>
							<option>Higher Secondary </option>
							<option>Admission test </option>
							<option>Others </option>
						
						</select>
						<span id="err_class"><?php echo $err_class;?></span>
					</td>
				</tr>
				
			    <tr>
					<td><span>Select  Medium </span></td>
				    <td>:
					    <input type="radio" id="medium" name="Bangla" value="<?php echo $medium;?>">
						<span>Bangla</span>
						<input type="radio" id="medium" name="English" value="<?php echo $medium;?>">
						<span>English</span> 
						<span id="err_medium"><?php echo $err_medium;?></span>
					</td>
				</tr>
				
				<tr>
					<td><span>Select Subject </span></td>
					<td>:
						<select id="subject" name="subject">
						    <option> </option>
							
							<option>All Subject </option>
							<option>Accounting </option>
							<option>Finance </option>
							<option>Bangla </option>
						    <option>Physics </option>
							<option>Chemistry </option>
							<option>Biology </option>
							<option>Marketing  </option>
							<option>Arabic </option>
							<option>English </option>
							<option>Admission </option>
							<option>Religious </option>
						    <option>Art </option>
							<option>Admission test </option>
							<option>Others</option>
						
						</select> 
					    <span id="err_subject"><?php echo $err_subject;?></span>
					</td>
			    </tr>
				
				
				<tr>
					<td><span> Select Gender</span></td>
				    <td>:<input type="radio" id="gender" name="Male" value="<?php echo $gender;?>"><span>Male</span>
					    <input type="radio" id="gender" name="Female" value="<?php echo $gender;?>"><span>Female</span> 
				        <span id="err_gender"><?php echo $err_gender;?></span>
					</td>
					
				</tr>
	
			</table>
			
            <div class="buttons" align="center" colspan="2">
			        <p><br></p>
			        
					<td align="center" colspan="2"><input type="submit" value="search"></td>
				 
			</div>

		</form>
	</body>
	
	<script>
	        function get(id){
		 		return document.getElementById(id);
			}
			
			function validate(){
					cleanUp();
			        var hasError=false;
						//var err_msg="";
						
				    if(get("city").value == ""){
				get("err_city").innerHTML="*City Required*";
				get("err_city").style.color="purple";
				hasError=true;
				}
					
				    if(get("area").value == ""){
				get("err_area").innerHTML="*Area Required*";
                get("err_area").style.color="purple";
				hasError=true;
				}
				
					if(get("class").value == ""){
				get("err_class").innerHTML="*Class Required*";
                get("err_class").style.color="purple";
				hasError=true;
				}
						
					if(get("medium").value == ""){
				get("err_medium").innerHTML="*Medium Required*";
                get("err_medium").style.color="purple";
				hasError=true;
				}
				
					if(get("subject").value == ""){
				get("err_subject").innerHTML="*Subject Required*";
				get("err_subject").style.color="purple";
				hasError=true;
				}
					
					if(get("gender").value == ""){
				get("err_gender").innerHTML="*Gender Required*";
				get("err_gender").style.color="purple";
				hasError=true;
				}
					
			    if(!hasError){
				    return true;
				
			    }
					//alert(err_msg);
					return false;
			}
			
			function cleanUp(){
			get("err_city").innerHTML = "";
			get("err_area").innerHTML = "";
			get("err_class").innerHTML = "";
			get("err_medium").innerHTML = "";
			get("err_subject").innerHTML = "";
			get("err_gender").innerHTML = "";
			
		    }
	</script>
</html>