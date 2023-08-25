<?php
function ShowWebshop($products){
    for ($row = 1; $row <6; $row++) {
    echo '
    <div class="webshopitem">
    <p>naam: ';echo $products[$row]["name"]; echo '</p>
    <p>prijs: ';echo $products[$row]["price"]; echo '</p>
    <a href="index.php?page=webshopitem&row=';echo $row; echo'"><img src="';echo $products[$row]["filename"]; echo '" width="50%" height="50%"></a>
    </div>';
    }
}
