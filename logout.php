<?php
session_start(); 		// used to access the existing session
if(isset($_SESSION['name']))
{
	session_destroy();												//used to destroy the session immediately

	header("Location:login.php");
	//	or 			window.href="signin.php";
}
else{
	echo "You must be logged in to log out";
}

?>