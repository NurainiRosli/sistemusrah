<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$id = $_GET['siapa'];


$sql = "DELETE FROM students WHERE idPelajar = '$id'";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfully deleted')
		window.location='studentrecord.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}



?>