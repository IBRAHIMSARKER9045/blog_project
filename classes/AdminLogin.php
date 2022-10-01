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
                $row = mysqli_fetch_assoc($result);
               if ($row['v_status'] == 1) {
                session::set("login",true);
                session::set("username",$row['username']);
                session::set("email",$row['email']);
                header("Location: index.php");
               }
                else{
                 $error = "Your account is not verified";
                 return $error;
                }
         }
         else{
            $error = "Email or Password is not matched";
            return $error;
         }
    }
    }
}
    
        

?>