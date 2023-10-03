<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>N A V&nbsp;&nbsp;B A R</title>
        <link type="text/css" rel="stylesheet" href="navBar.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <?php
        if (isset($_SESSION["is_login"]) && ($_SESSION["is_login"] == true)) {
            ?>
            <table class="tb1">
                <tbody>
                    <tr>
                        <th class="col0">
                            <div class="logo" id="logo"></div>
                        </th>
                        <th class="col2">
                            <ul class="nav-pages" id="nav-pages">
                                <li class="li2"><a href="hlo.php" class="a2" id="a2-animation">Home</a></li>
                                <li class="li2"><a onclick="msgin();" class="a2" id="a2-animation">shop</a></li>
                                <li class="li3"><a href="cart.php" class="a3" id="a3-animation"><img src="images/shopping-cart.png" width="23" height="23"/></a></li><!--  cart-->
                                <li class="li3"><a href="profile.php" class="a3" id="a3-animation"><img src="images/user.png" width="23" height="23"/></a></li><!--  profile-->
                            </ul> 
                            <div class="menu-button" id="menu-button" onclick="popupMenu();">

                                <div class="line1" id="line1" ></div>
                                <div class="line1" id="line2" ></div>
                                <div class="line1" id="line3" ></div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <table class="tb1">
                <tbody>
                    <tr>
                        <th class="col0">
                            <div class="logo" id="logo"></div>
                        </th>
                        <th class="col2">
                            <ul class="nav-pages" id="nav-pages">
                                <li class="li2"><a href="hlo.php" class="a2" id="a2-animation">Home</a></li>
                                <li class="li2"><a onclick="msgin();" class="a2" id="a2-animation">shop</a></li>
                                <li class="li1"><a href="login_register.php" class="a1" id="a1-animation">Sign In </a></li>
                                <li class="li3"><a href="login_register.php" class="a3" id="a3-animation">Register</a></li>
                            </ul> 
                            <div class="menu-button" id="menu-button" onclick="popupMenu();" onmouseenter="msgout();">

                                <div class="line1" id="line1" ></div>
                                <div class="line1" id="line2" ></div>
                                <div class="line1" id="line3" ></div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        ?>
        <div class="poped-display"  id="poped">
            <span class="spcar"><a href="carvings.php" class="spac">Carvings</a></span>
            <hr/>
            <span class="spcar"><a href="machinary_wood.php"  class="spac">Machinary</a></span>
            <hr/>
            <span class="spcar"><a href="tools.php"  class="spac">Tools</a></span>
        </div>
        <script type="text/javascript" src="navBar.js"></script>
    </body>
</html>
