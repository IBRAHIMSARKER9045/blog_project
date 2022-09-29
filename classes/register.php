<?php

include_once '../libary/Database.php';
include_once '../helpers/formet.php';

include_once '../PHPMailer/PHPMailer.php';
include_once '../PHPMailer/SMTP.php';
include_once '../PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class register{
    public $db;
    public $fr;
    public function __construct()
    {
        $this->db =new Database();
        $this->fr =new format();
    }

    public function addUser($data){

        function ssendemail_varifi($name,$email,$v_token){
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'ibrahim.sarkar597@gmail.com';
        $mail->Password = 'denapaona00';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('ibrahim.sarkar597@gamil.com', $name);
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Email Varification';
        
        
        $email_tamplate ="
        <h2>you have to varify your email</h2>
        <h5>click the link below to varify your email</h5>
        <a href='http://localhost/R_49/PHP_ALL_PROJECT/blog_project/admin/verify-email.php?
        token=$v_token'>Varify Email</a>";
        $mail->Body = $email_tamplate;
        $mail->send();




        }

        $name = $this->fr->validation($data['name']);
        $email = $this->fr->validation($data['email']);
        $phone = $this->fr->validation($data['phone']);
        $password = $this->fr->validation($data['password']);
        $v_token= md5(rand());

             
      

            if(empty($name) || empty($email) || empty($phone) || empty($password)){
                $error = "Field must not be empty";
                return $error;
            }
            else{ $e_query = "SELECT * FROM users WHERE email ='$email'";
                $check_email = $this->db->select($e_query);
        
                if($check_email > 0){
                    $msg = "Email already exists";
                    return $error;
                    header("Location: register.php");
                }
                else{
                    $query = "INSERT INTO users(name,email,phone,password,v_token) VALUES('$name','$email','$phone','$password','$v_token')";
                    $insert_row = $this->db->insert($query);
                    if($insert_row){
                        sendemail_varifi($name,$email,$v_token);
                        $msg = "Registration Successfull";
                        return $msg;
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