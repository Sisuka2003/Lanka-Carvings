<?php
session_start();
$eid="";

if(isset($_GET['eid'])){$eid=$_GET['eid'];}
if($eid===''){echo "<script> alert('Invalid Access');location='hlo.php' </script>";die();}else{
    unset($_SESSION['cart']);
    
    echo "<script> alert('Thank You for purchasing our products');location='hlo.php' </script>";die();
}
?>
