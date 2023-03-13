<?php
class Category {
    public $id;
    public $title;
    public $description;    

    public function getCategory(){
        echo 'Get category fucntion called<br>';
    }

    protected function createCategory(){
        echo 'Create category fucntion called<br>';
    }

    public function deleteCategory(){
        echo 'Delete category fucntion called<br>';
    }
}