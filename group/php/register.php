<!DOCTYPE html>
<!-- set html language to english -->
<html lang="en">
<header>
  <!-- include image as header -->
  <img src="../images/banner.png" alt="Picture" width="100%" height= "300px">
</header>
  <head>
    <!-- include stylesheets and javascript -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add.css">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min,js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


  <!--div id='menu' -->
    <div class="menu" id = "menu">
      <!-- links for nav bar -->
    <ul>
      <li><a href="../index.php"> Home </a></li>
      <li><a href="products.php"> Product </a></li>
      <li><a href="#"> Account </a></li>
      <li><a href="#"> Sign Up </a></li>
      <li><a href="cart.php"> Shopping Cart </a></li>
      <li><a href="contactus.php"> Contact Us </a></li>
    </ul>
  </div>
  <!--/div-->

  <!-- div for aspects of the page that will float to the left and right -->
  <div id='floats'>
    <!-- div for breadcrumbs -->
    <div id='breadcrumb'>
      <!-- div to position text in breadcrumb -->
      <div class="breadcrumbtext">

        <!--?php
        require_once('productFunctions.php');
        num();
        ?-->
        <!-- make shopping cart image a link -->
        <a href="cart.php"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
        <a href="cart.php">Go to Cart </a>
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
              <li><a href="#">Trees</a></li><br>
              <li><a href="#">Candy Canes</a></li><br>
              <li><a href="#">Tinsels</a></li><br>
              <li><a href="#">Angels</a></li><br>
              <li><a href="#">Hangings</a></li><br>
              <li><a href="#">Wreaths</a></li><br>
              <li><a href="#">Tree Ornaments</a></li>

          </ul>

          <p id="top"> Brands: </p>
          <ul>
            <li><a href="#">Charming Tails</a></li><br>
            <li><a href="#">Chatley Creations</a></li><br>
            <li><a href="#">Heart Gifts</a></li><br>
            <li><a href="#">Christopher Radko</a></li>
      </ul>
    </div>
  </div>

<!-- div for content aspect of page -->
<div id="content">
  <!-- form to add product to database -->
  <form method="POST"  id="form" enctype="multipart/form-data">
    <!-- require php functions page that has the functions-->
    <?php require_once("productFunctions.php"); ?>

  <div class="form-group">
    <!-- image input type -->
    <label for="fileToUpload"> Select Image to Upload:</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
  </div>

  <div class="form-group">
    <label for="name">FirstName:</label>
    <input type="text" class="form-control" name= "firstname" id="firstname" required>
  </div>

  <div class="form-group">
    <label for="name">LastName:</label>
    <input type="text" class="form-control" name= "lastname" id="lastname" required>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name= "email" id="email" required>
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name= "password" id="password" required>
  </div>

  <div class="form-group">
    <label for="tel">Telephone Number:</label>
    <input type="tel" class="form-control" name= "tel" id="tel" required>
  </div>


  <button type="submit" class="btn btn-primary" name="registercustomer" onclick="return validate()">Register</button>
  <a href="login.php"><input type="button" class="btn btn-primary" value="Already a customer? Login"></a>
</div>
</form>


<!-- footer code -->
<div id='footer'>
  &copy 2018 Health on the Go
</div>

<!-- include javascript validation file  -->
<script type="text/javascript" src="../js/register.js"></script>
</body>
</html>
