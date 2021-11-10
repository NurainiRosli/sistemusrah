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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
		<style>
			* {box-sizing: border-box;}
				body {font-family: Verdana, sans-serif;}
				.mySlides {display: none;}
				img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {
  			max-width: 1000px;
  			position: relative;
  			margin: auto;
			}

			/* Caption text */
			.text {
  			color: #f2f2f2;
  			font-size: 15px;
  			padding: 8px 12px;
  			position: absolute;
  			bottom: 8px;
  			width: 100%;
  			text-align: center;
			}

			/* Number text (1/3 etc) */
			.numbertext {
  			color: #f2f2f2;
  			font-size: 12px;
 			padding: 8px 12px;
  			position: absolute;
  			top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
 			 height: 15px;
  			width: 15px;
  			margin: 0 2px;
  			background-color: #bbb;
  			border-radius: 50%;
  			display: inline-block;
  			transition: background-color 0.6s ease;
			}

			.active {
  			background-color: #717171;
			}

			/* Fading animation */
			.fade {
  			-webkit-animation-name: fade;
  			-webkit-animation-duration: 1.5s;
  			animation-name: fade;
  			animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

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
			
			/* Sticky navbar - toggles between relative and fixed, depending on the scroll position.
			 It is positioned relative until a given offset position is met in the 	viewport - then 
			 it "sticks" in place (like position:fixed). The sticky value is not supported in IE or 
			 Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
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
			.row {  
			  display: -ms-flexbox; /* IE10 */
			  display: flex;
			  -ms-flex-wrap: wrap; /* IE10 */
			  flex-wrap: wrap;
			}
			
			/* Create two unequal columns that sits next to each other */
			/* Sidebar/left column */
						
			/* Main column */
			.main {   
			  -ms-flex: 70%; /* IE10 */
			  flex: 70%;
			  background-color: white;
			  padding: 40px;
			}
			
			
			/* Footer */
			.footer {
			  padding: 20px;
			  text-align: center;
			  background: #ddd;
			}
			
			</style>
    </head>
<body>

    <div class="header">
      <h1>PROGRAM USRAH</h1>
      <p>POLITEKNIK TUANKU SYED SIRAJUDDIN</p>
    </div>
    
    <div class="navbar">
      <a href="index.php" >Laman Utama</a>
      <a href="aktiviti.php">Aktiviti</a>
      <a href="#"></a>
      <a href="#">Tentang Kami</a>
      <a href="login.php" class="right">Log Masuk</a>
    </div>
    
      <div class="main">
        <h2>Tentang Kami</h2>
        <h5>Title description, oct 19, 2021</h5>
        
        <div class="slideshow-container">

		<div class="mySlides fade">
  		<div class="numbertext">1 / 3</div>
  		<img src="images/U1.jpg" style="width:100%">
  	<div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/U2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/U3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
        
        <p>OBJEKTIF PROGRAM</p>
        <ul type="square">
						
			<li>Membina generasi pelajar Islam agar mengenali Islam sebagai ad-Deen dan
				menghayatinya dalam kehidupan sebagai seorang muslim sejati</li>
			<li>Membina generasi pelajar bukan Islam agar dapat menerapkan nilai murni  
				dalam kehidupan sebagai seorang manusia</li>
			<li>Melahirkan para pelajar yang bersahsiah mulia, beretika yang seimbang dengan kecermelangan akademik</li>
            <li>Mengukuhkan perasaan bersaudara dalam kalangan pelajar bagi mengeratkan ikatan 
            ukhuwah kemanusiaan dan sentiasa bekerjasama dalam setiap perkara</li>
            <li>Melahirkan pelajar yang mempunyai sifat kepimpinan dan bertanggungjawab </li>
		</ul>
        <br>
        
        <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
        
    
    <div class="footer">
       <?php
    
        echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";
    
       ?>
    </div>
</body>
</html>
