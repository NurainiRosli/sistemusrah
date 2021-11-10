<?php 
 // import setting database connection
	include "conn/connect.php";

	
?>

<?php
	//echo"Take a view here";
	$suid = $_SESSION['idfasi'];
	//echo $suid;
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Reports</h1>  
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-lg-12">
			<form action="" method="GET" class="form-inline" data-toggle="validator">
				<div class="form-group">
					<label for="select" class="control-label">Class:</label>
					<?php
						$query_subject = "SELECT class.nameclass, class.idclass from class 
					INNER JOIN fasi_class WHERE fasi_class.idclass = class.idclass AND fasi_class.idfasi = $suid  ORDER BY class.nameclass";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						//print_r($rsub);
						$subnm=$rsub[0]['nameclass'];
						$subid=$rsub[0]['idclass'];
						//echo "<h3>".$subnm." ".$subid."</h3>";
					
						echo "<select name='subject' class='form-control' required='required'>";
						for($i = 0; $i<count($rsub); $i++)
						{
							if ($_GET['subject'] == $rsub[$i]['idclass']) {
								echo"<option value='". $rsub[$i]['idclass']."' selected='selected'>".$rsub[$i]['nameclass']."</option>";
							}
							else {
								echo"<option value='". $rsub[$i]['idclass']."'>".$rsub[$i]['nameclass']."</option>";
							}
						}
						echo "</select><br>";
					?>
				</div>
				
				<div class="form-group" data-provide="datepicker">
					<label for="select" class="control-label">From:</label>
					<input type="date" name="sdate" class="form-control" value="<?php print isset($_GET['sdate']) ? $_GET['sdate'] : ''; ?>" required>
				</div>
				
				<div class="form-group" data-provide="datepicker">
					<label for="select" class="control-label">To:</label>
					<input type="date" name="edate" class="form-control" value="<?php print isset($_GET['edate']) ? $_GET['edate'] : ''; ?>" required>
				</div>
				
				<input type="hidden" name="page" value="reports">
				<input type="submit" class="btn btn-info" name="submit" value="Load Student">
			</form>
		</div>	
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<p>&nbsp;</p>
			<div class="report-data">
			
			
			<?php

				
				$t=time();
			

				if(isset($_GET['submit']) && !empty($_GET['sdate']) && !empty($_GET['edate']) && ($_GET['edate'] > $_GET['sdate']) && ($_GET['sdate']<$t) && ($_GET['edate']<$t))
				{
					$sdat = $_GET['sdate'];
					$edat= $_GET['edate'];

					$selsub=$_GET['subject'];
					
					$sdate = strtotime($sdat);
					
					$edate = strtotime($edat);
					
				
				if(($sdate<$t) && ($edate<=$t) && ($edate >= $sdate))
				{
					// echo "sub id".$selsub."<br>";
					// echo "user id".$suid."<br>";
					// echo "starting date:".$sdat." "."ending date:".$edat."<br>";
					// $query_student="SELECT * from student ";
					$query_student = "SELECT student.idstudent, student.namepelajar, student.nomatrik from student INNER JOIN student_class WHERE student.idstudent = student_class.idstudent AND student_class.idclass  = {$selsub}  ORDER BY student.idstudent";
					$stu=$conn->query($query_student);
					$rstu=$stu->fetchAll(PDO::FETCH_ASSOC);
				//	print_r($rstu);
				//	echo "<br><br>--------------<br>";
					echo "<table class='table table-striped table-hover reports-table'>";
					echo "<thead>";
					echo "<tr>";
					echo "<th>Roll No</th>";
					echo "<th>Name</th>";
					for($k=$sdate;$k<=$edate;$k=$k+86400)
					{
						$thisDate = date( 'd-m-Y', $k );
						$weekday= date("l", $k );
						$normalized_weekday = strtolower($weekday);
						if(($normalized_weekday!="saturday") && ($normalized_weekday!="sunday"))
						{
							echo "<th>".$thisDate."</th>";
						}
					}
					echo "<th>Present/Total</th>";
					echo "<th>Precentage</th>";;
					echo "</tr>";
					echo "</thead>";
					echo "</tbody>";
					for($i=0;$i<count($rstu);$i++)
					{
						//echo $i."--"."<br>";
						$present=0;
						$absent=0;
						$totlec=0;
						$perc=0;
						echo"<tr><td><h6>".$rstu[$i]['nomatrik']."</h6></td>";
						echo "<td><h5>".$rstu[$i]['namepelajar']."</h5></td>";
						$dsid=$rstu[$i]['idstudent'];
						
						for($j=$sdate;$j<=$edate;$j=$j+86400)
						{
							 //$thisDate = date( 'Y-m-d', $j );
							 //echo "$j"."=".$thisDate."<br>";
				
							$weekday= date("l", $j );
							$currentDate = date('Y-m-d', $j);
							$normalized_weekday = strtolower($weekday);
							 if(($normalized_weekday!="saturday") && ($normalized_weekday!="sunday"))
							 {


								 $sql = "SELECT idstudent ,ispresent FROM attendance WHERE idstudent=$dsid AND
								 idclass=$selsub AND date=$j AND $suid=idfasi " ;
								$stmt = $conn->prepare($sql); 
								$stmt->execute();
								$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
								if(!empty($result)){
								//print_r($result);
									$totlec++;
									if($result[0]['ispresent']==1)
									{
										$present++;
										echo"<td><span class='text-success'>Present</span></td>";
									}
									else
									{
										echo"<td><span class='text-danger'>Absent</span></td>";
										$absent++;
									}
								}else
								{
									echo "<td><a href='attendance.php?class=" . $selsub . "&date=" . $currentDate . "'>TakeAttendance</a></td>";
								}
							}
						}
						if($totlec!=0)
							$perc=round((($present*100)/$totlec), 2);
						else
							$perc=0;
						echo"<td><strong>".$present."</strong>/".$totlec."</td>";
						echo"<td>".$perc."&nbsp;%</td>";
						echo"</tr>";
						
					}		
					echo "</tbody>";
					echo "</table>";
				}else
				{
					print '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Sorry!</strong>Please enter correct date range.
              </div>';
				}

				}else{
					 // echo"<h3>Please enter detail</h3>";
				}



			?>
			</div>
		</div>
	</div>
</div>