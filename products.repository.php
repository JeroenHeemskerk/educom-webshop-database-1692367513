<?php
include_once "users.repository.php";
function GetAllProducts(){
    $conn = ConnectDB();
    try {
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
    } finally {
    mysqli_close($conn);
    }
}