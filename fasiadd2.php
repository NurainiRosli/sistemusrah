<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

$name 		= $_POST['name'];
$username   = $_POST['username'];
$password 	= $_POST['password'];
$level 	    = $_POST['level'];


$sql = "INSERT INTO 
		users (username, password, name, level) 
		VALUE ('$username','$password','$name','$level')";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Successfuly added new User')
		window.location='studentadd.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>