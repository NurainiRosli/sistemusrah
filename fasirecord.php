<!DOCTYPE html>
<?php

$user ='root';
$pass = '';
$db = 'sistemusrah';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

session_start();

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


 .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px; 


        }   
         
        input, button{   
            height: 34px;  
            margin-bottom: 20px; 
            border:1px solid #008080; 
        }   
        button{
          background-color: #008080;
        }
    .pagination {   
        display: inline-block;  

    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;  
        margin-bottom: 30px; 
    }   
    .pagination a.active {   
            background-color: #008080;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }  


    body{
  background-color: #f5f5f5;
  color: #2C3539;
  font-family:Arial, sans-serif;
  line-height: 1.8;
}

table{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  width: 90%;
  
}
.details td,th{
  text-align: center;
  padding: 8px;
}

.details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #008080;
  color: white;
}

a{
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.edit{
  background-color: #FBB117;
}
.edit a{
color: black;
font-weight: bold;
}

.edit:hover{
  background-color: #FF8040;
}
.delete{
  background-color: #8C001A;
}
.delete a{
  font-weight: bold;
}
.delete:hover{
  background-color: #F75D59;
}


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}


/* Footer */
.footer {
  padding: 20px;
  width: 100%;
  text-align: center;
  background: #ddd;
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
  <a href="php" >Laman Utama</a>
  <a href="studentrecord.php">Pelajar</a>
  <a href="fasirecord.php">Fasilitator</a>
  <a href=".php"></a>
  <a href="login.php" class="right">Log Keluar</a>
</div>
  
  <div class="main">
	
 <h1>Senarai Fasilitator</h1>
   
    <center> 
    <?php  
      
    // Import the file where we defined the connection to Database.     
        require_once "conn/connect.php";   
    
        $per_page_record = 20;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM fasilitator LIMIT $start_from, $per_page_record";    
        $rs_result = mysqli_query ($conn, $query); 

    ?>    
        <table class="details">                            
            <tr>   
              <th>Bil</th>    
              <th width="20%">Nama</th>  
			  <th>No Matrik</th> 	
			  <th>No Ic</th> 
			  <th>Jabatan</th> 
			  <th>Semester</th>
			  <th>No Telefon</th> 
			  <th>Kelas Yang Dipegang</th>   
              <th colspan="2">Actions</th>

            </tr>     
    <?php    
    $bil = 1; 
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
                

        $id = $row['idFasi'];
        $name = $row['fnama'];
		$fnomatrik = $row['fnoMatrik'];
		$noic = $row['noic'];
        $fjabatan = $row['fjabatan'];
		$semester = $row['semester'];
		$fnotel = $row['fnoTel'];
		$kelas = $row['fkelas']; 

        echo "<tr>";
        echo "<td>$bil. </td>";
        echo "<td>$name</td>";
		echo "<td>$fnomatrik</td>";
		echo "<td>$noic</td>";
		echo "<td>$fjabatan</td>";
		echo "<td>$semester</td>";
		echo "<td>$fnotel</td>";
        echo "<td>$kelas</td>";
        echo "<td class='edit'> <a href='fasiedit.php? siapa=$id'> Kemaskini</a></td>";
        echo "<td class='delete'> <a href='fasidelete.php? siapa=$id'> Padam </a></td>";
        echo "</tr>";
        $bil++;

?>    
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   
  
     <div class="pagination">   
      <?php  
        $query = "SELECT COUNT(*) FROM fasilitator";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='fasirecord.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='fasirecord.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='fasirecord.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='fasirecord.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     
     </div>    
    </div>   
  </div>  
</center>   
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'fasirecord.php?page='+page;   
    }   
  </script>  
    
<div class="footer">
<?php

echo "<p> Copyright &copy; " . date("Y") . " PTSS Program Usrah</p>";

?>
</div>

</body>
</html>