<?php
include 'classes/Category.php';
include 'classes/Product.php';
$conn = mysqli_connect('localhost','root','','phpoop');
// initlize class object
$product = new Product;
$product->createProduct();


