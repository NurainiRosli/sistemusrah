<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$namaprogram = $_POST['namaprogram'];
$tarikh = $_POST['tarikh'];
$masa = $_POST['masa'];
$tempat = $_POST['tempat'];

$sql = "INSERT INTO program (namaProgram,tarikh,masa,tempat) 
		VALUE ('$namaprogram','$tarikh','$masa','$tempat')";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfuly added new program')
		window.location='program.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>