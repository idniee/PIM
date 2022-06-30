<?php
include_once('config/all.php');

$username = $_SESSION['usersession'];
$user;
if($_SESSION['userjob'] == 'Manager'){
  $sql = "SELECT * FROM employee_manager WHERE emp_ID='".$username."'";
  $result = mysqli_query($virtual_con,$sql);
  $user = mysqli_fetch_assoc($result);
}else{
  $sql2 = "SELECT * FROM employee_staff WHERE emp_ID='".$username."'";
  $result2 = mysqli_query($virtual_con,$sql2);
  $user = mysqli_fetch_assoc($result2);
}

$_SESSION['userStore'] = $user['emp_StoreID'];
 ?>

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
     <link rel="stylesheet" href="css/menubuttonsystemindex.css">
     <script type="text/javascript" src="js/custom.js">

     </script>
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
       position:absolute;
       background-color: #f1f1f1;
       min-width: 200px;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       border-radius: 20px;
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
     hr.new1 {
   border-top: 3px solid orange;
   }
     .img {
       border-radius: 50%;
       height: 280px;
       width: 280px;
       }

     .pim{
       margin: 0px 95px 0px 0px;
     }
     .staff{
       margin: 0px 20px 0px 50px;
     }
     .col1 {
     width: 300px;
     float: left;
     }
     .topright {
       position: absolute;
       top: 85px;
       right: 115px;
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
 .table {
	background:  #cc6699;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
}

.home-nav a {
	padding: 10px;
	color: #f7bd65;
	text-transform: uppercase;
	text-decoration: none;
}
</style>

	<title>Change Password</title>
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
  <div class="table">

    <form action="change-p.php" method="post">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password"
     	       name="op"
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password"
     	       name="np"
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password"
     	       name="c_np"
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href="systemIndex.php" class="ca">HOME</a>
     </form>
   </div>

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
