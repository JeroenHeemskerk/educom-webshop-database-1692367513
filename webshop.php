<?php
function ShowWebshop($products){
    foreach ($products as $product) { 
    echo '
    <div class="webshopitem">
    <p>naam: ';echo $product["name"]; echo '</p>
    <p>prijs: ';echo $product["price"]; echo ' euro</p>
    <a href="index.php?page=webshopitem&row=';echo $product["id"]; echo'"><img src="';echo $product["filename"]; echo '" width="50%" height="50%"></a>
    </div>';
    }
}
