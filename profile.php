<?php
session_start();
include './connection.php';

$userid = "";
$password = "";
$email = "";
$fname = "";
$lname = "";
$contact = "";
$img = "";
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];
}
if ($userid === '') {
    echo "<script> alert('Unknown Error Occured. Please Register Again');location='login_register.php' </script>";
    die();
}

$select = "SELECT * FROM user WHERE id='" . $userid . "'";
$result = $connection->query($select);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $password = $row['password'];
        $username = $row['username'];
        $email = $row['email'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $contact = $row['contact_no'];
        $img = $row['profile_pic'];
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>P R O F I L E</title>
        <link type="text/css" rel="stylesheet" href="profile.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;600&family=Ranchers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <div class="box-outer-div" >

            <table class="nav-div" border="0">
                <tr>
                    <td class="logo"></td>
                    <td class="seperaor"></td>
                    <td class="directing-pages">
                        <button class="move-btn" onclick="popupMenu2();"><img src="images/menu.png" width="37" height="37"/></button>
                        <ul class="nav-pages" id="nav-pages">
                            <div class="top-div-nav">
                                <img src="images/cancel.png" width="25" height="25" onclick="popoutMenu();">
                            </div>
                            <li class="li1"><a href="hlo.php" class="anchor-tag">Home</a></li>
                            <li class="li1"><a href="contact.php" class="anchor-tag">Contact</a></li>
                            <li class="li1"><a href="about.php" class="anchor-tag">About Us</a></li>
                            <li class="li1"><a href="logout.php" class="anchor-tag">Log Out</a></li>
                        </ul> 
                    </td>
                </tr>
            </table>

            <div class="profile-outer-div" id="profile-outer-div">
                <div class="original-details-div">
                    <div class="dp">
                        <img src="<?php echo $img;?>" class="dp-img"/>
                    </div>
                    <br/>
                    <br/>
                    <p class="username"><?php echo $username; ?></p>
                    <br/>
                    <p class="email"><?php echo $email; ?></p>
                    <br/>
                    <br/>
                    <div class="password-div">
                        <input class="password"  id="password" type="password" maxlength="8" value="<?php echo $password; ?>" autocomplete="off"/>
                        <img src="images/look.png"  id="image" onclick="change()"   width="20" height="20"/>
                    </div>
                </div>
                <div class="details-seperator-div"></div>
                <div class="updating-details-div">
                    <form method="post" action="updateProfile.php" enctype="multipart/form-data" class="form-out">
                        <!--<p class="heads">First Name</p>-->
                        <input type="text" class="inputField" placeholder="First Name" name="fname" required autocomplete="off" onfocus="this.placeholder = 'Enter your First Name'" onfocusout="this.placeholder='First Name'" value="<?php echo $fname; ?>"/>
                        <br/>
                        <br/>
                        <br/>
                        <!--<p class="heads">Last Name</p>-->
                        <input type="text" class="inputField" placeholder="Last Name" name="lname"required autocomplete="off"onfocus="this.placeholder = 'Enter Your First Name '" onfocusout="this.placeholder='Last Name'" value="<?php echo $lname; ?>"/>
                        <br/>
                        <br/>
                        <br/>
                        <!--<p class="heads">Contact Number</p>-->
                        <input type="text" class="inputField" placeholder="Contact Number" name="contact"required autocomplete="off" onfocus="this.placeholder = 'Enter your Contact Number'" onfocusout="this.placeholder='Contact Number'" value="<?php echo $contact;?>"/>
                        <br/>
                        <br/>
                        <br/>
                        <!--<p class="heads">Username</p>-->
                        <input type="text" class="inputField" value="<?php echo $username; ?>" name="uname" required autocomplete="off" onfocus="this.placeholder = 'Enter your username'" onfocusout="this.placeholder='Username'"/>
                        <br/>
                        <br/>
                        <br/>
                        <!--<p class="heads">Email</p>-->
                        <input type="text" class="inputField" value="<?php echo $email; ?>" name="email" required autocomplete="off" onfocus="this.placeholder = 'Enter your email address'" onfocusout="this.placeholder='Email address'"/>
                        <br/>
                        <br/>
                        <br/>
                        <!--<p class="heads">Password</p>-->
                        <div class="div-pas">
                            <input type="password" class="inputFieldPass" id="password2" maxlength="8" name="pswd" value="<?php echo $password; ?>" required autocomplete="off" onfocus="this.placeholder = ''" onfocusout="this.placeholder='<?php echo $password; ?>'"/>
                            <div class="img-eye">
                                <img src="images/look.png"  id="btnEye" onclick="changeTwo()"   width="20" height="20"/>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <input type="file" name="img" id="file" hidden/>
                        <label class="lb-icon" for="file" >Upload Profile Picture</label>
                        <br/>
                        <br/>
                        <br/>
                        <input type="submit" value="SAVE" class="save-btn"/>
                    </form>
                </div>
            </div>
        </div>
        <div  id="ft">

<?php
include './newsampleft.php';
?>
        </div>
        <script type="text/javascript" src="profile.js"></script>
    </body>
</html>
