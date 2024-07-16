<?php
include('config.php');
session_start();
$userid = $_SESSION['rid'];
//echo $userid;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>thank you</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="style1.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
      <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="img/logo.svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="#" class="nav-link active">home</a></li>
                    <li><a href="about.php" class="nav-link">about</a></li>
                    <li><a href="newservices.php" class="nav-link">services</a></li>
                    <li><a href="#package" class="nav-link">package</a></li>
                    <li><a href="#gallery" class="nav-link">gallery</a></li>
                    <li><a href="products.php" class="nav-link">product</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                    <?php
                  //  session_start();
                    if(!isset($_SESSION['rid']) || $_SESSION['rid'] !=true)
                    {
                        echo '<li><a href="reg.php" class="nav-link">Registration</a></li>
                        <li><a href="login.php" class="nav-link">login</a></li>';
                    }
                    else{
                        echo ' <li><a href="logout.php" class="nav-link">logout</a></li>';
                    }
                    
                    ?>
                </ul>
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>


<?php
if (!$conn) {
    die("error in connction...");
    
} else {
    
    // $ci = $_SESSION['ci'];
    // $pid = $_SESSION['pr_id'];
    // $amt = $_SESSION['price'];
    // $payment_status = "success";
    // $added_on = date('Y/m/d');
    // $result = mysqli_query($conn, "insert into tbl_payment(c_id,pr_id,amount,payment_status,added_on) values($ci,$pid,'$amt','$payment_status','$added_on')");
    // $_SESSION['OID'] = mysqli_insert_id($conn);

    // $PayId = mysqli_insert_id($conn);
    
    // SELECT tbl_reg.c_name,property.pr_type,property.address,property.no_of_room,property.price,tbl_payment.payment_status,tbl_payment.added_on FROM tbl_payment INNER JOIN tbl_reg on tbl_reg.c_id=tbl_payment.c_id INNER JOIN property ON tbl_payment.pr_id = property.pr_id WHERE tbl_payment.c_id = 48;

   //  $select = mysqli_query($conn,"SELECT  order.`name`,order.`email`,order.`flat` from order INNER JOIN payment  on Payment.`userid` = order.`user_id`;");
   //      $row = mysqli_fetch_array($select);
   //  $name = $row['name'];
   // $email = $row['email'];
   // $add = $row['flat'];
    // $room=$row['no_of_room'];
    // $payStatus=$row['payment_status'];
    // $dateAdd = $row['added_on'];
 }

?>
<div style="width: 100%;margin-top:100px;text-align:center;border:1px solid black;height:50%">
    <h4>Payment Success</h4><hr>
   <!--  <label><strong>Name : </strong> <?//php echo $name ?> </label><br>
    <label><strong>Email : </strong> <?//php echo $email ?> </label><br>
    <label><strong>Address : </strong> <?//php echo $add ?> </label><br>
    <label><strong>Price : </strong> <?//php echo $pr_type ?> </label><br>
    <label><strong>Payment Status : </strong> <?//php echo $payStatus ?> </label><br>
    <label><strong>Payment Date : </strong> <?//php echo $dateAdd?> </label><br> -->
</div>
 <footer class="footer" id="contact">
        <div class="footer-list">
            <div class="footer-data">
                <h1><a href=""><img src="img/logo.svg"></a></h1>
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
    <!-- End Footer Section -->
    <!-- Javascript File -->
    <script src="main.js"></script>
</body>
</html>
