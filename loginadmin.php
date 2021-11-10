<!DOCTYPE html>
<?php

// import setting database connection
include "conn/connect.php";

?>
<html lang="en">
<head>
<title>Log Masuk Pengguna</title>
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


/* Main column */
.main {   

  background-color: white;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  ;  
}  
form{
  background: #008080;
  padding: 20px;
  border: 1px solid black;
  width: 40%;
  padding-top: 50px;
  padding-bottom: 80px;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  color: #fff;
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
  <a href="loginadmin.php" class="right">Log Admin</a>
  <a href="loginfasi.php" class="right">Log Fasilitator</a>
</div>

</div>
<center>
  <div class="main">    
    <center> <h1> Log Masuk Admin </h1> </center>   
     <form action="loginadmin2.php" method="POST">
     <h1>Silakan Masuk</h1>
     
  
<label>Nama Pengguna</label>

<input type="text" name="username" class="form_login" placeholder="Username" required>


<label>Katalaluan</label>

<input type="password" name="password" class="form_login" placeholder="Password" required>

<input class="btn" type="submit" name="login" value="Log Masuk" />


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
