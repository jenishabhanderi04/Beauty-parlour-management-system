<?php 
session_start();
// if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !=true)
//     {
//         header("location: login.php");
//         exit;
//     }

 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otp form</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="login.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<?php
	$servername = "localhost";
$username = "root";
$password = "";
$db = "parlour";

 $con = mysqli_connect($servername,$username,$password,$db);

 if($con)
 {
    echo " connected";
    if (isset($_POST['btnotp'])) 
    {
      
        $code=$_POST['code'];
   
    
   

    $sql = "select * from registration";

    $result = mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
     
    //  $_SESSION['rid']=$row['rid'];
    // echo $_SESSION['rid'];

    if ($row['usertype'] == "user") {
        if ($_POST['code'] === $row['otp']) 
        {
            
            header('location:login.php');
          
        }
        else
 {
      echo "enter the valid otp";
      // header('location:index.php');
 }

    
}


}
}
}

?>

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
                <h1 class="form__title">OTP</h1>
                
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="code">
                   
                    <label for="" class="form__label" >Otp</label>
                </div>
               

                <input type="submit" class="form__button" value="Submit" name="btnotp">
            </form>
        </div>
                    
                </div>

            </div>






<!-- <form method="post">
	<input type="text" name="code">
<input type="submit" class="form__button" value="Submit" name="btnotp">
<form> -->
</body>
</html>