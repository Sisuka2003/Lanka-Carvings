<?php
session_start();
if (isset($_SESSION["is_login"])) {
    if (($_SESSION["is_login"] == true)) {  // The user is  logged in to the home.
        header("Location: hlo.php");die(); // User log wela inne ee nisa home page ekata directed wenawa. mokada amuthuwen check karanna deyak nh username password.
    }
} else {
    include './connection.php';
    $un = "";
    $pw = "";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $un = $_POST["username"];
        $pw = $_POST["password"];

        if ($un == "admin" && $pw == "1234") {
            $_SESSION["is_admin_login"] = true;
            header("Location:  admin_work.php");
            exit();
        } else {

            $searchQuery = "SELECT * FROM `user` WHERE `username`='" . $un . "' AND `password`='" . $pw . "'";

            $result = $connection->query($searchQuery);
            if ($row = $result->fetch_assoc()) {
                $_SESSION["name"] = $un;
                $_SESSION["is_login"] = true;    
                $_SESSION['userid']=$row['id'];
                $_SESSION['fname']=$row['first_name'];
                $_SESSION['lname']=$row['last_name'];
                header("Location:  profile.php");
                exit();
            } else{
                $selectun = "SELECT `username` FROM `user` WHERE `username`='" . $un . "' ";
                $resultun = $connection->query($selectun);
                if ($rowun = $resultun->fetch_assoc()) {
                    echo "<script> alert('Incorrect Password');location='login_register.php' </script>";
                }
                $selectpw = "SELECT `password` FROM `user` WHERE `password`='" . $pw . "' ";
                $resultpw = $connection->query($selectpw);
                if ($rowpw = $resultpw->fetch_assoc()) {
                    echo "<script> alert('Incorrect Username');location='login_register.php' </script>";
                }
                 
                $selectuname = "SELECT * FROM `user` WHERE `username`='".$un."' AND `password`='".$pw."' ";
                $resultuname = $connection->query($selectuname);
                if ($rowuname = $resultuname->fetch_assoc()) {
                }else{
                    echo "<script> alert('Please check your Registration');location='login_register.php' </script>";
                }
            }
        }
    }
}
?>