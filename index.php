<?php
spl_autoload_register(function($className){
    include './classes/'.$className.'.php';
});
$conn = mysqli_connect('localhost','root','','phpoop');
// initlize class object
$obj = new Student;
$obj->name = "Deeaak";
$obj->age = 50;
$obj->standard = 18;
$obj->create($conn);



