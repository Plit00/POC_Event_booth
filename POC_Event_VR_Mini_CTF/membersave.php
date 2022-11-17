<?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$mysqli = new mysqli($host, $user, $pw, $dbName);

$user_name=$_POST['user_name'];
$password=md5($_POST['pass']);
$password2=md5($_POST['pass2']);
$email=$_POST['Email'];

/* ID Duplicated Check */
$query = $mysqli->query("SELECT COUNT(`user_name`) FROM `User` WHERE `user_name`='$user_name'") or die($mysqli-error);
$row = $query->fetch_row();
$count = $row[0];

if($count)
{
	echo "<script>alert('Input ID is duplicated!');location.href='register.html';</script>";
}
else
{
	/* PASSWORD Match Check */
	if ($password==$password2) {
		$sql = "insert into User(user_name,password,user_email)";
		$sql = $sql."values('$user_name','$password','$email')";
		if($mysqli->query($sql)){
			echo "<script>alert('Successed Register!');location.href='index.php';</script>";

		}else{
			echo "<script>alert('Failed Register!');location.href='register.html';</script>";
		}

	}
	else
	{
		echo "<script>alert('No Match Password!');location.href='register.html';</script>";
	}
}

?>