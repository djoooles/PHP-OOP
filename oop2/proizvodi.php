<?php


require_once "Models/Product.php";

$krompir = new Product("Krompir","Beli krompir",99.99 ,"test.jpg", 50);
$krompir->save();

?>