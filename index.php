<?php
spl_autoload_register(function($className){
    include './classes/'.$className.'.php';
});
$conn = mysqli_connect('localhost','root','','phpoop');
// initlize class object
$product = new Product;



