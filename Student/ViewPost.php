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
		
		<?php
			
			require_once "models/db_config.php";
			
			$query = "select * from post_tuition";
			$result = get($query);
			
		?>

		<table border="2" style="border-collapse:collapse;">
			<tr>
				<th>Title</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Location</th>
				<th>Salary</th>
				<th>Extra Information</th>
					
			</tr>
				
            <?php
			    foreach($result as $row){
				    echo "<tr>";
				    echo "<td>".$row["title"]."</td>";
				    echo "<td>".$row["name"]."</td>";
				    echo "<td>".$row["email"]."</td>";
				    echo "<td>".$row["phone"]."</td>";
				    echo "<td>".$row["location"]."</td>";
				    echo "<td>".$row["salary"]."</td>";
				    echo "<td>".$row["Extrainfo"]."</td>";
				    echo "</tr>";
			    }
            ?>
		</table>
		
		
	</body>
</html>