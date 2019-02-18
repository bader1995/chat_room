<?php
	
	// Creating a new connection to the database

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   = "chat_room";

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Error in connecting to the database");
?>