<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Classroom </title>
</head>
<body>
	<center>
	
	<?php 
		$classroom_code = $_GET['classroom_code'];
		$query=mysqli_query($con,"SELECT * from classroom_info where classroom_code = '$classroom_code'");
		$cnt=1;
		while($row=mysqli_fetch_array($query))
		{
	?>
	<fieldset>
		<b> <?php echo $row['subject_name']; ?> </b><br>
		<?php echo $row['subject_code']; ?><br>
		<?php echo $row['schedule']; ?><br>
		<?php echo $row['target_course']; ?> - <?php echo $row['target_year']; ?><?php echo $row['target_section']; ?><br>
		<?php echo $row['classroom_code']; ?><br>
	
		<?php 
			$course = $row['target_course'];
			$year = $row['target_year'];
			$section = $row['target_section'];
			$campus = $row['target_campus'];
		?>

		<a href="studentlist.php?target_course=<?php echo $course ?>&target_year=<?php echo $year; ?>&target_section=<?php echo$section; ?>&target_campus=<?php echo$campus; ?>"> Students </a>&nbsp;&nbsp;&nbsp;
		<a href="messages.php?target_course=<?php echo $course ?>&target_year=<?php echo $year; ?>&target_section=<?php echo$section; ?>&target_campus=<?php echo$campus; ?>?"> Messages </a>
	</fieldset>
	<fieldset>
		<a href="createclasspost.php"> Create Post </a>
	</fieldset>
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