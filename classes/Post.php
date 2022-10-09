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


        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['imageOne']['name'];
        $file_size = $file['imageOne']['size'];
        $file_temp = $file['imageOne']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;

        //image two
        $permitedTwo  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name_two = $file['imagetwo']['name'];
        $file_size_two = $file['imagetwo']['size'];
        $file_temp_two = $file['imagetwo']['tmp_name'];

        $div_two = explode('.', $file_name_two);
        $file_ext_two = strtolower(end($div_two));
        $unique_image_two = substr(md5(rand()(time())), 0, 10).'.'.$file_ext_two;
        $uploaded_image_two = "upload/".$unique_image_two;

        if(empty($title) || empty($catId) || empty($disOne) || empty($disTwo) || empty($postType) || empty($tags)) {
            $msg = "Field must not be empty";
            return $msg;

        }
        elseif ($file_size >1048567) {
            $msg = "Image Size should be less then 1MB!";
            return $msg;
        }
        elseif ($file_size_two >1048567) {
            $msg = "Image Size should be less then 1MB!";
            return $msg;
        }
        elseif (in_array($file_ext, $permited) == false) {
            $msg = "You can upload only:-".implode(', ', $permited);
            return $msg;
        }
        elseif (in_array($file_ext_two, $permitedTwo) == false) {
            $msg = "You can upload only:-".implode(', ', $permitedTwo);
            return $msg;
        }
       



}
}

?>