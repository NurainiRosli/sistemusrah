<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Pelajar</title>
</head>
<style>

body {
   background-color: #F5F5F5;
  color: #2C3539;
  font-family:Arial, sans-serif;
  line-height: 1.8;
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

.jadual h3{
  text-align: center;
  text-transform: uppercase;
  color: white;

}
.jadual table, th, td{
  align-content: center;
  border: 1px solid #008080;
  border-collapse: collapse;
  padding: 10px;
  padding-left: auto;
  padding-right: auto;
  background-color: #EBF4FA;
  border-radius: 20px;
  text-align: left;
}
.jadual th{
  text-align: center;
}

.daftar {
  background: #E5E4E2;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  color: #008080;
  padding-bottom: 90px;
}

.daftar h3{
  text-transform: uppercase;
}

.daftar form label {
  display: block;
}

.daftar form p {
  margin: 0;
}


.daftar form input{
  width: 100%;
  padding: 1em;
  border: solid 1px #CFECEC;
  border-radius: 14px;
  background-color: #F0FFFF;
}

.daftar form button {
  background: #008080;
  border: 0;
  color: white;
  text-transform: uppercase;
  font-size: 17px;
  font-weight: bold;
  margin-top: 20px;
  width: 50%;
  padding: 10px;
  border-radius: 7px;
  float: right;
}


.daftar button:focus {
  background-color: #3952a3;
  color: #ffffff;
  transition: background-color 1s ease-out;
}

.daftar button:hover{
  background-color: #F5F5F5;
  color: #008080;
  transition: background-color 1s ease-out;
}

[type="date"] {
  background:url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  98% 50% ;
  background-repeat: no-repeat ;
}

[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
.highlight {
  color: red;
  font-weight: bold;
}


@media only screen and (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
  }

  .wrapper > * {
    padding: 20px;
  }

  .jadual {
    border-radius: 4px 0 0 4px;
  }

  .daftar {
    border-radius: 0 4px 4px 0;
  }

  .jadual h3{
    text-align: left;
  }
  .container{
    text-align:left;
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

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

form{
	width:80%;
	margin-right:50%;
	}
</style>
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
	

<div class="container">
	<div class="wrapper">
		<div class="jadual">
			<h3>JADUAL BULANAN</h3>

<table>
    <tr>
      <th>HARI</th>
      <th>TARIKH</th>
      <th>MASA </th>
      <th>TAJUK </th>
    </tr>
    <tr>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td>SOLAT </td>
    </tr>
    <tr>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td>ZAKAT </td>
    </tr>
    <tr>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td>PUASA </td>
    </tr>
    <tr>
      <td>RABU</td>
       <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td>PUASA SUNAT </td>
    </tr>
    </table>
			
		</div>

		<div class="daftar">
			<h3>PENDAFTARAN PELAJAR</h3>
      <p class="highlight">*Sila Buat Pendaftaran Anda Untuk Kemasukan Program Usrah</p>

			<form id="" action="studentreg2.php" method="POST">

				<p>
					<label>Nama Penuh</label>
					<input type="text" name="fname" id="name" required>
				</p>

				

				<p>
					<label>Nombor Pendaftaran</label>
					<input type="text" name="fnopendaftaran" id="nopendaftaran" required>
				</p>

			

				<p class="labels">
					<label>Jabatan</label>
                    
                  <select name="fjabatan"  required>
                  <option value=""><b>---OPTION---</b></option>
         <option value="Jabatan Teknologi Maklumat Dan Komunikasi">Jabatan Teknologi Maklumat Dan Komunikasi</option>
    <option value="Jabatan Perdagangan">Jabatan Perdagangan</option>
    <option value="Jabatan Kejuruteraan Elektrik">Jabatan Kejuruteraan Elektrik</option>
    <option value="Jabatan Rekabentuk Dan Komunikasi Visual">Jabatan Rekabentuk Dan Komunikasi Visual</option>
    <option value="Jabatan Pelancongan Dan Hospitaliti">Jabatan Pelancongan Dan Hospitaliti</option>
    </select>  
                 
				</p>
                
                
                <p class="labels">
					<label>Kelas</label>
					<input type="text" name="fkelas" id="kelas" required>
				</p>
                
                <p class="labels">
					<label>Nombor Telefon</label>
					<input type="text" name="fphone" id="phone" required>
				</p>
				
                <p class="labels">
					<label>Nama Fasilitator</label>
					<input type="text" name="fFasi" id="umur" required>
				</p>
				
				<p class="full">
					<button type="submit" name="submit" value="Submit">Daftar</button>
				</p>

			</form>
		</div>
	</div>
</div>

<div class="checking">
  Adakah Anda Sudah Mendaftar ?<br> Klik Disini 
   <a class="btn" href="view.php">Menyemak Pendaftaran</a>  
</div>

<div class="footer">
  <?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>



 
</body>
</html>