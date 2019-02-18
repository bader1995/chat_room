<!DOCTYPE html>
<html>
<head>
	<title>Social Network : Signup</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<?php
	if(isset($_GET['message']))
	{
		echo "<script>alert('".$_GET['message']."');</script>";
	}
	?>
	<div id="container">
		<table>
			<tr>
				<td><h2>Sign up and get a chance to express your ideas with no limits.</h2></td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td><input id="username" type="text" name="username" placeholder="Username" required></td>
			</tr>
			<tr>
				<td><input id="email" type="email" name="email" placeholder="E-mail" required></td>
			</tr>
			<tr>
				<td><input id="password" type="password" name="password" placeholder="Password" required></td>
			</tr>
			<tr>
				<td><input id="confirmation" type="password" name="confirmation" placeholder="Confirm your password" required></td>
			</tr>
			<tr>
				<td><input id="signup" type="button" name="signup" value="Sign up"></td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td>
					<input id="login" type="button" name="signup" value="Login">
				</td>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#signup').click(function(){

				var username = $('#username').val();
				var email = $('#email').val();
				var password = $('#password').val();
				
				if(username != "" && email != "" && password != "")
				{
					$.post("inc/action2.php", {
						username: username,
						email: email,
						password: password,
						success:function()
						{
							alert("Your account has been created successfully!");
						}
					});

				}else
				{
					alert("Please fill all the required fields before submitting!");
				}

			});

			$('#login').click(function(){
				window.location = "login.php";
			});
		});
	</script>
</body>
</html>