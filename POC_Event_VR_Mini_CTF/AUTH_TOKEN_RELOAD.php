<?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$mysqli = new mysqli($host, $user, $pw, $dbName);

$query = $mysqli->query("SELECT * FROM `User` WHERE `user_name`='{$_SESSION["user_id"]}'") or die($mysqli-error);
$row_token = $query->fetch_row();
$Auth_Token = $row_token[4];

?>