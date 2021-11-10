<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$id 		 = $_POST['idprog'];
$namaprogram = $_POST['namaprogram'];
$tarikh 	 = $_POST['tarikh'];
$masa	     = $_POST['masa'];
$tempat 	 = $_POST['tempat'];


$sql = "UPDATE program SET namaProgram='$namaprogram', tarikh='$tarikh', masa='$masa', tempat='$tempat' WHERE idProgram='$id'";


if($conn->query($sql) === TRUE) {
?>

	<script>
		alert('Successfully edited')
		window.location='program.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>