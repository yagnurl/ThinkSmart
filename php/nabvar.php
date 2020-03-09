<?php

function navbar() {
    $element = "
        <nav class=\"nav\">
            <div class=\"menu\">
                <ul>
                    <li> <a href=\"#\"></a></li>
                    <li> <a href=\"phone.php\" class=\"menu-item\">Phone</a></li>
                    <li> <a href=\"#\" class=\"menu-item\">Computer</a></li>
                    <li> <a href=\"#\" class=\"menu-item\">Camera</a></li>
                    <li> <a href=\"#\" class=\"menu-item\">Tv</a></li>
                    <li> <a href=\"#\" class=\"menu-item\">Office</a></li>
                    <li> <a href=\"#\" class=\"menu-item\">Home</a></li>
                    <li> <a href=\"#\" id=\"search\"><i class=\"fas fa-search\"></i></a></li>
                   
                </ul>
                <li><a class=\"close\"><i class=\"fas fa-times\"></i></a></li>
                <div class=\"search-form\">
                    <form>
                        <input type=\"text\" name=\"\" placeholder=\"Search on ThinkSmart\">
                    </form>
                </div>
            </div>
        </nav>
    ";
    
    echo $element;
}

?>