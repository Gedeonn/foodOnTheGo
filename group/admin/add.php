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
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


  <div id='menu' >
    <div class="menu">
      <!-- links for nav bar -->
    <ul>
      <li><a href="../index.php"> Home </a></li>
      <li><a href="../php/products.php"> Product </a></li>
      <li><a href="#"> Account </a></li>
      <li><a href="../php/register.php"> Sign Up </a></li>
      <li><a href="../php/cart.php"> Shopping Cart </a></li>
      <li><a href="../php/contactus.php"> Contact Us </a></li>
      <li><a href="add.php"> Add New Product </a></li>
      <li><a href="php/login.php"> Login </a></li>
      <li><a href="php/logout.php"> Logout</a></li>
    </ul>
  </div>
  </div>

<!-- div for aspects of the page that will float to the left and right -->
  <div id='floats'>
    <!-- div for breadcrumbs -->
    <div id='breadcrumb'>
        <!-- div to position text in breadcrumb -->
      <div class="breadcrumbtext">
        Welcome Admin!
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
    <?php require_once("functions.php"); ?>

  <div class="form-group">
    <!-- image input type -->
    <label for="image"> Select Food Image to Upload:</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
  </div>

  <div class="form-group">
    <label for="name">Food Name:</label>
    <input type="text" class="form-control" name= "name" id="name" required>
  </div>

  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" min="1" class="form-control" id="price" name="price" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" rows = "5" id="description" name="description" required></textarea>
  </div>

  <div class="form-group">
    <label for="duration">Cooking Duration:</label>
    <input type="text" class="form-control" id="duration" name="duration" required>
  </div>

  <div class="form-group">
    <label for="ingredients">Cooking Ingredients:</label>
    <input type="text" class="form-control" id="ingredients" name="ingredients" required>
  </div>

  <button type="submit" class="btn btn-primary" name="add" onclick="return validate()">Submit</button>
</form>
</div>

<!-- footer code -->
<div id='footer'>
  &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
</div>

<!-- include javascript validation file  -->
<script type="text/javascript" src="../js/add.js"></script>
</body>
</html>
