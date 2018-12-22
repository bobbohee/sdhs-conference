<?php include("config.php"); ?>
<?php 
  $sid = 0;
  $best = "";
  $good = "";
  $improve = "";

  if ( isset($_POST['sid']) ) {
    $sid = $_POST['sid'];
  }
  if ( isset($_POST['best']) ) {
    $best = $_POST['best'];
  }
  if ( isset($_POST['good']) ) {
    $good = $_POST['good'];
  }
  if ( isset($_POST['improve']) ) {
    $improve = $_POST['improve'];
  }

  $sql = "INSERT INTO student (sid, best, good, improve) VALUES($sid, '{$best}', '{$good}', '{$improve}')";
  $res = mysqli_query($con, $sql);  

  header("Location: lucky.php?sid={$sid}");
?>