<?php
include_once 'inc/header.php';
include_once 'inc/sidebar.php';

include_once '../classes/Post.php';
$post = new Post();

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $post_add = $post->AddPost($_POST,$_FILES);
}








?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">

                    <span>

                        <?php
                        if (isset($post_add)) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo $post_add; ?></strong>
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="post_title" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" name="title">
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
                                <textarea name="dis_one" id="classic-editor" name="disOne"></textarea>
                            </div>

                            <div class ="mb-3">
                                <label for="form-label">Imge Two</label>
                                <input type="file" class="form-control" name="imageTwo">
                            </div>
                            <div class ="mb-3">
                                <label for="form-label">Discription Two</label>
                                <textarea name="dis_two" id="classic-editor_two" name="disTwo"></textarea>
                            </div>
                            <div class="mb-3">
                                    <label class="form-label" >Post Type</label>
                                    <div class="col-md-12">
                                        <select class="form-select" name="postType">
                                            <option>select</option>
                                            <option value="1">Slider</option>
                                            <option value="0">Post</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Post Tag</label>
                                    <input type="text" class="form-control" name="tags">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </div>





            <?php
            include_once 'inc/footer.php';
            ?>