<?php
// import setting database connection
include "conn/connect.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>Semak Pendaftaran</title>
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

footer{
        background-color: #008080;
        text-align: right;
        color: white;
        padding: 40px;
        margin: 0;
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

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.check{
        padding: 40px;
        align-content: center;
        border: 1px solid black;
        width: 50%;
        border-radius: 25px;
        background-color: #008080;
        color: #ffffff;
        width: 70%;
        padding-bottom: 50px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         margin-bottom: 40px;
    }
    button{ 
  background: #white;
  border: 0;
  color: #008080;
  text-transform: uppercase;
  font-size: 17px;
  font-weight: bold;
  margin-top: 20px;
  width: 100%;
  padding: 10px;
  border-radius: 7px;
 
    }
   .check label{
   text-align: left;
   padding-bottom: 20px;
   padding-top: 10px;
   font-weight: bold;
   font-size: 20px;
    }
    .check input{
  width: 60%;
  border: solid 1px #CFECEC;
  border-radius: 14px;
  padding: 10px;
  background-color: #F0FFFF;
    }
.output{
    padding: 10px;
}
    .output label{
   text-align: left;
   padding-bottom: 20px;
   padding-top: 10px;
   font-weight: bold;
   font-size: 20px;
    }
    .output input{
  width: 60%;
  border: solid 1px #008080;
  border-radius: 14px;
  padding: 10px;
  margin-bottom: 10px;
  margin-top: 10px;
  background-color: white;
  font-size: 18px;

    }
    .output input:focus{
    outline: blue;
    box-shadow: none;
}

/* Footer */
.footer {
  padding: 20px;
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

<center>
    <div class="container">
    <h1>Semak Pendaftaran Anda Disini!</h1>
    <p>masukkan nombor pendaftaran anda</p>

    
    <form action="" method="GET">
    
    <div class="check">
    <label> Nombor Matrik:</label>
    <input type="text" name="noMatrik" maxlength="12" required value="<?php if(isset($_GET['noMatrik'])){echo $_GET['noMatrik'];} ?>" class="form-control">

    <button type="submit" class="btn btn-primary">Semak</button>
    
    </div>
    </div>
</form>
</center>
                        
    <?php 
    include "conn/connect.php";

    if(isset($_GET['noMatrik']))
    {
        $noMatrik = $_GET['noMatrik'];

        $query = "SELECT * FROM students WHERE noMatrik='$noMatrik' ";
 $query_run = mysqli_query($conn, $query);
 if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
 {
?>
<center>
     <div class="output">
     <label for="">Nama</label>

     <input type="text" value="<?= $row['namaPelajar']; ?>" class="form-control"  readonly>
     </div>

    <div class="output">
    <label for="">Nombor Pendaftaran</label>

    <input type="text" value="<?= $row['noMatrik']; ?>" class="form-control"  readonly>
    </div>
    
    <div class="output">
    <label for="">Jabatan</label>
    
    <input type="text" value="<?= $row['jabatan']; ?>" class="form-control"  readonly>
    </div>
    
    <div class="output">
    <label for="">Kelas</label>
    
    <input type="text" value="<?= $row['kelas']; ?>" class="form-control"  readonly>
    </div>
    
    <div class="output">
    <label for="">Nombor Telefon</label>
    
    <input type="text" value="<?= $row['noTel']; ?>" class="form-control"  readonly>
    </div>
</center>    
    <?php
    }
    }
    else
     {
      echo "No Record Found";
        }
        }
      ?>
  

    

<div class="footer">
  <?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>
