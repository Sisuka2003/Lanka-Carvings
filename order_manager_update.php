<?php

include './connection.php';

$orderNumber = $_POST["oid"];
$contactNumber = $_POST["Cnum"];
$holdname = $_POST["chname"];
$cardNumber = $_POST["cardNum"];
$deliverAddress= $_POST["deliAddress"];
$usename = $_POST["uname"];
$amount = $_POST["amount"];

$updateQuery = "UPDATE `invoice` SET `contact_no`='" . $contactNumber . "',`card_holder_name`='" . $holdname . "',`card_number`='" . $cardNumber . "',`delivering_address`='" . $deliverAddress . "',`username`='" . $usename . "',`paid_amount`='".$amount."' WHERE `id_invoice`='" . $orderNumber . "'";
$isSaved = mysqli_query($connection, $updateQuery);

if ($isSaved) {
      echo "<script> alert('Order Updated successfully');location='order_manager.php' </script>";
} else {
      echo "<script> alert('Order Updation Failed');location='order_manager.php' </script>";
}
mysqli_close($connection);
?>

