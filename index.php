<!DOCTYPE html>
<?php

$user ='root';
$pass = '';
$db = 'sistemusrah';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

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
  <a href="indextest.php" >Laman Utama</a>
  <a href="aktiviti.php">Aktiviti</a>
  <a href="view.php">Semak Pelajar</a>
  <a href="aboutUs.php">Tentang Kami</a>
  <a href="loginadmin.php" class="right">Log Admin</a>
  <a href="loginfasi.php" class="right">Log Fasilitator</a>
</div>

<div class="row">
  <div class="side">
    
    <h3><mark>  PAUTAN PELAJAR  </mark></h3>
    <p>
		<ul type = "bullet">
			<li><a href="http://www.ptss.edu.my/v9/index.php" target="location">Portal Rasmi PTSS</a></li>
            <li><a href="http://spmp.ptss.edu.my/" target="location">SPMP PTSS</a></li>
            <li><a href="https://ptss.cidos.edu.my/" target="location">CIDOS PTSS</a></li>
		</ul></p>
        
     <h3><mark>  PAUTAN USRAH  </mark></h3>
     <p>
		<ul type = "bullet">
			<li><a href="form.html" target="location">Portal Rasmi PTSS</a></li>
            <li><a href="form.html" target="location">SPMP PTSS</a></li>
            <li><a href="form.html" target="location">CIDOS PTSS</a></li>
		</ul></p>   
   
  </div>
  
  <div class="main">
		<center><img src="images/banner.jpg" width="80%" height="450px"></center>
        
        <h2>Pusat Islam Luqman Al-Hakim</h2> <hr>
        	<center><img src="images/pusatislam.jpg" width="80%" height="450px"></center>
        
   <br>
    
  <div class="map-container">
  	 <h2>Lokasi</h2> 
    	<hr><iframe width="600" height="300" id="gmap_canvas" src=			
        "https://maps.google.com/maps?q=politeknik%20tuanku%20syed%20sirajuddin&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"	
         marginheight="0" marginwidth="0">width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
    
    
<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>
