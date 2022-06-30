<?php
include_once('config/all.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/x-icon" href="images/logo.ico"/>
    <title>Pharmacy Iventory Management|Home</title>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/custombs.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menubuttonsystemindex.css">
    <script type="text/javascript" src="js/custom.js">

    </script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

    <style>
    .dropbtn {
      background-color: #9370DB;
      color: white;
      padding: 6px;
      font-size: 25px;
      border: none;
      border-radius: 10px;
    }

    .dropdown {
      position: relative;
      display: inline-block;
      margin-left: 10px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 50px;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      border-radius: 40px;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #DA70D6;}

    .pim{
      margin: 0px 95px 0px 0px;
    }
    .staff{
      margin: 0px 20px 0px 50px;
    }
    </style>
  </head>
  <body>
    <?php
    if(isset($_SESSION['usersession'])){

    $username = $_SESSION['usersession'];
    $user;
    if($_SESSION['userjob'] == 'Manager'|| $_SESSION['userjob'] == 'Administrator' ){
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

    $sql4 = "SELECT * FROM store";
    $result4 = mysqli_query($virtual_con,$sql4);

    if(!isset($_SESSION['pageStaff'])){
      $_SESSION['pageStaff'] = 1;
    }

    $stfID = "STF00";
    $k=1;
    do{
      $stfID = "STF0";
      $temp = $stfID.$k;
      if($listStaff[$k-1]['emp_ID'] != ($temp)){
        break;
        }
      $k++;
    }while($k<$rowCount+1);{
      $stfID = $stfID.$k;
    }
     ?>
    <div class="site-wrap">


      <div class="site-navbar py-2">

        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
          </div>
        </div>

        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="systemIndex.php" class="js-logo-clone">PIM</a>
              </div>
            </div>

            <div class="icons">
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
                <span class="icon-menu fa-10x"></span></a>
            </div>

            <div class="main-nav d-none d-lg-block pim">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block active1">      <!--class active1 on css/menubuttonsystemindex.css for centering the text-->
                  <li class="active"><a href="systemIndex.php">DASHBOARD</a></li>
                  <!--<li class="has-children">
                    <a href="inventory.php">INVENTORY</a>
                    <ul class="dropdown">
                      <li><a href="#">List Product</a></li>
                      <li><a href="#">Add New Product</a></li>
                      <li><a href="#">Update Product Stock</a></li>
                    </ul>
                  </li>-->
                  <!--<li><a href="staff.php">STAFF</a></li> -->
                </ul>
              </nav>
            </div>

            <div class="dropdownClick">
                  <img style="" src="<?php echo $user['emp_Pic']; ?>" onclick="myFunction()" class="dropbtnClick rounded-circle" alt="">
                  <div class="dropdownClick-content" id="myDropdown">
                    <p><a href="viewprofile.php">Profile</a></p>
                    <p><a href="signOut.php">Log Out</a></p>
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>
      <div class="site-blocks-cover py-3" style="background-image: url('images/sysindex.jpg');">
        <?php
        $sqlCheckStaff = "SELECT * FROM employee_staff WHERE emp_StoreID='".$_SESSION['userStore']."' ";
        $tempCheckStaff = mysqli_query($virtual_con,$sqlCheckStaff);
        $checkStaff = mysqli_num_rows($tempCheckStaff);

        if($checkStaff>4) {
          echo " <script>
           Swal.fire({
           type: 'error',
           title: 'Sign Up New Staff Failed!',
           confirmButtonText: 'OK',
           text: 'You have reached the maximum number of staff for your store.',
           footer: '',
           showCloseButton: true
           })
           .then(function (result) {
               if (result.value) {
                   window.location = 'staffList.php';
               }
           })
           </script>";
        }else if(!isset($_POST['email'])) {?>
        <div class="container rounded h-100" style="background-color:hsl(285, 100%, 90%,50%)">
          <div class="row">
            <div class="col-lg-10 mx-auto ">
              <h1 class="text-dark">SIGN UP STAFF</h1>
                <div class="col-lg-12 col-sm-4 mx-auto text-center">
                  <form id="formStaff" action="signUp.php" method="post">
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="ID">Staff ID</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2 font-italic" style="width:75%;float:left;background: #e0e0eb" type="text" name="ID" value="<?php echo $stfID ?>" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="fName">First Name</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="text" name="fName" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="lName">Last Name</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="text" name="lName" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="email">Email</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="email" name="email" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="dob">Date of Birth</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="date" name="dob" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="dept">Department</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="text" name="dept" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="address">Address</label>
                      </div>
                      <div class="col-8">
                        <input class="inputBox px-2" style="width:75%;float:left" type="text" name="address" value="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="gender">Gender</label>
                      </div>
                      <div class="col-8">
                        <select class="inputBox px-2" style="width:75%;float:left" name="gender">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <label style="float:center;color:black" for="store">Store</label>
                      </div>
                      <div class="col-8">
                        <select class="inputBox px-2 font-italic" style="width:75%;float:left;background: #e0e0eb" name="store">
                          <?php $sqlStoreName = "SELECT * FROM store WHERE store_ID='".$_SESSION['userStore']."' ";
                                $tempStoreName = mysqli_query($virtual_con,$sqlStoreName);
                                $storeName = mysqli_fetch_assoc($tempStoreName);  ?>
                            <option selected value="<?php echo $storeName['store_ID'] ?>"><?php echo $storeName['store_ID'].str_repeat('&nbsp;', 3).'|'.str_repeat('&nbsp;', 3).$storeName['store_Name']; ?></option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-12 mx-auto">
                        <input class="rounded btn btn-primary px-5 py-2" onclick="confirmDialog()" type="button" value="Sign Up">
                        <script >
                        function confirmDialog(){
                          Swal.fire({
                              title: 'Are you sure to submit?',
                              text: "",
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Confirm!'
                            }).then((result) => {
                              if (result.isConfirmed) {
                                document.getElementById('formStaff').submit();
                              }
                            })
                        }
                        </script>
                    </div>
                  </div>
                  </form>

            </div>
          </div>
        </div>
      <?php } else{
        $sqlAdd = "INSERT INTO employee_staff VALUES ('".$stfID."','".$_POST['email']."', '".$_POST['gender']."', '".$_POST['dob']."','".$_POST['store']."',
        '".$_POST['dept']."','".$_POST['address']."', '1234','images/profile/anonymous.png', '".$_POST['fName']."','".$_POST['lName']."') ";
        $addStaff = mysqli_query($virtual_con,$sqlAdd);
        if($addStaff){
          echo " <script>
          Swal.fire({
 title: 'Sign Up Successfull!',
 text: 'Redirecting..',
 icon: 'success',
 confirmButtonColor: '#3085d6',
 confirmButtonText: 'OK'
}).then((result) => {
 if (result.isConfirmed) {
   window.location = 'staffList.php';
 }
})
     </script>'";
   }else{
     echo " <script>
     Swal.fire({
title: 'Sign Up Failed!',
text: 'Try Again',
icon: 'error',
confirmButtonColor: '#3085d6',
confirmButtonText: 'OK'
}).then((result) => {
if (result.isConfirmed) {
window.location = 'signUp.php';
}
})
</script>'";
   }
    }?>
      </div>
    <?php }else{
      echo " <script>
      Swal.fire({
     title: 'Access Denied!',
     text: 'Unauthorized Access is Forbidden',
     icon: 'error',
     confirmButtonColor: '#3085d6',
     confirmButtonText: 'OK'
     }).then((result) => {
     if (result.isConfirmed) {
     window.location = 'index.php';
     }
     })
     </script>";?>
      <div class="site-wrap">

        <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
          <div class="container rounded" style="background-color:lightblue">
            </div>
          </div>
        </div>
    <?php } ?>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

              <div class="block-7">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p style="text-align:justify;">This website is to make sure it can help pharmacies manage inventory, including
                  the computer systems, perpetual inventory system.</p>
              </div>

            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">Quick Links</h3>
              <ul class="list-unstyled">
                <li><a href="#">Supplements</a></li>
                <li><a href="#">Vitamins</a></li>
                <li><a href="#">Diet &amp; Nutrition</a></li>
                <li><a href="#">Tea &amp; Coffee</a></li>
              </ul>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address">Sultan Ibrahim Chancellery Building, Jalan Iman, 81310 Skudai, Johor</li>
                  <li class="phone"><a href="tel://0123456789">+60123456789</a></li>
                  <li class="email">aduhscsr@gmail.com</li>
                </ul>
              </div>


            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <img src="images/logo.jpg" alt="Image" style="border-radius:50%" width="70" height="70">
              <p>
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | A.D.U.H | Learning purposes
              </p>
            </div>

          </div>
        </div>
      </footer>
    <script src="js/menubuttonsystemindex.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
