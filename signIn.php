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
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custombs.css">

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
  <?php if(!isset($_SESSION['usersession'])){ ?>
  <body>
    <?php if (!isset($_POST['username'])){ ?>
    <div class="site-wrap">

      <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
        <div class="container rounded" style="background-color:lightblue">
          <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
              <div class="site-block-cover-content text-center">
                <h1>WELCOME TO <br>PIM</br></h1>
                <form action="signIn.php" method="post">
                  <div class="row">
                    <div class="col-4">
                      <label style="float:center;color:black" for="email">Email</label>
                    </div>
                    <div class="col-8">
                      <input class="inputBox" style="width:75%;float:left" type="text" name="username" value="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-4">
                      <label style="float:center;color:black" for="email">Password</label>
                    </div>
                    <div class="col-8">
                      <input class="inputBox" style="width:75%;float:left" type="password" name="pass" value="">
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-12 mx-auto">
                        <button class="rounded btn btn-primary px-5 py-3" type="submit" name="button">Log In</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class="site-wrap">

        <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
          <div class="container rounded" style="background-color:lightblue">
            </div>
          </div>
        </div>
      </div>
    <?php
    $username = $_POST['username'];
    $password = ($_POST['pass']);
    $url1 = "systemIndex.php";
    $url2 = "signIn.php";

    $sql = "SELECT * FROM employee_manager WHERE emp_Email='".$username."' and emp_Pass='".$password."'";
    $result = mysqli_query($virtual_con,$sql);
    $resultrow = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM employee_staff WHERE emp_Email='".$username."' and emp_Pass='".$password."'";
    $result2 = mysqli_query($virtual_con,$sql2);
    $result2row = mysqli_num_rows($result2);

    if ($resultrow > 0){
      $user = mysqli_fetch_assoc($result);
        $_SESSION['usersession'] = $user['emp_ID'];
        $_SESSION['userjob'] = $user['emp_Dept'];
        $_SESSION['userStore'] = $user['emp_StoreID'];
        echo " <script>
        Swal.fire({
  title: 'Logged In!',
  text: 'Redirecting..',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
  }).then((result) => {
  if (result.isConfirmed) {
  window.location = '$url1';
  }
  })
   </script>'";
}else if ($result2row > 0){
    $user2 = mysqli_fetch_assoc($result2);
      $_SESSION['usersession'] = $user2['emp_ID'];
      $_SESSION['userjob'] = $user2['emp_Dept'];
      echo " <script>
      Swal.fire({
title: 'Logged In!',
text: 'Redirecting..',
icon: 'success',
confirmButtonColor: '#3085d6',
confirmButtonText: 'OK'
}).then((result) => {
if (result.isConfirmed) {
window.location = '$url1';
}
})
 </script>'";

  }else{
    echo " <script>
    Swal.fire({
title: 'Log In Failed!',
text: 'Try Again',
icon: 'error',
confirmButtonColor: '#3085d6',
confirmButtonText: 'OK'
}).then((result) => {
if (result.isConfirmed) {
window.location = '$url2';
}
})
</script>'";
      }?>
    <?php }
  }else{ ?>

    <div class="site-wrap">
      <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
        <div class="container rounded" style="background-color:lightblue">
          </div>
        </div>
      </div>

  <?php echo " <script>
  Swal.fire({
title: 'You are already Logged In!',
text: 'Redirecting to System',
icon: 'info',
confirmButtonColor: '#3085d6',
confirmButtonText: 'OK'
}).then((result) => {
if (result.isConfirmed) {
window.location = 'systemIndex.php';
}
})
</script>'";} ?>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

              <div class="block-7">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>This website is to make sure it can help pharmacies manage inventory, including
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
    </div>

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
