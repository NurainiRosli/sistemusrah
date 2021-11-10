<!DOCTYPE html>
<html lang="en">
<head>
<title>Pendaftaran Fasilitator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
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

h3{
  text-align: left;
  text-transform: uppercase;
  color: #008080;

}

.highlight {
  color: red;
  font-weight: bold;
  text-align: left;
}

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
  background: #E5E4E2;
  padding: 20px;
  border: 1px solid black;
  width: 40%;
  padding-top: 50px;
  padding-bottom: 80px;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  color: #008080;
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
    button{
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
	
	.checking{
  margin: 30px;
  text-transform: uppercase;
  text-align: left;
  font-size: 40px;
  font-family:Serif; 
  font-weight: strong;
  color: #2B3856;
}
 .btn {
  background-color: #008080;
  color: white;
  border-radius: 25px;
  font-size: 20px;
  width: 50%;
  text-align: center;
}
.btn:hover{
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
  <a href="studentreg.php">Pendaftaran Pelajar</a>
  <a href="aboutUs.php">Tentang Kami</a>
  <a href="login.php" class="right">Log Masuk</a>
</div>

</div>
<center>
  <div class="main">    
    <center> <h1> Pendaftaran Fasilitator </h1> </center>   
     <form id="contact-form" action="fasireg2.php" method="POST">
				<p>
					<label>Nama</label>
				
					<input type="text" name="nama" placeholder="" value="" required><br>
				</p>
				
				<p class="labels">
					<label>No Matrik</label>
					<input type="text" name="nomatrik" placeholder="" required><br>
				</p>    
				
				<p class="labels">
					<label>No Kad Pengenalan</label>
					<input type="text" name="nokp" placeholder="" required><br>
				</p>    
				
				<p class="labels">
					<label>Jabatan</label>
					<input type="text" name="jabatan" placeholder="" required><br>
				</p>    
				
				<p class="labels">
					<label>Semester</label>
					<input type="text" name="semester" placeholder="" required><br>
				</p>    

				<p class="labels">
					<label>No Telefon</label>
					<input type="text" name="notel" placeholder="" required><br>
				</p> 

				<p class="labels">
					<label>Kelas Yang Dipegang</label>
					<input type="text" name="fkelas" placeholder="" required><br>
				</p> 
		
                <p class="labels">
					 <label>Nama Pengguna</label>
					<input type="text" name="uname" placeholder="" value="" required><br>
         </p>
         
          <p class="highlight">*Sekurang-kurangnya 8 aksara merangkumi gabungan huruf besar, huruf kecil dan angka</p>

				<p class="labels">
					<label>Katalaluan</label>
					<input type="password" name="password" placeholder="" required><br>
				</p>       

				<p >
					<button type="submit" name="Send" value="Submit">Daftar</button>
				</p>
			</form>
</div>

<div class="checking">
  Adakah Anda Sudah Mendaftar ?<br> Klik Disini 
   <a class="btn" href="login.php">Ke Log Masuk</a>  
</div>

<div class="footer">
  <?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>