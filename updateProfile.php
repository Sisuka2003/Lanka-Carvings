<?php
session_start();
include './connection.php';

$userid="";
if(isset( $_SESSION["userid"])){$userid= $_SESSION["userid"];}
if($userid===''){echo "<script> alert('Unknown Error Occured. Please Register Again');location='login_register.php' </script>";die();}
$fname="";
$lname="";
$contact="";
$email="";
$uname="";
$pswd="";

if(isset($_POST['fname'])){$fname=$_POST['fname'];}
if(isset($_POST['lname'])){$lname=$_POST['lname'];}
if(isset($_POST['contact'])){$contact=$_POST['contact'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['uname'])){$uname=$_POST['uname'];}
if(isset($_POST['pswd'])){$pswd=$_POST['pswd'];}

if($fname===''){ echo "<script> alert('Unknown Error Occured. First Name Not Found');location='profile.php' </script>";die();}
if($lname===''){ echo "<script> alert('Unknown Error Occured. Last Name Not Found');location='profile.php' </script>";die();}
if($contact===''){ echo "<script> alert('Unknown Error Occured. Contact Number Not Found');location='profile.php' </script>";die();}
if($email===''){ echo "<script> alert('Unknown Error Occured. Email Not Found');location='profile.php' </script>";die();}
if($uname===''){ echo "<script> alert('Unknown Error Occured. Username Not Found');location='profile.php' </script>";die();}
if($pswd===''){ echo "<script> alert('Unknown Error Occured. Password Not Found');location='profile.php' </script>";die();}

$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["img"]["name"]);
$uploadOk=1;
$fileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($fileType != "png" && $fileType != "jpg" && $fileType != "jpeg"){
    $uploadOk=0;
}
if($uploadOk===0){
    echo "only jpg png and jpeg formats";
}else{
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
}
$update="UPDATE user SET username='".$uname."',email='".$email."',password='".$pswd."',first_name='".$fname."',last_name='".$lname."',contact_no='".$contact."', profile_pic='".$target_file."' WHERE id='".$userid."'";
$result=$connection->query($update);

if($result==TRUE){
    echo "<script> alert('User Details Updated');location='profile.php' </script>";die();
}else{
      echo "<script> alert('Unknown Error occured in updating details');location='profile.php' </script>";die(); 
}