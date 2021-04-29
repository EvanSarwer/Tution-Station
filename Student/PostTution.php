  <?php
    require_once "controllers/PostTuitionController.php" 
  ?>
 <html>
	<head></head>
	<body style="background-color:white;">
	
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

		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Make Tution Advertisement</h1></legend>
			<form action="" method="post" class="form-horizontal form-material">
				<table style="margin-left:5px">
				    <tr>
						<td align="right"><span> Title </span></td>
						<td>:<input size="29" type="text" id="title" value="<?php echo $title;?>" name="title">
	                    <span id="err_title"></span><span style="color:red"><?php echo $err_title;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Name </span></td>
						<td>:<input size="29" type="text" id="name" name="name" onfocusout="checkName(this)" value="<?php echo $name;?>">
						<span id="err_name"></span><span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					 
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" id="email" value="<?php echo $email;?>" name="email">
						<span id="err_email"></span><span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
			
	
					
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="29" type="text" id="phone" placeholder="Number" value="<?php echo $phone;?>" name="phone">
						<span id="err_phone"></span><span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" ><span> Select  Location  </span></td>
						<td>:<input size="29" type="text" id="location" placeholder="Select location" value="<?php echo $location;?>" name="location">
						<span id="err_location"></span><span style="color:red"><?php echo $err_location;?></span></td></td>
					</tr>
					
					 
					<tr>
					<td align="right">Salary Range  </td>
						<td>:<select id="salary" name="salary">
						
								<option> </option>
								
								<?php
									$salary = array("1000tk/month","2000tk/month","3000tk/month","4000tk/month","5000tk/month","6000tk/month","7000tk/month","8000tk/month","9000tk/month","10,000tk/month");
									foreach($salary as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select><span id="err_salary"></span><span style="color:red"><?php echo $err_salary;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea id="Extrainfo" value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
						<span id="err_Extrainfo"></span><span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
					
				</table>
				
				<div class="buttons" align="center" colspan="2">
			        <p><br></p>
			        
					<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit" value="submit" class="form-control"></td>
					<tr>
					</tr>
				</div>
				<script>
				    function checkName(control){
						var name = control.value;
						
		                var xhttp = new XMLHttpRequest();
		                xhttp.onreadystatechange=function(){
			                if(this.readyState == 4 && this.status == 200){
				    //when server respond
				    var rsp = this.responseText.trim();
				    if(rsp == "true"){
						//$hasError=false;
					    document.getElementById("name").innerHTML = "<br>Valid";
				    }
					else{
						//$hasError=true;
					    document.getElementById("err_name").innerHTML = "<br>Not Valid";
				    }
			}
		};
		xhttp.open("GET","checkname.php?name="+name,true);
		xhttp.send();
	}
				</script>
			</form>
		</fieldset>	
	</body>
</html>