<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> School Forum </title>
</head>
<body>
	<center>

		<a href="createpost.php"> Create New Post </a><br><br>
	<?php
		$query=mysqli_query($con,"SELECT * from school_forum");
		$cnt=1;
		
		while($row = mysqli_fetch_array($query))
		{
	?>
	<fieldset>
	<a href="viewpost.php?post_id=<?php echo $cnt; ?>">
		<?php echo $row['post_title']; ?><br>
	</a>
		<?php echo $row['post_creator']; ?>
		(<?php echo $row['creator_role']; ?>)<br>
		<pre style="font-family: Calibri;"><?php echo $row['post']; ?></pre>
		<br><br>
	<a href="viewpost.php?post_id=<?php echo $cnt; ?>"> View Comments </a>
	</fieldset>
	<?php	
		$cnt = $cnt+1;
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