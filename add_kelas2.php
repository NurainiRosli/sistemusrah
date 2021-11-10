<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$Jabatan = $_POST['jabatan'];
$NamaKelas = $_POST['namakelas'];

$sql = "INSERT INTO kelas (jabatan,namaKelas) 
		VALUE ('$Jabatan','$NamaKelas')";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfuly added new program')
		window.location='kelas.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>