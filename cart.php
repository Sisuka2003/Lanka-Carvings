<?php
include './connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
          <link href="cart.css" type="text/css" rel="stylesheet"/> 
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <?php include './navBar.php';?>
        <div align="center"> 
            <br/>
            <br/>
            <br/>
            <h2>Shopping Cart</h2> 
            <br/>
            <br/>
            <table border="1" class="tb"> 
                <tr>
                    <th class="tttth">Product Image</th>
                    <th class="ttth">Product Name</th>
                    <th class="tth">Quantity</th>
                    <th class="tth">Amount</th>
                    <th class="ttthh">Product Removal</th>
                </tr>
                     <?php
                  $totalAmu = 0.0;
                  $isProduct = false;
                 if(isset($_SESSION['cart'])){
                     $cart = $_SESSION['cart'];
                     foreach ($cart as $cartItem){
                   $productQuery = "select * from product_carvings where id_products = '".$cartItem[0]."' ";
                   $result = $connection->query($productQuery);
                   if($result->num_rows>0){
                       $row = $result->fetch_assoc();
                     $rowamu =  ($row['sell_price']*$cartItem[1]);
                     $totalAmu = $totalAmu + $rowamu;
                     $isProduct = TRUE;
                  $_SESSION['amount']=$totalAmu;
                     ?>
                    <tr>
                        <td class="tttd"><img  src="images/<?php echo $row['img_url'];?>" class="pimage"/> </td> 
                        <td class="ttd"><?php echo $row['product_name'];?></td>
                        <td class="ttd"><?php echo $cartItem[1];?></td> 
                         <td class="ttd"><?php echo ($rowamu);?></td> 
                        <td class="ttd"><a href="removeFromCart.php?pid=<?php echo $cartItem[0];?>">
                                <input type="button"  value="Remove" class="remove"></a></td> 
                    </tr>       <?php
                    }
                   }} 
                   
                   if(!$isProduct){ echo "<script> alert('Your Cart is Already Empty');location='hlo.php' </script>";die();}
                   ?>
            </table>
            <br>
            <br>
            <br>
            <label class="total">Total :&nbsp;&nbsp;Rs.&nbsp;<?php echo $totalAmu?>.00</label>
            <br/>
            <br/>
            <br/>
            <a href="payment_method.php"><input type="button" name="Checkout" value="Checkout" class="checkout"></a>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
        <?php include './newsampleft.php';?>
        </body>
</html>