<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
<form action="post">
<center>
<table border="2" >
<tr>
<td colspan="3">
<?php 
	if(isset($_GET['msg']))
		echo "<center><h3>".$_GET['msg']."</h3></center>";
	elseif(isset($_GET['msg1']))
		echo "<center><h3>".$_GET['msg1']."</h3></center>";	
	else
		echo "<center><h3>Sign Up Here!!! </h3></center>";
?> </td></tr>
<tr><td><b>UserName</b></td><td colspan="2"><input type="name" name="name" ></td>
</tr>
<tr> </tr>
<tr><td><b>PassWord</b></td><td colspan="2"><input type="password" name="pass" ></td>
</tr>
<tr><td colspan="3">Renter PassWord</td></tr>
<tr><td><b>RePassWord</b></td><td colspan="2"><input type="password" name="repass" ></td>
</tr>

<tr><td>Enter subject</td><td colspan="2"><select name="subject">
	<option value="DDT1A">DDT1A</option>
	<option value="DDT1B">DDT1B</option>
	
</select></td></tr>

<tr><td><input type="submit" name="submit" value="SUBMIT"></td><td ></td><td ><input type="reset" name="reset"></td></tr>

</table>
</center>
</form>

<?php
try{

	
	if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['repass']) && isset($_POST['class']))
	{
		
		$u=$_POST['username'];
		$p=$_POST['pass'];
		$rp=$_POST['repass'];
		$sub=$_POST['class'];

		if($p === $rp)
		{
			$sql="insert into fasi  (
			name VARCHAR(6) NOT NULL, 
		   	password VARCHAR(30) NOT NULL,
		   	class VARCHAR(20) NOT NULL,
	
			) values ($u, $p, $sub)";
		$query=$dbhandler->query($sql);
		}
		else{
				header("location:attendance.php?msg=PASSWORD NOT MATCH");	
		}

	}
}
catch(PDOException $e){
		echo $e->getMessage();
		die();
}

?>
</body>
</html>