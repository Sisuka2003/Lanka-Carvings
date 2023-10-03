<?php
session_start();

if (isset($_SESSION["is_login"])) {
    if ($_SESSION["is_login"] == true) {
        header("Location: hlo.php");
        exit();
    }
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>L O G I N / R E G I S T E R</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="login_register.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <div class="box-body">
            <table class="tb1-carving">
                <tbody>
                    <tr>
                        <th class="col2_1">
                            <div class="div-logo-outer">
                                <div class="left"></div>
                            </div>
                            <a href="hlo.php" class="backButton-anchor">
                                <button class="backButton">back to home</button>
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>            
            <div class="box-body-inner" align="center">
                <div class="form-div">
                    <div class="button-div">
                        <div class="button-div-inner" id="button-div-inner"></div>
                        <button type="button" class="main-buttons-head" onclick="login();">Log In</button>
                        <button type="button" class="main-buttons-head" onclick="register();" >Register</button>
                    </div>
                    <!--LOGIN START-->
                    <form id="login" class="data-input-form" method="post"  action="doLogin.php">
                        <input type="text"  class="user-input-field" placeholder="Username"   name="username" id="username" onfocus="this.placeholder = ''" autocomplete="off" onclick="usernameLoginClick();" required /> <!-- username entering input-->
                        <input type="password"  class="user-input-field"  placeholder="Password"  name="password" id="password"  onfocus="this.placeholder = ''" autocomplete="off" onclick="passwordLoginClick();" required/> <!-- Password  entering input-->
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <button type="submit" class="submit-button">Log In</button>
                        <span class="un-span" id="un-span">Username</span>
                        <span class="pw-span" id="pw-span">Password</span>
                    </form>
                    <!--LOGIN END-->
                    <!--REGISTER START-->
                    <form id="register" class="data-input-form" method="post"  action="doRegister.php">
                        <input type="text"  class="user-input-field"  name="register_username" id="register_username" onfocus="this.placeholder = ''"  placeholder="Username"  autocomplete="off"  maxlength="20" onclick="usernameRegisterClick();" required  /><!-- username entering input-->
                        <input type="email"  class="user-input-field"  name="register_email" id="register_email"  onfocus="this.placeholder = ''"  placeholder="Email"  autocomplete="off"  onclick="emailRegisterClick();"   required/><!-- email entering input-->
                        <input type="password"  class="user-input-field"  name="register_password" id="register_password"  onfocus="this.placeholder = ''"  placeholder="Password"  autocomplete="off"  maxlength="8" onclick="passwordRegisterClick();"  required/><!-- paswrd entering input-->
                        <br/>
                        <br/>
                        <button type="submit" class="submit-button">Register</button>
                        <span class="un-span2" id="un-span2">Username</span>
                        <span class="em-span2" id="em-span2">Email</span>
                        <span class="pw-span2" id="pw-span2">Password</span>
                    </form>
                    <!--REGISTER END-->
                    <br/>
                </div>
            </div>
<!--            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>-->
            <div class="ftt">
                        <?php
            include './newsampleft.php';
            ?>
                    </div>
        </div>
        <script  type="text/javascript" src="login_register.js"></script>
    </body>
</html>
