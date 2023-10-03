<?php
session_start();
include './connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = $_POST["register_username"];
$email = $_POST["register_email"];
$password = $_POST["register_password"];

$unsquery="SELECT * FROM `user` WHERE `username`='".$username."' ";
$resultuns=$connection->query($unsquery);

if($rowuns=$resultuns->fetch_assoc()){
    echo "<script> alert('Username Already Exists');location='login_register.php' </script>";
    $_SESSION['userid']=$rowuns['id'];
}

$emsquery="SELECT * FROM `user` WHERE `email`='".$email."' ";
$resultem=$connection->query($emsquery);

if($rowem=$resultem->fetch_assoc()){
    echo "<script> alert('Email Address Already Exists');location='login_register.php' </script>";
}else{

$hquery = "INSERT INTO `user`(`username`,`email`,`password`,`first_name`,`last_name`,`contact_no`,`profile_pic`)VALUES('" . $username . "','" . $email . "','" . $password . "',null,null,null,'images/gallery.png')";
$isSaved = mysqli_query($connection,$hquery);
if ($isSaved) {
    $_SESSION["name"]=$username;
    $_SESSION["is_login"]=true;
    $userSelect="SELECT id FROM user WHERE username='".$_SESSION["name"]."'";
    $userRes=$connection->query($userSelect);
    if($userRo=$userRes->fetch_assoc()){
           $_SESSION['userid']=$userRo['id'];
    }
    echo "<script> alert('Customer Registered Successfully!!');location='profile.php' </script>";
} else {
    echo "<script> alert('Error occured : Please Get Registered Again');location='login_register.php' </script>";
}
}
?>