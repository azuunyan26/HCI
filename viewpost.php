<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{

	$post_id = $_GET['post_id'];
	$query=mysqli_query($con,"SELECT * from school_forum where post_id = '$post_id'");
	$cnt=1;
		
	while($row = mysqli_fetch_array($query))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $row['post_title']; ?> </title>
</head>
<body>
	<center>
	<?php echo $row['post_creator']; ?><br>
	<?php echo $row['creator_role'];?><br>
	<?php  echo $row['post_date'];  ?><br>
	<?php echo $row['post_title']; ?>
	<pre><?php echo $row['post']; ?></pre><br>
	
		<form method="post">
			<label> Leave a Comment : </label>
			<input type="text" name="comment"><input type="submit" name="n" value="Post">
				<?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$comment = $_POST['comment'];
					$_SESSION['comment_date'] = $comment_date = date_create()->format('Y-m-d H:i:s');

					$comment_query = "INSERT into forum_comments(post_id, commenter, commenter_role, comment_date, comment) values ('$post_id', '".$_SESSION['username']."', '".$_SESSION['role']."', '$comment_date', '$comment')";

					if ($con->query($comment_query) === TRUE){
         				header('location: ?post_id='.$post_id.'');
        			} else {
          				echo "Error: " . $comment_query . "<br>" . $con->error;
          				header('location: post_id='.$post_id.'?error');
        			}

					}		
				?>
		</form>	
	<h3>Comments : </h3>
	</center>
	<fieldset>
		<?php 
			$comment_query = mysqli_query($con,"SELECT * from forum_comments where post_id = '$post_id'");
			$count = 1;
	
			while($rawr = mysqli_fetch_array($comment_query))
			{
		?>		
			<?php echo $rawr['commenter']; ?><br>
			<?php echo $rawr['commenter_role']; ?><br>
			<?php echo $rawr['comment_date']; ?><br>
			<pre> <?php echo $rawr['comment']; ?> </pre>
===================================================================================================================================================<br>
		<?php 
			$count = $count+1;
			}
		?>
	</fieldset>
</body>
</html>

<?php
	$cnt = $cnt+1;
	}
	}else{
		header('location:logout.php');
	}	
?>