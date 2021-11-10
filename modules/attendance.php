<?php 
	 // import setting database connection
	include "conn/connect.php";
	$updateFlag = 0;
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Take Attendance</h1>  
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<form action="attendance.php" method="get" class="form-inline" id="subjectForm" data-toggle="validator">
				<div class="form-group">
					<label for="select" class="control-label">Subject:</label>
					<?php
											
						$query_subject = "SELECT class.nameclass, class.idclass from class 
INNER JOIN fasi_class WHERE fasi_class.idclass = class.idclass AND fasi_class.idfasi = {$_SESSION['idfasi']}  ORDER BY class.nameclass";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						echo "<select name='class' class='form-control' required='required'>";
						for($i = 0; $i<count($rsub); $i++)
						{
							if ($_GET['class'] == $rsub[$i]['idclass']) {
								echo"<option value='". $rsub[$i]['idclass']."' selected='selected'>".$rsub[$i]['nameclass']."</option>";
							}
							else {
								echo"<option value='". $rsub[$i]['idclass']."'>".$rsub[$i]['nameclass']."</option>";
							}
						}
						echo"</select>";
					?>									
				</div>

				<div class="form-group" data-provide="datepicker">
					<label for="select" class="control-label">Date:</label>
					<input type="date" class="form-control" name="date" value="<?php print isset($_GET['date']) ? $_GET['date'] : ''; ?>" required>
				</div>

				<input type="submit" class="btn btn-info" name="sbt_stn" value="Load Student">
			</form>
				


			<?php
				if(isset($_GET['date']) && isset($_GET['class'])) :
			?>
			
			<?php 
				$todayTime = time();
				$submittedDate = strtotime($_GET['date']);
				if ($submittedDate <= $todayTime) :
			?>
			<form action="attendance.php" method="post">
			
			<div class="margin-top-bottom-medium">
				<input type="submit" class="btn btn-primary btn-block" name="sbt_top" value="Save Attendance">
			</div>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Roll No</th>
						<th>Name</th>
						<th><input type="checkbox" class="chk-head" /> isPresent</th>
					</tr>
				</thead>

				<?php
					 $dat = $_GET['date'];
					 $ddate = strtotime($dat);
					 $sub=$_GET['class'];
					$que= "SELECT idstudent, idattendance, ispresent  FROM attendance  WHERE date  =$ddate
					AND idclass=$sub ORDER BY idstudent";
					$ret=$conn->query($que);
					$attData=$ret->fetchAll(PDO::FETCH_ASSOC);
					
					if(count($attData))
					{
						$updateFlag=1;
					}
					else{
						$updateFlag=0;

					}

					$qu = "SELECT student.idstudent, student.namepelajar, student.nomatrik from student INNER JOIN student_class WHERE student.idstudent = student_class.idstudent AND student_class.idclass  = {$_GET['class']}  ORDER BY student.idstudent";
					$stu=$conn->query($qu);
					$rstu=$stu->fetchAll(PDO::FETCH_ASSOC);

					
					echo"<tbody>";
					for($i = 0; $i<count($rstu); $i++)
					{
						echo"<tr>";

						if($updateFlag) {
							echo"<td>".$rstu[$i]['nomatrik']."<input type='hidden' name='st_sid[]' value='" . $rstu[$i]['idstudent'] . "'>" ."<input type='hidden' name='att_id[]' value='" . $attData[$i]['idattendance'] . "'>".  "</td>";
							echo"<td>".$rstu[$i]['namepelajar']."</td>";

							
								if(($rstu[$i]['idstudent'] ==  $attData[$i]['idstudent']) && ($attData[$i]['ispresent']))
								{

									echo "<td><input class='chk-present' checked type='checkbox' name='chbox[]' value='" . $rstu[$i]['idstudent'] . "'></td>";
								}
								else
								{
									echo "<td><input class='chk-present' type='checkbox' name='chbox[]' value='" . $rstu[$i]['idstudent'] . "'></td>";
								}
							}
							else {
								echo"<td>".$rstu[$i]['nomatrik']."<input type='hidden' name='st_sid[]' value='" . $rstu[$i]['idstudent'] . "'></td>";
								echo"<td>".$rstu[$i]['namepelajar']."</td>";
								echo"<td><input class='chk-present' type='checkbox' name='chbox[]' value='" . $rstu[$i]['idstudent'] . "'></td>";	
							}
							
							
						echo"</tr>";
					}
					echo"</tbody>";
				
				?>
			</table> 

			<?php if($updateFlag) : ?>
				<input type="hidden" name="updateData" value="1">
			<?php else: ?>
				<input type="hidden" name="updateData" value="0">
			<?php endif; ?>

			<input type="hidden" name="date" value="<?php print isset($_GET['date']) ? $_GET['date'] : ''; ?>">
			<input type="hidden" name="class" value="<?php print isset($_GET['class']) ? $_GET['class'] : ''; ?>">
			<input type="submit" class="btn btn-primary btn-block" name="sbt_top" value="Save Attendance">
			
			</form>
			
			<?php
				else :
			?>
			
			<p>&nbsp;</p>
			<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Sorry!</strong> Attendance cannot be recorded for future dates!.
			</div>	
			
			<?php
				endif;
			?>
			
			<?php endif;?>
			
			<?php

				if (isset($_POST['sbt_top'])) {
					if(isset($_POST['updateData']) && ($_POST['updateData'] == 1) ) {
							
						// prepare sql and bind parameters
					
							$id = $_POST['class'];
							$uid = $_SESSION['idfasi'];
							$p = 0;
							$st_sid =  $_POST['st_sid'];
							$attt_aid =  $_POST['att_id'];
							$ispresent = array();
							if (isset($_POST['chbox'])) {
								$ispresent =  $_POST['chbox'];	
							}
							
							for($j = 0; $j < count($st_sid); $j++)
							{
									//echo "hii";
								// UPDATE `attendance` SET `ispresent` = '1' WHERE `attendance`.`idattendance` = 79;

									$stmtInsert = $conn->prepare("UPDATE attendance SET ispresent = :isMarked WHERE idattendance = :idattendance"); 
														
									if (count($ispresent)) {
										$p = (in_array($st_sid[$j], $ispresent)) ? 1 : 0;	
									}
									
									$stmtInsert->bindParam(':isMarked', $p);
									$stmtInsert->bindParam(':idattendance', $attt_aid[$j]); 
									$stmtInsert->execute();
								//echo "data upadted";
							}		
						echo '<p>&nbsp;</p><div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> Attendance Recorded Successfully!.
              </div>';	

					}
					else {
						
						// prepare sql and bind parameters
							$date = $_POST['date'];
						$tstamp = strtotime($date);
							$id = $_POST['class'];
							$uid = $_SESSION['idfasi'];
							$p = 0;
							$st_sid =  $_POST['st_sid'];
							$ispresent = array();
							if (isset($_POST['chbox'])) {
								$ispresent =  $_POST['chbox'];	
							}
							
							for($j = 0; $j < count($st_sid); $j++)
							{
									//echo "hii";
									$stmtInsert = $conn->prepare("INSERT INTO attendance (idstudent, date, ispresent, idfasi, idclass) 
								VALUES (:idstudent, :date, :ispresent, :idfasi, :idclass)");
									
									if (count($ispresent)) {
										$p = (in_array($st_sid[$j], $ispresent)) ? 1 : 0;	
									}
									

									$stmtInsert->bindParam(':idstudent', $st_sid[$j]);
									$stmtInsert->bindParam(':date', $tstamp);
									$stmtInsert->bindParam(':ispresent', $p);
									$stmtInsert->bindParam(':idfasi', $uid);
									$stmtInsert->bindParam(':idclass', $id); 
									$stmtInsert->execute();
							//	echo "data upadted".$j;
						}
						echo '<p>&nbsp;</p><div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> Attendance Recorded Successfully!.
              </div>';	
					}
				}			
			?>
		</div>
	</div>
</div>

<script>
	$('#subjectForm').validator();	
</script>