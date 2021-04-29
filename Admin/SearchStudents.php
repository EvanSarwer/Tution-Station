<?php		
		
	include "AdminPageBack_Up.php";
	require_once "controllers/StudentController.php";
	
?> 
        <?php 
            $district="";
			$err_district="";
			
			$class="";
			$err_class="";
			
			$area="";
			$err_area="";
			
			$subject="";
			$err_subject="";
			
			
			$gender="";
			$err_gender="";
			
			$day="";
			$err_day="";
			
		    $salary="";
	        $err_salary="";
		   
		   	$medium="";
			$err_medium="";
			
			$salary="";
			$err_salary="";
			
				$day="";
			$err_day="";
			
			
		   
		   if($_SERVER['REQUEST_METHOD']== "POST"){
			   	if(empty($_POST["class"])){                                   
					$err_class="*please select a class";
				}
				
				else{
					$class=$_POST["class"];
				}
			   	if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				
					if(empty($_POST["medium"])){
					$err_medium="this field is mandatory";  
				}
				else{
					$medium=$_POST["medium"];
				}
			
				if(empty($_POST["area"])){
					$err_area="select an area ";  
				}
				else{
					$area=$_POST["area"];
				}	
				if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
				}
				else{
					$day=$_POST["day"];
				}
				
				if(empty($_POST["salary"])){                                      
					$err_salary="*select salary range";
				}
				else{
					$salary=$_POST["salary"];
				}
				
			
		
		   }
		   
		?>
		
		
		
		   <fieldset style="width:800px;border:solid 2px" >
		    <body style="background-color:powderblue;">
			<legend> <h1> Search Students</h1></legend>
			
		      
			  <form action="" method="post" onsubmit="return validate()">
			   <table>
			  
				    <tr>
					<td><span> Select Area  </span></td>
					<td>:<input type="text" value="<?php echo $area;?>" id="area" id="area" name="area">
					<span style="color:red" id="err_area"></span><span style="color:red"><?php echo $err_area;?></span></td>
				
					</tr>
					
					<tr>
					<td><span>Select Class </span></td>
					<td>:
						<select id="class" name=" class">
						<option value="0">Class</option>
							
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
						
						</select><span style="color:red" id="err_class"></span><span style="color:red"><?php echo $err_class;?></span></td>
				</tr>
					
				<tr>
					<td><span> Select Gender</span></td>
				<td>:<input type="radio" value="Male" id="male" name="gender">Male<input type="radio" value="Female" id="female" name="gender">Female 
				<span style="color:red" id="err_gender"></span><span style="color:red"><?php echo $err_gender;?></span></td>
					
				</tr>
				
				
				<tr>
					<td><span>Select Medium  </span></td>
					<td>:
					
						<select id="medium" name="medium" >
						<option value="0">Medium </option>
							<option>Bangla</option>
							<option>English</option>
							<option>Others</option>
						     
							
						</select><span style="color:red" id="err_medium"></span><span style="color:red"><?php echo $err_medium;?></span></td>
					
				</tr>
				  <tr>
				<td>Day per week </td>
			   <td>:
				<select id="day" name="day">
				<option value="0"> Day </option>
				<?php
					for($i=1;$i<=7;$i++){
					echo "<option>$i</option>";	
						}
						?>
					
						
					</select><span style="color:red" id="err_day"></span><span style="color:red"><?php echo $err_day;?></span>
					
					</td>
					</tr>
					<tr>
					<td>Salary range </td>
					<td>:<select id="salary" name="salary">
					
							<option value="0">Salary</option>
							<?php
								for($i=1000;$i<=15000;++$i){
									echo "<option>$i</option>";
									$i=$i+999;
								}
							?>
							
						</select><span style="color:red" id="err_salary"></span><span style="color:red"><?php echo $err_salary;?></span>
						
					</td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" value="search"></td>
				</tr>

			</table>
		</form>
		
		
		<div id="">
			<input type="text" id="search_area" onkeyup="suggest(this)" placeholder="Search by Area">
			<p id="suggestion">
			
			</p>
		
		</div>
		
		
		
		
		
		<script>
			function get(id){
				return document.getElementById(id);
			}
		
		
		
			function suggest(control){
				var key = control.value;
				if(key ==""){
					get("suggestion").innerHTML = "";
					return;
				}
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange=function(){
					if(this.readyState == 4 && this.status == 200){
						get("suggestion").innerHTML = this.responseText;
						debugger;
					}
				};
				xhttp.open("GET","searchStudent.php?key="+key,true);
				xhttp.send();
			}
		
		
			
			function validate(){
				cleanUp();
				var hasError=false;
				
				if(get("area").value == ""){
					get("err_area").innerHTML= "*Area Required";
					get("area").style.border="3px solid red";
					hasError=true;
				}
				if(!(get("male").checked || get("female").checked)){
					get("err_gender").innerHTML= "*Gender Required";
					hasError=true;
				}
				if(get("class").value == "0"){
					get("err_class").innerHTML= "*Select Class";
					get("class").style.border="3px solid red";
					hasError=true;
				}
				if(get("medium").value == "0"){
					get("err_medium").innerHTML= "*Select Medium";
					get("medium").style.border="3px solid red";
					hasError=true;
				}
				if(get("day").value == "0"){
					get("err_day").innerHTML= "*Select days per week";
					get("day").style.border="3px solid red";
					hasError=true;
				}
				if(get("salary").value == "0"){
					get("err_salary").innerHTML= "*Select Salary";
					get("salary").style.border="3px solid red";
					hasError=true;
				}
				if(!hasError){
					return true;
				}
				return false;
				
			}
			function cleanUp(){
				get("err_area").innerHTML= "";
				get("area").style.border="";
				get("err_gender").innerHTML= "";
				get("err_class").innerHTML= "";
				get("class").style.border="";
				get("err_medium").innerHTML= "";
				get("medium").style.border="";
				get("err_day").innerHTML="";
				get("day").style.border="";
				get("err_salary").innerHTML="";
				get("salary").style.border="";
				
			}
	
	
	</script>
		
		
		
<?php		
	
include "AdminPageBack_Down.php";
		
?> 	