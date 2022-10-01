<?php


     include_once'../classes/register.php';
     $re = new register();
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $addUser = $re->addUser($_POST);


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


    <title>Registration form</title>
</head>

<body>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
           <span>
            <?php
            if(isset($addUser)){
                ?>
             
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $addUser; ?></strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           <?php
            }
            ?>
              </span> 
                <div class="card">
                    <h5 class="card-header">Registration form</h5>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label >Name</label>
                                <input type ="text" name ="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input type ="text" name ="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type ="email" name ="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type ="password" name ="password" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-success">Sign up</button>
                            
                          
                        </form>
                    
                    </div>

                </div>
            </div>
        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>