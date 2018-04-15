<!DOCTYPE html>
<html>
<header>
  <!-- include header image -->
  <img src="../images/banner.png" alt="Picture" width= "1278px" height= "300px">
</header>
<head>
  <!-- include stylesheet -->
  <link rel="stylesheet" type="text/css" href="../css/lab2.css">
  <title></title>
</head>
<body>
  <!-- <div id='header'>
    Header
  </div> -->

  <div id='menu' >
    <div class="menu">
    <ul>
      <form method="POST">
        <?php include("productFunctions.php"); ?>
      <li><a href="../index.php"> Home </a></li>
      <li><a href="#"> Product </a></li>
      <li><a href="#"> Account </a></li>
      <li><a href="#"> Sign Up </a></li>
      <li><a href="#"> Shopping Cart </a></li>
      <li><a href="contactus.php"> Contact Us </a></li>
      <li><a href="login.php"> Login </a></li>
      <li><a href="logout.php"> Logout</a></li>
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
      <?php require_once('productFunctions.php'); ?>
      Welcome Guest! &nbsp&nbsp&nbsp Total Items: <?php echo $count; ?> &nbsp&nbsp&nbsp Total Price: GHS <?php echo $totalPrice; ?>

      <!-- make shopping cart image a link -->
      <a href="#"><img src="../images/shopping-cart.png" alt="Cart" width="25px" height="25px"></a>
      <a href="#">Go To Cart </a>
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
<div id="content">
  <br><br><br><br><br><br><br>
    sjubushfljflbsdnvlkdsnb
    <br><br>
   sdjvsdbvkjds
    <br><br><br><br><br><br><br><BR><br><br>
</div>

<!-- footer -->
  <div id='footer'>
    &copy 2018 Liani's Christmas Shop. Powered by Nana Adjoa Bentil
  </div>

</body>
</html>