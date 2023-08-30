<?php
include "products.repository.php";
include_once "sessions.php";
function SearchForProducts(){
    $products = GetAllProducts();
    return $products;
}
function SearchForProductById($productId){
    $product = GetProductById($productId);
    return $product;
}
function AddProductToDatabase($productsId){
    $userId = getLogInUserId();
    //var_dump($productsId);
    //foreach($productsId as $productId){
        //var_dump($productId);
        SaveOrder($userId, $productsId);
    //}
    CleanCart();
}