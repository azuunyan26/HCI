<?php 
	session_start();
	include('dbconnector.php');
	if($_SESSION['username'])
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title> Create Post </title>
</head>
<body>
	<center>
	<form method="post">
		<label> Post Title </label><br>
		<input type="text" name="post_title"><br>
		<label> Post Content </label><br>
		<textarea name="post" rows="5" cols="35"></textarea><br>
		<button style="width: 150px; height: 50px"> Create Post </button>
	</form>
	</center>
</body>
</html>

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$post_title = $_POST['post_title'];
		$post = $_POST['post'];
		$_SESSION['post_date'] = $post_date = date_create()->format('Y-m-d H:i:s');

		$sql = "INSERT into school_forum(post_creator, creator_role, post_title, post_date, post) values('".$_SESSION['username']."','".$_SESSION['role']."','$post_title','$post_date','$post')";
		
				if ($con->query($sql) === TRUE)
       			{
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