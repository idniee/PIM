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

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link href="updel.css" rel="stylesheet" />
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custombs.css">
    <link rel="stylesheet" href="../css/menubuttonsystemindex.css">
    <script type="text/javascript" src="../js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <script src="../sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">

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
    if($_SESSION['userjob'] == 'Manager' || $_SESSION['userjob'] == 'Administrator'){
      $sql = "SELECT * FROM employee_manager WHERE emp_ID='".$username."'";
      $result = mysqli_query($virtual_con,$sql);
      $user = mysqli_fetch_assoc($result);
    }else{
      $sql2 = "SELECT * FROM employee_staff WHERE emp_ID='".$username."'";
      $result2 = mysqli_query($virtual_con,$sql2);
      $user = mysqli_fetch_assoc($result2);
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
                <a href="../systemIndex.php" class="js-logo-clone">PIM</a>
              </div>
            </div>

            <div class="icons">
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
                <span class="icon-menu fa-10x"></span></a>
            </div>

            <div class="main-nav d-none d-lg-block pim">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block active1">      <!--class active1 on css/menubuttonsystemindex.css for centering the text-->
                  <li class="active"><a href="../systemIndex.php">DASHBOARD</a></li>

                </ul>
              </nav>
            </div>

            <div class="dropdownClick">
                  <img style="" src="../<?php echo $user['emp_Pic']; ?>" onclick="myFunction()" class="dropbtnClick rounded-circle" alt="">
                  <div class="dropdownClick-content" id="myDropdown">
                    <p><a href="../viewprofile.php">Profile</a></p>
                    <p><a href="#">Inventory</a></p>
                    <p><a href="../signOut.php">Log Out</a></p>
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>

  <body>
    <div class="row mx-auto" style="background:beige">
      <form class="searchBar col-8 mx-auto" action="search.php" method="post">
        <input class="searchBarText float-left col-11" type="text" name="search" placeholder="Enter a value to search..">
        <input class="float-left col-1 searchImg my-auto" type="image" alt="submit" src="../images/search.png">
      </form>
    </div>
    <br>
    <div class="container">
      <div class="mx-auto align-items-center text-center">
        <p><a href="../productadd.php"><button class="button button5">Add Product</button></a></p>
      <table>
      <tr>
        <th style="color:black;">##</th>
        <th style="color:black;" >Product ID</th>
        <th style="color:black;" >Product Image</th>
        <th style="color:black;" >Product Brand</th>
        <th style="color:black;" >Product Name</th>
        <th style="color:black;" >Product Price (RM)</th>
        <th style="color:black;" >Product Description</th>
        <?php if($_SESSION['userjob'] == 'Administrator') {?>
        <th style="color:red;">DELETE</th>
        <th style="color:blue;">UPDATE</th>
        <?php } ?>
    </tr>
        <?php
          $virtual_con = mysqli_connect("localhost", "root", "", "pim");  //IMPORTANT change if use webhost
            if($virtual_con -> connect_error) {
              die("connection failed: ".$virtual_con -> connect_error);
            }

          $sql = "SELECT * FROM product";
          $result = mysqli_query($virtual_con, $sql);
          $counter = 1;?>

          <?php if(mysqli_num_rows($result) > 0){?>
            <?php while ($row = $result-> fetch_assoc()) { ?>
              <tr>
                      <td style="color:black;" ><?php echo $counter; $counter++;?></td>
                      <td style="color:black;" ><?php echo $row['prod_ID']; ?></td>
                      <td style="color:black;" ><?php echo "<img  src='../{$row['prod_Pic']}' height=100 width=100></img>"; ?></td>
                      <td style="color:black;" ><?php echo $row['prod_Brand']; ?></td>
                      <td style="color:black;" ><?php echo $row['prod_Name']; ?></td>
                      <td style="color:black;" ><?php echo $row['prod_Price']; ?></td>
                      <td style="color:black;" ><?php echo $row['prod_Desc']; ?></td>
                      <?php if($_SESSION['userjob'] == 'Administrator') {?>
                      <td><button type="button" style="color:black;" onclick="confirmDialog(this)" value="<?php echo $row['prod_ID']; ?>">Delete</button></td>
                      <script >
                      function confirmDialog(e){

                        var id = e.value;
                        Swal.fire({
                            title: 'Are you sure to delete?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Confirm!'
                          }).then((result) => {
                            if (result.isConfirmed) {
                              window.location = 'deleteprod.php?prodid=' + id;
                            }
                          })
                      }
                      </script>
                      <td><a style="color:black;" href="updateprod.php?prodid=<?php echo $row['prod_ID']; ?>">Update</a></td>
                      <?php } ?>
              </tr>
            <?php } ?>
          <?php } ?>
        </table>
        <br>
        <p><a href="../systemIndex.php"><button class="button button5">Back</button></a></p>
      </div>
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
   window.location = '../index.php';
   }
   })
   </script>";?>
    <div class="site-wrap">

      <div class="site-blocks-cover" style="background-image: url('../images/med4.jpg');">
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
            <img src="../images/logo.jpg" alt="Image" style="border-radius:50%" width="70" height="70">
            <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | A.D.U.H | Learning purposes
            </p>
          </div>

        </div>
      </div>
    </footer>
  <script src="../js/menubuttonsystemindex.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>
