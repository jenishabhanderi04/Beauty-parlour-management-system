<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="prostyle.css"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <!-- My CSS -->
  <link rel="stylesheet" href="dashstyle.css">

  <title>manage product</title>
  <style>
      .link {
     list-style-type: none;
     padding-left: 500px;
     margin-top: 20px;

}
.link a{
text-decoration: none;
background-color:hotpink;
display: inline;
float:left;
color:white;
font-size: 20px;
padding: 5px;
margin-left: 5px;
height: 40px;
width: 40px;
padding-left: 15px;
}
.link a:hover{
background-color:white;
color: hotpink;


}

.link ul li {
    display: none;
}

    .add {
    text-decoration: none;
    padding: 2px 5px;
    background: hotpink;
    color: white;
    border-radius: 3px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
h1{
  color: hotpink;
  text-align: center;
}
  
  .edit {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
    

}

.del {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
 

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: hotpink;
  color: white;
}
h1{
  color: hotpink;
  text-align: center;
  

}
  </style>
</head>
<body>


  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <!-- <i class='bx bxs-smile'></i> -->
      <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="dashindex.php">
          <i class='bx bxs-dashboard' ></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="viewcustomer.php">
          <i class='bx bxs-user-detail'></i>
          <!-- <i class='bx bxs-shopping-bag-alt' ></i> -->
          <span class="text">View Customer Details</span>
        </a>
      </li>
    <!--  <li>
        <a href="#">
          
          <i class='bx bxs-user-detail'></i>
          
          <span class="text">View Beautician Details</span>
        </a>
      </li> -->
      <li>
        <a href="viewappoin.php">
          <!-- <i class='bx bxs-message-dots' ></i> -->
          <i class='bx bx-spreadsheet'></i>
          <span class="text">View Appointments</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          
          <i class='bx bx-task'></i>
          <span class="text">Accept Appointments</span>
        </a>
      </li> -->
      <!-- <li>
        <a href="#">
          
          <i class='bx bxs-calendar-x'></i>
          <span class="text">Reject Appointments</span>
        </a>
      </li> -->
      <!-- <li>
        <a href="#">
          
          <i class='bx bxs-time'></i>
          <span class="text">View Time Schedule</span>
        </a>
      </li> -->
      <li>
        <a href="manageservice.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bxs-add-to-queue'></i>
          <span class="text">Manage Services</span>
        </a>
      </li>
      
      <li>
        <a href="managepack.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bxs-add-to-queue'></i>
          <span class="text">Manage Package</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          <i class='bx bxs-group' ></i>
          <i class='bx bxs-edit'></i>
          <span class="text">Edit package</span>
        </a>
      </li> -->
      <li>
        <a href="manageproduct.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bxs-add-to-queue'></i>
          <span class="text">Manage product</span>
        </a>
      </li>
      
      <li>
        <a href="vieworder.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bxs-shopping-bag-alt'></i>
          <span class="text">View Product Order</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          
          <i class='bx bxs-report'></i>
          <span class="text">Report</span>
        </a>
      </li> -->
      <!-- <li>
        <a href="#">
          
          <i class='bx bxs-lock'></i>
          <span class="text">Change Password</span>
        </a>
      </li>
      <li>
        <a href="#">
          
          <i class='bx bxs-lock'></i>
          <span class="text">Forgot Password</span>
        </a>
      </li> -->
        <li>
        <a href="viewbookpack.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bx-spreadsheet'></i>
          <span class="text">View bookpack</span>
        </a>
      </li>
      <li>
        <a href="viewpayment.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bx-spreadsheet'></i>
          <span class="text">View Paymnet</span>
        </a>
      </li>
      <li>
        <a href="viewfeedback.php">
          <!-- <i class='bx bxs-group' ></i> -->
          <i class='bx bx-spreadsheet'></i>
          <span class="text">View Feedback</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <!-- <li>
        <a href="#">
          <i class='bx bxs-cog' ></i>
          <span class="text">Settings</span>
        </a>
      </li> -->
      <li>
        <a href="Logout.php" class="logout">
          <i class='bx bxs-log-out-circle' ></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->




  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu' ></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="dashimg/people.png">
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a class="active" href="dashindex.php">Home</a>
            </li>
          </ul>
        </div>
        <!-- <a href="#" class="btn-download">
          <i class='bx bxs-cloud-download' ></i>
          <span class="text">Download PDF</span>
        </a> -->
      </div>

      <!-- <ul class="box-info">
        <li>
          <i class='bx bxs-calendar-check' ></i>
          <span class="text">
            <h3>1020</h3>
            <p>New Order</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-group' ></i>
          <span class="text">
            <h3>2834</h3>
            <p>Visitors</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-dollar-circle' ></i>
          <span class="text">
            <h3>$2543</h3>
            <p>Total Sales</p>
          </span>
        </li>
      </ul>
 -->
<!-- product -->
<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `pro`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `pro` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `pro` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:manageproduct.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:manageproduct.php');
   }

}

?>



   



   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php// include 'header.php'; ?>

<div class="container">

<!-- <section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section> -->

<section class="display-product-table">

   <table id ="customers">
 <h1> Manage Product</h1>
      <thead>
         <tr><a href="addproduct.php" class="add">Add Product</a></tr>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>delete</th>
         <th>edit</th>

      </thead>

      <tbody>
         <?php
         
          

         $start=0;
         $limit=2;
// limit=1,2;
// limit=2,2;

$t=mysqli_query($conn,"SELECT * FROM `pro`");
$total=mysqli_num_rows($t);



if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
  //$start=2*1;
  //$start=2;
}
else
{
  $id=1;
}
$page=ceil($total/$limit);

$select_products=mysqli_query($conn,"select * from pro limit $start,$limit");

    

            // $select_products = mysqli_query($conn, "SELECT * FROM `pro`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?>/-</td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="del" onclick="return confirm('are your sure you want to delete this?');"> <i></i> delete </a>
            </td>
            <td>
               <a href="admin.php?edit=<?php echo $row['id']; ?>" class="edit"> <i></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

 <ul class="link">

   <?php
   for($i=1;$i <= $page;$i++){
   ?>
    <li><a href="?id=<?php echo $i ?>"><?php echo $i;?></a></li>
    <?php
   }
    ?>
</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `pro` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <!-- <input type="reset" value="cancel" id="close-edit" class="option-btn"> -->
      <a href="manageproduct.php" class="option-btn">Cancel</a>
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>


<!-- end product -->

  <script src="dashscript.js"></script>
</body>
</html>

