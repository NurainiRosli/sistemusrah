<?php

$conn = new mysqli("localhost","root", "", "sistemusrah");

              //  (nama server, folder, password, nama database)
			

if ($conn->connect_error){
	die("Connection Failed : ".$conn->connect_error);
}
else echo "";


?>