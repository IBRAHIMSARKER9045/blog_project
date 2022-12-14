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
//select all category
public function selectAllCategory(){
    $query = "SELECT * FROM category";
    $all_cat = $this->db->select($query);
   if($all_cat != false){
    return $all_cat;
}
else{
    return false;
}
}
//delet category
public function deleteCategory($c_Id){
    $query = "DELETE FROM category WHERE c_Id = '$c_Id'";
    $result = $this->db->delete($query);
    if($result){
        $msg = "Category deleted successfully!";
        return $msg;
    }else{
        $msg = "Category not deleted!";
        return $msg;
    }
}
}

?>