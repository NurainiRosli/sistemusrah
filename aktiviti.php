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

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  align-content: center;
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

.operating-hours {
  
  text-align: center;
  align-content: center;
  border-radius: 5px;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.operating-hours h3{
  text-align: center;
  text-transform: uppercase;
  color: white;

}
.operating-hours table, th, td{
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
.operating-hours th{
  text-align: center;
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

tajuk{
	background-color: #008080;
	
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
  
  <div class="main">
		
        <h2>TAJUK MINGGUAN</h2> <hr>
        <div class="operating-hours">
        
        
        <table>
    <tr>
    <div class="tajuk">
    <center>
      <th>MINGGU</th>
      <th>HARI</th>
      <th>TARIKH</th>
      <th>MASA </th>
      <th>TAJUK </th>
      </div>
    </tr>
    <tr>
      <td>1</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td>Sesi Taaruf</td>
    </tr>
    <tr>
      <td>2</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>AKIDAH</b> : Lafaz syahadah dan Tadarus al-Quran/ :  Tasmik lafaz syahadah (Pembelajaran )<br>
		<b>Praktikal</b>: Hafazan lafaz syahadah dan kepentingannya</td>
    </tr>
    <tr>
      <td>3</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>AKIDAH</b> : Surah al-fatihah  dan Tadarus al-Quran/: Tasmik Surah al-fatihah  (Pembelajaran )<br>
		<b>Praktikal</b> : Hafazan surah al-fatihah dan pengertiannya
	</td>
    </tr>
    <tr>
      <td>4</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Bacaan dalam solat dan Tadarus al-Quran/: Tasmik bacaan dalam solat (Pembelajaran)<br> <b>Praktikal</b> : wuduk (doa selepas wuduk) / tayammum
      	 
	</td>
    </tr>
    <tr>
      <td>5</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Perbincangan Bersuci daripada hadas <br> <b>Perbincangan dan soal jawab</b> : Mandi wajib</td>
    </tr>
    <tr>
      <td>6</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Solat jamak dan Qasar dan Tadarus al-Quran /: Tasmik Surah Al-Fatihah (Pembelajaran) <br> <b>Praktikal</b> : Lafaz niat solat / Solat Jamak Qasar</td>
    </tr>
    <tr>
      <td>7</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>Praktikal</b> : Kedudukan Sof Solat Berjemaah (Masbuk dan muwafik)</td>
    </tr>
    <tr>
      <td>8</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Solat ketika uzur dan Tadarus al-Quran /: Tasmik Surah Al-Fatihah (Pembelajaran) <br> <b>Praktikal</b> : Solat ketika sakit dan solat dalam kenderaan</td>
    </tr>
    <tr>
      <td>9</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Jenis-jenis Najis serta cara penyuciannya dan Tadarus al-Quran /: Tasmik Surah Al-Fatihah (Pembelajaran) </td>
    </tr>
    <tr>
      <td>10</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>Praktikal</b> : Menyucikan Najis Mughlazah, Mukharafah dan Mutawasitah</td>
    </tr>
    <tr>
      <td>11</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>SYARIAT</b> : Kewajipan Menutup Aurat Dalam Islam dan Tadarus al-Quran /: Tasmik Surat Al-Fatihah (Pembelajaran) <br> <b>Praktikal</b> : Etika berpakaian menurut Syariat (Lelaki & Perempuan)</td>
    </tr>
    <tr>
      <td>12</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>AKHLAK</b> : Adab dengan Allah dan Rasul <br> <b>Praktikal</b> : Tunjukcara beradab dengan Allah ketika solat</td>
    </tr>
    <tr>
      <td>13</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>AKHLAK</b> : Adab dengan Manusia (Ibubapa/guru/rakan) <br> <b>Praktikal</b> : Simulasi adab dengan (ibubapa/guru/rakan)</td>
    </tr>
    <tr>
      <td>14</td>
      <td>RABU</td>
      <td>27/09/2021</td>
      <td> 08:00Pm - 9:300pm </td>
      <td><b>Solat Hajat dan Bacaan Yasin Perdana</b></td>
    </tr>
    <tr>
      <td>15</td>
      <td></td>
      <td></td>
      <td></td>
      <td>Penangguhan Program Sesi</td>
    </tr>
    </table>
			
		</div>
        	</center>  
            <br>
    
<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>