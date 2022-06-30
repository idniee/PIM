<?php include_once('config/all.php');
$_SESSION['page'] = 1;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" type="image/x-icon" href="images/logo.ico"/>
  <title>Pharmacy Iventory Management|About</title>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
  <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contactstyle.css" />
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
                <li><a href="index.php">HOME</a></li>
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
                <li class=""><a href="about.php">ABOUT US</a></li>
                <li class="active"><a href="contact.php">CONTACT</a></li>
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

  <div class="site-section">
    <div class="container1">
      <div class="row align-items-stretch section-overlap">
        <span class="big-circle"></span>
        <img src="images/contact/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text" style="text-align:left;">
              Want to get in touch? We'd love to hear from you.
              <br>Here's how you can reach us... !
            </p>
            <div class="info">
              <div class="information">
                <img src="images/contact/location.png" class="icon" alt="" />
                <p style="margin:5px 0px 0px 5px;" class="address">Sultan Ibrahim Chancellery Building, Jalan Iman, 81310 Skudai, Johor</p>
              </div>
              <div class="information">
                <img src="images/contact/email.png" class="icon" alt="" />
                <p style="margin:5px 0px 0px 5px;" class="email">aduhscsr@gmail.com</p>
              </div>
              <div class="information">
                <img src="images/contact/phone.png" class="icon" alt="" />
                <p style="margin:5px 0px 0px 5px;" class="phone"><a href="tel://0123456789">+60123456789</a></p>
              </div>
            </div>

            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="icon-facebook-official"></i>
                </a>
                <a href="#">
                  <i class="icon-instagram"></i>
                </a>
                <a href="#">
                  <i class="icon-linkedin"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <?php
                $Msg = "";
                if(isset($_GET['error']))
                {
                    $Msg = " Please Fill in the Blanks ";
                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                }

                if(isset($_GET['success']))
                {
                    $Msg = " Your Message Has Been Sent ";
                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                }

            ?>

            <form action="email.php" name="" method="post">
              <h3 class="title">Contact us</h3>
              <div class="input-container">
                <input type="text" name="UName" class="input" id="UName"/>
                <label for="">Name</label>
                <span>Name</span>
              </div>
              <div class="input-container">
                <input type="email" name="Email" class="input" id="Email"/>
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="Phone" class="input" id=Phone""/>
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container textarea">
                <textarea name="Msg" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn" name="btn-send" onclick="clearsubmit"/>
            </form>
          </div>
        </div>
      </div>

      <script src="js/app.js"></script>
      </div>
    </div>

    <footer class="site-footer">

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
