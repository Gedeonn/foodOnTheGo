
<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="../images/banner.png" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
  <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title>All Products</title>
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
      <li><a href="#"> Sign Up </a></li>
      <li><a href="cart.php"> Shopping Cart </a></li>
      <li><a href="contactus.php"> Contact Us </a></li>
      <li><a href="login.php"> Login </a></li>
      <li><a href="logout.php"> Logout</a></li>
      <li><input type="text" placeholder="Search by keywords" name="searchitem"></li>
      <li><input type="submit" name="searchbutton"></li>
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
    <!-- div for grid -->
    <div class="grid-container">
      <!-- require php page with function that displays grid items  -->
        <?php require_once("productFunctions.php");
        // check if search button has been clicked. if yes, and search bar is not empty, search
        if (isset($_POST['searchbutton']) && !empty($_POST['searchitem']))
        {
          search();
        }
        // otherwise, display all products
        else
        {
          allproducts();
        }
        ?>
    </div>
  </div>
</div>

  <!-- <div id='footer'>
    &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
  </div> -->

</body>
</html>
