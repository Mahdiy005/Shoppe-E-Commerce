<?php

include_once './databases/DBController.php';
include_once './databases/Product.php';

$db = new DBController();

$product = new Product($db);

// this two variable can access through all project because we include it on header.php
// so all files in Template Directory can access to this two variable so files can fetch data