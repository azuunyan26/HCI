<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Classwork Details </title>
</head>
<body>
	<?php
		$classwork_id = $_GET['classwork_id'];
		$subject_code = $_GET['subject_code'];
		$classroom_code = $_GET['classroom_code'];
		$target_course = $_GET['target_course'];
		$target_year = $_GET['target_year'];
		$target_section = $_GET['target_section'];
		$target_campus = $_GET['target_campus'];

		$query=mysqli_query($con,"SELECT * from classwork_info where target_course = '$target_course' and target_year = '$target_year' and target_section = '$target_section' and target_campus = '$target_campus'");
		$cnt=1;

		while($row=mysqli_fetch_array($query))
		{
	?>
		<?php echo $row['classwork_name']; ?><br>
		<?php echo $row['classwork_filename']; ?><br>
		<?php echo $row['classwork_time']; ?><br>
		<?php echo $row['classwork_deadline']; ?><br>
	<?php 
		$cnt=$cnt+1;
		}
	?>
</body>
</html>

<?php 

	}else{
		header('location:logout.php');
	}	
?>