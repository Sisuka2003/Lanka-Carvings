
<html>
    <head>
        <title>H O M E</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="hlo.css"/>
        <link rel="shortcut icon" href="images/carpenter.png"/>
    </head>
    <body>
        <!-- Section 1 START-->
        <section class="s1">
            <!-- Home body START-->
            <div class="box1">
                <!-- navigation bar START-->                
                <?php
                include './navBar.php';
                ?>
                <!-- Navigation bar ENDS-->

                <!-- home body section 01 design START-->
                <div class="box-home-body">
                    <div class="maskify-box">
                        <h1 class="maskify">Nature for Creativity</h1>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <a href="#s2">
                            <div class="arrow" id="arrow"></div>
                        </a>


                    </div>
                </div>
                <!-- home body section 01 design END-->

            </div>
            <!-- Home body END-->

        </section>
        <!-- Section 1 END-->
        <div class="lastest-div-outer">
            <br/>
            <br/>
            <br/>
            <h2 class="heading">&nbsp;&nbsp;&nbsp;Latest Products&nbsp;&nbsp;&nbsp;</h2>
            <br/>
            <br/>
            <div class="items">
                <div class="item1" onmouseover="item1()" onmouseout="item1Out()">
                    <div class="product_img_div" id="product_img_div1"><img src="images/wooden-elephant-product2-sideview-removebg-preview.png"  class="image_item"/></div>
                    <div class="details_div" id="details_div1">
                        <form method="get" action="product_view_carvings.php" class="form_align">
                            <br/>
                            <span class="product_name" id="product_name1">Elephant Carving</span>
                            <h4 class="sell_price" id="sell_price1">$ 100</h4>
                            <input type="submit" value="View Details" class="view_button_display" id="view_button1"/>
                            <input type="hidden" value="1" name="pid"/>
                            <br/>
                        </form>
                    </div>
                </div>

                <div class="item2" onmouseover="item2()" onmouseout="item2Out()">
                    <div class="product_img_div"  id="product_img_div2"><img src="images/wooden-elephant-product3-sideview-removebg-preview.png"  class="image_item"/></div>
                    <div class="details_div" id="details_div2">
                        <form method="get" action="product_view_carvings.php" class="form_align">
                            <br/>
                            <span class="product_name" id="product_name2">Elephant Carving</span>
                            <h4 class="sell_price" id="sell_price2">$ 100</h4>
                            <input type="submit" value="View Details" class="view_button_display" id="view_button2"/>
                            <input type="hidden" value="6" name="pid"/>
                            <br/>
                        </form> 
                    </div>
                </div>

                <div class="item3" onmouseover="item3()" onmouseout="item3Out()">
                    <div class="product_img_div"  id="product_img_div3"><img src="images/wooden-elephant-product4-removebg-preview.png"  class="image_item"/></div>
                    <div class="details_div" id="details_div3">
                        <form method="get" action="product_view_carvings.php" class="form_align">
                            <br/>
                            <span class="product_name" id="product_name3">Elephant Carving</span>
                            <h4 class="sell_price" id="sell_price3">$ 100</h4>
                            <input type="submit" value="View Details" class="view_button_display" id="view_button3"/>
                            <input type="hidden" value="3" name="pid"/>
                            <br/>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="product_details_div_outer">
            <div class="img_div_outer">
                <img src="images/sri-lankan-traditional-devil-3D-model_0-removebg-preview-copy-2.png"  class="spin" />
            </div>
            <div class="div_details_outer">
                <p>
                    A Raksha mask is a mask that Sri Lankans<br/>use a lot in festivals and cultural dances.
                    Raksha <br/>means “demon” and the masks are apotropaic <br/>which means that it is intended
                    to ward off evil.<br/> They are painted in vibrant colors, with bulging<br/> eyes and protruding
                    tongues and they depict <br/>various types of demons.
                </p>
            </div>
        </div>
        <div class="videoDiv">
            <div class="video">
                <video autoplay muted loop class="videoSection">
                    <source src="videos/Mask Industry In Sri Lanka _ ශි_්_ර ලංකාවේ වෙස්මුහුණු කර්මාන්තය_Trim.mp4" type="video/mp4" >
                    <source src="videos/Mask Industry In Sri Lanka _ ශි_්_ර ලංකාවේ වෙස්මුහුණු කර්මාන්තය_Trim.ogg" type="video/ogg">
                </video>
            </div>
            <div class="videoDescOuter">
                <div class="videodescInner"> 
                    <p class="handicraftDesc">
                        Sri Lanka handicrafts are of a history that runs back to millenniums. Production
                        of Sri Lanka’s handicrafts, with the exception of Jewelry, is essentially a cottage industry: 
                        products are turned out making use of natural raw materials by means of time tested 
                        age-old techniques. The traditional skills have been preserved with its purity, resulting 
                        in the continuance of characteristic identity of Sri Lanka Handicrafts.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section 2 START-->
        <section class="s2" id="s2">
            <div class="box-links-inner">
                <div class="box_3">
                    <button class="btn-select" onclick="image();">Select Category</button>
                    <a href="carvings.php"><div class="imgDisplay" id="img1"></div></a>
                    <a href="machinary_wood.php"><div class="imgDisplay" id="img2"></div></a>
                    <a href="machinary_wood.php"><div class="imgDisplay" id="img3"></div></a>
                    <a href="tools.php"><div class="imgDisplay" id="img4"></div></a>
                    <a href="tools.php"><div class="imgDisplay" id="img5"></div></a>
                    <a href="tools.php"><div class="imgDisplay" id="img6"></div></a>
                    <a href="tools.php"><div class="imgDisplay" id="img7"></div></a>
                    <a href="tools.php"><div class="imgDisplay" id="img8"></div></a>               
                    <a href="carvings.php"><div class="imgDisplay" id="img9"></div></a>               
                    <a href="carvings.php"><div class="imgDisplay" id="img10"></div> </a>              
                    <a href="machinary_wood.php"><div class="imgDisplay" id="img11"></div></a>               
                    <a href="tools.php"><div class="imgDisplay" id="img12"></div></a>               
                    <a href="tools.php"><div class="imgDisplay" id="img13"></div></a>               
                </div>       
            </div>  
        </section>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="ftt">
            <?php
            include './newsampleft.php';
            ?>
        </div>
        <script src="hlo.js" type="text/javascript"></script>
    </body>
</html>
