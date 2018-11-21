<?php
session_start();				//in every page u use sessions u must include session start
					// used to access the already existing session
if(isset($_SESSION['name']))
{

	echo "Welcome, ".$_SESSION['name'];				//sessions can also be used to transfer data b/w pages
	echo "<br><br><br><a href='logout.php'>LOGOUT</a>";
}
else
	echo "u must be logged in to access this page";		//when u close the browser tab, the session is destroyed
																										
?>