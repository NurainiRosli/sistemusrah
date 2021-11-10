<?php
// import setting database connection
include "conn/connect.php";


$sessionname=$_SESSION['sessionname'];

$id = $_GET['siapa'];


$sql = "DELETE FROM program WHERE idProgram= '$id'";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfully deleted')
		window.location='program.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}



?>