<?php		
	
	require_once 'controllers/StudentController.php';
	$key = $_GET["key"];
	$students = searchStudent($key);
	foreach($students as $student){
		//echo $student["name"]."<br>";
		echo "<a href='EditStudent.php?id=".$student["id"]."'>".$student["name"]."<a><br>";
	}
?> 	