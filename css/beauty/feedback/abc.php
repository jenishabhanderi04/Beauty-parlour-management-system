<?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db ="feedback";
                    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password,$db);
                    
                    // Check connection
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    else{
                      echo "Connected successfully";
                       $email=$_POST['email'];
                       $comment = $_POST['comment'];
                    $sql = "INSERT INTO `feedback`(`email`, `comment`) VALUES ('$email','$comment')";

                    if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                    } 
                    else {
                             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                    //mysqli_close($conn);        





                ?>