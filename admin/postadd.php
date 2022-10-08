<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';






?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">

                <span>

                <?php
                if(isset($catdAdd)){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $catdAdd; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>
                <div class="card">
                    <h4 class="card-header bg-transparent border-bottom">Add Post</h4>
                    <label class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="post titel" class="form-label">Post Title</label>
                                <input type="text" class="form-control" name="post_title" >
                            </div>
                            
                    </span>
        
          
        </div>
    </div>
</div>
           




<?php
include_once 'inc/footer.php';
?>