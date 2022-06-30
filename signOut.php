<?php
  include('config/all.php');
  $url='index.php';

  session_destroy();
  echo " <script> window.location = '$url';</script>'";
 ?>
