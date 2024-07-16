<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        .error{
            color: red;
            margin-top: 0px;
            padding-top: 0px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit service Form</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="addservice.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php
         $errMsg = " ";
         $costErr = " "; 
         $name = " ";
         $cost = " ";

         function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
}

  
      
     $name="";
     $cost="";
     $errMsg="";
     $costErr="";

          if (isset($_POST['Add'])) {
              
          $name = $_POST['name'];
          $cost = $_POST['cost'];
           
         if (empty ($_POST["name"])) 
         {  
             $errMsg = "Error! You didn't enter the sevice Name.";  
             
                
        }
       else
        {  
             $name = test_input($_POST["name"]);   
                 if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                 {  
                    $errMsg = "Only alphabets and white space are allowed";  
                 }  
        }  

// cost

           if (empty($_POST["cost"]))
            {  
                 $costErr = "cost is required";  
                 
            }
          else 
           {  
                 $cost = test_input($_POST["cost"]);  
                // check if mobile no is well-formed  
                    if (!preg_match ("/^[0-9]*$/", $cost) )
                     {  
                        $costErr = "Only numeric value is allowed.";  
                         
                    }  
                
            }  
        }

        ?>

        <?php
                       $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "parlour";

                        $con= mysqli_connect($servername,$username,$password,$database);

                        if (!$con) {
                            echo "not connected";
                        }

else{
 echo "connected";
   }

   if(isset($_GET['uid']))
   {
       $id = $_GET['uid'];
       $sql = "select * from `service` where id=$id";
       $result = mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($result);
                $id = $row['id'];
                $name = $row['servicename'];
                $cost = $row['cost'];





                if (isset($_POST['Add']))
                 {
                    $name = $_POST['name'];
                    $cost = $_POST['cost'];
                    $sql = "update `service` set id ='$id',servicename = '$name',cost = '$cost' where id = '$id'";
                    $result = mysqli_query($con,$sql);
                             if($result)
                                   {
                                    echo "update";
                                    header('location:manageservice.php');
                                   }
                                  else
                                   {
                                      die(mysql_errno($con));
                                   }

                }
    }
    else
    {
        echo "id not set";
    }

// if (isset($_POST['Add'])) {
//         $email = $_POST['name'];
//         $comment = $_POST['cost'];

//         $sql = "INSERT INTO `service` (`servicename`, `cost`) VALUES ( '$name', '$cost');";
//                             $result = mysqli_query($con,$sql);

//                               if($result)
//                                {
//                                 echo "insert";
//                                }
//                               else
//                                {
//                                   die(mysql_errno($con));
//                                }
        
//        }
//   }
?>


       

    <!-- header start -->
     <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="logo (1).svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="#" class="nav-link active">home</a></li>
                    <li><a href="#about" class="nav-link">about</a></li>
                    <li><a href="#services" class="nav-link">services</a></li>
                    <li><a href="#package" class="nav-link">package</a></li>
                    <li><a href="#gallery" class="nav-link">gallery</a></li>
                    <li><a href="#product" class="nav-link">products</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                </ul>
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- login form -->

            <div class="M">
                <div class="F">
                     <section class="gallery-slider">
        <div class="slide">
         </div>
    </section>
                   <!--  <img src="img/b1.jpg" class="I"> -->
                </div>
                 <div class="L">
                     <div class="l-form">
            <form  class="form" method="post">
                <h1 class="form__title">Edit Service</h1>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="name" value=<?php echo $name;?>>
                   
                    <label for="" class="form__label">Service Name</label>
                </div>
                <span class="error"><?php echo $errMsg;?> </span>
                    
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="cost" value=<?php echo $cost;?>>
                    <label for="" class="form__label">Cost</label>
                </div>
                 <span class="error"><?php echo $costErr;?> </span>

                <input type="submit" class="form__button" value="Upadte" name="Add">
            </form>
        </div>
                    
                </div>

            </div>


<!-- footer start -->
<footer class="footer" id="contact">
        <div class="footer-list">
            <div class="footer-data">
                <h1><a href=""><img src="logo (1).svg"></a></h1>
                <div class="footer-data-social">  
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-data">
                <h2>address</h2>
                <p>Alharm - St 26<br> Giza - Egypt</p>
            </div>
            <div class="footer-data">
                <h2>We Opened</h2>
                <p>Monday To Friday <br> From 09:00 To 18:00</p>
            </div>
            <div class="footer-data">
                <h2>Contact</h2>
                <p>(20) 1111-222-333</p>
                <p>(20) 4444-555-666</p>
            </div>
        </div>
        <div class="copy">
            <p>&copy; All Rights Reserved</p>
            <span>Created by 🤎 Web Trend</span>
        </div>
    </footer>
<!-- footer end -->
    <!-- Javascript File -->
    <script src="addservice.js"></script>
</body>
</html>