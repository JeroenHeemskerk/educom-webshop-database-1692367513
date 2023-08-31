<?php
include_once 'sessions.php';
function ShowShoppingCart(){
    $cart = getCart();
    $totaal = 0;
    $cartkeys = array_keys($cart);
    foreach ($cartkeys as $key) {
        $product = GetProductById($key);
        ShoppingCartForm("shoppingcart", "RemoveProductFromCart", "haal er 1 van uw winkelwagen weg", $product["id"]);
        ShoppingCartForm("shoppingcart", "AddProductToCart", "voeg nog 1 toe aan uw winkelwagen", $product["id"]);
        echo '
        <p>totaal: ';echo $cart[$key]; echo '</p>
        <p>naam: ';echo $product["name"]; echo '</p>
        <p>prijs: ';echo $product["price"]; echo ' euro</p>
        <p>beschrijving: ';echo $product["description"]; echo '</p>
        <a href="index.php?page=webshopitem&row=';echo $product["id"]; echo'"><img src="';echo $product["filename"]; echo '" width="10%" height="10%"></a></p>';
        $totaal += $product["price"] * $cart[$key];
        for ($i = 1; $i <= $cart[$key]; $i++) {
            $productsid[] = $product["id"];
        }
    }
    echo '<p>eindbedrag: '; echo $totaal; echo' euro</p>';
    if(!empty($cartkeys)){ShoppingCartForm("shoppingcart", "AddProductToDatabase", "afrekenen",);}
}

function ShoppingCartForm($page, $action, $text, $productid=''){echo'
    <form action="index.php" method="post">
        <input type="hidden" name="page" value="';echo $page;echo'">
        <input type="hidden" name="productid" value="';echo $productid ;echo'">
        <input type="hidden" name="action" value="';echo $action ;echo'">
        <input type="submit" value="';echo $text ;echo'">
    </form>';
}