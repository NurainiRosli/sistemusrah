<?php
if(isset($_POST['Send']))
{
//call connect.php 
include "conn/connect.php";

//declare variable for every input 
$fnama=$_POST['nama']; 
$fnomatrik=$_POST['nomatrik']; 
$noic=$_POST['nokp']; 
$fjabatan=$_POST['jabatan']; 
$semester=$_POST['semester']; 
$fnotel=$_POST['notel']; 
$kelas=$_POST['fkelas']; 
$usrname=$_POST['uname']; 
$usrpassword=md5($_POST['password']); 


//SQL command for INSERT 
$cmdinsert="INSERT INTO fasilitator(fnama,fNoMatrik,noic,fjabatan,semester,fnoTel,fkelas,username,password)  
VALUES ('$fnama','$fnomatrik','$noic','$fjabatan','$semester','$fnotel','$kelas','$usrname','$usrpassword')"; 
 
//execute sql command  
if($conn->query($cmdinsert)==TRUE) 
{ 
?>	
	<script>
		alert("Anda telah berjaya mendaftar sebagai Fasilitator!")
		window.location = "fasireg.php";
	</script>
	<?php
} 
else 
{
	?>
	
	<script>
		alert("Data cannot be inserted!")
		window.location = "fasireg.php";
	</script>
	<?php
} 
}
?>