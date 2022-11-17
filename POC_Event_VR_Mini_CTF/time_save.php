<?php
header('Content-Type: text/html; charset=UTF-8');
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$dbConnect = new mysqli($host, $user, $pw, $dbName);



$time=$_GET['time'];
$unique_num=$_GET['unique_num'];
$problem_id=$_GET['problem_id'];

//문제 번호에 따른 초기 Score 설정
switch($problem_id)
{
	case '1':
	$score=150;
	$dead_time=60;
	break;

	case'2':
	$score=150;
	$dead_time=60;
	break;

	case'3':
	$score=300;
	$dead_time=90;
	break;
}

echo "=================<br/>\n";
echo "\nProblem_Score:".$score;
$time_gap = floor(($time/10)); // time값 소수점 버리고 10으로 나눈 몫 저장
$minus_score = $dead_time- $time_gap; // 10분(600초)에서 10초씩 지날때마다 1점 차감 연산식

if($time_gap==($dead_time-1)) // 10초안에 클리어 했을 경우, 차감 스코어 없음
{
	$minus_score = 0;
}

if($time/10 == 0.0) // 제한 시간 초과 시, Score 0점
{
	$minus_score = $score;
}

echo "<br/>\nMinus_Score:".$minus_score;
$final_score = $score-$minus_score;
echo "<br/>\nFinal_Score:".$final_score;
echo "<br/>\n=================<br/>\n";

echo "=================<br/>\n";
echo "\n문제 점수:".$score;
echo "<br/>\n감점된 점수:".$minus_score;
$final_score = $score-$minus_score;
echo "<br/>\n최종 점수:".$final_score;
echo "<br/>\n=================<br/>\n";

$sql = "insert into Auth(user_id,problem_id,score,Clear_Time)";
$sql = $sql."values('$unique_num','$problem_id','$final_score','$time')";
if($dbConnect->query($sql)){
		echo "<script>alert('Success Save!');window.close();</script>";

	}else{
		echo "<script>alert('Failed Save!');window.close();</script>";
	}


?>