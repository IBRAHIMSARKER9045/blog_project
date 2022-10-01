<?php

include_once '../classes/AdminLogin.php';
$al = new AdminLogin();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $chkLogin = $al->LoginUser($email,$password);
   
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <title>login</title>
</head>

<body>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <span>
                <?php
                if(isset($_SESSION['status'])){
                    ?>
                 
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $_SESSION['status'] ?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                 }
                    ?>
                    </span>



                    <span>
                <?php
                if(isset($_SESSION['$chkLogin'])){
                    ?>
                 
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $chkLogin ?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                 }
                    ?>
                    </span>

                <div class="card">
                    <h5 class="card-header">Login form</h5>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label >Email</label>
                                <input type ="email" name ="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type ="password" name ="password" class="form-control">
                            
                            <button type="submit" class="btn btn-success">Login</button>
                            
                            <a href="registration.php" class ="btn btn-primary">Sing Up</a>
                            <a href="#" class ="float-right">forget Password?</a>
                        </form>
                        <hr>
                        <h5>Did not recive your varification email?<a href="#">Resand</a></h5>
                        
                    </div>

                </div>
            </div>
        </div>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>