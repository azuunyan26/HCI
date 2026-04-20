<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Your Profile </title>
</head>
<body>
	<center>
	<?php 
		$query=mysqli_query($con,"SELECT * from faculty_info where username = '".$_SESSION['username']."'");
		$cnt=1;

		while($row=mysqli_fetch_array($query))
		{
	?>
		<form method="POST" action="facultyprofile.php" enctype="multipart/form-data">
		<label> Profile Picture </label><br>
		<?php echo "<img src='profile pictures/".$row['profile_picture']."' >"; ?><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="file" name="profile_picture"> <br>
  	 	<button type="submit" name="upload">Set Profile Picture</button><br><br>

		<b><label> Employee Number </label><br></b>
		<?php echo $row['employee_no']; ?><br><br>
		
		<b><label> Username </label><br></b>
		<?php echo $row['username']; ?><br><br>

		<label> </label>
		<a href="password.php"> Change Password </a><br><br>

		<b><label> First Name </label><br></b>
		<?php echo $row['fname']; ?><br><br>

		<b><label> Middle Name </label><br></b>
		<?php echo $row['mname']; ?><br><br>

		<b><label> Last Name </label><br></b>
		<?php echo $row['sname']; ?><br><br>

		<b><label> Age </label><br></b>
		<?php echo $row['age']; ?><br><br>
		
		<b><label> Birthdate </label><br></b>
		<?php echo $row['bdate']; ?><br><br>

		<b><label> Gender </label><br></b>
		<?php echo $row['gender']; ?><br><br>

		<b><label> Address </label><br></b>
		<?php echo $row['address']; ?><br><br>
	
		<b><label> Contact Number </label><br></b>
		<?php echo $row['contact']; ?><br><br>

		<b><label> Email Address </label><br></b>
		<?php echo $row['email']; ?><br><br>

		<b><label> In case of Emergency Contact : </label><br></b>
		<?php echo $row['emergencyperson']; ?><br><br>

		<b><label> Contact Info :  </label><br></b>
		<?php echo $row['emergencycontact']; ?><br><br>
				
		</form>	
			
	<?php 
		$cnt=$cnt+1;
		}


  	  	if ($_SERVER["REQUEST_METHOD"] == "POST") {

  			$picture_name = $_FILES['profile_picture']['name'];
  			$picture_path = "profile pictures/".basename($picture_name);
  			$sql = "UPDATE faculty_info set profile_picture = '$picture_name' where username = '".$_SESSION['username']."'";
  			mysqli_query($con, $sql);
  			if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $picture_path)) {
  				header('location: ?success');
  			}else{
  				echo  "Action Unsuccessful";
  	  		}
  	  	} 
	?>
	</center>
</body>
</html>

<?php 
	
	}else{
		header('location:logout.php');
	}	
?>