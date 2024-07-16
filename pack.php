<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $ser = $_POST['ser'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO ` package`(name,service, price, image) VALUES('$p_name','$ser', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `package` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:managepack.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:managepack.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
      $ser = $_POST['ser'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `package` SET name = '$update_p_name', service = '$ser', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:managepack.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:managepack.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

   <style>
      .add {
    text-decoration: none;
    padding: 2px 5px;
    background: hotpink;
    color: white;
    border-radius: 3px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    }

.form__input{
 /* position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;*/
  font-size: 16px;
  /*border: 1px solid var(--border-color);*/
  border: 1px solid black;
  border-radius: .5rem;
  outline: none;
  /*padding: 1rem;*/
   padding:1.2rem 1.4rem;
  background: none;
  z-index: 1;
  margin:1rem 0;
  width: 100%;
}




   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="prostyle.css">
   <!--  <link rel="stylesheet" href="login.css"> -->

</head>
<body>
   
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

   <table>

      <thead>
         <tr><a href="addproduct.php" class="add">Add Product</a></tr>
         <th>image</th>
         <th> name</th>
         <th>service</th>
         <th>price</th>
         <th>delete</th>
         <th>edit</th>

      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `package`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['service']; ?></td>
            <td><?php echo $row['price']; ?>/-</td>
            <td>
               <a href="pack.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i></i> delete </a>
            </td>
            <td>
               <a href="pack.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i></i> update </a>
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

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `package` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" class="fo" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      
      <input type="text" class="form__input" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">

      <input type="text" class="form__input" required name="ser" value="<?php echo $fetch_edit['service']; ?>">
      
      
      <input type="number" min="0" class="form__input" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      
      <input type="file" class="form__input" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
     
      <input type="submit" value="update the package" name="update_product" class="btn">
     <!--  <input type="reset" value="cancel" id="close-edit" class="option-btn"> -->
     
     <a href="managepack.php" class="option-btn">Cancel</a>
   
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>















<!-- custom js file link  -->
<script src="proscript.js"></script>

</body>
</html>