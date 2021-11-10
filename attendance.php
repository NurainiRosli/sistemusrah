<body> 
		<div class="header">
			<br><br>
			<br><br>
			<h1><b>KELAB RAKAN TEKNOLOGI DIGITAL</b></h1>
			<p>Politeknik Sultan Idris Shah</p>
		</div>

		 
		  <div class="main">
           <div class="container" align="center">
               <div class="card">
			   	<div class="card-body" align="left">
					<a href="attendance_program.php" width="100px" class="btn btn-warning">Kembali</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Pilih Kelas:
					<select id="student" onChange="selectKelas()">
						<option value="">-</option>
					 <?php while( $rows = mysqli_fetch_array($result)){
						?>
						<option value="<?php echo $rows['kelas'];?>"><?php echo $rows['kelas'];?></option>
						<?php
						} 
						?>
					</select>
				   </div>
			   </div>
			   <div class="card">
			   <div class="card-body">
				    <form method="post" action="">
				   <table class="table table-striped table-bordered">
				    <thead>
						<th style="width: 300px">ID Matrik</th>
						<th style="width: 700px">Nama</th>
						<th style="width: 100px">Kehadiran</th>
					</thead>
					  
					   <tbody id="ans">
					   
					   </tbody>
				   </table>
					   <div class="form-group">
							<button name="save" class="btn btn-success">Simpan</button>
						</div>
					   </form>
				   </div>
			   </div>
			   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
           </div>
		  </div>
		  <br>
		  <br>
		  <br>
		  <div class="footer">
	<p>Copyright @2021 - KELAB RAKAN TEKNOLOGI DIGITAL - PSIS </p>
</div>
      </body>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
	function selectKelas(){
		var x = document.getElementById("student").value;
		
		$.ajax({
			url:"showkelas.php",
			method:"POST",
			data:{
				id : x
			},
			success:function(data){
				$("#ans").html(data);
			}
		})
	}