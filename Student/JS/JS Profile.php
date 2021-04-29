<?php
	
	        
		$name="";
		$err_name="";
			
		$email="";
		$err_email="";
	
		$instituate="";
		$err_instituate="";

        $phone="";
		$err_phone="";
		
		$location="";
		$err_location="";	
			
		$Extrainfo="";
		$err_Extrainfo="";
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
						<td><span> Instituation Name</span></td>
						<td>: <input size="29" type="text" id="instituate" value="<?php echo $instituate;?>" name="instituate"><span id="err_instituate"></span>
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
		
			   
					<tr>
						<td align="right"><span>Edit Phone </span></td>
						<td>:<input size="29" type="text" id="phone" placeholder="Number" value="<?php echo $phone;?>" name="phone">
						<span id="err_phone"></span><span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right" style="vertical-align: top" ><span> Update  Location  </span></td>
						<td>:<input size="29" type="text" id="location" placeholder="Select location" value="<?php echo $location;?>" name="location">
						<span id="err_location"></span><span style="color:red"><?php echo $err_location;?></span></td></td>
					</tr>
				
				
				    <tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea id="Extrainfo" value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea><span id="err_Extrainfo"></span>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
					</tr>
						<tr>
						<td align="center" colspan="2"><input type="submit" value="update "></td>
					</tr>
				</table>
			</form>		
	</div><br>
  
 </body>
  <script>
            function get (id){
				return document.getElementById(id);
					}
			function validate(){
				cleanUp();
			    var hasError=false;
				//var err_msg="";
					
					if(get("name").value == ""){
						get("name").focus();
				get("err_name").innerHTML="*Name Required*";
				get("err_name").style.color="purple";
				hasError=true;
						}
					
					if(get("email").value == ""){
				get("err_email").innerHTML="*Email Required*";
                get("err_email").style.color="purple";
				hasError=true;
						}
					
					if(get("instituate").value == ""){
				get("err_instituate").innerHTML="*Instituate Required*";
				get("err_instituate").style.color="purple";
				hasError=true;
						}
							
					if(get("phone").value == ""){
				get("err_phone").innerHTML="*Phone Number Required*";
				get("err_phone").style.color="purple";
				hasError=true;
						}
					
					if(get("location").value == ""){
				get("err_location").innerHTML="*Location Required*";
				get("err_location").style.color="purple";
				hasError=true;
						}
						
					if(get("Extrainfo").value == ""){
				get("err_Extrainfo").innerHTML="*Extra Info Required*";
				get("err_Extrainfo").style.color="purple";
				hasError=true;
						}
				    if(!hasError){
				        return true;
			            }
						//alert(err_msg);
					    return false;
			}
			
				function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_email").innerHTML="";
			get("err_instituate").innerHTML="";
			get("err_phone").innerHTML="";
			get("err_location").innerHTML="";
			get("err_Extrainfo").innerHTML="";
		}
		
	</script>
	
</html>