<?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$dbConnect = new mysqli($host, $user, $pw, $dbName);

$user_name = $_GET['user_name'];

$query = $dbConnect->query("SELECT `user_id` FROM `User` WHERE `user_name`='$user_name'") or die($dbConnect-error);
$row = $query->fetch_row();

echo "<script>alert('Your Unique Number is '+$row[0]);location.href='index.php';</script>";





?>