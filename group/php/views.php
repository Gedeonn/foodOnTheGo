<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="../images/stars.jpg" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
  <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title>Single Product View</title>
</head>
<body>

<?php
  include("productFunctions.php");
  $image = $_GET['image'];
  $title = $_GET['name'];
  $price = $_GET['price'];
  $description = $_GET['description'];
  $id = $_GET['id'];
  ?>


  <div id='menu'>
    <div class="menu">
      <!-- links for nav bar -->
    <ul>
      <form method="POST">

      <li><a href="../index.php"> Home </a></li>
      <li><a href="products.php"> Product </a></li>
      <li><a href="#"> Account </a></li>
      <li><a href="#"> Sign Up </a></li>
      <li><a href="cart.php"> Shopping Cart </a></li>
      <li><a href="php/contactus.php"> Contact Us </a></li>
      <li><a href="php/login.php"> Login </a></li>
      <li><a href="php/logout.php"> Logout</a></li>
      <li><input type="text" placeholder="Search by keywords" name="searchitem"></li>
      <li><input type="submit" name="searchbutton"></li>
    </ul>
  </form>
  </div>
  </div>

<!-- div for aspects of the page that will float to the left and right -->
<div id='floats'>
  <!-- div for breadcrumbs -->
  <div id='breadcrumb'>
    <!-- div to position text in breadcrumb -->
    <div class="breadcrumbtext">
      <?php
      require_once('productFunctions.php');
      num();
      ?>

      <!-- make shopping cart image a link -->
      <a href="cart.php"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
      <a href="cart.php">Go To Cart </a>
    </div>
  </div>

  <!-- div for sidebar menu -->
    <div id='sidebar'>
      <div class="sidebartext">
        <br>
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


  <div id="content" style="background-color:white">

    <?php
    if (isset($_POST['searchbutton']) && !empty($_POST['searchitem']))
    {
      echo "<div class=\"grid-container\" style=\"background-color:black\">";
      search();
    }
    else
    echo '

    <div class="big">
      <img src="../' .$image. '" width="350px" height="350px">
        <p>
          <BR><BR><BR>
         <span id= "itemname">' .$title. '<br><br></span>
        <span id="price"> Price </span> : GHS ' .$price. '.00<br><br>
          <span id="description"> Description </span>:' .$description. '<br><br>
          <span id="quantity"> Quantity in Stock </span>: 10 <br><br>
          <span id="quantity"> Quantity </span>: <input type="number" min="1" max="10" placeholder="1"> <br><br>
            <form method="post">
          <button value="'.$id.'" name="cart">Add to Cart</button>
          <a href="../index.php"><input type="button" value="Return"></a>
  </p>
  </form>';
     ?>

    </div>
  </div>

  <div id='footer'>
    &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
  </div>
