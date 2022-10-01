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

        function sendemail_varify($username,$email,$v_token){
        



        }

        $username = $this->fr->validation($data['Name']);
        $email = $this->fr->validation($data['email']);
        $phone = $this->fr->validation($data['phone']);
        $password = $this->fr->validation($data['password']);
        $v_token= md5(rand());

             
      

            if(empty($username) || empty($email) || empty($phone) || empty($password)){
                $error = "Field must not be empty";
                return $error;
            }
            else{ $e_query = "SELECT * FROM users WHERE email ='$email'";
                $check_email = $this->db->select($e_query);
        
                if($check_email > 0){
                    $error = "Email already exists";
                    return $error;
                    header("Location: register.php");
                }
                else{
                    $query = "INSERT INTO users(username,email,phone,password,v_token) VALUES('$username','$email','$phone','$password','$v_token')";
                    $insert_row = $this->db->insert($query);
                    if($insert_row){
                        sendemail_varify($username,$email,$v_token);
                        $success = "Registration Successfull";
                        return $success;
                    }
                    else{
                        $error = "Registration Failed";
                        return $error;
                    }

                     
                }   
            }
        }
    }
    ?>