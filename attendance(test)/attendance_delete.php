<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$id = $_GET['siapa'];


$sql = "DELETE FROM attendance WHERE idmasa = '$id'";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfully deleted')
		window.location='attendance.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}



?>