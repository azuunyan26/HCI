<?php
session_start();
include('dbconnector.php');
if ($_SESSION['username']) {
	$query = mysqli_query($con, "SELECT * FROM `admin_info` WHERE username='" . $_SESSION['username'] . "'");
	foreach ($query as $admin) {


?>

		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Student | Dashboard</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/adminDash.css">
			<link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
		</head>

		<body>
			<div class="container-fluid navbar-1">
				<div class="container">
					<div class="navbar">
						<div class="navbar-brand">
							<img class="logo-img" src="images/qcuLogo.png">
							<span class="logo-text">Quezon City University</span>
						</div>
						<div class="menu"></div>
						<ul class="nav nav-1">
							<div class="profile-container">
								<div class="close"></div>
								<div class="circle"></div>
							</div>
							<li class="nav-item nav-item1">
								<a class="nav-link nav-link1" href="#a"><i class="fas fa-envelope"></i><span class="nav-text">Message</span></a>
							</li>
							<li class="nav-item nav-item1">
								<a class="nav-link nav-link1" href="#b"><i class="fas fa-bell"></i><span class="nav-text">Notification</span></a>
							</li>
							<li class="nav-item nav-item1">
								<a class="nav-link nav-link1" href="#e"><i class="fas fa-search"></i><span class="nav-text">Search</span></a>
							</li>
							<li class="nav-item nav-item1">
								<a class="nav-link nav-link1" href="#f">
									<span>
										<?php echo $admin['sname'] . " " . $admin['fname'] . " " . substr($admin['mname'], 0, 1)."."; ?>
									</span>
									<i class="fas fa-chevron-down"></i>
								</a>
								<div class="drop">
									<a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--Section 1-->
			<section class="container section-1">
			<div class="row text-sm-center">
				<!--			<div class="col-md-4">
							<a href="asdads.php">
								<div class="card text-white bg-1 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
									Your Profile
									</h4>
								</div>
							</div>
							</a>
					</div>
-->
					<div class="col-md-4">
						<a href="createstudent1.php">
						<div class="card text-white bg-1 mb-3">
							<div class="card-header">
								<h4 class="mb-0">
									Create an Student Account
								</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<a href="createfaculty1.php">
						<div class="card text-white bg-2 mb-3">
							<div class="card-header">
								<h4 class="mb-0">
								Create a Faculty Account
								</h4>
							</div>
						</div>
						</a>
					</div>

					<div class="col-md-4">
							<a href="createadmin1.php">
								<div class="card text-white bg-3 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										Create an Administrator Account
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="createsubject1.php">
								<div class="card text-white bg-4 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										Create a Subject
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="classlist1.php">
								<div class="card text-white bg-5 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										View Class List
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="attendancesheet1.php">
								<div class="card text-white bg-6 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										View Faculty Attendance Sheet
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="activitylog1.php">
								<div class="card text-white bg-7 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										Your Activity Log
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="activitymonitor1.php">
								<div class="card text-white bg-8 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
									Monitor Accounts
									</h4>
								</div>
							</div>
							</a>
					</div>

					<div class="col-md-4">
							<a href="manageforum1.php">
								<div class="card text-white bg-9 mb-3">
								<div class="card-header">
									<h4 class="mb-0">
										School Management
									</h4>
								</div>
							</div>
							</a>
					</div>

				</div>
			</section>

			<div class="clear" style="margin-bottom:5em;">
			<footer class="container-fluid footer-container">
				<div class="container">
					<div class="navbar">
						<div class="navbar-brand footer-brand">&#169;QCU LMS BSIT-3C</div>
						<ul class="nav footer-nav">
							<li class="nav-item">
								<a href="#" class="nav-link"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link"><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link"><i class="fab fa-instagram-square"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</footer>
</div>


			<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>





			<script src="js/jquery.min.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="jquery-ui/jquery-ui.js"></script>
			<script src="js/adminDash.js"></script>
		</body>

		</html>
	<?php

}
} else {
	header('location:logout.php');
}
	?>
