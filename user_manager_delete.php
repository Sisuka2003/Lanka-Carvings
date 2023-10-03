<?php
include './connection.php';

$user_id=$_GET['id'];


$sql="DELETE FROM `user` WHERE `id`='".$user_id."'";

$isDelete= mysqli_query($connection, $sql);

if($isDelete){
      echo "<script> alert('User Deleted successfully');location='user_manager.php' </script>";
}else{
      echo "<script> alert('User Deletion Failed');location='user_manager.php' </script>";
}
?>

