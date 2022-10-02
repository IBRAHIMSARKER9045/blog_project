<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
include_once '../classes/Category.php';
$ct = new Category();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoryName = $_POST['categoryName'];
    $catadd = $ct->Addcategory($categoryName);
}




?>


//creat a form for add category after left side bar
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-9">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Add Category</h4>
                    </div>
                </div>
            </div>
    
            <!-- end page title -->

            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label for="categoryName" class="col-md-2 col-form-label">Category Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="categoryName" id="example-text-input">
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