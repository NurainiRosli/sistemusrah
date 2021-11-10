<!DOCTYPE html>
<?php

$user ='root';
$pass = '';
$db = 'sistemusrah';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

session_start();

// cek apakah yang mengakses halaman ini sudah login
 //if($_SESSION['level']=="FASILITATOR"){
 // header("location:login.php?pesan=gagal");
 //} 
 
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

mark {
	background-color: #008080;
	
	}
	
a:link { text-decoration: none; }	

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
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

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

hr{
  border: 3px solid #008080;
  background-color: #008080;
  width: 10%;
  margin-top: 10px;
  text-align: center;
  margin: 30px;
}

h2{
  text-transform: uppercase;
  text-align: left;
  font-size: 40px;
  font-family:Serif; 
  font-weight: strong;
  color: #2B3856;
  margin: 30px;
}

.operate table{
  border: 2px solid #008080 ;
  border-radius: 20px;
  padding-top: 10px;
  padding-bottom: 30px;
  padding-left: 50px;
  padding-right: 50px;
  margin-left: auto;
  margin-right: auto;
  cellspacing: 30px;

}
.operate td{
  text-align: left;
  padding-right: 40px;
}
/* Footer */
.footer {
  padding: 20px;
  width: 100%;
  text-align: center;
  background: #ddd;
}

.map-container{
  text-align:center;
      width:100%;
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
.container {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  padding-top: 70px;
  padding-bottom: 30px;

}

.wrapper > * {
  padding: 10px;
}

.jadual {
  background-color: #008080;
  text-align: center;
  align-content: center;
  border-radius: 5px;
  padding-left: 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
</style>
</head>
<body>

<div class="header">
  <h1>PROGRAM USRAH</h1>
  <p>POLITEKNIK TUANKU SYED SIRAJUDDIN</p>
</div>

<div class="navbar">
  <a href="#" >Jadual</a>
  <a href="#">Laporan</a>
  <a href="#">Bahan Usrah</a>
  <a href="#">Kehadiran</a>
  <a href="indextest.php" class="right">Log Keluar</a>
</div>

 <title>Upload and Download Files</title>
		<form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
			<input class="form-control" type="file" name="upload"/>
			<button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
		</form>
		<br /><br />
		
				
	</div>
    
<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>