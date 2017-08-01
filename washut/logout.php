<?php require("includes/new_functions.php"); ?>

<?php

	//1. Find the session
	session_start();
	//2.unset all session variables
	$_SESSION = array();

	//3.Destrop yhe session cookie
	if(isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(), '', time()-42000, '/');
	}

	//4.destroy the session
	session_destroy();

	redirect_to("index.php");
?>
