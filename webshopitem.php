<?php
function ShowWebshopItem($products, $requested_item){echo '
    <p>naam: ';echo $products[$requested_item]["name"]; echo '</p>
    <p>prijs: ';echo $products[$requested_item]["price"]; echo '</p>
    <p>beschrijving: ';echo $products[$requested_item]["description"]; echo '</p>
    <a href="index.php?page=webshopitem"><img src="';echo $products[$requested_item]["filename"]; echo '" width="100%" height="100%"></a>';
}