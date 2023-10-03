<?php
session_start();
$productId="";
if(isset($_POST['pid'])){$productId  = $_POST['pid'];}
if(isset($_GET['pid'])){$productId  = $_GET['pid'];}

if($productId==""){ echo "<script> alert('Wrong feed at cart');location='hlo.php' </script>";die();}
$cart;
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}else{
    $cart = array();
}

foreach ($cart as $key => $value){
    if($value[0]==$productId){
        unset($cart[$key]);
    }
}



$_SESSION['cart'] = $cart;
 echo "<script> alert('Item Removed successfully');location='cart.php' </script>";die();