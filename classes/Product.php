<?php
class Product extends Category {    
    public $category;
    public function getProduct(){
        echo 'Get product fucntion called<br>';
    }

    public function createProduct(){
        echo 'Create product fucntion called<br>';
    }

    public function deleteProduct(){
        echo 'Delete porduct fucntion called<br>';
    }

    public function create(){}
}