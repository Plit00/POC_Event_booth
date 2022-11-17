<?php
session_start();
if(!isset($_SESSION['user_id'])){
  echo "<meta http-equiv='refresh' content='0;url=../login.html'>";
  exit();
}
include("dbconnected.php");
$host = 'sql204.epizy.com';
$user = 'epiz_22937386';
$pw = 'pnwwe6eBXpRPgY5';
$dbName = 'epiz_22937386_Login';
$mysqli = new mysqli($host, $user, $pw, $dbName);


$ProbList = mysql_query("SELECT * FROM Problem WHERE status = 1", $connect);
$query = $mysqli->query("SELECT * FROM `User` WHERE `user_name`='{$_SESSION["user_id"]}'") or die($mysqli-error);
$row_token = $query->fetch_row();
$Auth_Token = $row_token[4];
$unique_num = $row_token[1];

$query = $mysqli->query("SELECT * FROM `Problem` WHERE `problem_id`=2") or die($mysqli-error);
$row_problem = $query->fetch_row();
$flag = $row_problem[2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>POC-EVENT VR HACKING CTF</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">VR MINI CTF</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Problem
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="Testing_Your_Memory_Power.php?problem_id=1">Testing_Your_Memory_Power</a>
            <a class="dropdown-item" href="Spooky_Calling.php?problem_id=2">Spooky_Calling</a>
            <a class="dropdown-item"href="INFINITE_Boss.php?problem_id=3">INFINITE_Boss</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rank
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="mainchallege.php">Main Rank</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
            echo $_SESSION['user_id'];
            ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <?php
            echo "<a class='dropdown-item' href='Unique_num_chk.php?user_name=".$_SESSION['user_id']."'>"."My Unique Number"."</a>";
            ?>
            <!-- <a class="dropdown-item" href="Unique_num_chk.php?user_name=">My Unique Number</a> -->
            <a class="dropdown-item" href="Logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">
    Main Challenge
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active"></li>
  </ol>

  <!-- Project One -->
  <hr>

  <!-- Project Two -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="./image/spooky.png" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Spooky Calling</h3>
      <p>
        The telephon on the plank is ringing.
        But what about the plank on a skyscraper? (๑°ㅁ°๑)‼
      Answer the phone and get the flag!</p>
      <!-- action="./prl_answer.php" method="post" -->
      <form name="Flag" action="./prl_answer.php" method="post" target="_blank">
        <input type="hidden" name="problem_id" value='<?=$_GET['problem_id'];?>'>
        <input type='text' name='flag' id="flag" placeholder="VRMiniCTF{}">
        <input type="submit" name="Flag_auth" id="Flag_auth" value="Submit" onclick="STOP_ON()">
        <input type="button" name="Timer_Start" id="start_timer" value="Start!" onclick="start()">
        <input type="button" name="Timer_Stop" id="save_time" value="Stop!" onclick="save()" disabled="">
      </form>

      <script type="text/javascript">
    var sec = 600; // 10분 == 600초
    var unique_num = '<?=$unique_num?>';
    var problem_id = '2';

    function start(){
     document.Flag.Timer_Start.disabled=true;
     timer = self.setInterval('decrement()', 1000);
   }

   function decrement(){
     sec--;
     m = Math.floor(sec/ 60) + "m " + (sec % 60) + "s";
     document.getElementById('time_out').innerHTML = "<h2>"+m+"</h2>";
   }

   function save(){
    location.href="time_save.php?time=" + sec + "&unique_num="+unique_num+"&problem_id="+problem_id;
  }
</script>

<br/> <span id="time_out"><h2>0.00</h2></span>
</div>
</div>
<!--
    ###Auth_Token Check Script###
  -->
  <script>
    //alert('<?=$Auth_Token?>');
    var Auth_Token = '<?=$Auth_Token?>';
    if(Auth_Token=='1')
    {
      document.Flag.Flag_auth.disabled=false;
    }
    else
    {
      //alert("You are haven't Token!");
      document.Flag.Flag_auth.disabled=true; // true = 비활성화 / false = 활성화
    }
    function STOP_ON()
    {
      var input_flag = jQuery("input[name='flag']").val()
      var Flag = '<?=$flag?>';
      if(input_flag == Flag)
      {
        document.Flag.Timer_Stop.disabled=false;
      }
    }   



  </script>
  <!-- VRMiniCTF{F1rst_l0ve_is_unr3qit3d_l0ve} -->
 


  <hr>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">POC &copy; Team SCP</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
