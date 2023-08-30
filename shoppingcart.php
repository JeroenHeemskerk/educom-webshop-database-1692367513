<?php
include_once 'sessions.php';
function ShowShoppingCart(){
    $cart = getCart();
    $totaal = 0;
    $productsid = array();
    $cartkeys = array_keys($cart);
    foreach ($cartkeys as $key) {
        $product = GetProductById($key);
        ShoppingCartForm("shoppingcart", $product["id"], "RemoveProductFromCart", "haal er 1 van uw winkelwagen weg");
        ShoppingCartForm("shoppingcart", $product["id"], "AddProductToCart", "voeg nog 1 toe aan uw winkelwagen");
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
    var_dump($productsid);
    if(!empty($cartkeys)){echo '
        <form action="index.php" method="post">
        <input type="hidden" name="page" value="shoppingcart">
        <input type="hidden" name="productsid[]" value="';echo $productsid ;echo'">
        <input type="hidden" name="action" value="AddProductToDatabase">
        <input type="submit" value="afrekenen">
        </form>';
    }
}

function ShoppingCartForm($page, $productid, $action, $text){echo'
    <form action="index.php" method="post">
        <input type="hidden" name="page" value="';echo $page;echo'">
        <input type="hidden" name="productid" value="';echo $productid ;echo'">
        <input type="hidden" name="action" value="';echo $action ;echo'">
        <input type="submit" value="';echo $text ;echo'">
    </form>';
}