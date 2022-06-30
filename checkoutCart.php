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
    <script type="text/javascript" src="js/custom.js"></script>
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
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: auto;
      }

      td{
      border: 1px solid #f4e1d2;
      text-align: left;
      padding: 8px;
      }

      tr:nth-child(even) {
      background-color: #f4e1d2;
      border: 1px solid black;
      }
      th{
        border: 1px solid black;
        background-color: #80ced6;
        text-align: center;
        padding: 8px;
      }
      .img {
        border-radius: 50%;
        height: 80px;
        width: 80px;
        }
      .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <?php

    if(isset($_SESSION['usersession'])){

    $username = $_SESSION['usersession'];
    $user;
    if($_SESSION['userjob'] == 'Manager' || $_SESSION['userjob'] == 'Administrator'){
      $sql = "SELECT * FROM employee_manager WHERE emp_ID='".$username."'";
      $result = mysqli_query($virtual_con,$sql);
      $user = mysqli_fetch_assoc($result);
    }else{
      $sql2 = "SELECT * FROM employee_staff WHERE emp_ID='".$username."'";
      $result2 = mysqli_query($virtual_con,$sql2);
      $user = mysqli_fetch_assoc($result2);
    }

    $sql3 = "SELECT * FROM product";
    $result3 = mysqli_query($virtual_con,$sql3);
    $rowCount = mysqli_num_rows($result3);
    $counter=0;
    while($listProd2=mysqli_fetch_assoc($result3)){
      $listProd[$counter] = $listProd2;
      $counter++;
    } ?>
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

    <div class="site-wrap">
      <div class="row mx-auto" style="background:beige">
        <form class="searchBar col-lg-8 col-sm-4 mx-auto" action="searchstaff.php" method="post">
          <input class="searchBarText float-left col-lg-11 col-sm-5" type="text" name="search" placeholder="Enter a value to search..">
          <input class="float-left col-1 searchImg my-auto" type="image" alt="submit" src="images/search.png">
        </form>
      </div>
    <div class=" col-lg-12 col-sm-6 mx-auto text-center">
      <?php if($_SESSION['cart']=="DONE") {?>
      <table class="col-lg-8 col-sm-4 mx-auto">
        <tr>
          <th style="color:black;">Table Cart</th>
          <th style="color:black;" >Picture</th>
          <th style="color:black;" >Prod ID</th>
          <th style="color:black;" >Name</th>
          <th style="color:black;" >Price</th>
          <th style="color:black;" >Quantity</th>
          <th style="color:black;" >Total</th>
      </tr>

              <?php for($i=0;$i<$_SESSION['cartCount'];$i++){
                $sql4 = "SELECT * FROM product WHERE prod_ID=".$_SESSION['cartCheck'][$i];
                $result4 = mysqli_query($virtual_con,$sql4);
                $listCart=mysqli_fetch_assoc($result4)?>
                <tr>
                        <td style="color:black;" ><?php echo $i+1; ?></td>
                        <td style="color:black;" ><?php echo "<img  class='img' src='".$listCart['prod_Pic']."' height=100 width=100></img>"; ?></td>
                        <td style="color:black;" ><?php echo $listCart['prod_ID']; ?></td>
                        <td style="color:black;" ><?php echo $listCart['prod_Name']; ?></td>
                        <td style="color:black;" ><?php echo "RM ".number_format($listCart['prod_Price'],2); ?></td>
                        <td style="color:black;" ><?php echo $_SESSION['cartQuan'][$i]; ?></td>
                        <td style="color:black;" ><?php echo "RM ".number_format($listCart['prod_Price']*$_SESSION['cartQuan'][$i],2); ?></td>
                </tr>
              <?php } ?>
      </table>
      <div class="col-lg-12 col-sm-6 mx-auto text-center">
        <br>
        <p><a href="config/cart.php"><button class="button button5 rounded">Confirm Checkout</button></a></p>
      </div>
    <?php }else if(isset($_POST['codeHolder'])){
            $get = $_POST['codeHolder'];
            $code = substr($get,-10,10);
            $sqlShow = "SELECT * FROM product WHERE prod_ID=".$code;
            $resultShow = mysqli_query($virtual_con,$sqlShow);
            $prodCart = mysqli_fetch_assoc($resultShow);

            if(!isset($_SESSION['cartCheck'])){
                $_SESSION['cartCount'] = 1;
                $_SESSION['cartCheck'][$_SESSION['cartCount']-1] = $prodCart['prod_ID'];
                $_SESSION['cartQuan'][$_SESSION['cartCount']-1] = 1;
            }else{
                $indicator = true;
                for($i=0;$i<$_SESSION['cartCount'];$i++){
                  if($prodCart['prod_ID'] == $_SESSION['cartCheck'][$i]){
                    $_SESSION['cartQuan'][$i]++;
                    $indicator = false;
                    break;
                  }
                }
                if($indicator){
                  $_SESSION['cartCount']++;
                  $_SESSION['cartCheck'][$_SESSION['cartCount']-1] = $prodCart['prod_ID'];
                  $_SESSION['cartQuan'][$_SESSION['cartCount']-1] = 1;
                }
            }
            echo "<script>Swal.fire({
                  title: 'RM ".number_format($prodCart['prod_Price'],2)."',
                  text: '".$prodCart['prod_Name']."',
                  imageUrl: '".$prodCart['prod_Pic']."',
                  imageWidth: 300,
                  imageHeight: 300,
                  imageAlt: 'Product Checkout',
                })
                .then(function (result) {
                    if (result.value) {
                        window.location = 'scanner/checkOut.php';
                    }
                })
                </script>"
              ?>
    <?php }else {
      ?>
      <form id="formCart" action="checkoutCart.php" method="post">
        <input id="check" type="text" name="codeHolder" value="">
      </form>
      <script>
      var url_string = window.location.href; //window.location.href
      var url = new URL(url_string);
      var c = url.searchParams.get("product");
        document.getElementById('check').value = c;
        document.getElementById('formCart').submit();
      </script>

    <?php } ?>
    </div>

  </div>
</div>
<?php }else{ ?>
  <div class="site-wrap">

    <div class="site-blocks-cover" style="background-image: url('images/med4.jpg');">
      <div class="container rounded" style="background-color:lightblue">
        </div>
      </div>
    </div>
  <?php
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
   </script>";}?>
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
