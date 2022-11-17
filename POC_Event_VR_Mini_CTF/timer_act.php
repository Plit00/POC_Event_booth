<?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$dbConnect = new mysqli($host, $user, $pw, $dbName);

$unique_num =$_POST['Unique_Number'];
$problem_num=$_POST['Problem_Number'];


$query = $dbConnect->query("SELECT COUNT(`user_id`) FROM `User` WHERE `user_id`='$unique_num'") or die($dbConnect-error);
$row = $query->fetch_row();

// $query = $dbConnect->query("SELECT COUNT(`problem_id`) FROM `Problem` WHERE `problem_id`='$problem_num'") or die($dbConnect-error);
// $row_2 = $query->fetch_row();

$unique_count = $row[0];

if($unique_count)
{

	$query = $dbConnect->query("UPDATE `User` SET `Auth_Token` = 1 WHERE `user_id`='$unique_num'");
	if($query)
	{
		echo "<script>alert('Auth_Token SET OK!');location.href='timer.html';</script>";		
	}
}
else
{
	echo "<script>alert('NOT FOUND UNIQUE_NUMBER!');location.href='timer.html';</script>";
}

?>