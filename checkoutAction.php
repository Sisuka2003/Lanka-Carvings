<?php
session_start();
include './connection.php';

$total="";//
$uname="";
$hname="";//
$Cnum=""; 
$address="";//
$contact="";
$payid="";
if(isset($_SESSION["amount"])){$total=$_SESSION["amount"];}
if(isset($_SESSION["payment_method"])){$payid=$_SESSION["payment_method"];}
if(isset($_POST["username"])){$uname=$_POST["username"];}
if(isset($_POST["holder-name"])){$hname=$_POST["holder-name"];}
if(isset($_POST["card-number"])){$Cnum=$_POST["card-number"];}
if(isset($_POST["address"])){$address=$_POST["address"];}
if(isset($_POST["contact-number"])){$contact=$_POST["contact-number"];}

if($total===''){echo "<script> alert('Unknown Error occured in Getting the total');location='product_view_carvings.php' </script>";}
if($uname===''){echo "<script> alert('Unknown Error occured in Getting the Username');location='product_view_carvings.php' </script>";}
if($hname===''){echo "<script> alert('Unknown Error occured in Getting the Holders name');location='product_view_carvings.php' </script>";}
if($Cnum===''){echo "<script> alert('Unknown Error occured in Getting the Card Number');location='product_view_carvings.php' </script>";}
if($address===''){echo "<script> alert('Unknown Error occured in Getting the Delivering Address');location='product_view_carvings.php' </script>";}
if($contact===''){echo "<script> alert('Unknown Error occured in Getting the Contact Number');location='product_view_carvings.php' </script>";}

$insert = "INSERT INTO `invoice`(`contact_no`,`card_holder_name`,`card_number`,`delivering_address`,`username`,`payment_method`,`paid_amount`)VALUES('" . $contact . "','" . $hname . "','" . $Cnum . "','" . $address . "','" . $uname . "','".$payid."','".$total."')";
$isSaved = mysqli_query($connection, $insert);



if ($isSaved) {
                 $pname="";
                 $pimg="";
                 $cart="";
                 $invo_number="";
         $idSelect = "SELECT * FROM `invoice` WHERE `id_invoice`=LAST_INSERT_ID()";
         $idResult = $connection->query($idSelect);
         while ($idRow = $idResult->fetch_assoc()) {
             $invo_number=$idRow['id_invoice'];
         }
    
    
                     if(isset($_SESSION['cart'])){$cart=$_SESSION['cart'];}
                     if($cart===''){echo "<script> alert('Please check your cart details');location='cart.php' </script>";die();}
                     foreach ($cart as $cartItem){
                    $query = "SELECT * FROM `product_carvings` WHERE `id_products` = '" . $cartItem[0] . "'";
                    $result = $connection->query($query);
  
                    while ($row = $result->fetch_assoc()) {
                        $pname=$row['product_name'];
                        $pimg=$row['img_url'];
               $querySaveItem = "insert into invoice_items(item_name,item_img,item_sell_price,item_qty,id_invoice)"
              . " values('".$pname."','".$pimg."',(select sell_price from product_carvings where id_products ='".$cartItem[0]."' ), '".$cartItem[1]."','".$invo_number."')"; 
              $pitem = $connection->query($querySaveItem);
              if($pitem===true){
                  header("Location: invo_carvings.php");
$_SESSION['id_invoice']=$invo_number;
$_SESSION['holder']=$hname;
$_SESSION['address']=$address;
               }else{
                   echo "error".mysqli_error($connection);
          } 
    }
}
               }
?>
