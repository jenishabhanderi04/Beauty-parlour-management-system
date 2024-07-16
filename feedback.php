<?php
    session_start();
    if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !=true)
    {
        header("location: login.php");
        exit;
    }
     $rid = $_SESSION['rid'];
    //echo $rid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="feedback.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

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
                    <li><a href="product.html" class="nav-link">products</a></li>
                    <li><a href="index.php#contact" class="nav-link">contact</a></li>
                    <li><a href="reg.php" class="nav-link">Registration</a></li>
                    <li><a href="logout.php" class="nav-link">logout</a></li>
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
// echo "connected";

if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO `feedback` (`email`, `comment`,`user_id`) VALUES ( '$email', '$comment','$rid');";
                            $result = mysqli_query($con,$sql);

                              if($result)
                               {
                                 header("location: index.php");

                               }
                              else
                              {
                                 die(mysql_errno($con));
                              }
        
    }
}
?>
                   <!--  <img src="img/b1.jpg" class="I"> -->
                </div>
                 <div class="L">
                     <div class="l-form">
            <form action="feedback.php" class="form" method="post" >
                <h1 class="form__title">Feedback</h1>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="email">
                    <label for="" class="form__label">Email</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="comment">
                    <label for="" class="form__label">Comment</label>
                </div>

                 

                <input type="submit" class="form__button" value="Submit" name="submit">
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
    <script src="feedback.js"></script>
</body>
</html>