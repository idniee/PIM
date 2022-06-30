<?php
include_once('config/all.php');
$sql = "SELECT * FROM product";
$result = mysqli_query($virtual_con,$sql);
$rowCount = mysqli_num_rows($result);
$rowIndex = $rowCount-1;
$count1=0;
while($listProd2=mysqli_fetch_assoc($result)){
  $listProd[$count1] = $listProd2;
  $count1++;
}
if(!isset($_SESSION['page'])){
  $_SESSION['page'] = 1;
}

if(isset($_SESSION['singleProd'])){
  unset($_SESSION['singleProd']);
}
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
    <link rel="stylesheet" href="css/custombs.css">
    <script src="js/custom.js"></script>

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
      </div>

      <div class="row mx-auto" style="background:beige">
        <form class="searchBar col-8 mx-auto" action="search.php" method="post">
          <input class="searchBarText float-left col-11" type="text" name="search" placeholder="Enter a value to search..">
          <input class="float-left col-1 searchImg my-auto" type="image" alt="submit" src="images/search.png">
        </form>

      </div>

      <div class="site-section">
        <div class="container">
          <?php
          $count=0;
          $count2=0;?>
          <div class="row">
            <?php
            if($_SESSION['page']>1){
              for($i=0;$i<((6*$_SESSION['page'])-6);$i++)  {
                $count++;
              }
            }
            while($count2<6 && $count<$rowCount) { ?>
            <a href="productSingle.php?productID=<?php echo $listProd[$count]['prod_ID']; ?>" class="col-sm-2 col-lg-4 text-center item mb-4 productList">
              <img class="w-75 h-75" src="<?php echo $listProd[$count]['prod_Pic']; ?>" alt="Image">
              <h3 class="text-dark"><?php echo $listProd[$count]['prod_Name']; ?></h3>
              <p class="price">RM <?php echo number_format($listProd[$count]['prod_Price'], 2); ?></p>
            </a>
            <?php ++$count;
                  ++$count2;} ?>
          </div>
        </div>
      </div>

      <?php
        $nextPage = $_SESSION['page']-1;
        $prevPage = $_SESSION['page']-1;
       ?>

      <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="config/prevPage.php">&lt;</a></li>
                <li class="active"><span><?php echo $_SESSION['page'] ?></span></li>
                <li><a href="config/nextPage.php">&gt;</a></li>
              </ul>
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
