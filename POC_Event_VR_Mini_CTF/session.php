<?php
    session_start();
   $Id=$_POST['id'];
   $Password=$_POST['pass'];
   $mysqli=mysql_connect("localhost","root","wldbs11","Login");

   $check="SELECT * FROM user_info WHERE userid='$id'";
   $result=$mysqli->query($check);
   if($result->num_rows==1){
   	$row=$result->fetch_array(MYWQLI_ASSOC);
   	if($row['pass']==$Password){
   		$_SESSION['id']=$id;
   		if(isset($_SESSION['userid']))
   		{
   			header('Location: ./main.php');
   		}
   		else{
   			echo "session fail";
   		}
   	}
   	else{
   		echo "wrong id or pw";
   	}
}
else{
	echo "wrong id or pw";
}

?>