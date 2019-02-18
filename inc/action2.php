<?php
require('connection.php');

// Checking for the login credentials : login system

if(isset($_POST['submit']))
{

	// Escaping special characters and replacing quote with nothing

	$email = str_replace("'", "", $_POST['email']);
	$pass  = $_POST['password'];

	// Checking if the users submitted empty values

	if(!empty($email) && !empty($pass))
	{
		$query = "select * from users where email = '$email' and password = '$pass'";
		$result = mysqli_query($conn, $query);

		// Fetching the mysql result and checking if the user exist or not

		if(mysqli_num_rows($result) > 0)
		{
			// If the user exist create a new session variable with the logged user username as a value

			session_start();
			$row = mysqli_fetch_row($result);
			$_SESSION['logged_user'] = $row[3];
			header("Location: ../board.php");
		
		}else
		{
			header("Location: ../login.php?error=Email / Password incorrect please try again!");
		}

	}else
	{
		header("Location: ../login.php?error=Please fill in all the required fields!");
	}

// Inserting a new message to the database ( Send message )

}else if(isset($_POST['message']))
{
	// Escaping characters in the enteries
	
	$message = mysql_real_escape_string($_POST['message']);
	$username = mysql_real_escape_string($_POST['username']);

	if(!empty($message))
	{
		$query = "insert into messages values (0, '$message', '$username')";
		mysqli_query($conn, $query);

		header("Location: ../board.php");
	}

// Regestring a new user to the database

}else if(isset($_POST['username']))
{
	// Escaping characters in the enteries

	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = "insert into users values (0, '$email', '$password', '$username')";

	if(mysqli_query($conn, $query))
	{
		header("Location: ../signup.php?message=Your account has been created successfully!");

	}else
	{
		header("Location: ../signup.php?message=There was an error creating the account please try again later.");
	}
}
?>