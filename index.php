<?php

// to call PHP files

require_once("php/connectDB.php");
require_once("./php/nabvar.php");
require_once("./php/footer.php");
require_once("./php/productCard.php");

//Create instance of CreateDb class
$databese = new ConnectDB();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!--BOOTSTRAP CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--CSS LINK-->
    <link rel="stylesheet" href="index.css">


    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/5dcee60537.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">

    <!--json jquery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body >

    <!-- LOGO OF THE WEBSITE -->
    <a href="index.php">
        <img class="logo" src="img/logo4.png" alt="">
    </a>


    <!--**************************************** NAVBAR STARTS ************************************************* -->
    <?php
    navbar();
    ?>
    <!--**************************************** NAVBAR ENDS ************************************************* -->



    <!--**************************************** SLIDER SECTION STARTS ************************************************* -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider5.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--**************************************** SLIDER SECTION ENDS ************************************************* -->


    <!-- *********************************** FEATURED CARD SECTION STARTS*************************************************** -->

    <div id="zoom" class="card mb-3 cardDiv1" style="max-width: 34%; min-height: 45%;">
        <div class="row no-gutters">
            <div class="col-md-8 cardImg">
                <img src="img/apple_watch.png" class="card-img" alt="...">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h5 class="card-title">Apple Watch</h5>
                    <p class="card-text">All-new ways to do all kinds of things.</p>
                    <p class="card-text"><small class="text-muted"> <a href="#">Discover More</a> </small></p>
                </div>
            </div>
        </div>
    </div>

    <div id="zoom" class="card mb-3 cardDiv2" style="max-width: 34%; min-height: 45%;">
        <div class="row no-gutters">
            <div class="col-md-8 cardImg">
                <img src="img/AsusMonitor.png" class="card-img" alt="...">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h5 class="card-title">Asus Rog</h5>
                    <p class="card-text">All-new ways to do all kinds of things.</p>
                    <p class="card-text"><small class="text-muted"> <a href="#">Discover More</a> </small></p>
                </div>
            </div>
        </div>
    </div>

    <div id="zoom" class="card mb-3 cardDiv1" style="max-width: 34%; min-height: 45%;">
        <div class="row no-gutters">
            <div class="col-md-8 cardImg">
                <img src="img/area51.png" class="card-img" alt="...">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h5 class="card-title">Area 51</h5>
                    <p class="card-text">All-new ways to do all kinds of things.</p>
                    <p class="card-text"><small class="text-muted"> <a href="#">Discover More</a> </small></p>
                </div>
            </div>
        </div>
    </div>
    <!-- *********************************** FEATURED CARD SECTION ENDS ******************************************** -->



    <br>
    <!-- ********************************  BESTSELLER SLIDER STARTS ********************************* -->
    <div id="fast-transition" class="shadow">

        <p class=" text"> BESTSELLERS! </p>

    </div>

    <br><br>
    <!--Carousel Wrapper-->
    <div id="multi-item-1" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="carousel-control-prev" href="#multi-item-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" >Previous</span>
            </a>
            <a class="carousel-control-next" href="#multi-item-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner container " role="listbox" style="min-width: 90%;">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="card-group">
                    <?php
                    //To get first 4 data-row in database and show these datas as cards.
                    for ($i = 1; $i < 5; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }

                    ?>
                </div>
            </div>
            <!--/.First slide-->


            <!--Second slide-->
            <div class="carousel-item">
                <div class="card-group">
                    <?php
                    //To get first 4 data-row in database and show these datas as cards.
                    for ($i = 5; $i < 9; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }
                    ?>
                </div>
            </div>
            <!--/.Second slide-->
        </div>
        <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->

    <!-- *********************************** BESTSELLER SECTION ENDS*************************************************** -->


    <br><BR></BR><br>
    <!-- ********************************  ON SALE SLIDER ********************************* -->
    <div id="fast-transition" class="shadow">

        <p class=" text"> ON SALE! </p>

    </div>

    <br><br>
    <!--Carousel Wrapper-->
    <div id="multi-item-2" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="carousel-control-prev" href="#multi-item-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#multi-item-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <!--/.Controls-->


        <!--Slides-->
        <div class="carousel-inner container " role="listbox" style="min-width: 90%;">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="card-group">
                    <?php
                    //To get first 4 data-row in database and show these datas as cards.
                    for ($i = 1; $i < 5; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }

                    ?>
                </div>
            </div>
            <!--/.First slide-->


            <!--Second slide-->
            <div class="carousel-item">
                <div class="card-group">
                    <?php
                    //To get second 4 data-row in database and show these datas as cards.
                    for ($i = 5; $i < 9; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }
                    ?>
                </div>
            </div>
            <!--/.Second slide-->


        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

    <!-- ********************************  ON SALE SLIDER ENDS ********************************* -->


    <br><br><br><br>
    <!-- ********************************  NEW ARRIVED SLIDER ********************************* -->
    <div id="fast-transition" class="shadow">

        <p class=" text"> NEW ARRIVED! </p>

    </div>

    <br><br>
    <!--Carousel Wrapper-->
    <div id="multi-item-3" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="carousel-control-prev" href="#multi-item-3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#multi-item-3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner container " role="listbox" style="min-width: 90%;">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="card-group">
                    <?php
                    //To get first 4 data-row in database and show these datas as cards.
                    for ($i = 1; $i < 5; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }

                    ?>
                </div>
            </div>
            <!--/.First slide-->


            <!--Second slide-->
            <div class="carousel-item">
                <div class="card-group">
                    <?php
                    //To get second 4 data-row in database and show these datas as cards.
                    for ($i = 5; $i < 9; $i++) {
                        $result = $databese->getIndexItems($i);
                        $row = mysqli_fetch_assoc($result);

                        //Create the card and adds their informations
                        productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                    }
                    ?>
                </div>
            </div>
            <!--/.Second slide-->


        </div>
        <!--/.Slides-->

    </div>
    <!-- ********************************  NEW ARRIVED SLIDER ENDS ********************************* -->



    <!-- ********************************  CUSTOMER SERVICE SECTION STARTS ********************************* -->
    <div class="customerService">
        <div class="col-md-3 customerblock">
            <a href="#" class="customerIcon"><i class="fas fa-truck"></i></a>
            <h1 class="customerText">Free Shipping Worlwide</h1>
            <p class="customerText text-muted"> Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-3 customerblock">
            <a href="#" class="customerIcon"><i class="fas fa-headset"></i></a>
            <h1 class="customerText">Free Shipping Worlwide</h1>
            <p class="customerText text-muted"> Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-3 customerblock">
            <a href="#" class="customerIcon"><i class="fas fa-hand-holding-usd"></i></a>
            <h1 class="customerText">Free Shipping Worlwide</h1>
            <p class="customerText text-muted"> Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <!-- ********************************  CUSTOMER SERVICE SECTION ENDS ********************************* -->


    <!-- ********************************  FOOTER SECTION STARTS ********************************* -->
    <?php
    footer();
    ?>
    <!-- ********************************  FOOTER SECTION ENDS ********************************* -->

    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').click(function() {
                $('.menu-item').addClass('hide-item')
                $('.search-form').addClass('active')
                $('.close').addClass('active')
                $('#search').hide()
            })

            $('.close').click(function() {
                $('.menu-item').removeClass('hide-item')
                $('.search-form').removeClass('active')
                $('.close').removeClass('active')
                $('#search').show()
            })


        })
    </script>
    



    <!--JS - POPPER.JS - jQUERY-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>

</html>