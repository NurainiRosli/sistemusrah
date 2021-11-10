<?php  
	// import setting database connection
	include "conn/connect.php";
	include "conn/session.php";
	$kelas = $_POST['id'];
	 $query ="SELECT * FROM student where kelas='{$kelas}'";  
	 $result = mysqli_query($dbconnect, $query); 

	while($rows = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $rows['idstudent'];?></td>
			<td><?php echo $rows['namepelajar'];?></td>
			<td><input type="checkbox" name="kehadiran[]" value="<?php echo $rows['nomatrik'];?>"></td>
		</tr>

<?php
	}
 ?>