<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="../images/banner.png" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
 <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title>Chef</title>
</head>
<body>
  <div id='menu'>
    <div class="menu">
      <!-- links for nav bar -->
      <form method="POST">
        <ul>
          <li><a href="../index.php"> Home </a></li>
          <li><a href="products.php"> Product </a></li>
          <li><a href="#"> Account </a></li>
          <li><a href="register.php"> Sign Up </a></li>
          <li><a href="cart.php"> Shopping Cart </a></li>
          <li><a href="contactus.php"> Contact Us </a></li>
          <li><a href="login.php"> Login </a></li>
          <li><a href="logout.php"> Logout</a></li>
        </form>
      </ul>
    </div>
  </div>

  <!-- div for aspects of the page that will float to the left and right -->
  <div id='floats'>
    <!-- div for breadcrumbs -->
    <div id='breadcrumb'>
      <!-- div to position text in breadcrumb -->
      <div class="breadcrumbtext">
        <form method="POST">
          <?php
         include('php/productFunctions.php');
        
         ?>
          <!-- make shopping cart image a link -->
          <a href="cart.php"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
          <a href="../index.php">Continue Shopping </a> &nbsp&nbsp&nbsp
          <a href="checkout.php"><input type="submit" name="checkout" value="Proceed to Checkout" class="button"></a>
        </form>
      </div>
    </div>

    <!-- div for sidebar menu -->
    <div id='sidebar'>
      <div class="sidebartext">
        <br>
        <!-- show categories and brands in list format -->
        <p id="top"> Categories: </p>
        <ul>
          <li><a href="#">Christmas trees</a></li><br>
          <li><a href="#">Christmas balls</a></li><br>
          <li><a href="#">Candles</a></li><br>
          <li><a href="#">Cards</a></li><br>
          <li><a href="#">Candy Canes</a></li><br>
          <li><a href="#">Angels</a></li><br>
          <li><a href="#">Tinsels</a></li><br>
          <li><a href="#">Hangings</a></li><br>
          <li><a href="#">Wreaths</a></li><br>
          <li><a href="#">Tree Ornaments</a></li>
        </ul>

        <p id="top"> Brands: </p>
        <ul>
          <li><a href="#">Charming Tails</a></li><br>
          <li><a href="#">Chatley Creations</a></li><br>
          <li><a href="#">Heart Gifts</a></li>
        </ul>
      </div>
    </div>

    <!-- div for content aspect of page -->
    <div id='content'>
      <!-- div for grid -->
      <!--<div class="grid-container">-->
        <table class=" table table-striped table-bordered" id="cart_table">
          <th>Order Number</th>
          <th>Customerid</th>
          <th>Foodname</th>
          <th>Status</th>
          <th>Quantity</th>
          <th>OrderBtn</th>
          <!-- require php page with function that displays grid items  -->
        <!--</div>-->

      </table>
    </div>
  </div>

  <!-- <div id='footer'>
    &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
  </div> -->

</body>
</html>
