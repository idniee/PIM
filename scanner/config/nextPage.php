<?php
session_start();
$hostname='localhost';
$database='pim';
$userdb='root';
$passwd='';

$virtual_con=mysqli_connect($hostname,$userdb,$passwd,$database);


$sql = "SELECT * FROM product";
$result = mysqli_query($virtual_con,$sql);
$rowCount = mysqli_num_rows($result);
$count1=0;
while($listProd2=mysqli_fetch_assoc($result)){
  $listProd[$count1] = $listProd2;
  $count1++;
}

$page = ceil($rowCount/6);

if($_SESSION['page']<$page){
  ++$_SESSION['page'];

    echo "<script>window.location.href='../productMain.php';</script>";
}else{
    echo "<script>window.location.href='../productMain.php';</script>";
}
 ?>
