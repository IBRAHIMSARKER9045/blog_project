<?php

include_once '../libary/Database.php';
include_once '../helpers/formet.php';

class Category{ 

    public $db;
    public $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }
    public function Addcategory($catName){
        $catName = $this->fm->validation($catName);
        $catName = mysqli_real_escape_string($this->db->link, $catName);
        if (empty($catName)) {
            $msg = "Category field must not be empty!";
            return $msg;
        }else{
            $query = "SELECT * FROM category WHERE catName = '$catName'";
            $result = $this->db->select($query);

            if($result >0){
                $msg = "Category already exist!";
                return $msg;
        }
        else{
            $query = "INSERT INTO category(catName) VALUES('$catName')";
            $result = $this->db->insert($query);
            if ($result) {
                $msg = "Category added successfully!";
                return $msg;
            }else{
                $msg = "Category not added!";
                return $msg;
            }
        }
    }
}
}




?>