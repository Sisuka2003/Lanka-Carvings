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
        <title>O R D E R&nbsp;&nbsp;M A N A G E R</title>
        <link type="text/css" rel="stylesheet" href="carvings_manager.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <form method="post"  action="order_manager_update.php">
            <span>Order Number :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Order Number" name="oid" id="oid" class="inputs" autocomplete="off"/>
            <br/>
            <span>Contact Number :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Contact Number" name="Cnum" id="Cnum" class="inputs" autocomplete="off"/>
            <br/>
            <span>Card Holder's Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="card_holder_name" name="chname" id="chname"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Card Number :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Card Number" name="cardNum" id="cardNum"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Product Delivering Address :</span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Delivering Address" name="deliAddress" id="deliAddress"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Username :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Username" name="uname" id="uname"  class="inputs" autocomplete="off"/>
            <br/>
            <span>Paid Amount :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Paid Amount" name="amount" id="amount"  class="inputs" autocomplete="off"/>
            <br/>    
            <button type="submit" class="updateButton">UPDATE</button>

            <button class="Back" type="submit"><a href="admin_work.php" class="aBack">BACK</a></button>
        </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>
        <form method="get" action="order_manager.php" class="form-a">
                        <input type="text" name="keyword" id="keyword" placeholder="Please Enter the Contact Number" class="inputs-a"/>
                        <input type="submit" value="SEARCH" class="searchButton" />
                    </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>

        <table class="tb-user" id="tb-user">
            <tr>
                <th>Order Number</th> 
                <th>Contact Number</th>
                <th>Card Holder's Name</th>
                <th>Card Number</th>
                <th>Product Delivering Address</th>
                <th>Username</th>
                <th>Paid Amount</th>
                <th>Delete</th> 
            </tr>
            <?php
//            $query = "SELECT `order_number`,`contact_number`,`card_holder_name`,`card_number`,`delivering_address`,`username`,`product_name`,`paid_amount`,`quantity`,`payment_method` FROM `order_manager`";
//            $result = $connection->query($query);
//            while ($row = $result->fetch_assoc()) {
            $querys = "SELECT * FROM `invoice` WHERE `contact_no` LIKE '%" . $keyword . "%'";
                    $results = $connection->query($querys);
                    while ($row = $results->fetch_assoc()) {
                ?>
                <form>
                    <tr>
                        <td><?php echo $row["id_invoice"]; ?></td>
                        <td><?php echo $row["contact_no"]; ?></td>
                        <td><?php echo $row["card_holder_name"]; ?></td>
                        <td><?php echo $row["card_number"]; ?></td>
                        <td><?php echo $row["delivering_address"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["paid_amount"]; ?></td>
                        <td><a  class="aDelete" href="order_manager_delete.php?id=<?php echo $row["id_invoice"]; ?>">DELETE</a></td>
                    </tr>
                </form>


                <?php
            }
            ?>
        </table>
        <script type="text/javascript" src="order_manager.js"></script>
    </body>
</html>
