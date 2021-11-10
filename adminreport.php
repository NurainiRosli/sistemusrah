<!DOCTYPE html>
<?php

$user ='root';
$pass = '';
$db = 'sistemusrah';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

session_start();

// cek apakah yang mengakses halaman ini sudah login
 // if($_SESSION['level']=="admin"){
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
</style>
</head>
<body>

<div class="header">
  <h1>PROGRAM USRAH</h1>
  <p>POLITEKNIK TUANKU SYED SIRAJUDDIN</p>
</div>

<div class="navbar">
  <a href=".php" >Laman Utama</a>
  <a href="studentrecord.php">Pelajar</a>
  <a href="fasirecord.php">Pengguna</a>
  <a href=".php"></a>
  <a href="indextest.php" class="right">Log Keluar</a>
</div>

<div class="row">
  <div class="side">
    
    
  </div>
  
  <div class="main">
	
 <h1>Ini Halaman Admin</h1>

<?php 
echo "Assalamualaikum ".$_SESSION['sessionname']; ?>

<!--." Anda telah login sebagai".$_SESSION['result'] -->

<table class="table table-bordered">
			<thead class="alert-warning">
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="alert-success">
				<?php
					require 'conn/connect.php';
					$row = $conn->query("SELECT * FROM `file`") or die(mysqli_error());
					while($fetch = $row->fetch_array()){
				?>
					<tr>
						<?php 
							$name = explode('/', $fetch['file']);
						?>
						<td><?php echo $fetch['name']?></td>
						<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
    
<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>
