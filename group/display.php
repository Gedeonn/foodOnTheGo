
<?php
// include database file
require_once("admin/database/connect.php");

// new function that displays products on the homepage
function allproducts()
{
  // write wqery
  $sql = "SELECT id,food_name,price,image,duration,ingredients,description FROM food ORDER BY RAND()"; //random selection order each time.

  // create new instance of database
  $connect = new Connect;

  // run query
  $run = $connect->query($sql);

  // loop through results
  while ($row = $connect->fetch())
  {
    // // display grid items in grid-item div tag

    echo '
    <form method = "post">
      <div class="grid-item">
  <a href="php/views.php?image='.$row['image'].'&name='.$row['food_name']. '&duration='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id'].'"><img src="'.$row['image'].'"></a><br>
  <a href="php/views.php?image='.$row['image']. '&duration='.$row['food_name']. '&name='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id']. '" >' .$row['food_name']. '</a><br><br>

  <p>GHS ' .$row['price'].'.00</p>'.'<br>
  <button value="'.$row['id'].'" name="cart">Add to Cart</button>
  </div>
    </form>';
}
}

// function that searches through database for items and displays them
function search()
{
  // get search bar input and store in variable called searchitem
  $searchitem = $_POST['searchitem'];

  // sql query to get information about search results
$sql = "SELECT id,food_name,price,image,duration,ingredients,description FROM food WHERE food_name LIKE '%$searchitem%'";

  $login =  new Connect;

  $run = $login->query($sql);

  if ($run)
  {
    while ($row = $login->fetch())
    {
      // display search results in grid format
      echo '
      <form method = "post">
        <div class="grid-item">
  <a href="php/views.php?image='.$row['image'].'&name='.$row['food_name']. '&duration='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id'].'"><img src="../'.$row['image'].'"></a><br>
  <a href="php/views.php?image='.$row['image']. '&duration='.$row['food_name']. '&name='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id']. '" >' .$row['food_name']. '</a><br>

  '.'<p>GHS ' .$row['price'].'.00</p>'.'  <br>
  <button value="'.$row['id'].'" name="cart">Add to Cart</button>
  </div>
      </form>';
    }
  }
  else
  {
    echo "No results found.";
  }
}


if (isset($_POST['cart']))
{
  addtocart();
// addtoOrders();
}

function addtocart()
{
  $id = $_POST['cart'];
  $ip = $_SERVER["REMOTE_ADDR"];
  $qty = '1';

  //check if item is already inserted

  $sql = "SELECT foodId, ip_addr FROM cart WHERE foodId = '$id' AND ip_addr = '$ip'";

  $login =  new Connect;

  $run = $login->query($sql);

  $results = $login->fetch();

  if ($results)
  {
    echo "Product already added";
  }
  else
  {
    //add to cart
    $sql2 = "INSERT INTO cart(foodId, ip_addr, quantity) VALUES ('$id', '$ip', '$qty')";

    $run = $login->query($sql2);
  }
}


function num()
{
  $bill = 0;
  $ip = $_SERVER["REMOTE_ADDR"];

  $sql = "SELECT COUNT(foodId) AS ANS FROM cart WHERE ip_addr = '$ip'";

  $login = new Connect;

  $run = $login->query($sql);

  $results = $login->fetch();

  // echo "works";
  if ($results)
  {
    $login2 = new Connect;
    //setting the count variable to be displayed in breadcrumbs
    $count = $results['ANS'];

    $sql2 = "SELECT foodId, quantity FROM cart WHERE ip_addr = '$ip'";

    $run2 = $login2->query($sql2);

    while ($results = $login2->fetch())
    {
      $login3 = new Connect;
      $id = $results['foodId'];
      $quantity = $results['quantity'];

      //getting the Price
      $sql3 = "SELECT price FROM food WHERE id = '$id'";

      $run3 = $login3->query($sql3);

      $results =  $login3->fetch();

      $price = $results['price'];

      $totalPrice = $quantity * $price;

      $bill = $totalPrice + $bill;
    }
    session_start();
    if (!empty($_SESSION['login']))
    {
    echo "Welcome ".$_SESSION['name']."! &nbsp&nbsp&nbsp Total Items: " . $count . "&nbsp&nbsp&nbsp Total Price: GHS ". $bill. ".00";
    }
    else
    {
      echo "Welcome Guest! &nbsp&nbsp&nbsp Total Items: " . $count . "&nbsp&nbsp&nbsp Total Price: GHS ". $bill. ".00";
      }
  }
}

// function addtoOrders(){
//   $id = $_POST['cart'];
//   $ip = $_SERVER["REMOTE_ADDR"];
//   $qty = '1';
//   $status='processing';
//   $customer_name=$_SESSION['name'];
//   $food_name='';
//   $id2='';
//   $quantity='';
//
//
//   $sql1 = "SELECT foodId, ip_addr FROM cart WHERE foodId = '$id' AND ip_addr = '$ip'";
//
//   $login =  new Connect;
//
//   $run = $login->query($sql1);
//
//   $results = $login->fetch();
//
//   if ($results)
//   {
//     $login2 = new Connect;
//
//     $sql2 = "SELECT foodId, quantity FROM cart WHERE ip_addr = '$ip'";
//
//     $run2 = $login2->query($sql2);
//     while ($results = $login2->fetch())
//     {
//       $login3 = new Connect;
//       $id2 = $results['foodId'];
//       $quantity = $results['quantity'];
//
//       //getting the Price
//       $sql3 = "SELECT food_name FROM food WHERE id = '$id2'";
//
//       $run3 = $login3->query($sql3);
//
//       $results =  $login3->fetch();
//
//       $food_name = $results['food_name'];
//     }
//     //add to cart
//     $sql3 = "INSERT INTO orders(food_name, order_number, quantity,status,customer) VALUES ('$food_name', '$id2', '$quantity','$status','$customer_name')";
//
//     $run = $login->query($sql3);
//     echo 'Order added successfully';
//   }
//   else{
//     echo 'Error:failed to add order';
//   }
//
// }

?>


