<?php 
	include "AdminPageBack_Up.php";
	require_once "controllers/StudentController.php";
	
	$result = getAllStudents();
	if(isset($_GET["id"])){
	   deleteStudent($_GET["id"]);
	}
	
?>	


			<table border="1" style="border-collapse:collapse;">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Userame</th>
					<th>Institution</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Date of Birth</th>
					<th>Gender</th>
					<th>Medium</th>
					<th>Class</th>
					<th colspan="2">Operation</th>
				</tr>
				
		<?php
			foreach($result as $row){
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["username"]."</td>";
				echo "<td>".$row["institution"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["phone"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["dob"]."</td>";
				echo "<td>".$row["gender"]."</td>";
				echo "<td>".$row["medium"]."</td>";
				echo "<td>".$row["class"]."</td>";
				echo '<td><a href="EditStudent.php?id='.$row["id"].'"> Edit </a></td>';
				echo '<td><a href="ViewStudents.php?id='.$row["id"].'"> Delete </a></td>';
				echo "</tr>";
			}
			

		?>
		</table>
		
		
		
<?php		
		
	include "AdminPageBack_Down.php";
		
?> 	