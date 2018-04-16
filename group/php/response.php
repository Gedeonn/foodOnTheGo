<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="../images/banner.png" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
 <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title>Cart</title>
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
              require_once('productFunctions.php');
              num();
          ?>
          <!-- make shopping cart image a link -->
          <a href="cart.php"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
          <a href="../index.php">Continue Shopping </a> &nbsp&nbsp&nbsp
          <a href="checkout.php"><input type="submit" name="checkout" value="Proceed to Checkout" class="button"></a>
        </form>
      </div>
    </div>


    <!-- div for content aspect of page -->
    <div id='content'>
      <!-- div for grid -->
      <!--<div class="grid-container">-->
        <table class=" table table-striped table-bordered" id="cart_table">
          <th>Product</th>
          <th>Title</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total Price</th>
          <th>Order</th>

          <!-- Get the success variables, insert into the database and show the user the order summary -->
         
          <div class="outer">
          <span class="titre"> Order Summary </span>
              <div class="item">
                  Item name: <?php echo $_GET['item_name']?>
              </div>
              
              <div class="amount">
              Amount: $<?php echo $_GET['amt']?>
              </div>

              <div class="message">
                  Order status: <?php echo $_GET['st']?>
              </div>
          </div>
      </div>
  </div>

  <!-- <div id='footer'>
    &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
  </div> -->

</body>
</html>
