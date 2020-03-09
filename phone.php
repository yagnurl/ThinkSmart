<?php

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
    <link rel="stylesheet" href="phone.css">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/5dcee60537.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">

    <!--json jquery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body >
    <a href="index.php">
        <img class="logo" src="img/logo4.png" alt="">
    </a>
    <!-- Navbar Start -->
    <?php
    navbar();
    ?>
    <!--/////NAVBAR SECTİON END/////-->


    <!-- BREADCRUMB (İÇERİK HARİTASI)-->


    <br>
    <div aria-label="breadcrumb" class="breadcrumb mb-0 p-3" style="height: 2cm; width: 100cm; background: #ffffff;">
        <ol class="breadcrumb d-inline-flex p-2 color">
            <li class="breadcrumb-item  "><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="#">Phone</a></li>
            <li class="breadcrumb-item active">Huawei</li>
            <li class="breadcrumb-item "><a href="#">...</a></li>
            <li class="breadcrumb-item"><a href="#">...</a></li>
            <li class="breadcrumb-item active">...</li>

        </ol>

        <div class="dropdown show " style="margin-left: 13.5cm;">
            <a class="btn btn-outline-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Highest Price</a>
                <a class="dropdown-item" href="#">Lowest Price</a>

            </div>
        </div>
    </div>

    <!-- ********************************    SORTING DROPDOWN ******************************************-->






    <!-- **********************STARTING OF FILTER SECTION*********************** -->

    <section>
        <div class="container filter ml-3 " style="width: 250px; height: 800px;  ">
            <br>
            <span class="lead"><strong>FILTER</strong></span><br><br>
            <div class="dropdown ">
                <button class="btn" type="button" data-toggle="collapse" data-target="#c1" aria-expanded="false" aria-controls="collapseExample"> <span class="lead">Brands</span>
                    <span class="caret"></span></button>

                <ul class="collapse" id="c1">

                    <li> <input type="checkbox" name="brand"><a href="#"> APPLE</a></li>
                    <li> <input type="checkbox" name="brand"><a href="#"> HUAWEI</a></li>
                    <li> <input type="checkbox" name="brand"><a href="#"> SAMSUNG</a></li>
                    <li> <input type="checkbox" name="brand"><a href="#"> OPPO</a></li>
                    <li> <input type="checkbox" name="brand"><a href="#"> XIAOMI</a></li>

                </ul>

            </div>
            <hr>

            <div>
                <button class="btn " type="button" data-toggle="collapse" data-target="#c2" aria-expanded="false" aria-controls="collapseExample"> <span class="lead">Price Range</span>
                    <span class="caret"></span></button>

                <ul class="collapse" id="c2">

                    <li> <input type="checkbox" name="price"><a href="#"> $100 to $200</a></li>
                    <li> <input type="checkbox" name="price"><a href="#"> $200 to $300</a></li>
                    <li> <input type="checkbox" name="price"><a href="#"> $300 to $400</a></li>
                    <li> <input type="checkbox" name="price"><a href="#"> $400 to $500</a></li>
                    <li> <input type="checkbox" name="price"><a href="#"> $500 to $600</a></li>
                    <li> <input type="checkbox" name="price"><a href="#"> $600 & Above</a></li>

                </ul>
            </div>

            <hr>



            <div class="dropdown">
                <button class="btn " type="button" data-toggle="collapse" data-target="#c3" aria-expanded="false" aria-controls="collapseExample"> <span class="lead">Colors</span>
                    <span class="caret"></span></button>
                <ul class="collapse" id="c3">

                    <li> <input type="checkbox"><a href="#"> color1</a></li>
                    <li> <input type="checkbox"><a href="#"> color1</a></li>
                    <li> <input type="checkbox"><a href="#"> color1</a></li>
                    <li> <input type="checkbox"><a href="#"> color1 </a></li>
                    <li> <input type="checkbox"><a href="#"> color1</a></li>
                    <li> <input type="checkbox"><a href="#"> color1</a></li>

                </ul>
            </div>

            <hr>
            <br>
        </div>


        <!-- **********************END OF FILTER SECTION**************************** -->





        <!------------------------------------- ALT ÜRÜN KARTLARI------------------------------->
        <article>
            <!-- Card deck -->

            <div class="card-deck row justify-content-center ">

                <?php
                $result = $databese->getPhoneItems();
                while ($row = mysqli_fetch_assoc($result)) {
                    productCard($row['product_name'], $row['price'], $row['product_image1'], $row['product_image2']);
                }
                ?>

            </div>

            <nav aria-label="Page navigation ">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>





        </article>
    </section>





    <!--Footer Start-->
    <?php
    footer();
    ?>



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