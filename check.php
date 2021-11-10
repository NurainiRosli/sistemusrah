<?php
	include "conn/connect.php";
	$student = $_POST['student'];
	$q_student = $conn->query("SELECT * FROM `students` WHERE `noMatrik` = '$student'") or die(mysqli_error());
	$v_student = $q_student->num_rows;
	if($v_student > 0){
		echo 'Success';
	}else{
		echo 'Error';
	}