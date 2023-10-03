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
        <title>U S E R&nbsp;&nbsp;&nbsp;M A N A G E R</title>
        <link type="text/css" rel="stylesheet" href="user_manager.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    </head>
    <body>
        <form method="post"  action="user_manager_update.php" class="form-one">
            <div> 
                 <span>ID </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="ID" name="id-1" id="id-1" class="inputs"/>
        <br/>
        <span>Username </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Username" name="Username" id="Username" class="inputs"/>
        <br/>
        <span>Email </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Email" name="Email" id="Email"  class="inputs"/>
        <br/>
        <span>Password </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Password" name="Password" id="Password"  class="inputs"/>
        <br/>
        <span>First Name </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="First Name" name="fname" id="fname"  class="inputs"/>
        <br/>
        <span>Last Name </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Last Name" name="lname" id="lname"  class="inputs"/>
        <br/>
        <span>Contact </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Contact Number" name="contact" id="contact"  class="inputs"/>
        <br/>
        <button type="submit" class="updateButton">UPDATE</button>
        <button class="Back" type="submit"><a href="admin_work.php" class="aBack">BACK</a></button>
<!--        <span>ID </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="ID" name="id-1" id="id-1" class="inputs"/>
        <br/>
        <span>Username </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Username" name="Username" id="Username" class="inputs"/>
        <br/>
        <span>Email </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Email" name="Email" id="Email"  class="inputs"/>
        <br/>
        <span>Password </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Password" name="Password" id="Password"  class="inputs"/>
        <br/>
        <span>First Name </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="First Name" name="fname" id="fname"  class="inputs"/>
        <br/>
        <span>Last Name </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Last Name" name="lname" id="lname"  class="inputs"/>
        <br/>
        <span>Contact </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Contact Number" name="contact" id="contact"  class="inputs"/>
        <br/>
        <button type="submit" class="updateButton">UPDATE</button>
        <button class="Back" type="submit"><a href="admin_work.php" class="aBack">BACK</a></button>-->
        </div>
        </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>
                <form method="get" action="user_manager.php" class="form-a">
                        <input type="text" name="keyword" id="keyword" placeholder="Please Enter the first Name of the User" class="inputs-a"/>
                        <input type="submit" value="SEARCH" class="searchButton" />
                    </form>
        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>

        <table class="tb-user" id="tb-user">
            <tr>
                <th>ID</th><th>Username</th><th>Email</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Picture</th><th>Delete</th>    
            </tr>
            <?php
//            $query = "SELECT * FROM `user`";
//            $result = $connection->query($query);
//            while ($row = $result->fetch_assoc()) {
                    $querys = "SELECT * FROM `user` WHERE `first_name` LIKE '%" . $keyword . "%'";
                    $results = $connection->query($querys);
                    while ($row = $results->fetch_assoc()) {
                        ?>
                    <tr class="data-row">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["contact_no"]; ?></td>
                        <td><img src="<?php echo $row["profile_pic"]; ?>" width="90" height="90"/></td>
                        <td><a  class="aDelete" href="user_manager_delete.php?id=<?php  echo $row["id"];?>">DELETE</a></td>
                    </tr>


                <?php
//            }
            
                    }
            ?>
        </table>
        <script type="text/javascript" src="user_manager.js"></script>
    </body>
</html>
