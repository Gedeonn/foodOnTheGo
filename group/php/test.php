<!DOCTYPE html>

<html>
<body>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

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