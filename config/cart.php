<?php
$hostname='localhost';
$database='pim';
$userdb='root';
$passwd='';

$virtual_con=mysqli_connect($hostname,$userdb,$passwd,$database);
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="../image/x-icon" href="../images/logo.ico"/>
    <title>Pharmacy Iventory Management|Home</title>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custombs.css">

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
    <?php if($_SESSION['cart']!="DONE"){
          $_SESSION['cart'] = "DONE";
          echo "<script> window.location = '../checkoutCart.php'; </script>";
      ?>
    <div class="site-wrap">

      <div class="site-blocks-cover" style="background-image: url('med4.jpg');">
        <div class="container rounded" style="background-color:lightblue">
          <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
              <div class="site-block-cover-content text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }else{ ?>
      <div class="site-wrap">
          <div class="site-blocks-cover" style="background-image: url('med4.jpg');">
            <div class="container rounded" style="background-color:lightblue">
              </div>
            </div>
      <?php
          //sqlupdate
          for($i=0;$i<$_SESSION['cartCount'];$i++){
            $sqlProd="SELECT * FROM product WHERE prod_ID=".$_SESSION['cartCheck'][$i];
            $result=mysqli_query($virtual_con,$sqlProd);
            $product=mysqli_fetch_assoc($result);
            $stockID = $_SESSION['userStore'].$_SESSION['cartCheck'][$i];

            $sqlGet = "SELECT * FROM stock WHERE stock_ID='".$stockID."'";
            $result2 = mysqli_query($virtual_con,$sqlGet);

            if($result2){
              $checkoutProd = mysqli_fetch_assoc($result2);

              $numQuan = (int)$checkoutProd['prod_Quan'];
              $updateQuan = $numQuan - $_SESSION['cartQuan'][$i];

              $sqlUpdate = "UPDATE stock SET prod_Quan='".$updateQuan."'WHERE stock_ID='".$stockID."'";
              $update = mysqli_query($virtual_con,$sqlUpdate);
              if($update){?>
                <div class="">
                  <p> <?php echo "Success"; ?> </p>
                </div>
              <?php  }else{ ?>
                <div class="">
                  <p> <?php echo "Fail"; ?> </p>
                </div>
            <?php   }
            }else{
              ?>
                <div class="">
                  <p> <?php echo "Fail"; ?> </p>
                </div>
            <?php
            }
          }

          unset($_SESSION['cart']);
          unset($_SESSION['cartCheck']);
          unset($_SESSION['cartQuan']);
          unset($_SESSION['cartCount']);

          echo " <script>
           Swal.fire({
         type: 'success',
         title: 'Successfully Checkout!',
         confirmButtonText: 'OK',
         text: 'Redirecting',
         footer: '',
         showCloseButton: true
     })
     .then(function (result) {
         if (result.value) {
             window.location = '../systemIndex.php';
         }
     })
   </script>";}?>
    </div>
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
              <img src="../images/logo.jpg" alt="Image" style="border-radius:50%" width="70" height="70">
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
