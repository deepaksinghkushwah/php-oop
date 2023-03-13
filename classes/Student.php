<?php
// define class
class Student {
    public $name;
    public $age;
    public $standard;

    /**
     * Create student function after initlize the class object
     *
     * @param mysqli $conn
     * @param string $name
     * @param integer $age
     * @param integer $standard
     * @return integer
     */
    public function createStudent(mysqli $conn, string $name, int $age, int $standard): int{
        $sql = "INSERT INTO `students` SET `name` = '$name', `age` = '$age', `standard` = '$standard'";
        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }

    /**
     * Create student function without class object
     *
     * @param mysqli $conn
     * @param string $name
     * @param integer $age
     * @param integer $standard
     * @return integer
     */
    public static function  createStudent2(mysqli $conn, string $name, int $age, int $standard): int{
        $sql = "INSERT INTO `students` SET `name` = '$name', `age` = '$age', `standard` = '$standard'";
        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }
    
}