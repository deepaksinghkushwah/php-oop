<?php
// define class
class Student {
    public $name;
    public $age;
    public $standard;
    public $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     * Create student function after initlize the class object
     *     
     * @param string $name
     * @param integer $age
     * @param integer $standard
     * @return integer
     */
    public function createStudent(string $name, int $age, int $standard): int{
        $sql = "INSERT INTO `students` SET `name` = '$name', `age` = '$age', `standard` = '$standard'";
        mysqli_query($this->conn, $sql);
        return mysqli_insert_id($this->conn);
    }

    /**
     * Create student function without class object
     *     
     * @param string $name
     * @param integer $age
     * @param integer $standard
     * @return integer
     */
    public static function  createStudent2($conn, string $name, int $age, int $standard): int{
        $sql = "INSERT INTO `students` SET `name` = '$name', `age` = '$age', `standard` = '$standard'";
        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }

    /**
     * Undocumented function
     *
     * @param [type] $conn
     * @return void
     */
    public function create(){
        $sql = "INSERT INTO `students` SET `name` = '$this->name', `age` = '$this->age', `standard` = '$this->standard'";
        mysqli_query($this->conn, $sql);
        return mysqli_insert_id($this->conn);
    }

    /**
     * Get single student
     *     
     * @param integer $id
     * @return void
     */
    public function getStudent(int $id): array | false {
        $sql = "SELECT * FROM `students` WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            return $user;
        } else {            
            return false;
        }
    }

    public function getAllStudents() : array | false{
        $returnArray = [];
        $sql = "SELECT * FROM `students`";
        $results = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_assoc($results)){
                $returnArray[] = $row;
            }
            
        }
        if(count($returnArray) > 0){
            return $returnArray;    
        } else {
            return false;
        }
        
    }
    
}