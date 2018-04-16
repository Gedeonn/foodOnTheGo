<form method="POST">
<div class= "cart-items">
            <span><img class="card-img-top" style="width:75px; height:75px;"src="../'.$image.'" alt="Product Image"> <br>
            '.$title.'
            </span>
            <span> <strong>Quantity:  </strong>'.$qty.' </span>
            
            <span><strong>Price: </strong>'.number_format($price,2).'</span>
            <span><strong>Total price: </strong>'.number_format($totalprice,2).'</span>
            <span>
              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="business" value="healthonthego@gmail.com">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="Premium Umbrella">
                <input type="hidden" name="amount" value='.$totalprice.'>
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" name="submit" border="0"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="Buy Now">
                <img alt="" border="0" width="1" height="1"
                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
              </form>
            </span>
          </div>

*****************Old
 '
     <form method="POST">
     <div class= "cart-items">
     <tr>

            <td><img class="card-img-top" style="width:75px; height:75px;"src="../'.$image.'" alt="Product Image"></td>
            <td>'.$title.'</td>
            <td><input name="number" type="number" value="'.$qty.'" min="1" max="100">
            
            <td>'.number_format($price,2).'</td>
            <td>'.number_format($totalprice,2).'</td>
            <td>
                  
              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                <input type="hidden" name="business" value="healthonthego@gmail.com">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="Premium Umbrella">
                <input type="hidden" name="amount" value='.$totalprice.'>
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" name="submit" border="0"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="Buy Now">
                <img alt="" border="0" width="1" height="1"
                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
              </form>
            </td>
            </tr>
            </div>'

      *************************

      "<div class='shopping-cart'>
                    <div class='title'>
                        HAHA shopping cart
                    </div>
                    
                    </div>
                
                    <div class='cimage'>
                    <img  style='width:50px' class='cimg' src=../>".$img." alt=''/>
                    </div>
                
                    <div class='cdescription'>
                    <span>". $title."</span>
                    <span id='price'> $". $amount/$qty."</span>
                    </div>
                
                    <div class='cquantity'>
                        <span id='cnum1' >".$qty."</span>
                   
                    </div>
                        <div class='ctotal-price'> Total</div>
                        <div id='total' class='ctotal-price'> $".$amount."</div>".

                            
                        "<form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post'>

                            <input type='hidden' name='business' value='healthonthego@gmail.com'>
                            <input type='hidden' name='cmd' value='_xclick'>
                            <input type='hidden' name='item_name' value='Premium Umbrella'>
                            <input type='hidden' name='amount' value=".$amount.">
                            <input type='hidden' name='currency_code' value='USD'>
                            <input type='image' name='submit' border='0'
                            src='https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif'
                            alt='Buy Now'>
                            <img alt='' border='0' width='1' height='1'
                            src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' >
                            </form>
                        </div> 
                        </div>
                    "; 