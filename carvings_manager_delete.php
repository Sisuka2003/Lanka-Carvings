<?php
include './connection.php';

$user_id=$_GET['id'];


$sql="DELETE FROM `product_carvings` WHERE `id_products`='".$user_id."'";

$isDelete= mysqli_query($connection, $sql);

if($isDelete){
      echo "<script> alert('Product Deleted Successfully');location='carvings_manager.php' </script>";
}else{
      echo "<script> alert('Product Deletion failed');location='carvings_manager.php' </script>";
}
?>