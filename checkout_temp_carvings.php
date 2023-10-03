<?php
session_start();
include './connection.php';

$uid="";
$payid="";
//$cart="";
        if(isset($_SESSION['userid'])){$uid=$_SESSION['userid'];}
//        if(isset($_SESSION['cart'])){$cart=$_SESSION['cart'];}
         if(isset($_GET["one"])){$payid=$_GET["one"];}
        if(isset($_GET["two"])){$payid=$_GET["two"];}
        if(isset($_GET["three"])){$payid=$_GET["three"];}
        if(isset($_GET["four"])){$payid=$_GET["four"];}
        if(isset($_GET["five"])){$payid=$_GET["five"];}
        if(isset($_GET["six"])){$payid=$_GET["six"];}
        if(isset($_GET["seven"])){$payid=$_GET["seven"];}
        if(isset($_GET["eight"])){$payid=$_GET["eight"];}
        if(isset($_GET["nine"])){$payid=$_GET["nine"];}

if($uid===''){echo "<script> alert('Please check your registration');location='login_register.php' </script>";die();}
if($payid===''){echo "<script> alert('Unknown Error Occured on selecting payment method');location='cart.php' </script>";die();}
$_SESSION["payment_method"]=$payid;
//if($cart===''){echo "<script> alert('Please check your cart details');location='cart.php' </script>";die();}
$selectConta="SELECT * FROM `user` WHERE id='".$uid."'";
$resultconta=$connection->query($selectConta);
$rowconta=$resultconta->fetch_assoc();
$conta=$rowconta["contact_no"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>C H E C K O U T</title>
        <link type="text/css" rel="stylesheet" href="checkout_temp.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <?php
        if (isset($_SESSION["is_login"]) && ($_SESSION["is_login"] == true)) {
            ?>
            <div class="product-nav">
                <table class="tb1-carving">
                <tbody>
                    <tr>
                        <th class="col2_1">
                            <div class="div-logo-outer">
                                <div class="left"></div>
                            </div>
                            <a class="backButton-anchor">
                                <button  onclick="goBack();"class="backButton">Back</button>
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>      
            </div>
            <div class="product-box1">
                <div class="box-product-body" align="center">
                    <?php
//                    $pname="";
//                    $pimg="";
//           foreach ($cart as $cartItem){
//                    $query = "SELECT * FROM `product_carvings` WHERE `id_products` = '" . $cartItem[0] . "'";
//                    $result = $connection->query($query);
//                    while ($row = $result->fetch_assoc()) {
//                        $pname=$row['product_name'];
//                        $pimg=$row['img_url'];
//               $querySaveItem = "insert into invoice_items(id_item,item_name,item_img,item_sell_price,item_qty)"
//              . " values('".$cartItem[0]."','".$pname."','".$pimg."',(select sell_price from product_carvings where id_products ='".$cartItem[0]."' ), '".$cartItem[1]."')"; 
//              $pitem = $connection->query($querySaveItem);
//              if($pitem===true){
//                  echo $cartItem[0]." saved success";
//               }else{
//                   echo "error".mysqli_error($connection);
//               } 
                        ?>
                        <div class="box-product-body-inner">
                            <div class="product-details">
                                <form class="data-input-form" method="post" action="checkoutAction.php">
                                                                        <br/>
                                                                        <br/>
                                    <span class="name">Hello<input class="name-session"  name="username" value="<?php echo $_SESSION["name"]; ?>"/></span>
                                    <br/>
                                    <br/>
                                    <input type="text"  class="user-input-field"  placeholder="Card Holders Name" id="user-input-field2"name="holder-name"   onfocus="this.placeholder = 'Enter your Holder Name'"  onfocusout="this.placeholder ='Card Holders Name'" autocomplete="off"   onclick="passwordLoginClick();"  required/> <!-- Password  entering input-->
                                    <br/>    
                                    <input type="text"  class="user-input-field"  placeholder="Card Number" id="user-input-field3" name="card-number"  onfocus="this.placeholder = 'Enter your Card Number'" onfocusout="this.placeholder ='Card Number'"  autocomplete="off"   onclick="firstLoginClick();"  required/> <!-- Password  entering input-->
                                    <br/>
                                    <input type="text"  class="user-input-field"  placeholder="Contact Number" id="user-input-field5" name="contact-number"  value="<?php echo $conta;?>" onfocus="this.placeholder = 'Enter your Contact Number'" onfocusout="this.placeholder ='Contact Number'"  autocomplete="off"   onclick="firsttwoLoginClick();"  required/> <!-- Password  entering input-->
                                    <br/>  
                                    <input type="text" class="user-input-field"  placeholder="Delivery Address" id="user-input-field4"  name="address"  onfocus="this.placeholder = 'Enter the Address to deliver'"  onfocusout="this.placeholder ='Delivery Address'"  onclick="lastLoginClick();" autocomplete="off" required/>
                                    <br/>
                                    <div class="btns">
                                    <button  type="submit" class="btn-purchase">Pay&nbsp;$&nbsp;<?php echo $_SESSION['amount']; ?>.00</button>&nbsp;&nbsp;
                                    <button class="btn-purchase" onclick="goBack()">BACK</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <?php
//           }}
                    ?>
                    <br/>
                    <br/>
                    <div class="div-ft">
                        <?php
                        include './newsampleft.php';
                        ?>
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo "<script> alert('Please Sign in to continue purchase');location='login_register.php' </script>";
        }
        ?>
        <!--<div class="popup-div"></div>-->
        <script type="text/javascript" src="back.js"></script>
        <script type="text/javascript" src="checkout_temp.js"></script>
    </body>
</html>
