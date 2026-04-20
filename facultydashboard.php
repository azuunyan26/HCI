<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Faculty Dashboard </title>
</head>
<body>
	<form method="post">

		<label> Select Action </label><br>
		<select name="status">
			<option value="Time - in"> Time-in </option>
			<option value="Time - out"> Time-out </option>
		</select><br>
		<input type="submit" name="btn" value="Go">
	</form>
	<center>
	<a href="facultyprofile.php"> Profile </a><br><br>
	<a href="schoolforum.php"> School Forum </a><br><br>
	<a href="classes.php"> Classes </a><br><br>

	</center>
</body>
</html>

<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$username = $_SESSION['username'];
		$status = $_POST['status'];
		$_SESSION['checkin_time'] = $checkin_time = date_create()->format('Y-m-d H:i:s');

		$sql = "INSERT into attendance_sheet(username, status, checkin_time) values('$username','$status','$checkin_time')";

		if ($con->query($sql) === TRUE)	{
          			
          	header('location: ?success');
        } else {
       		echo "Error: " . $sql . "<br>" . $con->error;
   			header('location: ?error');
        }

	}

	}else{
		header('location:logout.php');
	}	
?>