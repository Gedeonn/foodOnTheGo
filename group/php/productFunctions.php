
<?php
// include database file
require_once("../admin/database/connect.php");

if (isset($_POST['checkout']))
{
  session_start();
  if (!empty($_SESSION['id']))
  {
    header("location: checkout.php");
  }
}

function allproducts()
{
  // write query
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
    <a href="views.php?image='.$row['image'].'&name='.$row['food_name']. '&duration='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id'].'"><img src="../'.$row['image'].'"></a><br>
    <a href="views.php?image='.$row['image']. '&duration='.$row['food_name']. '&name='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id']. '" >' .$row['food_name']. '</a><br><br>
'.'<p>GHS ' .$row['price'].'.00</p>'.'  <br>
    <button value="'.$row['id'].'" name="cart">Add to Cart</button>
    </div>
    </form>';
  }
}

// function to search through database for search results
function search()
{
  $searchitem = $_POST['searchitem'];

  $sql = "SELECT id,food_name,price,image,duration,ingredients,description FROM food WHERE food_name LIKE '%$searchitem%'";

  $login =  new Connect;

  $run = $login->query($sql);

  if ($run)
  {
    while ($row = $login->fetch())
    {
      echo '
      <form method = "post">
      <div class="grid-item">
      <a href="views.php?image='.$row['image'].'&name='.$row['food_name']. '&duration='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id'].'"><img src="../'.$row['image'].'"></a><br>
      <a href="views.php?image='.$row['image']. '&duration='.$row['food_name']. '&name='.$row['food_name']. '&price='.$row['price']. '&description='.$row['description']. '&id='.$row['id']. '" >' .$row['food_name']. '</a><br>

      '.'<p>GHS ' .$row['price'].'.00</p>'.'  <br>
      <button value="'.$row['id'].'" name="cart">Add to Cart</button>
      </div>
      </form>';
    }
  }
  else
  {
    echo "Could not search.";
  }
}


