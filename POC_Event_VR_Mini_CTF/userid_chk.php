<?php
 $host = 'sql204.epizy.com';
 $user = 'epiz_22937386';
 $pw = 'pnwwe6eBXpRPgY5';
 $dbName = 'epiz_22937386_Login';
 $dbConnect = new mysqli($host, $user, $pw, $dbName);

 $id=$_GET['userid'];
 
 $query="select count(*) from User where user_id='$id'";
 $result=mysql_query($query,$dbConnect);
 $row=mysql_fetch_array($result);
 

 mysql_close($conn);

?>
<script>
 var row="<?=$row[0]?>";
 if(row==1){
 parent.document.getElementById("chk_id2").value="0";
 parent.alert("이미 사용중인 아이디입니다.");
 }
 else{
 parent.document.getElementById("chk_id2").value="1";
 parent.alert("사용 가능합니다.");
 }
</script>