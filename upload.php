<?php
	require_once 'conn/connect.php';
	
	if(ISSET($_POST['submit'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
			
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
			
			$conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path')") or die(mysqli_error());
			
			echo "<script>alert('Upload Berjaya')</script>";
			move_uploaded_file($file_temp, $path);
			header("location:fasireport.php");
			
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='fasireport.php'</script>";
		}
	}
?>