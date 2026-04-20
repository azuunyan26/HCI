<?php
session_start();
include('dbconnector.php');
$username=$_SESSION['username'];
$role = $_SESSION['role'];
$_SESSION['action_time'] = $action_time = date_create()->format('Y-m-d H:i:s');
$action="Selected Monitor Log";
// query for inser user log in to data base
$query=mysqli_query($con,"INSERT into activity_log(username,role,action,action_time) values('$username','$role','$action','$action_time')");

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
	<div class="container-fluid navbar-1 " style="margin-bottom:2em;">
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

	<div class="table-responsive-md mx-auto" style="width:65%;">
		<table  class="table table-sm table-bordered table-striped">
			<thead class="thead-primary">
			<tr>
				<th>User Name</th>
				<th>Role</th>
				<th><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action Performed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></th>
				<th>Action Time</th>
			</tr>
			<?php
				$query=mysqli_query($con,"SELECT * from activity_log");
				$cnt=1;

				while($row=mysqli_fetch_array($query))
				{
			?>
			<tr>

				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['role'];?></td>
				<td><?php echo $row['action'];?></td>
				<td><?php echo $row['action_time'];?></td>
			</tr>
			<?php
				$cnt=$cnt+1;
				}
			?>
		</table>
</div>

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
}
}else{
	header('location:logout.php');
}
?>
