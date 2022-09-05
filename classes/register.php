<?php

include_once '../lib/Database.php';
include_once '../helpers/format.php';

class register{
    public $db;
    public $fr;
    public function __construct()
    {
        $this->db =new Database();
        $this->fr =new format();
    }

    public function addUser($data){
        $name = $this->fr->validation($data['name']);
        $phone = $this->fr->validation($data['phone']);
        $email = $this->fr->validation($data['email']);
        $password = $this->fr->validation($data['password']);
        $v_token= md5(rand());
        $e_query = "SELECT * FROM users WHERE email ='$email'";
        $email_query = 


    }

}



?>