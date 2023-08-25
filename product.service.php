<?php
include "products.repository.php";
function SearchForProducts(){
    $products = GetAllProducts();
    return $products;
}