if (isset($_POST['cart']))
{
  addtocart();
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
    //session_start();
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

//function to get items from cart
function viewCart()
{
  $ip = $_SERVER["REMOTE_ADDR"];

  //get product details from Cart
  $sql = "SELECT foodId, quantity FROM cart WHERE ip_addr = '$ip'";

  $login = new Connect;

  $run = $login->query($sql);

  while ($results = $login->fetch())
  {
    //set item id to variable
    $id = $results['foodId'];
    $qty = $results['quantity'];

    //get item name, picture, price
    $sql2 = "SELECT food_name, price, image FROM food WHERE id = '$id'";

    $login2 = new Connect;

    $run2 = $login2->query($sql2);

    while ($row = $login2->fetch())
    {

      //display cart items in a table
      $title=$row['food_name'];
      $price=$row['price'];
      $totalprice = $price * $qty;
      $image=$row['image'];


     echo '
     <form method="POST">
     <div class = "cart-items">
        <tr>
                <td><img class="card-img-top" style="width:75px; height:75px;"src="../'.$image.'" alt="Product Image"></td>
                <td>'.$title.'</td>
                <td><input name="number" type="number" value="'.$qty.'" min="1" max="100">
                <button name="updatebutton" class="btn btn-primary" value='.$id.'>Update</button>
                <button name="deletecart" class="btn btn-danger" value='.$id.'>Remove Item</button></td>
                </form>
                <td>'.number_format($price,2).'</td>
                <td>'.number_format($totalprice,2).'</td>
                <td><a href="payment.php?price='.$totalprice.'&priceT='.$price.'&id='.$id.'&pTitle='.$title.'&qty='.$qty.'&img='.$image.'"><button name="order" class="btn btn-danger" value= '.$title.'>CheckOut</button></a></td>
          </tr>
    </div>';

     /* echo '
      <form method="post">
        <div class="grid-item">
  <a href="views.php"><img src="../'.$row['image'].'"></a><br>
  <a href="views.php">' .$row['food_name']. '</a><br><br>
            <p>Quantity = <br><br><br>
            <input type="number" min="1" value='.$qty.' style="width:30px;" name="number">
            <button name="updatebutton" value='.$id.'>Update</button></p>
            '.'<p>Unit price = GHS ' .$row['price'].'.00</p>'.'  <br>
              <p>Total Price = GHS '.$row['price'] * $qty.'.00</p>
              <button value="'.$id.'" name="deletecart">Remove </button>
 </div>
  </form>';*/
    }
  }
#  echo $answer;
}

if(isset($_POST['updatebutton']))
{
  updateQuantity();
}

if (isset($_POST['deletecart']))
{
  deleteCart();
}



//function to remove item from cart
function deleteCart()
{
  $id = $_POST['deletecart'];
  $ip = $_SERVER["REMOTE_ADDR"];

  $sql = "DELETE FROM cart WHERE foodId = '$id' AND ip_addr = '$ip'";

  $login = new Connect();

  $run = $login->query($sql);

}

function updateQuantity()
{
  $quantity = $_POST['number'];
  $id = $_POST['updatebutton'];
  $ip = $_SERVER['REMOTE_ADDR'];

  $sql = "UPDATE cart SET quantity = '$quantity' WHERE foodId = '$id' AND ip_addr = '$ip'";

  $login = new Connect;

  $run = $login->query($sql);
}

if(isset($_POST['registercustomer']))
{
  registerUser();
}
//function to register user
function registerUser()
{
  $ip = $_SERVER['REMOTE_ADDR'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $lastname = $_POST['lastname'];
  $tel = $_POST['tel'];

  $nameCheck = '/^([a-zA-Z\' -]+)(\s)?([a-z\' -]*)/';
  $emailCheck = "/[a-zA-Z 0-9.-]+@+[a-zA-Z]+[.][a-zA-Z -.]*/";
  $passwordCheck = '/([a-zA-Z0-9*!@#$%^&*()_+{}|:"\'<?>;.,\/=-`~]*)/';
  $telCheck = '/[0-9]{10}/';

  if (preg_match($nameCheck, $firstname) == 0)
  {
    echo "Please enter a valid firstname";
  }
  if (preg_match($nameCheck, $lastname) == 0)
  {
    echo "Please enter a valid lastname";
  }
  /*else if (preg_match($emailCheck, $email) == 0)
  {
    echo "Please enter a valid email";
  }*/
  /*else if(preg_match($passwordCheck, $password) == 0)
  {
    echo "Please enter a valid password";
  }*/
  else if(preg_match($telCheck, $tel) == 0)
  {
    echo "Please enter a valid password";
  }
  else {
//create firstname, lastname form fields
    $sql = "INSERT INTO customers(email,password,f_name,l_name,phone_number)
    VALUES('$email','$password','$firstname','$lastname','$tel')";

    $connect = new Connect;

    $run = $connect->query($sql);

    if ($run)
    {
      header("location: login.php");
    }
    else
    {
      echo "Could not register user";
    }
  }
}

if(isset($_POST['logincustomer']))
{
  validatelogin();
}

function validatelogin()
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $emailCheck = "/[a-zA-Z 0-9.-]+@+[a-zA-Z]+[.][a-zA-Z -.]*/";
  // $passwordCheck = '/([a-zA-Z0-9*!@#$%^&*()_+{}|:"\'<?-->;.,\/=-`~]*)/';

  /*if (preg_match($emailCheck, $email) == 0)
  {
    echo "Please enter a valid email";
  }
  else if(preg_match($passwordCheck, $password) == 0)
  {
    echo "Please enter a valid password";
  }*/

  $sql = "SELECT id, f_name, l_name FROM customers WHERE email = '$email' AND password = '$password'";

  $connect = new Connect;

  $run = $connect->query($sql);

  $results = $connect->fetch();

  if ($results)
  {
    session_start();
    $_SESSION['id'] = $results['id'];
    $_SESSION['name'] = $results['f_name'];
    $_SESSION['email'] = $email;
    $_SESSION['login'] = true;
    
    if(isset($_SESSION['cart'])){
      header("location: cart.php");
    }else{
      header("location: ../index.php");
    }
  }
}

if(isset($_POST['orderbtn']))
{
  intoOrders();
}

function intoOrders()
{
  session_start();
  $customername = $_SESSION['name'];
  $email = $_SESSION['email'];
  $quantity = $_POST['qty'];
  //$quantity = $_SESSION['Quantity'];
  $foodname = $_POST['foodname'];
  //$foodname = $_SESSION['foodName'];
  $status = "processing";

  if ($_SESSION['login'] == true)
  {
    $sql1 = "SELECT id FROM customers WHERE f_name = '$customername' AND email = '$email'";
    $connect = new Connect;

    $run = $connect->query($sql1);
    while ($results1 = $connect->fetch())
    {
      $customerid = $results1['id'];

      $sql2 = "INSERT INTO orders(food_name,quantity,status,customer) VALUES('$foodname','$quantity','$status','$customerid')";

      $connect2 = new Connect;

      $run2 = $connect2->query($sql2);

      if ($run2)
      {
        echo "Successfully ordered";
      }
      else
      {
        echo "Problem while ordering";
      }
    }
  }
}

function viewReady()
{
  $sql1 = 'SELECT food_name,order_number,quantity,customer,status FROM orders WHERE status = "ready"';

  $connect = new Connect;

  $run = $connect->query($sql1);
  echo '<table style="font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;width: 100%;">';
    echo '<tr>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Order Number</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Food Name</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Quantity</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Customer Name</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Customer Phone Number</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Delivery Address</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Status</th>
    <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Action</th>';
 echo '<tr>';

  while ($results = $connect->fetch())
  {
    $id = $results['customer'];

    $sql2 = "SELECT f_name, l_name, phone_number FROM customers WHERE id = '$id'";

    $connect2 = new Connect;

    $run2 = $connect2->query($sql2);
    
    while ($results2 = $connect2->fetch())
    {

      $ordernum = $results['order_number'];

      $sql3 = "SELECT physical_addr FROM oncheckout WHERE ordernumber = '$ordernum'";

      $connect3 = new Connect;

      $run3 = $connect3->query($sql3);

      while ($results3 = $connect3->fetch())
      {
       
        echo "<form method = \"POST\">";
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['order_number'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['food_name'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['quantity'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results2['f_name']." ".$results2['l_name'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results2['phone_number'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results3['physical_addr'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['status'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'."<button type=\"submit\" name=\"startdelivery\" value=".$results['order_number'].">Start Delivery</button>".'</td>';
        echo '</tr>';
        echo "</form>";
      }
      
    }
    
  }
  echo "</table>";
}

if (isset($_POST['startdelivery']))
{
  $ordernumber = $_POST['startdelivery'];

  $sql = "UPDATE orders SET status = \"en route\" WHERE order_number = '$ordernumber'";

  $connect = new Connect;

  $run = $connect->query($sql);
}


function viewAllDelivery()
{
  $sql1 = 'SELECT food_name,order_number,quantity,customer,status FROM orders';

  $connect = new Connect;
   
  $run = $connect->query($sql1);
  echo '<table style="font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;width: 100%;">';
  echo '<tr>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Order Number</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Food Name</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Quantity</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Customer Name</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Customer Phone Number</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Delivery Address</th>
  <th style="padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white; border: 1px solid #ddd;padding: 8px;">Status</th>';
       echo "<tr>";

       $resultsAll = $connect->fetchAll();
  //while ($results = $connect->fetch())
  foreach($resultsAll as $results)
  {
    
    $id = $results['customer'];
    $sql2 = "SELECT f_name, l_name, phone_number FROM customers WHERE id = '$id'";

    $connect2 = new Connect;

    $run2 = $connect2->query($sql2);


    while ($results2 = $connect2->fetch())
    {

      $ordernum = $results['order_number'];

      $sql3 = "SELECT physical_addr FROM oncheckout WHERE ordernumber = '$ordernum'";

      $connect3 = new Connect;

      $run3 = $connect3->query($sql3);

      while ($results3 = $connect3->fetch())
      {
      
        echo "<form method = \"POST\">";
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['order_number'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['food_name'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['quantity'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results2['f_name']." ".$results2['l_name'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results2['phone_number'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results3['physical_addr'].'</td>';
        echo '<td style ="border: 1px solid #ddd;padding: 8px;">'.$results['status'].'</td>';
        echo "</tr>";
        echo "</form>";
      }
      
    }
  }
  echo "</table>";
}

function displayForChef(){
 //get product details from Cart
  $sql = "SELECT * FROM orders"; 

  $login = new Connect;

  $run = $login->query($sql);

  while ($row = $login->fetch())
    {
      //display cart items in a table
      $foodName=$row['food_name'];
      $quantity=$row['quantity'];
      $customer = $row['customer'];
      $orderNum=$row['order_number'];

      echo '
     <form method="POST">
     <div class = "cart-items">
     <tr>
     
            <td>'.$orderNum.'</td>
            <td>'.$customer.'</td>
            <td>'.$foodName.'</td>
            <td>
            <button name="confirmbutton" class="btn btn-primary" value='.$orderNum.'>Confirm</button>
            <button name="readybutton" class="btn btn-danger" value='.$orderNum.'>Ready</button></td>
            
            <td>'.$quantity.'</td>
            
            </tr>
            </form>
            </div>';

    }
}

function updateIntoReady(){
  $order_id = $_POST['readybutton'];
  $status='ready';

  $sql = "UPDATE orders SET status = '$status' WHERE order_number = '$order_id'";

  $login = new Connect;

  $run = $login->query($sql);

  echo 'successfully updated status';


}

function updateIntoCooking(){
  $order_id = $_POST['confirmbutton'];
  $status='cooking';

  $sql = "UPDATE orders SET status = '$status' WHERE order_number = '$order_id'";

  $login = new Connect;

  $run = $login->query($sql);
  echo 'successfully updated status';

}

if(isset($_POST['readybutton']))
{
  updateIntoReady();
}

if(isset($_POST['confirmbutton']))
{
  updateIntoCooking();
}

?>
