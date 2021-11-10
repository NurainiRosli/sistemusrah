<?php
// import setting database connection
include "conn/connect.php";
include "conn/session.php";

$sessionname=$_SESSION['sessionname'];

?>


<html lang="en">
<head>
<title>Usrah Program Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

	
	.container{
		width: 50%;
		align-content: center;
		background-color: #E5E4E2;
		padding: 40px;
		padding-right: 50px;
		padding-left: 50px;
		border-radius: 10px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		 padding-bottom: 100px;
		 margin-top: 50px;
		
	}
	h2{
    text-transform: uppercase;
    font-size: 40px;
    font-family:Serif; 
    font-weight: strong;
    color: #2B3856;
    margin: 30px;
    }
	label{
		display: block;
		text-align: left;
		padding-bottom: 10px;
   		font-weight: bold;
   		
	}
	input{
		 width: 100%;
  padding: 1em;
  border: solid 1px #CFECEC;
  border-radius: 14px;
  background-color: #F0FFFF;
	}

.highlight {
  color: red;
  font-weight: bold;
}
.submit{
	margin-top: 20px;
	width: 45%;
	float: left;
	background-color: white;
	color: purple;
	border: 5px solid purple;
	font-weight: bold;
	font-size: 17px;
}
.reset{
	margin-top: 20px;
	width: 45%;
	float: right;
	background-color: white;
	color: blue;
	border: 5px solid blue;
	font-weight: bold;
	font-size: 17px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}


/* Footer */
.footer {
  padding: 20px;
  width: 100%;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

</style>
<body>
	<div class="header">
  <h1>PROGRAM USRAH</h1>
  <p>POLITEKNIK TUANKU SYED SIRAJUDDIN</p>
</div>

<div class="navbar">
  <a href="indextest.php" >Laman Utama</a>
  <a href="studentrecord.php">Pelajar</a>
  <a href="fasirecord.php">Fasilitator</a>
  <a href=".php"></a>
  <a href="login.php" class="right">Log Keluar</a>
</div>

  
  <div class="main">
<center>

<h2>Add</h2>
<form action="studentadd2.php" method="POST">	
				
		<div class="container">
	     <label>Nama Pelajar</label>
		<input type="text"  name="name" required><br>
				
		
		<label>No Pendaftaran</label>
		<input type="text"  name="nomatrik" maxlength="12" required><br>
	 			
         <label>Jabatan</label>
		<input type="text"  name="jabatan"  required><br>
				
		
        <label>Kelas</label>
		<input type="text" name="kelas" required><br>
	 			
		
        <label>No Telefon</label>
		<input type="number"  name="notel" maxlength="13" required>
	

			<input class="submit" type="submit" name="daftar" value="ADD">
			<input class="reset "type="reset" value=" CLEAR ">

			</div>
	
</form>

</center>


<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>
</body>
</html>