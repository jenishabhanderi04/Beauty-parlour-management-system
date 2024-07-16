<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="newservices.css">
    <link rel="stylesheet" href="feedback.css">
</head>
<style> 
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  background-color:hotpink;
  color: white;
}
h1{
    color: hotpink;
    text-align: center;
}

</style>





<body>

 <!-- header start -->
     <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <img src="img/logo.svg">
            </div>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link active">home</a></li>
                    <li><a href="about.php" class="nav-link">about</a></li>
                    <li><a href="newservices.php" class="nav-link">services</a></li>
                    <li><a href="index.php#package" class="nav-link">package</a></li>
                    <li><a href="index.php#gallery" class="nav-link">gallery</a></li>
                    <li><a href="products.php" class="nav-link">product</a></li>
                    <li><a href="index.php#contact" class="nav-link">contact</a></li>
                    <?php
                    //session_start();
                    if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !=true)
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
    <!-- header end -->




    <div class="full-img" id="fullimgbox">
        <img src="s (1).jpg" alt="" id="fullimg">
        <span onclick="closefullimg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="s (1).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (2).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (3).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (11).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (4).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (10).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (5).jpg" alt="" onclick="openfullimg(this.src)">
        <img src="s (6).jpg" alt="" onclick="openfullimg(this.src)">
        <!-- <img src="s (13).jpg" alt="" onclick="openfullimg(this.src)"> -->
    </div>

     <table id ="customers">
    <h1> view service</h1>
       <thead><tr>
         <th>service</th>
         <th>cost</th>
        
    </thead>
    <tbody>
        <?php



        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "parlour";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT servicename,cost FROM service";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {


?>
    
    <tr>
      
     
      <td><?php echo $row['servicename']??''; ?></td>
      <td><?php echo $row['cost']??''; ?></td>
</tr>
</tbody>
<?php
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<!-- footer start -->




    <script>
        var fillimgbox = document.getElementById("fullimgbox");
        var fillimg = document.getElementById("fullimg");

        function openfullimg(pic){
            fullimgbox.style.display = "flex";
            fullimg.src = pic;
            
        }
        function closefullimg() {
            fullimgbox.style.display = "none";
        }
    </script>

    <script src="feedback.js"></script>
</body>
</html>