<?php
include './connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
        <link type="text/css" rel="stylesheet" href="product_viewpage.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
        <?php
        $pid="";
        if(isset($_GET['pid'])){$pid=$_GET['pid'];}
        if($pid===''){echo "<script> alert('Unknown Error Occured on product viewing');location='hlo.php' </script>";}
        ?>
    </head>
    <body>
        <div class="product-nav">
            <?php
            include './navBar.php';
            ?>
        </div>
        <?php
        $query = "SELECT * FROM `product_carvings` WHERE `id_products` = '" . $pid . "'";
        $result = $connection->query($query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="product-box1" id="productBox">
                <div class="box-product-body" align="center">
                    <div class="box-product-body-inner">
                        <div class="product">
                            <div class="div-product-img">
                                <img class="magnify" src="images/<?php echo $row["img_url"]; ?>"/>
                            </div>
                        </div>
                        <!--<form class="product-details" method="post" action="checkout_temp_carvings.php?pro_id=<?php echo $row["id_products"]; ?>">-->
                        <form class="product-details" method="post" action="addToCart.php?pid=<?php echo $row["id_products"]; ?>">
                            <p class="spHead"><?php echo $row["product_name"]; ?></p>
                            <p class="spdesc"><?php echo $row["product_description"]; ?></p>
                            <p class="stock"><?php echo $row["avl_qty"]; ?> items are remaining</p>
                            <input type="number" class="qty-select" name="qty"placeholder="Select Quantity" min="1" max="10"  required/>
                            <span class="price">$&nbsp;<?php echo $row["sell_price"]; ?></span>
                            <button  type="submit" class="btn-purchase">purchase</button>&nbsp;
                            <button class="btn-purchase"><a href="carvings.php" class="anchorBack">BACK</a></button>

                        </form>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="div-ft">
                        <?php
                        include './newsampleft.php';
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <script type="text/javascript" src="back.js"></script>
    </body>
</html>
