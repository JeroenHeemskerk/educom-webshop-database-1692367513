<?php
function GetAllProducts(){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    $products = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $product = array("id" => $row["id"], "name" => $row["naam"], "description" => $row["omschrijving"], 
            "price" => $row["prijs"], "filename" => $row["filenaam"]);
            $products[$row["id"]] = $product;
        }
        return $products;
    } else {
        return null;
    }
    mysqli_close($conn);
}