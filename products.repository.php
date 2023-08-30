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
                $product = array("id" => $row["id"], "name" => $row["name"], "description" => $row["description"], 
                "price" => $row["price"], "filename" => $row["filename"]);
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

function GetProductById($productId){
    $conn = ConnectDB();
    try {
        $productId = $conn->real_escape_string($productId);
        $sql = "SELECT * FROM products WHERE id ='$productId'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $product = array("id" => $row["id"], "name" => $row["name"], "description" => $row["description"], 
                "price" => $row["price"], "filename" => $row["filename"]);
            }
            return $product;
        } else {
            return null;
        }
    } finally {
    mysqli_close($conn);
    }
}

function SaveOrder($userId, $productId){
    $conn = ConnectDB();
    //var_dump($productId);
    try {
        $userId = $conn->real_escape_string($userId);
        $productId = $conn->real_escape_string($productId);
        $sql = "INSERT INTO shoppingcart (userid, productid) VALUES ('$userId','$productId')";
        if (mysqli_query($conn, $sql) === FALSE) {
            throw new Exception("Het is niet gelukt om het in het database te zetten");
        }
    } finally {    
    mysqli_close($conn);
    }
}