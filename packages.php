<?php
session_start();
 

@include 'config.php';

// if(isset($_POST['add_to_cart'])){

//    $product_name = $_POST['product_name'];
//    $ser = $_POST['product'];
//    $product_price = $_POST['product_price'];
//    $product_image = $_POST['product_image'];
//    $product_quantity = 1;

//    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

//    if(mysqli_num_rows($select_cart) > 0){
//       $message[] = 'product already added to cart';
//    }else{
//       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
//       $message[] = 'product added to cart succesfully';
//    }

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>packages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="p.css">

   <link rel="stylesheet" href="prohead.css">
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
                    <li><a href="#package" class="nav-link">package</a></li>
                    <li><a href="index.php#gallery" class="nav-link">gallery</a></li>
                    <li><a href="products.php" class="nav-link">product</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li>
                    <?php
                  //  session_start();
                    if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !=true)
                    {
                        echo '<li><a href="reg.php" class="nav-link">Registration</a></li>
                        <li><a href="login.php" class="nav-link">login</a></li>';
                    }
                    else{
                        
                        $rid = $_SESSION['rid'];
                       // echo $rid;
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
    <!-- header end -->

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php //include 'header.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest package</h1>

   <div class="box-container">

      <?php
       
           if (isset($_POST['submit'])) {
                 $name = $_POST['product_name'];
                 $price = $_POST['product_price'];
                 $service = $_POST['service'];
    
                    $sql = "INSERT INTO `bookpackage` (`name`, `price`,  `service` ,`user_id`) VALUES ( '$name', '$price','$service','$rid');";
                    $run = mysqli_query($conn, $sql);
           }

      
      
      $select_products = mysqli_query($conn, "SELECT * FROM `package`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){


      ?>

     

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price"><?php echo $fetch_product['price']; ?>/-</div>
            <div class="price"><?php echo $fetch_product['service']; ?></div>
            <br>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="service" value="<?php echo $fetch_product['service']; ?>">
            <!-- <input type="submit" class="btn" value="book package" name="add_to_cart"> -->
            <input class="btn" name="submit" type="submit" value="book package">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

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
<!-- custom js file link  -->
<script src="proscript.js"></script>

</body>
</html>