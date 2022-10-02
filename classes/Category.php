<?php

include_once '../libary/Database.php';
include_once '../helpers/Format.php';

class Category{

    public $db;
    public $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function Addcategory($categoryName){
        $categoryName = $this->fr->validation($categoryName);
        $categoryName = mysqli_real_escape_string($this->db->link, $categoryName);
        if (empty($categoryName)) {
            $msg = "Category field must not be empty!";
            return $msg;
        }else{
            $query = "INSERT INTO category(category) VALUES('$categoryName')";
            $categoryName = $this->db->insert($query);
            if ($categoryName) {
                $msg = "<span class='success'>Category inserted successfully!</span>";
                return $msg;
            }else{
                $msg = "<span class='error'>Category not inserted!</span>";
                return $msg;
            }
        }



    }
}


?>