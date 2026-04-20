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
	<div class="container-fluid navbar-1" style="margin-bottom:3em;">
		<div class="container">
			<div class="navbar">
				<div class="navbar-brand">
					<a href="admindashboard1.php">
					<img class="logo-img" src="images/qcuLogo.png"></a>
					<span class="logo-text">Quezon City University</span>

				</div>
				<div class="menu"></div>
				<ul class="nav nav-1">
					<div class="profile-container">
						<div class="close"></div>
						<div class="circle"></div>
					</div>
					<li class="nav-item nav-item1">
						<a class="nav-link nav-link1" href="#a"><i class="fas fa-envelope"></i><span class="nav-text">Home</span></a>
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

	    <form class="needs-validation mx-auto card" style="width:65%;" method="post" novalidate>
		  <div class="form-row">
				<div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="validationCustom01" name="subject_code" placeholder="Subject Code" required>
					<div class="valid-feedback">
						Looks good!
					</div>
					<div class="invalid-feedback">
						Please enter a valid subject code.
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="validationCustom02" name="subject_name" placeholder="Subject Name" required>
					<div class="valid-feedback">
						Looks good!
					</div>
					<div class="invalid-feedback">
						Please enter a valid subject name.
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-3 mb-3">
					<select class="custom-select" name="target_course" id="validationCustom04" required>
						<option selected disabled value="">Target Course...</option>
						<option>BSIT</option>
						<option>BSIE</option>
						<option>BSECE</option>
						<option>BSENT</option>
					</select>
				</div>
				<div class="col-md-3 mb-3">
					<select class="custom-select" name="target_year" id="validationCustom04" required>
						<option selected disabled value="">Target Year...</option>
						<option value="1">Freshman</option>
						<option value="2">2nd Year</option>
						<option value="3">3rd Year</option>
						<option value="4">4th Year</option>
					</select>
				</div>
				<div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="validationCustom02" name="units" placeholder="Subject Units" required>
					<div class="valid-feedback">
						Looks good!
					</div>
					<div class="invalid-feedback">
						Please enter a valid subject units.
					</div>
				</div>
			</div>
			<button class="btn btn-primary" type="submit" name="btn">Create Subject</button>
	</form>

	<div class="clear"></div>
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



	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>





	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="jquery-ui/jquery-ui.js"></script>
	<script src="js/adminDash.js"></script>
	<script src="js/emptyVal.js">	</script>



</body>
</html>
<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Getting action time in db
	$username = $_SESSION['username'];
	$role = $_SESSION['role'];
	$_SESSION['action_time'] = $action_time = date_create()->format('Y-m-d H:i:s');
	$action="Created a Subject";
	// Query to insert data in database
	$query=mysqli_query($con,"INSERT into activity_log(username,role,action,action_time) values('$username','$role','$action','$action_time')");
		if($query){

			$subject_code = $_POST['subject_code'];
			$subject_name = $_POST['subject_name'];
			$target_course = $_POST['target_course'];
			$target_year = $_POST['target_year'];
			$units = $_POST['units'];

			$sql = "INSERT into subject_list(subject_code, subject_name, target_course, target_year, units) VALUES('$subject_code', '$subject_name', '$target_course', '$target_year', '$units')";

			if ($con->query($sql) === TRUE)
					{
							header('location: ?success');
					} else {
							echo "Error: " . $sql . "<br>" . $con->error;
							header('location: ?error');
					}
				}
	}
}
	}else{
		header('location:logout.php');
}
?>
