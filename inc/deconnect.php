<?php

// Disconnecting from the current session by destroying it

session_start();
session_destroy();
header("Location: ../login.php");

?>