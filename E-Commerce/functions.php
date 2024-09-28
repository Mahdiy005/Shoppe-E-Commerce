<?php

include_once './databases/DBController.php';
include_once './databases/Product.php';

$db = new DBController();

$product = new Product($db);

// $product->getData('product');