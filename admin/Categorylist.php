<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
include_once '../classes/Category.php';
$cat = new Category();

$allCat = $cat->selectAllCategory();




?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"> Category List</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    if ($allCat) {
                                        $i = 0;
                                        while ($row =mysqli_fetch_assoc($allCat)){
                                          $i++;  
                                                                          
                                        ?>
                                    <tr>
                                        <td><?= $i?></td>
                                        <td><?= $row['catName']?></td>
                                        <td>
                                          <a href="catEdit.php?editId=<?=base64_encode($row['c_id'])?>" class="btn btn-info btn-sm">Edit</a> || <a href=" " class="btn btn-danger btn-sm" >Delete</a>  
                                        </td>
                                    </tr>
                                   <?php 
                                   }
                                } 
                                   ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div>
    </div>
</div>
<?php include_once 'inc/footer.php'; ?>