 <?php
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$dbConnect = new mysqli($host, $user, $pw, $dbName);
     
    //카테고리 구분자 퍼옴  
    //  ex)카테고리이름
    //  제조사 Acrua -> 년도 2011 -> 모델명 hyhf05 -> 기타 추가품 HKI005
    //  001 -> 001002 -> 001002001 -> 001002001004
 
    $cateval = $_REQUEST['cateval'];
    $cateval_len=strlen($cateval);
     
    $sbvsql = "SELECT * FROM User where CHARACTER_LENGTH(user_id)=9 and LEFT(user_id,6)='".$cateval."' order by ASC";
//ex)"SELECT * FROM category where CHARACTER_LENGTH(category)=9 and LEFT(category,6)='".$cateval."' order by sno";
    $sbvlist=mysql_query($sbvsql, $dbConnect);
    $sbvnum = mysql_num_rows($sbvlist);
    $sbvnum=$sbvnum+1;
//결과 없을경우 셀박스를 띄우기 않음
if($sbvnum>1){
//아래 셀렉트 박스 id 와 네임을 2단(get_cate2.php)의 경우 sel3 3단(get_cate3.php)의 경우 sel4
echo "<select id="sel2" name="sel2" style="width:140px" onchange="update_cate2()">";
    while($sbvrow=mysql_fetch_array($sbvlist)){
    echo"<option value="$sbvrow[user_id]">$sbvrow['$i']</option>";
    $i++;
    }
    echo "</select>";
}else{
 
}
?>