<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';






?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">

                    <span>

                        <?php
                        if (isset($catdAdd)) {
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
                    <div class="card">
                        <h4 class="card-header bg-transparent border-bottom">Add Post</h4>
                        <label class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="post_title" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" name="post_title">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" >Select Category</label>
                                    <div class="col-md-12">
                                        <select class="form-select" name="catId">
                                            <option>select</option>
                                            <option>select</option>
                                            <option>select</option>
                                            <option>select</option>
                                        </select>
                                    </div>
                                </div>
                                <!--imge add fild-->
                            <div class ="mb-3">
                                <label for="form-label">Imge One</label>
                                <input type="file" class="form-control" name="imageOne">
                            </div>
                            <div class ="mb-3">
                                <label for="form-label">Discription One</label>
                                <textarea name="dis_one" id="classic-editor" naem="area"></textarea>
                            </div>

                            <div class ="mb-3">
                                <label for="form-label">Imge Two</label>
                                <input type="file" class="form-control" name="imageTwo">
                            </div>
                            <div class ="mb-3">
                                <label for="form-label">Discription Two</label>
                                <textarea name="dis_two" id="classic-editor_two" naem="area"></textarea>
                            </div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </div>





            <?php
            include_once 'inc/footer.php';
            ?>