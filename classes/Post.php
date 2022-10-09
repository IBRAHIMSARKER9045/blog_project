<?php

include_once '../libary/Database.php';
include_once '../helpers/Format.php';

class Post{

    private $db;
    private $fr;


    public function __construct(){
        $this->db = new Database();
        $this->fr = new Format();
    }

    public function AddPost($data,$file){
        $title = $this->fr->validation($data['title']);
        $catId = $this->fr->validation($data['catId']);
        $disOne = $this->fr->validation($data['disOne']);
        $disTwo = $this->fr->validation($data['disTwo']);
        $postType = $this->fr->validation($data['postType']);
        $tags = $this->fr->validation($data['tags']);

     



}
}

?>