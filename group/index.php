
<!DOCTYPE html>
<html>
<header>
  <!-- include image -->
  <img src="images/banner.png" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
  <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/lab2.css">
  <title></title>
</head>
<body>

  <div id='menu'>
    <div class="menu">
      <!-- links for nav bar -->
      <form method="POST">
    <ul>
      <li><a href="index.php"> Home </a></li>
      <li><a href="php/products.php"> Product </a></li>
      <li><a href="#"> Account </a></li>
      <li><a href="php/register.php"> Sign Up </a></li>
      <li><a href="php/cart.php"> Shopping Cart </a></li>
      <li><a href="php/contactus.php"> Contact Us </a></li>
      <li><a href="php/login.php"> Login </a></li>
      <li><a href="php/logout.php"> Logout</a></li>
      <!-- <!?php
      // require_once("display.php");
      // session_start();
      // if (!empty($_SESSION['login']))
      {
        // echo '<li><a href="php/logout.php">Logout</a></li>';
      }
      // else
      {
        // echo '<li><a href="php/login.php">Login</a></li>';
      }
      ?-->
      <li><input type="search" placeholder="Search by name" name="searchitem"></li>
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
      require_once('display.php');
        num();
        ?>
      <!-- make shopping cart image a link -->
      <a href="php/cart.php"><img src="images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
      <a href="php/cart.php">Go To Cart </a>
    </div>
  </div>

<!-- div for sidebar menu -->
  <div id='sidebar'>
    <div class="sidebartext">
      <br>
      <p id="top"> Categories: </p>
      <!-- display categories in list format -->
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
        <?php require_once("display.php");

        // check if search button has been clicked and search bar is not empty. if not, search.
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
