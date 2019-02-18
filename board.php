<?php
session_start();
if(!isset($_SESSION['logged_user']))
	header("Location: login.php");
?>
<html>
<head>
	<title>Welcome to our new world</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/board.css">
</head>
<body>

	<script type="text/javascript">
		$(document).ready(function(){

			// Refreshing results every 2 seconds

			setInterval(function(){

				$("#container").load("inc/action.php");

				$('#container').animate({
		       		scrollTop: $('#container').get(0).scrollHeight
		    	}, 1000);

			}, 3000);

			$('#send').click(function(){
				var xm = $("#message").val();
				var us = $("#username").val();
				document.getElementById("message").value = "";
				$.post("inc/action2.php", {message: xm, username: us});
				$('#container').animate({
		       		scrollTop: $('#container').get(0).scrollHeight
		    	}, 2000);
			});
		});
	</script>

	
	<br><br>
		<table>
			<tr>
				<td><div></div></td><td style="text-align:center;font-family:Arial,Sans-serif"><h2>Express your ideas without limits!</h2></td><td><div></div></td>
			</tr>
			<tr>
				<td id="td1">
					
					<div id="logged"><?php
						echo '<img src="img/user2.png" width="80" height="80"></img>';
						echo '<p>' . $_SESSION['logged_user'].'<input type="hidden" id="username" value="'.$_SESSION['logged_user'].'"/> </p><a id="logout" href="inc/deconnect.php">Logout!</a>';

					?></div>
				</td>
				<td id="td2">
					
					<div>
						<div id="container">
							<!-- We will have data here! -->
						</div>
						<div id="second_container">
								<p><textarea type="text" id="message" name="message" maxlength="60" placeholder="Write your message here ..." required></textarea></p><center><input type="button" id="send" value="Send" ></center>
						</div>
					</div>
				</td>
				<td id="td3">
					<div>
						
					</div>
				</td>
			</tr>
		</table>
</body>
</html>