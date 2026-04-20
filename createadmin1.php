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
				<input type="text" class="form-control" id="validationCustom01" name="admin_no" placeholder="Admin Number" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<input type="text" class="form-control" id="validationCustom02" name="username" placeholder="Username" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">

					<input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="Email" aria-describedby="emailHelp" required>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					<div class="valid-feedback">
						Looks good!
					</div>
					<div class="invalid-feedback">
						Please enter a valid email address.
					</div>
				</div>

			<div class="col-md-6   mb-3">
				<input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" placeholder="Password" required>
					<small id="passwordHelpBlock" class="form-text text-muted">
						Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
					</small>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-4 mb-3">
				<input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First Name" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<input type="text" class="form-control" id="validationCustom02" name="sname" placeholder="Surname Name" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<input type="text" class="form-control" id="validationCustom02" name="mname" placeholder="Middle Name" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>



		<div class="form-group">

			<textarea class="form-control" name="address" id="exampleFormControlTextarea1" aria-label="With textarea" placeholder="Complete Address" rows="3" required></textarea>
			<div class="invalid-feedback">
				Please enter a valid address.
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-5 mb-3">
				<input type="text" class="form-control" id="validationCustom01"  name="contact" placeholder="Contact Number (09XXXXXXXXX)" required>
				<div class="valid-feedback">
					Looks good!
				</div>
				<div class="invalid-feedback">
					Please enter a valid contact number.
				</div>
			</div>

			<div class="col-md-2 mb-3">
				<select class="custom-select" name="gender" id="validationCustom04" required>
					<option selected disabled value="">Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>

			<div class="col-md-2 mb-3">
				<input type="text" class="form-control" id="validationCustom01"  name="age" placeholder="Age" required>
			</div>


			<div class="col-md-3 mb-3">
				<input type="text" class="form-control" id="validationCustom01"  name="bdate" placeholder="Birthdate (yyyy-mm-dd)" required>
			</div>
		</div>

			<div class="form-row">
			<div class="col-md-8 mb-3">
				<input type="text" class="form-control" id="validationCustom02"  name="emergencyperson" placeholder="Emergency Person" required>
			</div>
			<div class="col-md-4 mb-3">
				<input type="text" class="form-control" id="validationCustom02" name="emergencycon" placeholder="Emergency Contact (09XXXXXXXXX)" required>
				<div class="invalid-feedback">
					Please enter a valid contact number.
				</div>
			</div>
		</div>

		<button class="btn btn-primary" type="submit" name="btn">Create Admin</button>

</form>

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

		// Getting action time in db
		$username1 = $_SESSION['username'];
		$role1 = $_SESSION['role'];
		$_SESSION['action_time'] = $action_time = date_create()->format('Y-m-d H:i:s');
		$action="Created an Admin Account";
		// Query to insert data in database
		$query=mysqli_query($con,"INSERT into activity_log(username,role,action,action_time) values('$username1','$role1','$action','$action_time')");
			if($query){

				$admin_no = $_POST['admin_no'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$role = "Administrator";
				$fname = $_POST['fname'];
				$sname = $_POST['sname'];
				$mname = $_POST['mname'];
				$age = $_POST['age'];
				$bdate = $_POST['bdate'];
				$gender = $_POST['gender'];
				$address = $_POST['address'];
				$contact = $_POST['contact'];
				$email = $_POST['email'];
				$emergencyperson = $_POST['emergencyperson'];
				$emergencycon = $_POST['emergencycon'];

				$sql = "INSERT into admin_info(admin_no, username, password, role, fname, sname, mname, age, bdate, gender, address, contact, email, emergencyperson, emergencycon) VALUES('$admin_no', '$username', '$password', '$role', '$fname', '$sname', '$mname', '$age', '$bdate', '$gender', '$address', '$contact', '$email', '$emergencyperson', '$emergencycon')";


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
