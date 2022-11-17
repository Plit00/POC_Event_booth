<? session_start(); ?>
<meta charset="utf-8">
<html>
<body bgcolor=white>
<?

if ( get_magic_quotes_gpc() != 1 ) {
	$_GET = array_map('addslashes', $_GET);
	$_POST = array_map('addslashes', $_POST);
}
include("dbconnected.php");

if(!$_POST["problem_id"] || !$_POST["flag"]) {
	echo "<script>alert('NO INPUT!');self.close();</script>";
	exit();
}

$obj = (object)array("isFlagValid", "");

$obj->{"isFlagValid"} = mysql_fetch_array(mysql_query("
	SELECT
		COUNT(*),
		score
	FROM
		Problem
	WHERE
		problem_id = '{$_POST["problem_id"]}' AND flag = '{$_POST["flag"]}';
", $connect));

// echo $obj->{"isFlagValid"}["COUNT(*)"]."\n";
// echo $obj->{"isFlagValid"}["score"];

if($obj->{"isFlagValid"}["COUNT(*)"] == 1){
	$isAuth = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM Auth WHERE problem_id = '{$_POST["problem_id"]}' AND user_id = '{$_SESSION["user_id"]}';", $connect));

	if((int)$isAuth["COUNT(*)"]) {
		echo "<script>alert('Already Solve!');self.close();</script>";
		exit(1);
	}
	else {
		// mysql_query("INSERT INTO Auth (user_id, problem_id, score, Clear_time) VALUES ('{$_SESSION["user_id"]}', '{$_POST["problem_id"]}', '{$obj->{"isFlagValid"}["score"]}', '0');", $connect);
	}
	// flag valid
	mysql_query("UPDATE `User` SET `Auth_Token` = 2 WHERE `user_name`='{$_SESSION["user_id"]}' and `Auth_Token`=1;", $connect);
	echo "<script>alert('Correct!');self.close();</script>";
	exit(1);
}
else {
	// flag invalid
	echo "<script>alert('Incorrect :(');self.close();</script>";
	exit(1);
}






// $NOquery = "SELECT Problem FROM answer where answer='".$answer."';";
// $NOresult = mysql_query($NOquery, $connect);
// $NOresult2 = mysql_fetch_array($NOresult);//  변수에 문제 번호정보
//
// $alreadygetquery = "select ".$NOresult2[0]." from Problem_complete where user_id='".$id."';";
// $resultalreadyget = mysql_query($alreadygetquery, $connect);
// $result1 = mysql_fetch_array($resultalreadyget);// 변수에 해당 문제의 인증 여부가
//
// $answerquery = "select * from answer where answer = '".$answer."';";
// $answerresult = mysql_query($answerquery, $connect);
// $answerresult2 = mysql_num_rows($answerresult);// 변수로 해당 인증 코드가 데이터베이스에 담겨있는지 확인
//
// $scorequery = "select score from answer where answer='".$answer."';";
// $scoreresult = mysql_query($scorequery, $connect);
// $scoreresult= mysql_fetch_array($scoreresult);// 변수에 해당 인증 코드의 점수

// $strangerfilter = mysql_num_rows($strangerquery);
// if($answerresult2 == 1){
// 	echo "<script>alert('correct.');</script>";
// 	// echo "<script>alert('대회가 종료되어 점수는 인정되지 않습니다.');</script>";
// 	if($result1[0] == "1"){
// 		echo "<script>alert('alreadt clear');</script>";
// 		echo "<script>history.back()</script>";
// 	}
// 	echo "<script>history.back()</script>";
// }
// else {
// 	echo "<script>alert('정답이 아닙니다.');</script>";
// 	echo "<script>history.back()</script>";
// }
?>
</body>
</html>
