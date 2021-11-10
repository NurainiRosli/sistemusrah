<?php
	session_start();
	require_once 'conn/connect.php';
 
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		$query = mysqli_query($conn, "SELECT * FROM `fasilitator` WHERE `username`='$username' && `password`='$password'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$_SESSION['idFasi']=$fetch['idFasi'];
			header('location: fasipage.php');
		}else{
			echo "<div class='alert alert-danger'>Invalid username or password</div>";
		}
	}
?>