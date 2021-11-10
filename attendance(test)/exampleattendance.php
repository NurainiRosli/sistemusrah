<?php

include '../assets/layouts/header.php';

check_verified();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>ICOMPEX - SA</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>SA Icompex</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['first_name'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php
            include '../menu/SAmenu.php';
           ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
             
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Senarai Pengguna Sistem<small> Yang Verify NULL</small></h3>
                 <small class="text-success font-weight-bold">
                        <?php
                            if (isset($_SESSION['STATUS']['updatestatus']))
                                echo $_SESSION['STATUS']['updatestatus'];

                        ?>
                    </small>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>


              

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                   <?php 

                   

               if($stmt = $conn -> prepare("select count(*),id from participate_reg GROUP by uniq_id")) 
        {
    //$stmt -> bind_param("i", $usrID);
    $stmt -> execute();

    $stmt -> bind_result($count_exibit,$uniq_id);

    
    
    while ($stmt -> fetch())
    {
   
      //$result_count=$count_exibit;
      $result_uniqid = $uniq_id;
        }   
        //echo "<br>";  
    if($count_exibit==0)
            {
              echo "Maaf. Belum ada penyertaan yang dibuat. Harap maklum. Terima kasih";}
             else
            {
              echo "Senarai penyertaan yang telah didaftar :<br>";
              echo '          <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Bil</th>
                          <th>Username</th>
                           <th>Nama</th>
                          <th>Email</th>
                          <th>Level Pengguna</th>
                         
                          
        
                         
                         
              
                        </tr>
                      </thead>


                      <tbody>';
    
            $stmt3 = $conn->prepare("SELECT id,username,email,first_name
FROM
users where user_level=1 and verified_at is null");
            //$stmt3->bind_param("i", $usrID);
            $stmt3->execute();
            $result = $stmt3->get_result();
            $i=1;
            while($row = $result->fetch_assoc()) {
              //$ids = $row['id'];
            
              //$i++;
              
              $username= $row['username'];
              $email= $row['email'];
              $first_name= $row['first_name'];
              $id= $row['id'];
              echo "<tr>";
              echo "<td>".$i++."</td>";
              echo "<td>".$username."</td>";
              echo "<td>".$first_name. "</td>";
              echo "<td>".$email. "</td>";
              echo '<td>
              <form action=verify.inc.php method=post>
              <input type=hidden value='.$id.' name=id>
              <button name=verify class="btn btn-primary" type=submit>Verify User</button>
              </form>
              </td>';
              

              echo "</tr>";
            }

//$stmt->close();
            }
    $stmt -> close();
  
 }

                   ?>
                        </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              
            </div>
     
        <!--modal-->
        <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h2><strong><font color="red">Perician Borang Penyertaan</font></strong></h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <form action="include/update.1stlvl.inc.php" method="post">
            <div class="modal-body">
                <div class="fetched-data"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
          </form>
        </div>
    </div>
</div>

        <!-- end modal-->
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Icompex @ Seksyen Sistem USTM<a href="http://www.polimas.edu.my">POLIMAS</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
      $(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'fetch_record.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
    </script>

  </body>
</html>