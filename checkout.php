<?php
 
 session_start();

  $rid = $_SESSION['rid'];
   // echo $rid;

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   // $street = $_POST['street'];
   // $city = $_POST['city'];
   // $state = $_POST['state'];
   // $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where `user_id` = $rid ");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price =($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
         $q[] = $product_item['quantity'];
      };
   };

   $total_product = implode(', ',$product_name);

   $qu = implode(', ',$q);

   // $detail_query = mysqli_query($conn, "select * from regestration where `rid` = $rid") or die('query failed');
   //  $row=mysqli_fetch_assoc($detail_query);
   //  $name = $row['name'];
    // $sql = "select * from `regestration` where rid =$rid";
    //    $result = mysqli_query($con,$sql);
    //    $row=mysqli_fetch_assoc($result);
               
    //             $name = $row['name'];
              


    $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, pin_code, total_products, total_price,user_id) VALUES('$name','$number','$email','$method','$flat','$pin_code','$qu','$price_total','$rid')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : ".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
                <p> your address : <span>".$flat." - ".$pin_code."
            </span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='raz_index.php' class='btn'>pay now</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cart.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` where `user_id` = $rid ");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : <?= $grand_total; ?>/- </span>
   </div>
   <?php 
  $sql = "select * from `registration` where rid =$rid";
       $result = mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($result);
               
                $name = $row['name'];
                $email = $row['email'];
                $number = $row['number'];
                $flat = $row['address'];
              


   ?>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" value=<?php echo $name;?>>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" value=<?php echo $number;?> >
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" value=<?php echo $email;?>>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
              
               <option value="credit cart">online payment</option>
                <option value="cash on delivery" selected>cash on devlivery</option>
               
            </select>
         </div>
         <div class="inputBox">
            <span>address </span>
            <input type="text" placeholder="e.g. flat no." name="flat" value=<?php echo $flat;?>>
         </div>
        <!--  <div class="inputBox">
            <span>address line 2</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. mumbai" name="city" required>
         </div>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. maharashtra" name="state" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. india" name="country" required>
         </div> -->
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="proscript.js"></script>
   
</body>
</html>