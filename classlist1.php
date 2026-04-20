<?php
	session_start();
	include('dbconnector.php');
	if ($_SESSION['username']) {
		$query = mysqli_query($con, "SELECT * FROM `admin_info` WHERE username='" . $_SESSION['username'] . "'");
		foreach ($query as $admin) {
	$username=$_SESSION['username'];
	$role = $_SESSION['role'];
	$_SESSION['action_time'] = $action_time = date_create()->format('Y-m-d H:i:s');
	$action="Selected Class List";
	// query for inser user log in to data base
	$query=mysqli_query($con,"INSERT into activity_log(username,role,action,action_time) values('$username','$role','$action','$action_time')");

	if($_SESSION['username'])
	{
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

	<form class="needs-validation mx-auto card" method="post" style="width: 65%; padding-top:-20px;" novalidate>
		<div class="form-row">
			<div class="col-md-2 mb-3">
				<select class="custom-select" name="course" id="validationCustom04" required>
					<option selected disabled value="">Course...</option>
					<option>BSIT</option>
					<option>BSIE</option>
					<option>BSECE</option>
					<option>BSENT</option>
				</select>
			</div>
			<div class="col-md-2 mb-3">
				<select class="custom-select" name="year" id="validationCustom04" required>
					<option selected disabled value="">Year...</option>
					<option value="1">Freshman</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
				</select>
			</div>
			<div class="col-md-2 mb-3">
				<select class="custom-select" name="section" id="validationCustom04" required>
					<option selected disabled value="">Section...</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
					<option>F</option>
					<option>G</option>
					<option>H</option>
					<option>I</option>
					<option>J</option>
					<option>K</option>
					<option>L</option>
					<option>M</option>
					<option>N</option>
					<option>O</option>
				</select>
			</div>
			<div class="col-md-2 mb-3">
				<select class="custom-select" name="campus" id="validationCustom04" required>
					<option selected disabled value="">Campus...</option>
					<option>San Bartolome</option>
					<option>San Francisco</option>
					<option>Batasan</option>
				</select>
			</div>
			<div class="col-md-2 mb-3">
				<select class="custom-select" name="order" id="validationCustom04" required>
					<option selected disabled value="">Sort by...</option>
					<option>Ascending</option>
					<option>Descending</option>
				</select>
			</div>
			<div class="col-md-2 mb-3">
				<button class="btn btn-primary" type="submit" name="btn" style="height:2.5em; width:10em;"  >View</button>
			</div>
			</div>

	</form>

<div class="table-responsive-sm" >
	<table class="table table-sm table-striped mx-auto" style="width:85%;" >
		<thead class="thead-primary">
			<tr>

				<th scope="col"> Student Number </th>
				<th scope="col"> First Name </th>
				<th scope="col"> Middle Name </th>
				<th scope="col"> Last Name </th>
				<th scope="col"> Gender </th>
				<th scope="col"> Contact Number </th>
				<th scope="col"> Email Address </th>
				<th scope="col"> Guardian </th>
				<th scope="col"> Guardian's Contact Number </th>
			</tr>
		</thead>







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
	<script src="js/emptyVal.js">	</script>



</body>
</html>

<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$course = $_POST['course'];
			$year = $_POST['year'];
			$section = $_POST['section'];
			$campus = $_POST['campus'];
			$order = $_POST['order'];

			$query=mysqli_query($con,"SELECT * from student_info where course='$course' AND year = '$year' AND section = '$section' AND campus = '$campus'");
	$cnt=1;

	while($row=mysqli_fetch_array($query))
	{
?>
		<tr>
			<th scope="row"><?php echo $row['student_no'];?></td>
			<td><?php echo $row['fname'];?></td>
			<td><?php echo $row['mname'];?></td>
			<td><?php echo $row['sname'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['guardian'];?></td>
			<td><?php echo $row['gcontact'];?></td>

		</tr>

		<?php
			$cnt=$cnt+1;
			}

				}
		?>
	</table>
</div>

<?php
}
}
	} else{
	header('location:Logout.php');
	}
?>
