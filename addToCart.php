<?php
session_start();
include './connection.php';
$productId = "";
$qty = "";

$uid="";
if(isset($_SESSION['userid'])){$uid=$_SESSION['userid'];}
if($uid===''){echo "<script> alert('Please check your registration');location='login_register.php' </script>";die();}
if (isset($_POST['pid'])) {
    $productId = $_POST['pid'];
}
if (isset($_POST['qty'])) {
    $qty = $_POST['qty'];
}
if (isset($_GET['pid'])) {
    $productId = $_GET['pid'];
}
if ($productId == "") {
     echo "<script> alert('unauthorized access');location='carvings.php' </script>";
    die();
}
if ($qty == "") {
     echo "<script> alert('unauthorized access');location='carvings.php' </script>";
    die();
}

$updateQty="";

$querySe="SELECT * FROM `product_carvings` WHERE `id_products`='".$productId."'";
$resultSe=$connection->query($querySe);
while($rowse = $resultSe->fetch_assoc()){
$updateQty=$rowse['avl_qty'] - $qty;
$updateQ="UPDATE `product_carvings` SET `avl_qty`='".$updateQty."' WHERE `id_products`='".$productId."'";
$isSavedQ= mysqli_query($connection,$updateQ);
if($isSavedQ){
//define cart
$cart;
//assign cart
//
$isInTheCart = FALSE;

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    foreach ($cart as $key => $value) {
        if ($value[0] == $productId) {
            $currentQty = $value[1];
            unset($cart[$key]);
            $cartItem = array($productId, $currentQty + $qty);
            array_push($cart, $cartItem);
            $isInTheCart = true;
        }
    }
} else {
    $cart = array();
}


if (!$isInTheCart) {
    $cartItem = array($productId, $qty);
    array_push($cart, $cartItem);
}


$_SESSION['cart'] = $cart;

header("Location: cart.php");


}else{echo "error";}}