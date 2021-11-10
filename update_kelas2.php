<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";



$id = $_POST['idkelas'];
$jabatan = $_POST['jabatan'];
$namakelas = $_POST['namakelas'];

$sql = "UPDATE kelas SET jabatan='$jabatan', namaKelas='$namakelas' WHERE idKelas='$id'";


if($conn->query($sql) === TRUE) {
?>

	<script>
		alert('Successfully edited')
		window.location='kelas.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>