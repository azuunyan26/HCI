<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{

?>

<!DOCTYPE html>
<html>
<head>
	<title> Student List </title>
</head>
<body>
	<center>
	<b><h3> Student List </h3></b>
	<table align="center" border="1">
			<tr>
				
				<th> Student Number </th>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Middle Name </th>
				<th> Contact Number </th>
				<th> Email Address </th>
			</tr>	
	<?php 
		
		$course = $_GET['target_course'];
		$year = $_GET['target_year'];
		$section = $_GET['target_section'];
		$campus = $_GET['target_campus'];
		$query=mysqli_query($con,"SELECT * from student_info where course = '$course' and year = '$year' and section = '$section' and campus = '$campus'");
		$cnt=1;

		while($row=mysqli_fetch_array($query))
		{
	?>
		<tr>
				
				<td><?php echo $row['student_no'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['sname'];?></td>
				<td><?php echo $row['mname'];?></td>
				<td><?php echo $row['contact']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
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