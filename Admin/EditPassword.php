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
						<td align="right"><span>Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $admin["password"];?>" id="pass" name="pass">
						<span style="color:red" id="err_pass"></span><span style="color:red"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Confirm Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $admin["password"];?>" id="cpass" onfocusout="checkPassword()" name="cpass">
						<span style="color:red" id="err_cpass"></span><span style="color:red"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					
					
				
					<tr>
						<td align="center" colspan="2"><input type="submit" name="change_pass" value="Change Password"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
		
		<script>
	function get(id){
		return document.getElementById(id);
	}
	
	function checkPassword(){
		cleanUp();
		if(get("cpass").value == get("pass").value){
			get("err_cpass").innerHTML= "*Password Matched";
			get("err_cpass").style.color="green";
		}
		else{
			get("err_cpass").innerHTML= "*Password Not Matched";
			get("err_cpass").style.color="red";
			get("cpass").style.border="3px solid red";
		}
	}
	
	function validate(){
		cleanUp();
		var hasError=false;
		
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
		else if((get("cpass").value)!=get("pass").value){
			get("err_cpass").innerHTML= "*Password Not Matched";
			get("cpass").style.border="3px solid red";
			$hasError=true;
		}
		if(!hasError){
			return true;
		}
		return false;
		
	}
	function cleanUp(){
		get("err_pass").innerHTML="";
		get("pass").style.border="";
		get("err_cpass").innerHTML="";
		get("cpass").style.border="";
		
		
		
	}
		
	</script>	
		
<?php		
		
	include "AdminPageBack_Down.php";
		
?> 	