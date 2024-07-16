<?php
 session_start();
$login=false;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="login.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<!-- validation start -->


<?php

         $emailerr = " ";
         $passerr = " "; 
         $email1= " ";
         $password1= " ";

         function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
}

         // $emailerr = " ";
         // $passerr = " "; 
         // $email1= " ";
         // $password1= " ";

           if(isset($_POST["signin"])) {
              
          // $email1 = $_POST['email1'];
          // $password1 = $_POST['password1'];
           
         if (empty ($_POST["email1"])) 
         {  
             $emailerr = "Error! You didn't enter the email.";  
                
        }
       else
        {  
             $email1 = test_input($_POST["email1"]);
                if (!filter_var($email1, FILTER_VALIDATE_EMAIL))
                 {
                    $emailerr = "Invalid email format";
                  }
 
        }  

// cost

           if (empty($_POST["password1"]))
            {  
                 $passerr = "password is required";  
                 
            }
          else 
           {  
                 $password1 = test_input($_POST["password1"]);  
                
            }  
        }


$servername = "localhost";
$username = "root";
$password = "";
$db = "parlour";

 $con = mysqli_connect($servername,$username,$password,$db);

 if($con)
 {
   // echo " connected";
    if (isset($_POST['signin'])) 
    {
      
    
    $email1 = $_POST['email1'];
    $password1=$_POST['password1'];
    // $code=$_POST['code'];
   
    $hash = password_hash($password1,PASSWORD_DEFAULT);

    $sql = "select rid,email,password,usertype,otp from registration";
    $result = mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {

      if ($row['usertype'] == "admin") 
      {
        if ($_POST['email1'] === $row['email'] &&  password_verify($password1, $row['password']) ) 
        {

            // $login=true;
            // session_start();
            // $_SESSION['loggedin']=true;
            header('location:dashindex.php');
            echo "admin";
        }
       else
       {
         echo "invalid";
       }

    }

    elseif( $row['usertype'] == "user")
    {
  
        if ($_POST['email1'] === $row['email'] &&  password_verify($password1, $row['password']))//$_POST['code'] === $row['otp']) 
        {
            $login=true;
           
            $_SESSION['login']=true;
             $_SESSION['user_id']=$email1;
             $_SESSION['rid']=$row['rid'];
            
           
           // echo $_SESSION['user_id'];
        

          header('location:index.php');
          //    echo "admin";
        }
        else
        {
            echo "invalid";
        }
    }

   
    }
}
 
}

        ?>


<!-- validation end -->
    <!-- header start -->
     <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="logo (1).svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link active">home</a></li>
                    <li><a href="about.php" class="nav-link">about</a></li>
                    <li><a href="newservices.php" class="nav-link">services</a></li>
                    <li><a href="index.php#package" class="nav-link">package</a></li>
                    <li><a href="index.php#gallery" class="nav-link">gallery</a></li>
                    <li><a href="products.php" class="nav-link">product</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                    <li><a href="reg.php" class="nav-link">Registration</a></li>
                    <li><a href="#login" class="nav-link">login</a></li>
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
                    <!--  <section class="gallery-slider">
        <div class="slide">
         </div>
    </section> -->

                  <!--   <img src="b1.jpg" class="I">  -->
                </div>
                 <div class="L">
                     <div class="l-form">
            <form action="" class="form" method="post">
                <h1 class="form__title">Login</h1>
                <p class="err"> <?php echo $emailerr;?></p>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="email1">
                   
                    <label for="" class="form__label" >Email</label>
                </div>
                <?php echo $passerr;?>
                <div class="form__div">
                    <input type="Password" class="form__input" placeholder=" " name="password1">
                    
                    <label for="" class="form__label">Password</label>
                </div>
               <!--  <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="code">
                    
                    <label for="" class="form__label">Verification Code</label>
                </div>
                     -->
               

                <input type="submit" class="form__button" value="Submit" name="signin">
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
    <script src="book.js"></script>
</body>
</html>