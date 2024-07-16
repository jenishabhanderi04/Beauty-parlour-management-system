<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
    $ser = $_POST['ser'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `package`(name,service, price, image) VALUES('$p_name','$ser', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
      header('location:managepack.php');
   }else{
      $message[] = 'could not add the product';
   }
};




?>
<!DOCTYPE html>
<html lang="en">
<head>

   <style>

   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="prostyle.css"> -->
   <link rel="stylesheet" href="addprostyle.css">

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

<!-- <div class="container"> -->

<section>

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
<form action="" method="post" class="form" enctype="multipart/form-data">
   <h3 class="form__title">Add New Product</h3>

    <div class="form__div">
   <input type="text" name="p_name" placeholder="" class="form__input" required>
   <label for="" class="form__label" >Name</label>
</div>

 <div class="form__div">
   <input type="text" name="ser" min="0" placeholder="" class="form__input" required>
   <label for="" class="form__label" >Service</label>
</div>

  <div class="form__div">
   <input type="number" name="p_price" min="0" placeholder="" class="form__input" required>
   <label for="" class="form__label" >Price</label>
</div>

   <div class="form__div">
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="form__input"required>
   <label for="" class="form__label" >File</label>
</div>


   <input type="submit" value="add the product" name="add_product" class="form__button">
   <a href="manageproduct.php"  class="back_button">Back</a>
</form>
</div>

</div>
</div>
</div>

</section>
<script src="book.js"></script>

</body>
</html>