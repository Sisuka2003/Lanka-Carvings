<?php
session_start();
include './connection.php';
$total = "";
$address = "";
$holder = "";
$id_invoice = "";

if (isset($_SESSION['amount'])) {
    $total = $_SESSION['amount'];
}
if (isset($_SESSION['address'])) {
    $address = $_SESSION['address'];
}
if (isset($_SESSION['holder'])) {
    $holder = $_SESSION['holder'];
}
if (isset($_SESSION['id_invoice'])) {
    $id_invoice = $_SESSION['id_invoice'];
    ;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>I N V O I C E</title>
        <link type="text/css" rel="stylesheet" href="invo.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="invo-div-outer">
<!--                <table class="tb1-carving">
            <tbody>
                <tr>
                    <th class="col2_1">
                        <div class="div-logo-outer">
                            <div class="left"></div>
                        </div>
                        <a class="backButton-anchor">
                        </a>
                    </th>
                </tr>
            </tbody>
        </table>      -->
            <div class="invo-div-data">
                <div class="invo-div-data-inner" id="invodivdatainner">
                    <div class="top-div">
                        <div class="top-div-major">
                            <div class="web-name-div">
                                <h3 class="lanka">Lanka Carvings</h3>
                                <h5 class="lanka-mobile">(+94)070-159-7170</h5>
                            </div>
                            <div class="comp-address-div">
                                <h5 class="lanka-address">No:, 3B 2/4</h5>
                                <h5 class="lanka-address">Sri Sumanagala Rd</h5>
                                <h5 class="lanka-address">Colombo 05</h5>
                                <h5 class="lanka-address">Sri Lanka</h5>
                            </div>
                        </div>
                        <div class="top-div-logo"></div>
                    </div>
                    <div class="bottom-div">
                        <div class="bottom-div-inner">
                            <div class="bottom-div-left">
                                <table class="tb-invo">
                                    <tbody>
                                        <tr class="tr-invo1">
                                            <th class="pro-th">Product Name</th>
                                            <th class="quan-th">Quantity</th>
                                        </tr>
<?php
$itemQuery = "SELECT * FROM `invoice_items` WHERE `id_invoice`='" . $id_invoice . "'";
$itemResult = $connection->query($itemQuery);
while ($itemRow = $itemResult->fetch_assoc()) {
    ?>
                                            <tr class="tr-invo2">
                                                <td class="name-cls"><?php echo $itemRow['item_name']; ?></td>
                                                <td class="quantity-cls"><?php echo $itemRow['item_qty']; ?></td>                                       
                                            </tr>
    <?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bottom-div-right">
                                <h5 class="a-head">Amount Due (USD)</h5>
                                <h1 class="a-price">$&nbsp;<?php echo $total; ?>.00</h1>
                                <h5 class="a-billed">Billed To</h5>
                                <h4 class="a-uname"><?php echo $holder; ?></h4>
                                <h4 class="a-address"><?php echo $address; ?></h4>
                                <h5 class="a-billed">Invoice Number</h5>
                                <h4 class="a-num"><?php echo $id_invoice; ?></h4>
                            </div>
                        </div>
                        <div class="button-div-bottom" id="bottombuttondiv">
                            <button class="print-btn" onclick="printContent('invodivdatainner')">PRINT</button>
                            <button class="finish-btn"><a href="End.php?eid=<?php echo "1"; ?>" class="a-fin">FINISH</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="back.js"></script>
        <script type="text/javascript" src="print.js"></script>
    </body>
</html>
