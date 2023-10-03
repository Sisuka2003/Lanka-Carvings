<?php
include './connection.php';
?>
<html>
    <head>
        <title>C A R V I N G S</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="carvings.css"/>
        <link type="text/css" rel="stylesheet" href="hlo.css">
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <div class="boxBody">
            <?php
            include './navBar.php';
            ?>
            <br/><br/><br/><br/>
            <div class="box2-inner-searchbox" align="center">
                <form method="get" action="carvings.php" class="form">
                    <input type="text" name="keyword" id="keyword" placeholder="  SEARCH YOUR ITEM" class="keyword"/>
                    <input type="submit" value="SEARCH" class="searchButton" />              
                    <button class="searchButton"><a href="hlo.php" class="backAnchor">BACK</a></button>
                </form>
                <?php
                $keyword = "";
                if (isset($_GET["keyword"])) {$keyword = $_GET["keyword"];
                }
                ?>
            </div>
            <div class="box2">
                <div class="tables">
                    <?php
                    $query = "SELECT * FROM `product_carvings` WHERE `product_name` LIKE '%" . $keyword . "%' AND `category`='carvings' AND `avl_qty`>='1'";
                    $result = $connection->query($query);
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <table class="tb2">
                            <tr class="tb2-row">
                                <td class="tb2-col1">
                                    <a href="product_view_carvings.php?pid=<?php echo $row["id_products"]; ?>">
                                        <img class="product_img" src="images/<?php echo $row["img_url"]; ?>"/>
                                    </a>
                                </td>
                                <td class="tb2-col2">
                                    <div class="product_name_div" onclick="giveAlert();">
                                        <br/>
                                        <span class="productName"><?php echo $row["product_name"]; ?></span>
                                        <br/>
                                        <br/>
                                        <span class="description"><?php echo $row["product_description"]; ?></span>
                                        <br/>
                                        <br/>
                                        <span class="price">$&nbsp;<?php echo $row["sell_price"]; ?></span>
                                    </div>

                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="ft-carving">
            <?php
            include './newsampleft.php';
            ?>
        </div>
        <script type="text/javascript" src="hlo.js"></script>
        <script type="text/javascript" src="alert.js"></script>
    </body>
</html>
