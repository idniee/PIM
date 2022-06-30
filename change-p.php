<?php
include_once('config/all.php');

$username = $_SESSION['usersession'];
$user;
if($_SESSION['userjob'] == 'Manager'){
  $sql = "SELECT * FROM employee_manager WHERE emp_ID='".$username."'";
  $result = mysqli_query($virtual_con,$sql);
  $user = mysqli_fetch_assoc($result);
}else{
  $sql2 = "SELECT * FROM employee_staff WHERE emp_ID='".$username."'";
  $result2 = mysqli_query($virtual_con,$sql2);
  $user = mysqli_fetch_assoc($result2);
}

$sql3 = "SELECT * FROM employee_staff";
$result3 = mysqli_query($virtual_con,$sql3);
$rowCount = mysqli_num_rows($result3);
$counter=0;
while($listStaff2=mysqli_fetch_assoc($result3)){
  $listStaff[$counter] = $listStaff2;
  $counter++;
}
if(!isset($_SESSION['pageStaff'])){
  $_SESSION['pageStaff'] = 1;
}


if (isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);

    if(empty($op)){
      header("Location: change-password.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: change-password.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password

    	$op1 = $op;
    	$np = $_POST['np'];

if($_SESSION['userjob'] == 'Manager'){
  
  $sql = "SELECT emp_Pass FROM employee_manager WHERE emp_ID='".$username."' AND emp_Pass='$op1'";

  $result = mysqli_query($virtual_con, $sql);

  if(mysqli_num_rows($result) === 1){

    $sql_2 = "UPDATE employee_manager SET emp_Pass='$np' WHERE emp_ID='".$username."'";

    mysqli_query($virtual_con, $sql_2);
    header("Location: change-password.php?success=Your password has been changed successfully");
    exit();

  }else {
    header("Location: change-password.php?error=Incorrect password");
    exit();
  }

}


  else{
        $sql = "SELECT emp_Pass FROM employee_staff WHERE emp_ID='".$username."' AND emp_Pass='$op1'";

        $result = mysqli_query($virtual_con, $sql);

        if(mysqli_num_rows($result) === 1){

        	$sql_2 = "UPDATE employee_staff SET emp_Pass='$np' WHERE emp_ID='".$username."'";

        	mysqli_query($virtual_con, $sql_2);
        	header("Location: change-password.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: change-password.php?error=Incorrect password");
	        exit();
        }
      }

    }


}else{
	header("Location: change-password.php");
	exit();
}
?>
