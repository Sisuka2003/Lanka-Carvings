<?php

include './connection.php';

$id = $_POST["id-1"];
$productName = $_POST["pname"];
$productdescription = $_POST["pdesc"];
$category = $_POST["category"];
$sell = $_POST["sell"];
$buy = $_POST["Buy"];
$img = $_POST["img"];
$active = $_POST["active"];

$updateQuery = "UPDATE `product_carvings` SET `product_name`='" . $productName . "',`product_description`='" . $productdescription . "',`category`='" . $category . "',`sell_price`='" . $sell . "',`buy_price`='" . $buy . "',`img_url`='" . $img . "',`is_active`='" . $active . "' WHERE `id_products`='" . $id . "'";
$isSaved = mysqli_query($connection, $updateQuery);

if ($isSaved) {
      echo "<script> alert('Product Updated successfully');location='machinary_manager.php' </script>";
} else {
      echo "<script> alert('Product Updation failed');location='machinary_manager.php' </script>";
}
mysqli_close($connection);
?>

