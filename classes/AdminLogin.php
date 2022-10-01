<?php
include_once '../libary/session.php';
session::init();
include_once '../libary/Database.php';
include_once '../helpers/formet.php';

class AdminLogin{
    private $db;
    private $fr;

    public function __construct()
    {
        $this->db = new Database();
        $this->fr = new format();
    }

  public function LoginUser($email,$password){
    $email = $this->fr->validation($email);
    $password = $this->fr->validation($password);

    if(empty($email) || empty($password)){
        $error = "Field must not be empty";
        return $error;
    }
    else{
        $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->db->select($select);
        if($result != false){
            $value = $result->fetch_assoc();
            Session::set("login",true);
            Session::set("id",$value['id']);
            Session::set("username",$value['username']);
            Session::set("email",$value['email']);
            Session::set("phone",$value['phone']);
            header("Location: index.php");
        }
        else{
            $error = "Email or Password not match";
            return $error;
        }
    }
  }
}
?>