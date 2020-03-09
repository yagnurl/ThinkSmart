<?php

function productCard($productName, $productPrice, $productImg, $productImg2) {
    $element = "
    <div class=\"col-md-3\">
    <div class=\"card mb-2 sub-card card-rounded\" style=\"min-width: 90%; min-height: 100%;\">
        <img class=\"card-img-top mt-4\" style=\"width: 100%;\" src=\"$productImg\"
        onmouseover=\"this.src='$productImg2';\"
        onmouseout=\"this.src='$productImg';\" />
        <div class=\"card-body mt-0\">
            <h4 class=\"card-title productname\">$productName</h4>
            <p class=\"card-text productprice\">$$productPrice</p>
            <a href=\"productPage.php\" class=\"btn btn-outline-danger\"> VIEW </a>
        </div>
    </div>
</div>
    ";

    echo $element;
}

?>