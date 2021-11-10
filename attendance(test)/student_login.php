<?php
	require_once "conn/connect.php";
	$student = $_POST['student'];
	$time = date("H:i", strtotime("+6 HOURS"));
	$date = date("Y-m-d", strtotime("+6 HOURS"));
	$q_student = $conn->query("SELECT * FROM `students` WHERE `noMatrik` = '$student'") or die(mysqli_error());
	$f_student = $q_student->fetch_array();
	$student_name = $f_student['namaPelajar'];
	$conn->query("INSERT INTO `attendance` VALUES('', '$student', '$student_name', '$time', '$date')") or die(mysqli_error());
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";
	
	