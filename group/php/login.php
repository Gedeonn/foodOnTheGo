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
    <link rel="stylesheet" href="../css/login.css">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<h3 style="color:'white'"> Login </h3>

<!-- div for content aspect of page -->
<div id="content">
  <!-- form to add product to database -->
  <form method="POST"  id="form" enctype="multipart/form-data">
    <!-- require php functions page that has the functions-->
    <?php require_once("productFunctions.php"); ?>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name= "email" id="email" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name= "password" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary" name="logincustomer" onclick="return validatelogin()">Login</button>
      <a href="register.php"><input type="button" class="btn btn-primary" value="New? Register"></a>
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
