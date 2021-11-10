<!DOCTYPE html>
<?php

// import setting database connection
//include "conn/connect.php";

?>
<html lang="en">
<head>
<title>ATTENDANCE PROGRAM</title>
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

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
   
label{
   display: block;
   text-align: left;
   padding-bottom: 20px;
   padding-top: 10px;
   font-weight: bold;
   font-size: 20px;
}

input{
  width: 100%;
  padding: 1em;
  border: solid 1px #CFECEC;
  border-radius: 14px;
  background-color: #F0FFFF;
}
    
.btn{
  background: #white;
  border: 0;
  color: #008080;
  text-transform: uppercase;
  font-size: 17px;
  font-weight: bold;
  margin-top: 20px;
  width: 40%;
  padding: 5px;
  border-radius: 7px;
  float: right;  
}

.btnlink {
  background-color: #008080;
  color: white;
  border-radius: 25px;
  font-size: 20px;
  width: 50%;
  text-align: center;
}

.btnlink:hover{
  background-color: #20B2AA;
  color: black;
  font-weight: bold;
  opacity: none;
  border-radius: 25px;
}

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}

.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
   width: 30%;
}

.button:hover {opacity: 1}
</style>
</head>
<body>

<div class="header">
  <h1>PROGRAM USRAH</h1>
  <p>POLITEKNIK TUANKU SYED SIRAJUDDIN</p>
</div>

<div class="navbar">
  <a href="indextest.php" >Laman Utama</a>
  <a href="#">Aktiviti</a>
  <a href="view.php">Semak Pelajar</a>
  <a href="aboutUs.php">Tentang Kami</a>
  <a href="login.php" class="right">Log Masuk</a>
</div>

</div>
<center>
   
    <br>
	 
	<div class="utksearch">
	<p>Search</p>
	<input type="text" name="search" placeholder=""></div>
	 
	<input class="button" name= "submit" type="submit" value="Lihat Kehadiran" required/>
	 
    <form action="" method="POST">
    <table   border="1" width="80%" height="150px">
	 
	<div class="main">
	   <tr>
	   <th colspan="6" id="tajuk">KEHADIRAN PROGRAM</th> 
	   </tr>
	   
			<tr>
			     <td>BIL</td>
			     <td>NAMA PROGRAM</td>
				 <td>TARIKH</td>
				 <td>MASA</td>
				 <td>TEMPAT</td>
				 <td>KEHADIRAN</td> 
			</tr>
			
			<tr>
			     <td>1</td>
			     <td>MINGGU KULIAH 1</td>
				 <td>13/10/2021</td>
				 <td>8.00 A.M</td>
				 <td>ZOOM</td>
				 <td><a href="">KEHADIRAN</a></td> 
			</tr>
			
			<tr>
			     <td>2</td>
			     <td>MINGGU KULIAH 2</td>
				 <td>20/10/2021</td>
				 <td>8.00 A.M</td>
				 <td>ZOOM</td>
				 <td><a href="">KEHADIRAN</a></td> 
			</tr>
			
		</div>
	   </table>


     </form>
  
 </div>

 <center>
  
</div>

<div class="footer">
  <?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>