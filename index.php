<?php
spl_autoload_register(function($className){
    include './classes/'.$className.'.php';
});
$conn = mysqli_connect('localhost','root','','phpoop');
// initlize class object
$obj = new Student($conn);
//$obj->createStudent(); 1
//Student::createStudent2(); 2
$obj->name = "Deeaak";
$obj->age = 50;
$obj->standard = 18;
$obj->create();

// get student
//$student = $obj->getStudent(2);
//echo "<pre>";print_r($student);

//$allStudents = $obj->getAllStudents();
//echo "<pre>";var_dump($allStudents);

/*for($i = 1; $i < 100; $i++){
    $obj->createStudent("test".$i, $i+1, rand(1, 12));
}*/


