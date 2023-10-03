<?php
include './connection.php';
    $keyword = "";
                    if (isset($_GET["keyword"])) {
                        $keyword = $_GET["keyword"];
                    }else{
                    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carvings manager</title>
        <link type="text/css" rel="stylesheet" href="carvings_manager.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <form method="post"  action="carvings_manager_update.php">
            <span>ID :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="ID" name="id-1" id="id-1" class="inputs" autocomplete="off"/>
            <br/>
            <span>Product Name :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Product Name" name="pname" id="pname" class="inputs" autocomplete="off"/>
            <br/>
            <span>Product description :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Product Description" name="pdesc" id="pdesc"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Product category :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Category" name="category" id="category"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Selling Price :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Sell Price" name="sell" id="sell"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Buying Price :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Buy Price" name="Buy" id="Buy"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Image :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="IMG_URL" name="img" id="img"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Status :</span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="is active" name="active" id="active"  class="inputs" autocomplete="off"/>
            <br/>
            <button type="submit" class="updateButton">UPDATE</button>

            <button class="Back" type="submit"><a href="product_manager.php" class="aBack">BACK</a></button>
        </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>
        <form method="get" action="carvings_manager.php" class="form-a">
                        <input type="text" name="keyword" id="keyword" placeholder="Please Enter the Product name" class="inputs-a"/>
                        <input type="submit" value="SEARCH" class="searchButton" />
                    </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>



        <table class="tb-user" id="tb-user">
            <tr>
                <th>ID</th> <th>Product Name</th><th class="descriptionth">Product Description</th><th>Product Category</th><th>Sell Price</th><th>Buy Price</th><th>Image</th><th>Status</th><th>Delete</th> 
            </tr>
            <?php
//            $query = "SELECT `id_products`,`product_name`,`product_description`,`product_category`,`sell_price`,`buy_price`,`img_url`,`is_active` FROM `product_carvings`";
//            $result = $connection->query($query);
//            while ($row = $result->fetch_assoc()) {
            $querys = "SELECT * FROM `product_carvings` WHERE `product_name` LIKE '%" . $keyword . "%' AND `category`='carvings'";
                    $results = $connection->query($querys);
                    while ($row = $results->fetch_assoc()) {
                ?>
                <form>
                    <tr class="data-row">
                        <td><?php echo $row["id_products"]; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["product_description"]; ?></td>
                        <td><?php echo $row["category"]; ?></td>
                        <td><?php echo $row["sell_price"]; ?></td>
                        <td><?php echo $row["buy_price"]; ?></td>
                        <td><img src="<?php echo "images/".$row["img_url"]; ?>" width="90" height="90"/></td>
                        <td><?php echo $row["is_active"]; ?></td>
                        <td><a  class="aDelete" href="carvings_manager_delete.php?id=<?php  echo $row["id_products"];?>">DELETE</a></td>
                    </tr>
                </form>


                <?php
            }
            ?>
        </table>
        <script type="text/javascript" src="carvings_manager.js"></script>
    </body>
</html>
