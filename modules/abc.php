<?php

     // import setting database connection
	include "conn/connect.php";
     if(isset($_POST['submit']))
     {
         $nm=$_POST['name'];
       
        $pass=$_POST['pass'];
        if( isset($nm) && isset($pass))
      {
        if(!empty($nm) && !empty($pass) )
        {


          
    
          $stmt = $conn->prepare("SELECT idfasi, username FROM fasi WHERE username= ? AND password=?"); 
            $stmt->execute(array($nm,$pass));

             
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
            $uid = $result[0]['idfasi'];
						$uname = $result[0]['username'];
						session_start();
            // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
            
                $_SESSION['islogin'] ="1";
								$_SESSION['idfasi'] = $uid;
								$_SESSION['username'] = $uname;
            
							header("location:../fasipage.php?page=dashboard");
            }
            else
            {
               header("location:../fasipage.php?invalid=y");
            }
            
            
          }else
          {
             header("location:../fasipage.php?invalid=y");
          }
        }
      }

?>