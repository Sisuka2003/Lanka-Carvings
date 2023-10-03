<?php
include './connection.php';

$id="";
$Username="";
$Email="";
$Password="";
$fname="";
$lname="";
$contact="";

if(isset($_POST["id-1"])){$id=$_POST["id-1"];}
if(isset( $_POST["Username"])){$Username= $_POST["Username"];}
if(isset( $_POST["Email"])){$Email= $_POST["Email"];}
if(isset($_POST["Password"])){$Password=$_POST["Password"];}
if(isset($_POST["fname"])){$fname=$_POST["fname"];}
if(isset($_POST["lname"])){$lname= $_POST["lname"];}
if(isset($_POST["contact"])){$contact=$_POST["contact"];}


$updateQuery = "UPDATE `user` SET `username`='".$Username."',`email`='".$Email."',`password`='".$Password."',`first_name`='".$fname."',`last_name`='".$lname."',`contact_no`='".$contact."' WHERE `id`='".$id."'";
$isSaved = mysqli_query($connection, $updateQuery);


if ($isSaved) {
      echo "<script> alert('User Updated successfully');location='user_manager.php' </script>";
} else {
      echo "<script> alert('User Updation failed');location='user_manager.php' </script>";
}
mysqli_close($connection);
?>

