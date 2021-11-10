<?php 

	 // import setting database connection
	include "conn/connect.php";
	
		$uid = $_SESSION['idfasi'];
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Your Class and Students</h1>  
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Class</h3>
				</div>
				<div class="panel-body">
					
					<?php
						$output = '';
		
						$query_subject = "SELECT class.nameclass, class.idclass from class INNER JOIN fasi_class WHERE fasi_class.idclass = class.idclass AND fasi_class.idfasi = {$uid}  ORDER BY class.nameclass";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						
						$noOfSubject = count($rsub);
						
						for($i = 0; $i<$noOfSubject; $i++) {
							$output .= $rsub[$i]['nameclass'];
							$output .= ',&nbsp;';
						}
						print $output;
					?>
					
				</div>
			</div>
			
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Students</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Roll No</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$outputData = '';
							$studentQuery = "SELECT DISTINCT namepelajar, nomatrik FROM `fasi_class` INNER JOIN student_class INNER JOIN student WHERE fasi_class.idclass = student_class.idclass AND student_class.idstudent = student.idstudent AND fasi_class.idfasi = $uid";
							
							$stmtStudent = $conn->prepare($studentQuery); 
							$stmtStudent->execute();
							$resultStudent = $stmtStudent->fetchAll(PDO::FETCH_ASSOC); 
							
							for($i = 0; $i<count($resultStudent); $i++) {
								$outputData .= "<tr>";
								$outputData .= "<td>" . $resultStudent[$i]['nomatrik'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['namepelajar'] . "</td>";
								$outputData .= "</tr>";
							}
							print $outputData;
							
						?>
						</tbody>
					</table>
				</div>
			</div>
			
						
		</div>
	</div>
</div>