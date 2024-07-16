<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <!-- My CSS -->
  <link rel="stylesheet" href="dashstyle.css">
   <link rel="stylesheet" href="fo.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <title>AdminHub</title>
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
		<!-- 	<li>
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
              <a href="dashindex.php">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>

          </ul>
           <div class="M">
                <div class="F">
                    <!--  <section class="gallery-slider">
        <div class="slide">
         </div>
    </section> -->
<?php


 $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "parlour";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{

}

	$sql = "SELECT * from  registration";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) 
{
  $pa = $row['password'];
  
}

if (isset($_POST['submit']))
 {
   $p1 = $_POST['p1'];

   $p2 = $_POST['p2'];

   $s = "update `registration` set `password` = '$p2', where `rid` = '3'";
   $r = mysqli_query($conn, $s);


}




?>
                  <!--   <img src="b1.jpg" class="I">  -->
                </div>
                 <div class="L">
                     <div class="l-form">
            <form action="" class="form" method="post">
                <h1 class="form__title">Change Password</h1>
                <p class="err"> </p>
                <div class="form__div">
                    <input type="Password" class="form__input" placeholder=" " name="p1">
                   
                    <label for="" class="form__label" >Current Password</label>
                </div>
               
                <div class="form__div">
                    <input type="Password" class="form__input" placeholder=" " name="p2">
                    
                    <label for="" class="form__label"> 	New Password</label>
                </div>
               <!--  <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="code">
                    
                    <label for="" class="form__label">Verification Code</label>
                </div>
                     -->
               

                <input type="submit" class="form__button" value="Submit" name="signin">
            </form>
        </div>
                    
                </div>

            </div>
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

mysqli_close($conn);
?>

	
 </ul>

  <script src="dashscript.js"></script>
</body>
</html>
