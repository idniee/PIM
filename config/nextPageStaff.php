<?php
session_start();
$hostname='localhost';
$database='pim';
$userdb='root';
$passwd='';

$virtual_con=mysqli_connect($hostname,$userdb,$passwd,$database);


$sql = "SELECT * FROM employee_staff";
$result = mysqli_query($virtual_con,$sql);
$rowCount = mysqli_num_rows($result);
$count1=0;
while($listProd2=mysqli_fetch_assoc($result)){
  $listProd[$count1] = $listProd2;
  $count1++;
}

$page = ceil($rowCount/3);

if($_SESSION['pageStaff']<$page){
  ++$_SESSION['pageStaff'];

    echo "<script>window.location.href='../staffList.php';</script>";
}else{
    echo "<script>window.location.href='../staffList.php';</script>";
}
 ?>
