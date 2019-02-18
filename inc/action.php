<?php
session_start();
require('connection.php');

// Getting all the messages from the database

$query = "select * from messages";
$result = mysqli_query($conn, $query);

// Showing each message with a specific style

while($row = mysqli_fetch_row($result))
{
	// Showing messages of the logged users

	if($row[2] == $_SESSION['logged_user'])
	{
		echo "<div
		style='border:solid 1px black;
			   border-radius:20px;
			   padding:15px;
			   font-size:16px;
			   font-family:Arial, Sans-serif;
			   background-color:#82CCDD;

		'
		></span><img width='50' height='50' src='img/user2.png'/>&nbsp;&nbsp;".$row[1]."</div><br />";

	// Showing the messages of the others

	}else
	{
		echo "<div 
		style='border:solid 1px black;
			   border-radius:15px;
			   padding:20px;
			   font-size:16px;
			   font-family:Arial, Sans-serif;
			   background-color:#78E08F;
		'
		></span><img src='img/user1.png' width='50' height='50' >&nbsp;&nbsp;".$row[1]."</div><br />";
	}
}
?>