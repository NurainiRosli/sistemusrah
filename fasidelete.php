<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$id = $_GET['siapa'];


$sql = "DELETE FROM fasilitator WHERE idFasi = '$id'";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfully deleted')
		window.location='fasirecord.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}



?>