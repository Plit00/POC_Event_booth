<?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$dbConnect = new mysqli($host, $user, $pw, $dbName);

$memberId = $_POST['memberId'];
$memberPw = md5($_POST['memberPw']);

$sql = "SELECT * FROM User WHERE user_name = '{$memberId}' AND password = '{$memberPw}'";
$res = $dbConnect->query($sql);


$row = $res->fetch_array(MYSQLI_ASSOC);


if ($row != null) {
    
    /* echo $_SESSION['ses_userid'].'Hi'; */
    session_start();
    $_SESSION['user_id'] = $row['user_name'];
    echo "<script>alert('Welcome!');location.href='index.php';</script>";
    
   /* echo 'Logout?'; */
}

if($row == null){
    echo "<script>alert('Incorrect ID or PW!');location.href='index.php';</script>";
}
?>
