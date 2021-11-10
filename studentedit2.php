<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$id 		= $_POST['idpel'];
$name 		= $_POST['name'];
$nomatrik 	= $_POST['nomatrik'];
$jabatan	= $_POST['jabatan'];
$kelas 		= $_POST['kelas'];
$notel 	    = $_POST['notel'];



$sql = "UPDATE students SET namaPelajar='$name', noMatrik='$nomatrik', jabatan='$jabatan', kelas='$kelas', noTel='$notel' WHERE idPelajar='$id'";


if($conn->query($sql) === TRUE) {
?>

	<script>
		alert('Successfully edited')
		window.location='studentrecord.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>