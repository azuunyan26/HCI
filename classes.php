<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Classes </title>
</head>
<body>
<center>
	<?php 
		$query=mysqli_query($con,"SELECT * from classroom_info where instructor_name = '".$_SESSION['username']."'");
		$cnt=1;

		while($row=mysqli_fetch_array($query))
		{
	?>
		<a href="classroominfo.php?classroom_code=<?php echo $row['classroom_code']; ?>"> <?php echo $row['subject_name']; ?> </a><br>
		<?php echo $row['subject_code']; ?><br>
		<?php echo $row['classroom_code']; ?><br>
		<?php echo $row['schedule']; ?><br>
		<?php echo $row['target_course']; ?> - <?php echo $row['target_year']; ?><?php echo $row['target_section']; ?><br>
		<?php echo $row['target_campus']; ?><br>
		<a href="classroominfo.php?classroom_code=<?php echo $cnt; ?>"> View Classroom Details </a><br><br>
	<?php 
		$cnt=$cnt+1;
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