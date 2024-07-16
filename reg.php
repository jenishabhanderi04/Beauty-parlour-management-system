<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration </title>
    <!-- CSS File -->
    <link rel="stylesheet" href="reg.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/src/PHPMailer.php');
    require('PHPMailer/src/Exception.php');
    require('PHPMailer/src/SMTP.php');

   $name="";
   $nameerr="";
   $email="";
   $emailerr="";
   $add="";
   $adderr="";
   $dob="";
   $doberr="";
   $num="";
   $numerr="";
   $pass="";
   $passerr="";
     if (isset($_POST['btn'])) 
     {
        if(empty($_POST['name']))
        {
            $nameerr="Name is required";
        }  
        else
         {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
             {
               $nameerr = "Only letters and white space allowed";
             }
         }  
         if(empty($_POST['email']))
        {
            $emailerr="Email is required";
        }  
        else
         {
            $email = $_POST['email'];
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
           {
                $emailerr = "Invalid email format";
           }
         }  
         if(empty($_POST['add']))
        {
            $adderr="Address is required";
        }  
        else
         {
            $add = $_POST['add'];
         }  
         if(empty($_POST['dob']))
        {
            $doberr="Date is required";
        }  
        else
         {
            $dob = $_POST['dob'];
         }  
         if(empty($_POST['num']))
        {
            $numerr="Number is required";
        }  
        else
         {
            
             $num = $_POST ['num'];  
             if (!preg_match('/^[0-9]*$/', $num)) 
             {  
                $numerr = "Only numeric value is allowed.";  
             }   
  
            if (strlen($num) != 10)
             {  
                $numerr = "Mobile must have 10 digits.";  
                 
             } 
           
         } 
         if(empty($_POST['pass']))
        {
            $passerr="Password is required";
        }  
        else
         {
            $pass = $_POST['pass'];
         }   
     }


                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "parlour";

                        $con= mysqli_connect($servername,$username,$password,$database);

                        if (!$con) {
                            echo "not connected";
                        }

else{
 //echo "connected";

if (isset($_POST['btn'])) 
{
        $name = $_POST['name'];
        $_SESSION['name']=$name;

        $email = $_POST['email'];
        $_SESSION['email']=$email;

        $add = $_POST['add'];
        $_SESSION['add']=$add;

        $dob = $_POST['dob'];
        $_SESSION['dob']=$dob;

        $num = $_POST['num'];
        $_SESSION['num']=$num;

        $pass = $_POST['pass'];
        $hash = password_hash($pass,PASSWORD_DEFAULT);

        $email = $_POST['email'];
                $otp = rand(100000, 999999);

                $mail = new PHPMailer(true);

                try {

                    //Server settings

                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'beautyparlour493@gmail.com';
                    $mail->Password   = 'ovfqclzskberrqev';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;



                    //Recipients
                    $mail->setFrom('beautyparlour493@gmail.com', 'beauty parlour');
                    $mail->addAddress($email);     //Add a recipient

                    $mail->isHTML(true);
                    //$msg=file_get_contents("beefree-wbrjvkqo22s.php");

                    $mail->Subject = 'Sign Up Verification';

                    $mail->Body    = "Thanks For Registering! <br> Here is the One Time Password for  " . $otp;

                    $mail->MsgHTML = ('h');



                    $mail->send();

                    $sql = "INSERT INTO `registration` (`name`, `email`, `address`, `dob`, `number`, `password`, `usertype`,`otp` ) VALUES ( '$name', '$email','$add','$dob','$num','$hash','user','$otp');";
                    $run = mysqli_query($con, $sql);
                    if ($run) {
                        $showsuccess = "Otp Sent to your Email!";
                        //header location to otp pAGE
                         header('location:otpform.php');
                    }
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
                    <li><a href="products.php" class="nav-link">product</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                    <li><a href="#registration" class="nav-link">Registration</a></li>
                    <li><a href="login.php" class="nav-link">login</a></li>
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
                <h1 class="form__title">Registration</h1>
                <?php echo $nameerr;?>
                <br></br>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="name">
                    <label for="" class="form__label">Name</label>
                </div>
                <?php echo $emailerr;?>
                <br></br>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="email">
                    <label for="" class="form__label">Email</label>
                </div>
                <?php echo $adderr;?>
                <br></br>
                <div class="form__div">
                    <input type="text"  class="form__input" placeholder=" " name="add">
                    <label for="" class="form__label">Address</label>
                </div>
                <?php echo $doberr;?>
                <br></br>
                 <div class="form__div">
                    <input type="date" class="form__input" placeholder=" " name="dob">
                    <label for="" class="form__label">Date of Birth</label>
                </div>
                <?php echo $numerr;?>
                <br></br>
                <div class="form__div">
                    <input type="contactnumber" class="form__input" placeholder=" " name="num">
                    <label for="" class="form__label">contact number</label>
                </div>
                <?php echo $passerr;?>
                <br></br>
                <div class="form__div">
                    <input type="password" class="form__input" placeholder=" " name="pass">
                    <label for="" class="form__label">Password</label>
                </div>
               
                 

                <input type="submit" class="form__button" value="Submit" name="btn">
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