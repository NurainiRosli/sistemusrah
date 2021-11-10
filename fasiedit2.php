<?php
// import setting database connection
include "conn/connect.php";

$id 		= $_POST['idf'];
$nama 		= $_POST['nama'];
$nomatrik   =$_POST['nomatrik']; 
$noic       =$_POST['nokp']; 
$jabatan    =$_POST['jabatan']; 
$sem        =$_POST['semester']; 
$notel      =$_POST['notel']; 
$kelas      =$_POST['kelas']; 


$sql = "UPDATE fasilitator SET fnama='$nama', fnoMatrik='$nomatrik', noic='$noic', 
fjabatan='$jabatan' , semester='$sem' , fnoTel='$notel' , fkelas='$kelas' WHERE idFasi='$id'";


if($conn->query($sql) === TRUE) {
?>

	<script>
		alert('Successfully edited')
		window.location='fasirecord.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>