<?php
function footer() {
    $element = "
        <div class=\"footerSection\">
        <div class=\"footerImg\"><img class=\"logoFooter\" src=\"img/logo3.png\" alt=\"\"></div>
        <div class=\"card border-primary mb-3 footerCard\" style=\"max-width: 18rem;\">
            <div class=\"card-header\" style=\"font-size: 24px; font-weight: bold;\">Contact Us</div>
            <div class=\"footerLine\"></div>
            <div class=\"card-body text-primary footerText\">
                <p>Phone: (0322) 455 00 00</p>
                <p>E-mail: rektorluk@atu.edu.tr</p>
                <p class=\"card-text\">Balcalı, Çatalan Cd. 201/5, 01250 Sarıçam/Adana</p>
            </div>
        </div>

        <div class=\"card border-primary mb-3 footerCard\" style=\"max-width: 18rem;\">
            <div class=\"card-header\" style=\"font-size: 24px; font-weight: bold;\">Contact Us</div>
            <div class=\"footerLine\"></div>
            <div class=\"card-body text-primary footerText\">
                <p>Phone: (0322) 455 00 00</p>
                <p>E-mail: rektorluk@atu.edu.tr</p>
                <p class=\"card-text\">Balcalı, Çatalan Cd. 201/5, 01250 Sarıçam/Adana</p>
            </div>
        </div>

        <div class=\"card border-primary mb-3 footerCard\" style=\"max-width: 18rem;\">
            <div class=\"card-header\" style=\"font-size: 24px; font-weight: bold;\">Sing Up Newsletter</div>
            <div class=\"footerLine\"></div>
            <div class=\"card-body text-primary footerText\">
                <input type=\"text\" value=\"e-mail\" style=\"margin-bottom: 3%;\">
                <a href=\"#\" class=\"btn btn-primary\">Subscribe</a>
            </div>
        </div>

        <div class=\"footerNav\">
            <ul>
                <li><a href=\"#\">PHONE</a></li>
                <li><a href=\"#\">COMPUTER</a></li>
                <li><a href=\"#\">CAMERA</a></li>
                <li><a href=\"#\">TV</a></li>
                <li><a href=\"#\">OFFICE</a></li>
                <li><a href=\"#\">HOME</a></li>
            </ul>
        </div>
        <p class=\"footerEnd\">Copyright © 2019  -  Gazi AKVİRAN & Yağnur TETİKCAN</p>
    </div>
    ";

    echo $element;
}

?>