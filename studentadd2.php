<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$name 		= $_POST['name'];
$nomatrik   = $_POST['nomatrik'];
$jabatan 	= $_POST['jabatan'];
$kelas 		= $_POST['kelas'];
$notel	    = $_POST['notel'];

$sql = "INSERT INTO 
		students (namaPelajar, noMatrik, jabatan, kelas, noTel) 
		VALUE ('$name','$nomatrik','$jabatan','$kelas','$notel')";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfuly added new Student')
		window.location='studentrecord.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>