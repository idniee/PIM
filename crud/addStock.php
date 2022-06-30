<?php
include_once('config/all.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" style="scroll-behavior: smooth;">
  <head>
    <link rel="icon" type="image/x-icon" href="../images/logo.ico"/>
    <title>Pharmacy Iventory Management|Home</title>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="../css/custombs.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menubuttonsystemindex.css">
    <script type="text/javascript" src="../js/custom.js"></script>
    <script src="../sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">

    <script src="../js/menubuttonsystemindex.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/main.js"></script>

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

    $sqlAll = "SELECT * FROM product";
    $tempAll = mysqli_query($virtual_con,$sqlAll);
    $rowAll = mysqli_num_rows($tempAll);
    $i=0;
    while($allProd2 = mysqli_fetch_assoc($tempAll)){
      $allProd[$i] = $allProd2;
      $i++;
    }

    $sqlName = "SELECT prod_id FROM product";
    $tempName = mysqli_query($virtual_con,$sqlName);
    $rowName = mysqli_num_rows($tempName);
    $j=0;
    while($allName2 = mysqli_fetch_assoc($tempName)){
      $allName[$j] = $allName2;
      $j++;
    }
     ?>
    <script>
      function showProd(element){
          var count = 0;
          var limit = parseInt(<?php echo $rowAll;?>);
          var product = <?php echo json_encode($allName); ?>;
          //JSON.stringify(product[0]).slice(-12).substr(0,10); //productID
          var curr = element.options[element.selectedIndex].value;

          while(count<limit){
            var idProd = JSON.stringify(product[count]).slice(-12).substr(0,10);
            document.getElementById(idProd).style.display = 'none';
            if(idProd == curr){ //productID == curr){
              document.getElementById(idProd).style.display = 'block';
            }
            count++;
          }

      }

      function change(){
          window.location = '../systemIndex.php';
      }
    </script>
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
                  <img style="" src="<?php echo "../".$user['emp_Pic']; ?>" onclick="myFunction()" class="dropbtnClick rounded-circle" alt="">
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
    <?php if(!isset($_POST['addProdID'])) {?>
      <div class="site-blocks-cover" style="background-image: url('../images/med1.jpg');">
        <div class="row mx-auto py-2" style="background:beige;height:50px;padding-left:200px">
          <a href="stockList.php">Stock List</a> <span> &nbsp/&nbsp </span>
          <a href="addStock.php">Add New Stock</a>
        </div>

        <div class="container">
          <div class="col-lg-10 col-sm-4 mx-auto align-items-center justify-content-center text-center">

            <?php $sqlProd = "SELECT * FROM product";
                  $tempProd = mysqli_query($virtual_con,$sqlProd);
                  $rowProd = mysqli_num_rows($tempProd);
                  $count = 0;
                  while($prod2 = mysqli_fetch_assoc($tempProd)){
                    $prod[$count] = $prod2;
                    $count++;
                  }
            ?>
            <br>
            <p class="text-dark">Choose product to add into the stock</p>
            <select id="selectProd" class="" name="prodNameList" style="height:20px" onchange="showProd(this)">
              <option value="" selected></option>
              <?php for($i=0;$i<$rowProd;$i++) {
                    $tempVal = implode("|",$prod['prod_ID']);
                    $tempValN = $prod[$i]['prod_ID'];
                ?>
                <option value="<?php echo $tempValN; ?>"><?php echo $tempValN; ?> |
                  <?php echo $prod[$i]['prod_Name'] ?></option>
              <?php } ?>
            </select>
            <br>
            <br>
            <div class="row align-items-center text-center rounded col-lg-12 col-sm-4" >
              <?php for($i=0;$i<$rowProd;$i++){ ?>
                <div id='<?php echo $prod[$i]['prod_ID']; ?>' class="col-lg-12 col-sm-4 mx-auto text center align-items-center rounded "
                    style="display:none;background-color:rgba(245,245,220,0.8)">
                  <img class="col-lg-5 col-sm-3 float-left w-50 h-50 " src="../<?php echo $prod[$i]['prod_Pic'] ?>">
                  <div class="col-lg-7 col-sm-5 float-right text-center">
                    <br><br><br>
                    <p class="w-100"><h3 class="text-dark">Brand : <?php echo $prod[$i]['prod_Brand'] ?></h3> </p>
                    <p class="text-dark w-100"><h2>Product Name : <?php echo $prod[$i]['prod_Name'] ?></h2> </p>
                    <p class="text-dark w-100">Price : RM <?php echo number_format($prod[$i]['prod_Price'],2); ?></p>
                    <div class="row text-center align-items-center">
                      <form  action="addStock.php" method="post" name="<?php echo $i; ?>">
                        <div class="row">
                          <p  class="col-lg-12 col-sm-3 mx-auto text-center text-dark">Product ID : <input class="rounded px-2" readonly type="text" name="addProdID" value="<?php echo $prod[$i]['prod_ID']; ?>"></p>
                        </div>
                        <div class="row">
                          <p style="color:black" class="col-lg-7 col-sm-3 mx-auto">Quantity : <input class="px-3 w-50" type="text" name="quan" value="0"></p>
                          <p class="col-lg-5 col-sm-3"><input class="rounded btn btn-primary px-3 py-2" onclick="confirmDialog('<?php echo $i; ?>')" type="button" value="Add Stock"></p>
                          <script >
                          function confirmDialog(e){

                            Swal.fire({
                                title: 'Confirm your action?',
                                text: "",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Confirm!'
                              }).then((result) => {
                                if (result.isConfirmed) {

                                  document.getElementsByName(e)[0].submit();
                                }
                              })
                          }
                          </script>
                        </div>
                        </table>
                      </form>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>

          </div>
        </div>
      </div>
    <?php }else if(isset($_POST['addProdID'])){

            $sqlCheck = "SELECT * FROM stock WHERE store_ID='".$_SESSION['userStore']."'";
            $tempCheck = mysqli_query($virtual_con,$sqlCheck);
            $k=0;
            $index=0;
            while($checkList2 = mysqli_fetch_assoc($tempCheck)){
              $checkList[$k] = $checkList2;
              $k++;
            }

            $check=false;
            for($n=0;$n<$k;$n++){
              if($checkList[$n]['prod_ID'] == $_POST['addProdID']){
                $check = true;
                $index = $n;
                break;
              }
            }
            $decision;

            if($check){
              $quantityProd = (int)$checkList[$index]['prod_Quan'];
              $quantityProd = $quantityProd + (int)$_POST['quan'];
              $stockIDUpdate = $_SESSION['userStore'].$_POST['addProdID'];
              $stockUpdate = "UPDATE stock SET prod_Quan='".$quantityProd."' WHERE stock_ID='".$stockIDUpdate."'";
              $tempUpdate = mysqli_query($virtual_con,$stockUpdate);
              $decision = $tempUpdate;

              echo " <script>
              Swal.fire({
        title: 'Update Stock Successfull!',
        text: 'Redirecting..',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
        }).then((result) => {
        if (result.isConfirmed) {
        window.location = 'stockList.php';
        }
        })
         </script>'";
            }else{
              $stockIDAdd = $_SESSION['userStore'].$_POST['addProdID'];
              $sqlAddStock = "INSERT INTO stock VALUES('".$stockIDAdd."','".$_SESSION['userStore']."','".$_POST['addProdID']."','".$_POST['quan']."')";
              $tempAddStock = mysqli_query($virtual_con,$sqlAddStock);
              $decision = $tempAddStock;
              echo " <script>
              Swal.fire({
        title: 'Add New Stock Successfull!',
        text: 'Redirecting..',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
        }).then((result) => {
        if (result.isConfirmed) {
        window.location = 'stockList.php';
        }
        })
         </script>'";
            }
      ?>

        <div class="site-blocks-cover" style="background-image: url('../images/med1.jpg');">
          <div class="container rounded" style="background-color:lightblue"></div>
        </div>
    <?php  } ?>
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
  </body>
</html>
