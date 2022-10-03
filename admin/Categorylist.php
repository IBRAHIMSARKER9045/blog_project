<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
include_once '../classes/Category.php';
$cat = new Category();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
    $Addcatagory = $cat->Addcategory($catName);
}




?>



<div class ="main-content">
    <div class="page-content">
        <div class="container-fluid">

       </div>   
    </div>
</div>
<?php include_once 'inc/footer.php'; ?>