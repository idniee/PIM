<?php
session_start();

if($_SESSION['page']>1){
  $_SESSION['page']--;

  $url1 = "../productMain.php";
  echo "<script> window.location = '$url1';</script>'";
}else{
  $url1 = "../productMain.php";
  echo "<script> window.location = '$url1';</script>'";
}
 ?>
