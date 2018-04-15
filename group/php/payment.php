<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="../images/banner.jpg" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
  <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title>Payment</title>
</head>
<body>
  <?php require_once("productFunctions.php"); ?>
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
      <li><a href="php/logout.php"> Logout</a></li>
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
      ?php
      require_once('productFunctions.php');
      num();
      ?
      <!-- make shopping cart image a link -->
       <a href="cart.php"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a> 
       <a href="../index.php">Continue Shopping </a> &nbsp&nbsp&nbsp 

      <!-- <input type="submit" name="checkout" value="Proceed to Checkout"> -->
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
            <li><a href="#">1</a></li><br>
            <li><a href="#">2</a></li><br>
            <li><a href="#">3</a></li><br>
            <li><a href="#">4</a></li><br>
            <li><a href="#">5</a></li><br>
            <li><a href="#">6</a></li><br>
            <li><a href="#">7</a></li><br>
            <li><a href="#">8</a></li><br>
            <li><a href="#">9</a></li><br>
            <li><a href="#">10</a></li>
        </ul>

        <p id="top"> Brands: </p>
        <ul>
          <li><a href="#">1</a></li><br>
          <li><a href="#">2</a></li><br>
          <li><a href="#">3</a></li>
    </ul>
  </div>
</div>
    <!-- div for content aspect of page -->
      <div id='content'>
        
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        
          <!-- Identify your business so that you can collect the payments. -->
          <input type="hidden" name="business" value="healthonthego@gmail.com">
        
          <!-- Specify a Buy Now button. -->
          <input type="hidden" name="cmd" value="_xclick">
        
          <!-- Specify details about the item that buyers will purchase. -->
          <input type="hidden" name="item_name" value="Premium Umbrella">
          <input type="hidden" name="amount" value="50.00">
          <input type="hidden" name="currency_code" value="USD">
        
          <!-- Prompt buyers to enter the quantities they want. -->
          <input type="hidden" name="undefined_quantity" value="1">
        
          <!-- Display the payment button. -->
          <input type="image" name="submit" border="0"
            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
            alt="Buy Now">
          <img alt="" border="0" width="1" height="1"
            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
        
        </form>
        </body>
        </html>
        