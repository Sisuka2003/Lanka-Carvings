<?php
include './connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment Method</title>
        <link type="text/css" rel="stylesheet" href="paymentMethod.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
        <?php
        $uid="";
        ?>
    </head>
    <body>
        <div class="product-nav">
            <?php
            include './navBar.php';
            ?>
        </div>
        <br/>
        <?php
        if(isset($_SESSION['userid'])){$uid=$_SESSION['userid'];}
        if($uid===''){echo "<script> alert('Please check your registration');location='login_register.php' </script>";die();}
//        $query = "SELECT * FROM `product_carvings` WHERE `id_products` = '".$pid."'";
//        $result = $connection->query($query);
//        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="product-box1">
                <div class="box-product-body" align="center">
                    <div class="box-product-body-inner">
                        <form class="product-details" method="get" action="checkout_temp_carvings.php">
                            <div class="payment-heading-div-outer">
                                <div class="payment-method-logo">
                                    <div class="payment-method-logo-inner"></div>
                                </div>
                                <div class="payment-method-desc">
                                    <br/>
                                    <span class="saying">Your Purchased product only costs</span>
                                    <span class="sell_price">$&nbsp;<?php echo $_SESSION["amount"];?>.00</span>
                                </div>
                            </div>
                            <div class="payment-options-div-outer">
                                <span class="select-pay-sp">Select a payment Method</span>
                                <br/>
                                <br/>
                                <span class="payment-type-one">Credit/Debit Card</span>
                                <div class="payment-methods">
                                    <input class="one" name="one" id="one" type="submit" value="visa"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="two" name="two" type="submit" value="mastercard"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="three" name="three" type="submit" value="americanexpress"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="four" name="four" type="submit" value="discover"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="five" name="five" type="submit" value="dinnersclub"/>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                                <br/>
                                <br/>
                                <span class="payment-type-one">Mobile Wallet</span>
                                <div class="payment-methods">
                                    <input class="six" name="six" type="submit" value="paypal"/>
                                    &nbsp;&nbsp;&nbsp;
                                     <input class="seven" name="seven" type="submit" value="bbb"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="eight" name="eight" type="submit" value="worldpay"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <input class="nine" name="nine" type="submit" value="hsbc"/>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <br/>
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
//        }
        ?>
        <script type="text/javascript" src="back.js"></script>
    </body>
</html>

