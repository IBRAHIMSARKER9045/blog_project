<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';






?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

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
                
                    </span>
        
          
        </div>
    </div>
</div>
           




<?php
include_once 'inc/footer.php';
?>