<header class="header">

   <div class="flex">
  
      <a href="products.php" class="logo">shopping</a>

      <nav class="navbar">
         <!-- <a href="admin.php">add products</a> -->
         <a href="products.php">view products</a>
      </nav>

      <?php
    $rid = $_SESSION['rid'];

      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` where `user_id` = $rid ") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>