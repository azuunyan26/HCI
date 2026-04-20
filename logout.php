<?php
	session_start();
	include('dbconnector.php');
// Getting  logout time in db
	$username=$_SESSION['username'];
	$role = $_SESSION['role'];
	$_SESSION['action_time'] = $action_time = date_create()->format('Y-m-d H:i:s');
	$action="Logout";
// query for inser user log in to data base
	$query=mysqli_query($con,"INSERT into activity_log(username,role,action,action_time) values('$username','$role','$action','$action_time')");

	if($query){
// Destroying All Sessions
	session_unset();
	session_destroy();
// Redirecting To Home Page
	header("Location: login.php");
	}
?>