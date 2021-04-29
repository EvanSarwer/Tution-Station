<?php		
	
	require_once 'controllers/TutorController.php';
	$key = $_GET["key"];
	$tutors = searchTutor($key);
	foreach($tutors as $tutor){
		//echo $student["name"]."<br>";
		echo "<a href='EditTutor.php?id=".$tutor["id"]."'>".$tutor["name"]."<a><br>";
	}
?> 	