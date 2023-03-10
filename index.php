<?php
// define class
class Student {
    public $name = "Deepak";
    public $age;
    public $standard;

    private function getGrade(){
        return 100;
    }

    public function getRealGrade(){
        return $this->getGrade();
    }

    public function getMyName(){
        return $this->name;
    }
}

// initlize class object
$deepak = new Student;
//$deepak->name = "fasf";
echo $deepak->getMyName();
