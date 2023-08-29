<?php
include "products.repository.php";
function SearchForProducts(){
    $products = GetAllProducts();
    return $products;
}
function SearchForProductById($productId){
    $product = GetProductById($productId);
    return $product;
}