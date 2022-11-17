<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header ('Location: ./login.html');
}

echo "login succesful";

echo "<a href=logout.php>Logout</a>";

?>