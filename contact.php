<html>
    <head>
        <meta charset="UTF-8">
        <title>C O N T A C T</title>
        <link type="text/css" rel="stylesheet" href="contact.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
            <?php
            include './navBar.php';
            ?>
        <div class="box-body">
<!--            <table class="tb1-carving">
                <tbody>
                    <tr>
                        <th class="col2_1">
                            <a href="hlo.php" class="backButton-anchor">
                                <button class="backButton">Back</button>
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>            -->
            <div class="box-body-inner" align="center">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253536.65640944807!2d79.89634982769684!3d6.829254038597543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25964247f5973%3A0x40d07d9b79bc5431!2sOak%20Ray%20Wood%20Carvings!5e0!3m2!1sen!2slk!4v1617638213217!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="form-div">
                    <form id="login" class="data-input-form" method="post"  enctype="multipart/form-data"  action="upload.php">
                        <input type="file"  class="user-input-file" id="fileToUpload" name="fileToUpload" />
                        <br/>
                        <br/>
                        <input type="text"  class="user-input-field"  placeholder="First and Last name" id="user-input-field3"  onfocus="this.placeholder = 'Please enter your First and Last name'" onfocusout="this.placeholder ='First and Last name'"  autocomplete="off" required/> <!-- Password  entering input-->
                        <input type="text"  class="user-input-field"  placeholder="Email Address" id="user-input-field4"  onfocus="this.placeholder = 'Please enter your Email address'" onfocusout="this.placeholder ='Email Address'" autocomplete="off"   required/> <!-- Password  entering input-->
                        <input type="text"  class="user-input-field-feedback"  placeholder="Feedback" id="user-input-field2"  onfocus="this.placeholder = 'Please enter your feedback'" onfocusout="this.placeholder ='Feedback'" autocomplete="off"    required/> <!-- Password  entering input-->
                        <br/>
                        <br/>
                        <label>

                        </label>
                        <br/>
                        <button type="submit" class="submit-button">SUBMIT</button>
<!--                        <span class="fn-span" id="fn-span">username</span>
                        <span class="ln-span" id="ln-span">Email Address</span>
                        <span class="fd-span" id="fd-span">Feedback</span>-->
                    </form>
                </div>
            </div>
            <br/>
        </div>
            <div class="numbers">
                <span class="con">+94 070 159 7170</span>
                <span class="con">sisukaweerasinghe@gmail.com</span>
                <span class="con">011 223 4234</span>
            </div>
            <div class="ftt">
                <?php
                include './newsampleft.php';
                ?>
            </div>
        <script  type="text/javascript" src="contact.js"></script>
    </body>
</html>
