<?php
    session_start();
    if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !=true)
    {
        header("location: login.php");
        exit;
    }
     $rid = $_SESSION['rid'];
   // echo $rid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="apooin.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <style>
       
       .se{

       }
   </style>

  </head>
</head>
<body>
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "parlour";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
   // echo "connected";

    if (isset($_POST['submit'])) 
{
        $name = $_POST['name'];
      //  $_SESSION['name']=$name;

        $email = $_POST['email'];
      //  $_SESSION['email']=$email;

        $number = $_POST['number'];
        //$_SESSION['add']=$add;

        $date = $_POST['date'];
       // $_SESSION['dob']=$dob;

        $time = $_POST['time'];
       // $_SESSION['num']=$num;
        $service = $_POST['service'];
        $s = implode(",",$service);

         $sql = "INSERT INTO `bookappointment` (`name`, `email`, `number`, `date`, `time`, `service`,`user_id`,`status`) VALUES ( '$name', '$email','$number','$date','$time','$s','$rid','panding');";
                    $run = mysqli_query($conn, $sql);

                    if ($run) {
                         echo "insert";
                    }
    }


}

    ?>

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
                    <li><a href="products.php" class="nav-link">products</a></li>
                    <li><a href="index.php#contact" class="nav-link">contact</a></li>
                    <!-- <li><a href="reg.php" class="nav-link">Registration</a></li>
                    <li><a href="login.php" class="nav-link">login</a></li> -->
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
                     <!-- <section class="gallery-slider">
        <div class="slide">
         </div>
    </section> -->

                  <!--   <img src="b1.jpg" class="I">  -->
                </div>
                 <div class="L">
                     <div class="l-form">
            <form action="" class="form" method="post">
                <h1 class="form__title">BOOK APPOINTMENT</h1>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="name">
                    <label for="" class="form__label">Name</label>
                </div>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="email">
                    <label for="" class="form__label">Email</label>
                </div>

                <div class="form__div">
                    <input type="contactnumber" class="form__input" placeholder=" " name="number">
                    <label for="" class="form__label">contact number</label>
                </div>
                <div class="form__div">
                    <input type="date" class="form__input" placeholder=" " name="date" >
                    <label for="" class="form__label">book date</label>
                </div>
                <div class="form__div">
                    <input type="time" class="form__input" placeholder=" " name="time">
                    <label for="" class="form__label">Appointment Time</label>
                </div>
                <div class="form__div" >

                    <select class="form__input" name="service[]" multiple>
                       <option>select service</option>

                            <?php
                                $sql = "SELECT servicename,cost FROM service";
                                // $result = mysqli_query($conn, $sql);
                                

                     $result1 = mysqli_query($conn, $sql);


                               
               while($row1 = mysqli_fetch_array($result1)):;?>
                <option value="<?php echo $row1["servicename"]; echo $row1["cost"];?>"><?php echo $row1["servicename"].", cost="; echo $row1["cost"];?></option>
            <?php endwhile;?>
                    </select>
                </div>


                <!--  <div class="form__div">
                    <input type="text" class="form__input" placeholder=" ">
                    <label for="" class="form__label">service</label>
                </div> -->

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
    <script src="book.js"></script>
    <script>
     
    </script>
</body>
</html>