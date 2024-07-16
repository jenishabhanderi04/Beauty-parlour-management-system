

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	<link rel="stylesheet" href="dashstyle.css">

	<title>AdminHub</title>
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
				<a href="#">
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
<!-- 					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="dashimg/people.png">
			</a> -->
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
							<a class="active" href="#">Home</a>
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

		
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="dashscript.js"></script>
</body>
</html>