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
    <link rel="stylesheet" href="productPage.css">


    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/5dcee60537.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">

    <!--json jquery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<a href="index.php">
        <img class="logo" src="img/logo4.png" alt="">
    </a>
<!--NAVBAR SECTİON START-->

<body>
    <?php
    navbar();
    ?>
    <!--/////NAVBAR SECTİON END/////-->

    <!-- BREADCRUMB (İÇERİK HARİTASI)-->


    <br>
    <div aria-label="breadcrumb" class="breadcrumb mb-0 p-3" style="height: 2cm; width: 100cm; background: #ffffff; margin-left: 0cm;">
        <ol class="breadcrumb d-inline-flex p-2 color ">
            <li class="breadcrumb-item  "><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="#">Phone</a></li>
            <li class="breadcrumb-item active">Huawei</li>
            <li class="breadcrumb-item "><a href="#">...</a></li>
            <li class="breadcrumb-item"><a href="#">...</a></li>
            <li class="breadcrumb-item active">...</li>

        </ol>


    </div>

    <!-- ********************************    END OF BREADCRUMB ******************************************-->



    <div class="product-card ">

        <h1 >xiaomi mi 9t</h1>
        <h5 class="price"><button class="btn btn-outline-light"> $350 </button></h5>
        <div class="product-pic"></div>
        <div class="product-colors">
            <span class="blue active" data-colors="#70a1ff" data-pic="url(img/test/blue.png)"></span>
            <span class="carbon" data-colors="#2f3542" data-pic="url(img/test/carbon.png)"></span>
            <span class="red" data-colors="#ff6348" data-pic="url(img/test/red.png)"></span>
        </div>
        <table class="table table-size table-sm table-borderless table-info ">
            <thead>

            </thead>
            <tbody class="table-text">
                <tr>
                    <th scope="col-md-2 row">Selife Camera</th>
                    <td> 20 MP</td>

                </tr>
                <tr>
                    <th scope="row">RAM </th>
                    <td>6 GB</td>

                </tr>
                <tr>
                    <th scope="row"> Screen Size</th>

                    <td colspan="2"> 6.39 inch</td>

                </tr>

                <tr>
                    <th scope="row "> Processor </th>
                    <td colspan="2">2,2 GHz Dual Core</td>

                </tr>
                <tr>
                    <th scope=" row"> Internal Storage</th>
                    <td colspan="2">64 GB</td>

                </tr>
                <tr>
                    <th scope="row"> Battery Power</th>
                    <td colspan="2">4000 mAh</td>

                </tr>

                <tr>
                    <th scope="row"> Camera Resolution</th>
                    <td colspan="2">48 MP + 8MP + 13MP</td>

                </tr>
            </tbody>
        </table>

    </div>




    <script>
        $(".product-colors span").click(function() {
            $(".product-colors span").removeClass("active");
            $(this).addClass("active");
            $(".product-price").css("color", $(this).attr("data-color"));
            $(".product-button").css("color", $(this).attr("data-color"));
            $(".product-pic").css("background-image", $(this).attr("data-pic"));
        });
    </script>

    <br>


   <!-- ********************************  FEATURED SLIDER STARTS ********************************* -->
   <div id="fast-transition" class="shadow">

<p class=" text"> FEATURED </p>

</div>

<br><br>
<!--Carousel Wrapper-->
<div id="multi-item-5" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
    <a class="carousel-control-prev" href="#multi-item-5" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only" >Previous</span>
    </a>
    <a class="carousel-control-next" href="#multi-item-5" role="button" data-slide="next">
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

    <!-- ********************************  FEATURED SLIDER ENDS ********************************* -->


    <!-- COMMENT SECTION-->
<br><br><br><br><br>

    <!--************************************************** -->
    <div class="form-box">
        <form method="post">
            <div class="col-md-5 row1">
                <h5 class="comment-title">LEAVE A COMMENT!</h5>
                <label for="name">Name <span class="required">*</span></label>
                <input id="name" type="text" name="name" aria-required="true" size="100%" style="max-width: 75%" />


                <div class="radio">
                    Male: <input name="gender" type="radio" value="Male" />
                    Female: <input name="gender" type="radio" value="Female" />
                </div>

                <div class="mail-section">
                    <label for="email">E-mail <span class="required">*</span></label>

                    <input type="text" name="email">
                    <select class="options" name="email2" style="width: 50%;">
                        <option value="@gmail">@gmail.com</option>
                        <option value="@hotmail">@hotmail.com</option>
                        <option value="@outlook">@outlook.com</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5 row2">
                <label for="comment">Comment: <span class="required">*</span></label>
                <textarea class="comment" name="comment" rows="7" cols="80">
                    </textarea>
            </div>

            <input name="insert" type="submit" class="submit" value="Send !" />
        </form>
    </div>

    <?php
                    $databese->comments();
    ?>

    <!--************************************************** -->








    <!-- END OF COMMENT SECTION-->


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

    <!--COMMENT JS-->
    <script>
        window.onload = (function() {
            var form = document.querySelector('.comments__form');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
            });

        })();
    </script>

    <!--JS - POPPER.JS - jQUERY-- >
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>