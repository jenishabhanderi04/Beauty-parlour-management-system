<?php
  
$servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "parlour";

                        $con= mysqli_connect($servername,$username,$password,$database);

                        if (!$con) 
                        {
                            echo "not connected";
                        }

					   else
					   {
 							echo "connected";
                            if (isset($_GET['did'])) {
                                
                            
 							$id = $_GET['did'];
 							$sql = "DELETE FROM service WHERE id = '$id'";
 							mysqli_query($con,$sql);
 							header('location:manageservice.php');
                        }
					   }
?>