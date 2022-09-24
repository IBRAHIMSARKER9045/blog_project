<?php

include_once '../libary/Database.php';
include_once '../helpers/formet.php';

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
        $check_email = $this->db->select($e_query);

        if($check_email > 0){
            $msg = "Email already exists";
            return $error;
            header("Location: register.php");
        }

            if(empty($name) || empty($phone) || empty($email) || empty($password)){
                $error = "Field must not be empty";
                return $error;
            }
        }
    }
    ?>