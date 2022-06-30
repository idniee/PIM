<?php
  include_once('config/all.php');

  $sqlPopular = "SELECT * FROM product ORDER BY prod_VisitCount DESC";
  $resultPopular = mysqli_query($virtual_con,$sqlPopular);

  $_SESSION['page'] = 1;
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" style="scroll-behavior: smooth;">
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
    <?php if(isset($_SESSION['usersession']) && $_SESSION['userjob'] == 'Administrator') {

        if(!isset($_POST['stik1det1'])) {
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
                  <li class="active"><a href="index.php">HOME</a></li>
                  <li class="has-children">
                    <a href="productMain.php">PRODUCT</a>
                    <ul class="dropdown">
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
                    </ul>
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

      <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
              <div class="site-block-cover-content text-center">
                <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                <h1>WELCOME TO <br>PIM</br></h1>
                <p>
                  <a href="#productShow" class="btn btn-primary px-5 py-3">explore Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form id="formSite" action="updateSite.php" method="post">

      <div class="site-section">
        <div class="container">
          <div class="row align-items-stretch section-overlap">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap bg-primary h-100">
                <a class="h-100">
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='sticker1' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <span class="text-dark">Title 1 : </span><h5><input class="w-100 form-control" type="text" name="stik1det1" value="<?php echo $siteDetail['detail1'] ?>"></h5><br>
                     <span class="text-dark">Title 2 : </span><h5><input class="w-100 form-control" type="text" name="stik1det2" value="<?php echo $siteDetail['detail2'] ?>"></h5> <br>
                  <p>
                    <strong><span class="text-dark">Detail 1 : </span><input class="w-100 form-control" type="text" name="stik1det3" value="<?php echo $siteDetail['detail3'] ?>"></strong> <br>
                    <strong><span class="text-dark">Detail 2 : </span><input class="w-100 form-control" type="textarea" name="stik1det4" value="<?php echo $siteDetail['detail4'] ?>"></strong>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap h-100">
                <a class="h-100">
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='sticker2' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <span class="text-dark">Title 1 : </span><h5><input class="w-100 form-control" type="text" name="stik2det1" value="<?php echo $siteDetail['detail1'] ?>"></h5><br>
                     <span class="text-dark">Title 2 : </span><h5><input class="w-100 form-control" type="text" name="stik2det2" value="<?php echo $siteDetail['detail2'] ?>"></h5> <br>
                  <p>
                    <strong><span class="text-dark">Detail 1 : </span><input class="w-100 form-control" type="text" name="stik2det3" value="<?php echo $siteDetail['detail3'] ?>"></strong> <br>
                    <strong><span class="text-dark">Detail 2 : </span><input class="w-100 form-control" type="textarea" name="stik2det4" value="<?php echo $siteDetail['detail4'] ?>"></strong>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap bg-warning h-100">
                <a class="h-100">
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='sticker3' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <span class="text-dark">Title 1 : </span><h5><input class="w-100 form-control" type="text" name="stik3det1" value="<?php echo $siteDetail['detail1'] ?>"></h5><br>
                     <span class="text-dark">Title 2 : </span><h5><input class="w-100 form-control" type="text" name="stik3det2" value="<?php echo $siteDetail['detail2'] ?>"></h5> <br>
                  <p>
                    <strong><span class="text-dark">Detail 1 : </span><input class="w-100 form-control" type="text" name="stik3det3" value="<?php echo $siteDetail['detail3'] ?>"></strong> <br>
                    <strong><span class="text-dark">Detail 2 : </span><input class="w-100 form-control" type="textarea" name="stik3det4" value="<?php echo $siteDetail['detail4'] ?>"></strong>
                  </p>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="title-section text-center col-12">
              <h2 class="text-uppercase">Testimonials</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3 products-wrap">
              <div class="nonloop-block-3 no-direction owl-carousel">

                <div class="testimony">
                  <p class="text-center text-dark">Testimony 1</p>
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='test1' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <blockquote>
                    <span class="text-dark">Image URL : </span><input class="form-control" type="text" name="test1det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                    <span class="text-dark">Testimony : </span><input class="form-control" type="text" name="test1det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </blockquote>

                  <span class="text-dark">Person Testifying : </span><input class="form-control" type="text" name="test1det3" value="<?php echo $siteDetail['detail3'] ?>">
                </div>

                <div class="testimony">
                  <p class="text-center text-dark">Testimony 2</p>
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='test2' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <blockquote>
                    <span class="text-dark">Image URL : </span><input class="form-control" type="text" name="test2det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                    <span class="text-dark">Testimony : </span><input class="form-control" type="text" name="test2det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </blockquote>

                  <span class="text-dark">Person Testifying : </span><input class="form-control" type="text" name="test2det3" value="<?php echo $siteDetail['detail3'] ?>">
                </div>

                <div class="testimony">
                  <p class="text-center text-dark">Testimony 3</p>
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='test3' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <blockquote>
                    <span class="text-dark">Image URL : </span><input class="form-control" type="text" name="test3det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                    <span class="text-dark">Testimony : </span><input class="form-control" type="text" name="test3det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </blockquote>

                  <span class="text-dark">Person Testifying : </span><input class="form-control" type="text" name="test3det3" value="<?php echo $siteDetail['detail3'] ?>">
                </div>
                <div class="testimony">
                  <p class="text-center text-dark">Testimony 4</p>
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='test4' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <blockquote>
                    <span class="text-dark">Image URL : </span><input class="form-control" type="text" name="test4det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                    <span class="text-dark">Testimony : </span><input class="form-control" type="text" name="test4det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </blockquote>

                  <span class="text-dark">Person Testifying : </span><input class="form-control" type="text" name="test4det3" value="<?php echo $siteDetail['detail3'] ?>">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-secondary bg-image" style="background-image: url('images/med1.jpg');">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                <div class="banner-1-inner align-self-center">
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='footerSticker1' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <span class="text-dark">Title : </span><input class="form-control" type="text" name="footSticker1det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                  <p><span class="text-dark">Details : </span><input class="form-control" type="text" name="footSticker1det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </p>
                </div>
              </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg2.jpg');">
                <div class="banner-1-inner ml-auto  align-self-center">
                  <?php
                    $sqlSite = "SELECT * FROM frontSite WHERE sectionID='footerSticker2' ";
                    $tempSite = mysqli_query($virtual_con,$sqlSite);
                    $siteDetail = mysqli_fetch_assoc($tempSite);
                   ?>
                  <span class="text-dark">Title : </span><input class="form-control" type="text" name="footSticker2det1" value="<?php echo $siteDetail['detail1'] ?>"><br>
                  <p><span class="text-dark">Details : </span><input class="form-control" type="text" name="footSticker2det2" value="<?php echo $siteDetail['detail2'] ?>">
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="mx-auto align-items-center text-center">
            <br>
            <button style="color:black;" class="rounded btn btn-primary px-5 py-2" onclick="confirmDialog()" type="button">Update</button>
              <script >
                function confirmDialog(){
                  Swal.fire({
                      title: 'Are you sure to make change?',
                      text: "",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Confirm!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        document.getElementById('formSite').submit();
                      }
                    })
                }
              </script>
          </div>
      </div>
      </form>
    <?php }else{
            $sqlStick1 = "UPDATE frontSite SET detail1='".$_POST['stik1det1']."', detail2='".$_POST['stik1det2']."',
              detail3='".$_POST['stik1det3']."', detail4='".$_POST['stik1det4']."' WHERE sectionID='sticker1' ";
            $tempStick1 = mysqli_query($virtual_con,$sqlStick1);

            $sqlStick2 = "UPDATE frontSite SET detail1='".$_POST['stik2det1']."', detail2='".$_POST['stik2det2']."',
              detail3='".$_POST['stik2det3']."', detail4='".$_POST['stik2det4']."' WHERE sectionID='sticker2' ";
            $tempStick2 = mysqli_query($virtual_con,$sqlStick2);

            $sqlStick3 = "UPDATE frontSite SET detail1='".$_POST['stik3det1']."', detail2='".$_POST['stik3det2']."',
              detail3='".$_POST['stik3det3']."', detail4='".$_POST['stik3det4']."' WHERE sectionID='sticker3' ";
            $tempStick3 = mysqli_query($virtual_con,$sqlStick3);

            $sqlTest1 = "UPDATE frontSite SET detail1='".$_POST['test1det1']."', detail2='".$_POST['test1det2']."',
              detail3='".$_POST['test1det3']."' WHERE sectionID='test1' ";
            $tempTest1 = mysqli_query($virtual_con,$sqlTest1);

            $sqlTest2 = "UPDATE frontSite SET detail1='".$_POST['test2det1']."', detail2='".$_POST['test2det2']."',
              detail3='".$_POST['test2det3']."' WHERE sectionID='test2' ";
            $tempTest2 = mysqli_query($virtual_con,$sqlTest2);

            $sqlTest3 = "UPDATE frontSite SET detail1='".$_POST['test3det1']."', detail2='".$_POST['test3det2']."',
              detail3='".$_POST['test3det3']."' WHERE sectionID='test3' ";
            $tempTest3 = mysqli_query($virtual_con,$sqlTest3);

            $sqlTest4 = "UPDATE frontSite SET detail1='".$_POST['test1det1']."', detail2='".$_POST['test4det2']."',
              detail3='".$_POST['test1det3']."' WHERE sectionID='test4' ";
            $tempTest4 = mysqli_query($virtual_con,$sqlTest4);

            $sqlFooter1 = "UPDATE frontSite SET detail1='".$_POST['footSticker1det1']."', detail2='".$_POST['footSticker1det2']."'
             WHERE sectionID='footerSticker1' ";
            $tempFooter1 = mysqli_query($virtual_con,$sqlFooter1);

            $sqlFooter2 = "UPDATE frontSite SET detail1='".$_POST['footSticker2det1']."', detail2='".$_POST['footSticker2det2']."'
             WHERE sectionID='footerSticker2' ";
            $tempFooter2 = mysqli_query($virtual_con,$sqlFooter2);

            if($tempStick1 && $tempStick2 && $tempStick3 && $tempTest1 && $tempTest2 && $tempTest3 && $tempTest4 && $tempFooter1 && $tempFooter2){ ?>
              <div class="site-wrap">

                <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
                  <div class="container rounded" style="background-color:lightblue">
                    </div>
                  </div>
                </div>
            <?php echo " <script>
            Swal.fire({
      title: 'Front Site Updated!',
      text: 'Redirecting',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.isConfirmed) {
        window.location = 'systemIndex.php';
      }
      })
       </script>'";
      }else{
       echo " <script>
       Swal.fire({
      title: 'Front Site Update Failed!',
      text: 'Try Again',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.isConfirmed) {
      window.location = 'updateSite.php';
      }
      })
      </script>'";
      ?>
      <div class="site-wrap">

        <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
          <div class="container rounded" style="background-color:lightblue">
            </div>
          </div>
        </div>
      <?php
        }
          }

  }else{
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
