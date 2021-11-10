<?php

include "conn/connect.php";

$nama = $_POST['fname'];
$noMatrik = $_POST['fnopendaftaran'];
$umur = $_POST['fumur'];
$jabatan = $_POST['fjabatan'];
$kelas = $_POST['fkelas'];
$noTel = $_POST['fphone'];
$nFasi = $_POST['fFasi'];

/*
echo "Ini ada adalah $nama <br> Ini adalah $nomatrik <br>";
echo "$nokp $poli $jabatan $kelas"; 
*/

// coding masuk database
$sql = "INSERT INTO 
		student (namaPelajar, noMatrik, jabatan, kelas, noTel, namaFasi ) 
		VALUE ('$nama','$noMatrik','$jabatan','$kelas','$noTel','$nFasi ')";

if($conn->query($sql) === TRUE) {

?>

	<script>
		alert('Tahniah ,Pendaftaran Anda Telah Berjaya !!! ')
		window.location='studentreg.php'
	</script>


<?php

} else {
	echo "Error : ".$sql."<br>".$conn->error;
}

?>