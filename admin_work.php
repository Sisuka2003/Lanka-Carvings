<?php
session_start();
if (isset($_SESSION["is_admin_login"]) && ($_SESSION["is_admin_login"] == true)) {

} else {
    header("Location: login_register.php");die();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A D M I N&nbsp;&nbsp; P A N E L</title>
        <link type="text/css" rel="stylesheet" href="admin_work.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <div class="box-outer-admin">
            <div class="back-div">
                <a href="login_register.php" class="anchor">
                    <button class="back">B A C K</button>
                </a>
                <a href="hlo.php" class="anchor">
                    <button class="back">H O M E</button>
                </a>
            </div>
            <div class="box-inner">
                <div class="box-inner-button">

                    <a href="user_manager.php" class="anchor">
                        <div class="btn-admin-div">
                            <span>User Manager</span>
                        </div>
                    </a>
                    <a href="product_manager.php" class="anchor">
                        <div class="btn-admin-div">
                            <span>Product Manager</span>
                        </div>
                    </a>
                    <a href="order_manager.php" class="anchor">
                        <div class="btn-admin-div">
                            <span>Order Manager</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
