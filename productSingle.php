<?php
  include('config/all.php');
  if(isset($_GET['productID'])){
    $_SESSION['singleProd'] = $_GET['productID'];
  }

  $ID = $_SESSION['singleProd'];
  $sqlProd="select * from product where prod_ID=".$ID." ";
  $result=mysqli_query($virtual_con,$sqlProd);
  $product=mysqli_fetch_assoc($result);

  $visitCount = (int)$product['prod_VisitCount'];
  $visitCount++;
  $sqlCount = "UPDATE product SET prod_VisitCount='".$visitCount."' WHERE prod_ID='".$ID."'";
  $result2 = mysqli_query($virtual_con,$sqlCount);

  $_SESSION['page'] = 1;
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/x-icon" href="images/logo.ico"/>
    <title>Pharmacy Iventory Management|Home</title>
    <meta charset="utf-8">
    <title></title>
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
    a{
      color: #51eaea;
      text-decoration: none;
      background-color: transparent;
    }
    .text-primary {
      color: #51eaea!important;
  }
  .btn-primary {
      color: #212529;
      background-color: #51eaea;
      border-color: #51eaea;
  }
  .bx{
    width: auto;
    padding: 8px;
    background-color: #d1d1e0;
    border: 1px solid gray;
    margin: 0;
  }
  .img-fluid {
      max-width: 100%;
      height: auto;
  }
    </style>
  </head>
  <body>
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
                <a href="index.php" class="js-logo-clone">PIM</a>
              </div>
            </div>

            <div class="icons">
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
                <span class="icon-menu fa-10x"></span></a>
            </div>

            <div class="main-nav d-none d-lg-block pim">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class=""><a href="index.php">HOME</a></li>
                  <li class="has-children">
                    <a href="productMain.php">PRODUCT</a>
                    <!--<ul class="dropdown">
                      <li><a href="#">Supplements</a></li>
                      <li><a href="#">Diet &amp; Nutrition</a></li>
                      <li><a href="#">Tea &amp; Coffee</a></li>
                      <li class="has-children">
                        <a href="#">Vitamins</a>
                        <ul class="dropdown">
                          <li><a href="#">XXX</a></li>
                          <li><a href="#">XXX</a></li>
                          <li><a href="#">XXX</a></li>
                          <li><a href="#">XXX</a></li>
                        </ul>
                      </li>
                    </ul>-->
                  </li>
                  <li><a href="about.php">ABOUT US</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
                </ul>
              </nav>
            </div>

            <div class="icons">
              <a href="#" class="icons-btn d-inline-block js-search-open"><span><i class="icon-search fa-10x"></i></span></a>
              <div class="dropdown">
                <button class="dropbtn staff">
                  <i class="icon-space-shuttle" ></i></button>
                <div class="dropdown-content">
                  <a href="signIn.php" style="text-align:center;">System Sign In</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="bg-light py-3">
            <div class="container">
              <div class="row">
                <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
                  <a href="productMain.php">Product</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $product['prod_Name'] ?></strong></div>
              </div>
            </div>
          </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
                <img src="<?php echo $product['prod_Pic']; ?>" alt="Image" class="img-fluid">
              </div>
            </div>

            <div class="col-md-6">
              <h2 class="text-black"><?php echo $product['prod_Name']; ?></h2>
              <p><?php echo $product['prod_Desc']; ?></p>

              <p><strong class="text-primary h4">RM<?php echo $product['prod_Price']; ?></strong></p>


              <p><a href="show.php" class="btn btn-sm height-auto px-4 py-3 btn-primary">Show Store</a></p>
              <br>
              <br>
              <div class="bx">
                    <a class="col-md-20 mb-0"><strong class="text-black">Before taking this medicine</strong></a>
                </div>
                <br>
                <p>Do not use this medicine just before or after heart bypass surgery (coronary artery bypass graft, or CABG). Ibuprofen may also cause stomach or intestinal bleeding, which can be fatal. These conditions can occur without warning while you are using ibuprofen, especially in older adults. You should not use ibuprofen if you are allergic to it, or if you have ever had an asthma attack, hives, or severe allergic reaction after taking aspirin, acetaminophen, or an NSAID e.g. celecoxib, diclofenac, naprosyn, and others.</p>
                <p>Ask a doctor or pharmacist if it is safe for you to take this medicine if you have:</p>
        <br>
        <br>


          </div>
        </div>
      </footer>
    </div>
  </div>
</div>
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
        <img src="images/logo.jpg" alt="Image" style="border-radius:50%" width="70" height="70">
        <p>
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved | A.D.U.H | Learning purposes
        </p>
      </div>
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
