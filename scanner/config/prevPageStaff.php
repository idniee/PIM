<?php
session_start();

if($_SESSION['pageStaff']>1){
  $_SESSION['pageStaff']--;

  $url1 = "../staffList.php";
  echo "<script> window.location = '$url1';</script>'";
}else{
  $url1 = "../staffList.php";
  echo "<script> window.location = '$url1';</script>'";
}
 ?>
