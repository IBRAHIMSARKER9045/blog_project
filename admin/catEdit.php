<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-9">
                   <span>
                    <?php
                    if (isset($Addcatagory)) {
                       
                    }
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <?= $Addcatagory ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </span> 
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Category</h4>
                    </div>
                </div>
            </div>
    
            <!-- end page title -->-

            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label for="catName" class="col-md-2 col-form-label">Category Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="catName" id="example-text-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include_once 'inc/footer.php';
?>