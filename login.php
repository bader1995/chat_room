<?php
session_start();

// Checking if the user is already logged

if(isset($_SESSION['logged_user']))
	header("Location: board.php");
?>
<html>
<head>
	<title>Social Network : Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div id="container">
		<form method="post" action="inc/action2.php">
			<p>
				<?php 

				// Displaying error if there is any

				if(isset($_GET['error']))
				{ 
					echo "<script>alert('".$_GET['error']."');</script>";

				}

				?></p>
			<table>
				<tr>
					<td><h2 style='color:white'>Login</h2></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="E-mail address" required></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td><input type="button" id="signup" name="signup" value="Sign up"></td>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
		$("#signup").click(function(){
			window.location = "signup.php";
		});
	</script>
</body>
</html>