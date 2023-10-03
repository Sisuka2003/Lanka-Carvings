<?php
include './connection.php';

$oid=$_GET['id'];


$sql="DELETE FROM `invoice_items` WHERE `invoice_items`.`id_invoice`='".$oid."'";

$isDelete= mysqli_query($connection, $sql);

if($isDelete){
      echo "<script> alert('Order item Deleted successfully'); </script>";
       $sqls="DELETE FROM `invoice` WHERE `invoice`.`id_invoice`='".$oid."'";
       $isDeletes=mysqli_query($connection,$sqls);
       if($isDeletes){
                echo "<script> alert('Order details Deleted successfully');location='order_manager.php' </script>";
       }
}else{
      echo "<script> alert('User Deletion Failed');location='order_manager.php' </script>";
}
?>