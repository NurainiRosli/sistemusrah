<?php
// import setting database connection
include "conn/connect.php";


$sessionname=$_SESSION['sessionname'];

$id = $_GET['siapa'];


$sql = "DELETE FROM kelas WHERE idKelas= '$id'";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfully deleted')
		window.location='kelas.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}



?>