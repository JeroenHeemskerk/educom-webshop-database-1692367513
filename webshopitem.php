<?php
function ShowWebshopItem($product){echo '
    <p>naam: ';echo $product["name"]; echo '</p>
    <p>prijs: ';echo $product["price"]; echo '</p>
    <p>beschrijving: ';echo $product["description"]; echo '</p>
    <a href="index.php?page=webshopitem"><img src="';echo $product["filename"]; echo '" width="100%" height="100%"></a>';
}