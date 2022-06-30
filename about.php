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
  img:hover{
    -webkit-filter: blur(5px);
    filter: blur(5px);
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
                <li class="active"><a href="about.php">ABOUT US</a></li>
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
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>About Us</h1>
              <p>PIM under A.D.U.H is to make sure helping pharmacies manage inventory, including the computer systems,
                perpetual inventory system. Help to develop a prototype of pharmacy stock inventory system.
                Help to computerize the manual task in term of pharmacy stock inventory.
                Help to keep organize the products in order to search the appropriate drugs based on
                the description of drugs. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <div class="site-section-heading pt-3 mb-4">
                  <h2 class="text-black">Mental Health Awareness</h2>
                </div>
                <img src="images/mental.jpg" alt="thumbnail" class="img-fluid rounded">
                <a href="https://www.youtube.com/watch?v=Muz0YR0ILaU" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">How We Started</h2>
            </div>
            <p style="text-align:justify">In the pharmacy environment, inventory applies to all the medicines and medical
              supplies that are used in the daily operation of a pharmacy. A significant proportion
              of inventory management includes commitments of the pharmacy technician. </p>
            <p style="text-align:justify">It is important to ensure that there is an adequate stock of medicines and supplies to serve the needs of
              patients served by a pharmacy and a thorough inventory. The profitability of a pharmacy
              can also be increased by management.  </p>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <div class="site-section-heading pt-3 mb-4">
                  <h2 class="text-black">Eat With Healthy Plate</h2>
                </div>
                <img src="images/plate.jpg" alt="thumbnail" class="img-fluid rounded">
                <a href="https://www.youtube.com/watch?v=Gmh_xMMJ2Pw" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">We Are Trusted Company</h2>
            </div>
            <p style="text-align:justify">The level of customer service we provide has a major impact on our customer loyalty and retention.
              This means it’s absolutely essential to have dedicated support staff and to set high standards for
              the speed and quality of our service.</p>
            <p style="text-align:justify">We making sure our customers feel safe when they use this application. Even if we aren’t selling
              their products through an ecommerce platform, customers will still be visiting their products,
              and the amount of safety they feel while there can play a significant role in how much they
              trust to our brand.</p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-heartbeat text-primary"></span>
            </div>
            <div class="text">
              <h2>Heart Beat Love</h2>
              <p style="text-align:justify">September 29. World Heart Day is celebrated on 29th September of every year.
                It is aimed at drawing people's attention to heart illness and the range of
                associated health issues</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-pagelines text-primary"></span>
            </div>
            <div class="text">
              <h2>Green Everyday</h2>
              <p style="text-align:justify">The health benefits of eating green foods every day are almost endless! Cancer protection,
                 strengthens the immune system, heals our gut, helps us lose weight and protects against heart
                 disease are just a few of the many health benefits we gain by eating something green every day. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2>Customer Support</h2>
              <p style="text-align:justify">providing assistance with onboarding, troubleshooting, and upgrading customers to a new product or service.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>The Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-5">

            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/pie.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Syafei</h3>
                  <p class="block-38-subheading">CEO/Co-Founder</p>
                </div>
                <div class="block-38-body">
                  <p style="text-align:center">Responsibilities include making major corporate decisions, managing the overall
                    operations and resources of a company, acting as the main point of communication between
                    the board of directors (the board) and corporate </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-5">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/syuk.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Syukri</h3>
                  <p class="block-38-subheading">Co-Founder</p>
                </div>
                <div class="block-38-body">
                  <p style="text-align:center">Involved with helping in the creation of a
                     business, organization, union, or entity, but is not the original founding person.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-5">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/muk.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Mukhlis</h3>
                  <p class="block-38-subheading">Marketing</p>
                </div>
                <div class="block-38-body">
                  <p style="text-align:center">Maximise profits through developing sales strategies
                    that match customer requirements and by promoting products, services or ideas.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-5">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/ijeni.jpg" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Idzni</h3>
                  <p class="block-38-subheading">Sales Manager</p>
                </div>
                <div class="block-38-body">
                  <p style="text-align:center">Responsible for leading and coaching a team of salespeople.
                    A sales manager's tasks often include assigning sales territories, setting quotas, mentoring
                    the members of her sales team, assigning sales training, building a sales plan, and hiring and
                    firing salespeople.</p>
                </div>
              </div>
            </div>
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
