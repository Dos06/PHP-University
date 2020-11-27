<!DOCTYPE html>
<html lang="en">
<?php
    include 'php_backend/DBManager.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            $("#links").load("src/templates/src.php");
        });
        // $(function() {
        //     $("#footer").load("src/templates/footer.php");
        // });S
        // $(function() {
        //     $("#header").load("src/templates/header.php");
        // });
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <div id="links"></div>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">IITU SELECTION COMMITTEE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="btn btn-danger btn-md ml-auto" href="/">Sign Out</a>
    </nav>

    <div class="col-sm-12 d-flex h-100">
        <div class="col-sm-2 d-inline-block" style="background-color: gainsboro">
            <h2 class="mt-4">ADMIN PANEL</h2>
            <ul class="list-group mt-4">
                <!-- <li class="list-group-item" style="background-color: gainsboro"><a href="admin.php?#users" style="color: black;"><b>Users</b></a></li>
                <li class="list-group-item" style="background-color: gainsboro"><a href="admin.php?#posts" style="color: black;"><b>Posts</b></a></li>
                <li class="list-group-item" style="background-color: gainsboro"><a href="admin.php?#categories" style="color: black;"><b>Categories</b></a></li> -->

                
                <li class="list-group-item" style="background-color: gainsboro">
                    <a style="color: black;" data-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="users">
                        <b>Users</b>
                    </a>
                </li>
                <li class="list-group-item" style="background-color: gainsboro">
                    <a style="color: black;" data-toggle="collapse" href="#posts" role="button" aria-expanded="false" aria-controls="posts">
                        <b>Posts</b>
                    </a>
                </li>
                <li class="list-group-item" style="background-color: gainsboro">
                    <a style="color: black;" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="categories">
                        <b>Categories</b>
                    </a>
                </li>
                
                <!-- <li class="list-group-item" style="background-color: gainsboro"><a href="admin.php?#news" style="color: black;"><b>News</b></a></li> -->
            </ul>
        </div>
        <div class="col-sm-10 d-inline-block">

            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                Something went wrong!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>




            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Users</span></h4>
                <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#add_user">+ ADD NEW </button> -->
            </div>

            <!-- <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddUserModalLabel">Add a User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/edit?action=add" method="post">
                                <input type="hidden" name="user" value="">
                                <div class="form-group">
                                    <label>User Name : </label>
                                    <input type="text" name="language_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Language Code : </label>
                                    <input type="text" name="language_code" class="form-control" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->


            <hr class="my-4">

            <div class="row mt-4 mb-4 collapse" id="users">
                <div class="col-sm-12">
                    <table class="table" style="background-color: aliceblue">
                        <thead class="font-weight-bold" style="background-color: lightblue">
                            <tr>
                                <td>ID</td>
                                <td>EMAIL</td>
                                <td>NAME</td>
                                <td>SURNAME</td>
                                <td>ROLE</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $users = getUsers();
                            foreach ( (array) $users as $user) {
                            ?>
                            <tr>
                                <td><?=$user->getId()?></td>
                                <td><?=$user->getEmail()?></td>
                                <td><?=$user->getName()?></td>
                                <td><?=$user->getSurname()?></td>
                                <td><?=$user->getRole()?></td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_user<?=$user->getId()?>">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_user<?=$user->getId()?>">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_user<?=$user->getId()?>" tabindex="-1" aria-labelledby="DeleteUserModalLabel<?=$user->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteUserModalLabel<?=$user->getId()?>">Confirm to Delete <?=$user->getEmail()?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/edit?action=delete" method="post">
                                                <input type="hidden" name="language" value="">
                                                <input type="hidden" name="id" value="<?=$user->getId()?>">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_user<?=$user->getId()?>" tabindex="-1" aria-labelledby="EditUserModalLabel<?=$user->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditUserModalLabel<?=$user->getId()?>">Change the Values <?=$user->getEmail()?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/edit?action=save" method="post">
                                                <input type="hidden" name="language" value="">
                                                <input type="hidden" name="id" value="<?=$user->getId()?>">
                                                <div class="form-group">
                                                    <label>User Email : </label>
                                                    <input disabled type="text" name="user_email<?=$user->getId()?>" class="form-control" value="<?=$user->getEmail()?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>User Role : </label>
                                                    <select name="user_role<?=$user->getId()?>" class="form-control" required>
                                                        <option value="student" <?php if ($user->getRole() == 'student') {echo 'selected';}?> >Student</option>
                                                        <option value="admin" <?php if ($user->getRole() == 'admin') {echo 'selected';}?> >Administrator</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>




            <!-- POSTS -->
            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Posts</span></h4>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#add_post">+ ADD NEW </button>
            </div>

            <div class="modal fade" id="add_post" tabindex="-1" aria-labelledby="AddPostModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddPostModalLabel">Add a Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/edit?action=add" method="post">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="post_category_id" class="form-control">
                                        <option selected disabled>Choose</option>
                                        <?php
                                        $categories = getCategories();
                                        foreach ($categories as $cat) {
                                        ?>
                                        <option value="<?=$cat->getId()?>"><?=$cat->getName()?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Post Title : </label>
                                    <input type="text" name="post_title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Picture URL : </label>
                                    <input type="text" name="post_pictureurl" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Short Content : </label>
                                    <textarea name="post_shortcontent" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Post Content : </label>
                                    <textarea name="post_content" class="form-control" rows="10" required></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <hr class="my-4">

            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <table class="table" style="background-color: aliceblue" id="posts">
                        <thead class="font-weight-bold" style="background-color: lightblue">
                            <tr>
                                <td>ID</td>
                                <td>TITLE</td>
                                <td>DATE</td>
                                <td>CATEGORY</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $posts = getPosts();
                            foreach ($posts as $post) {
                                $post_category = getCategory($post->getCategoryId());
                            ?>

                            <tr>
                                <td><?=$post->getId()?></td>
                                <td><?=$post->getTitle()?></td>
                                <td><?=$post->getDate()?></td>
                                <td><?=$post_category->getName()?></td>
                                <td class="row">
                                    <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#delete_post<?=$post->getId()?>">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_post<?=$post->getId()?>">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_post<?=$post->getId()?>" tabindex="-1" aria-labelledby="DeletePostModalLabel<?=$post->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeletePostModalLabel<?=$post->getId()?>">Confirm to Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/edit?action=delete" method="post">
                                                <input type="hidden" name="id" value="<?=$post->getId()?>">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_post<?=$post->getId()?>" tabindex="-1" aria-labelledby="EditPostModalLabel<?=$post->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditPostModalLabel<?=$post->getId()?>">Change the Values</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/edit?action=save" method="post">
                                                <input type="hidden" name="id" value="<?=$post->getId()?>">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="post_category_id" class="form-control">
                                                        <option selected disabled>Choose</option>
                                                        <?php
                                                        // $categories = getCategories();
                                                        foreach ($categories as $cat) {
                                                        ?>
                                                        <option value="<?=$cat->getId()?>" <?php if ($cat->getId() == $post_category->getId()) {echo 'selected';} ?> ><?=$cat->getName()?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Title : </label>
                                                    <input type="text" name="post_title" class="form-control" value="<?=$post->getTitle()?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Picture URL : </label>
                                                    <input type="text" name="post_pictureurl" class="form-control" value="<?=$post->getPictureUrl()?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Short Content : </label>
                                                    <textarea name="post_shortcontent" class="form-control" rows="3" required><?=$post->getShortContent()?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Content : </label>
                                                    <textarea name="post_content" class="form-control" rows="10" required><?=$post->getContent()?></textarea>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>





            

            <!-- CATEGORIES -->
            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Categories</span></h4>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#add_category">+ ADD NEW </button>
            </div>

            <div class="modal fade" id="add_category" tabindex="-1" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddCategoryModalLabel">Add a Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/edit?action=add" method="post">
                                <div class="form-group">
                                    <label>Category Name : </label>
                                    <input type="text" name="category_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Category Background Color : </label>
                                    <input type="text" name="category_bgcolor" class="form-control" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <table class="table collapse" style="background-color: aliceblue" id="categories">
                        <thead class="font-weight-bold" style="background-color: lightblue">
                            <tr>
                                <td>ID</td>
                                <td>NAME</td>
                                <td>BACKGROUND COLOR</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $categor = getPosts();
                            foreach ($categories as $cat) {
                            ?>

                            <tr>
                                <td><?=$cat->getId()?></td>
                                <td><?=$cat->getName()?></td>
                                <td><?=$cat->getBgColor()?></td>
                                <td class="row">
                                    <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#delete_category<?=$cat->getId()?>">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_category<?=$cat->getId()?>">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_category<?=$cat->getId()?>" tabindex="-1" aria-labelledby="DeleteCategoryModalLabel<?=$cat->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteCategoryModalLabel<?=$cat->getId()?>">Confirm to Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/edit?action=delete" method="post">
                                                <input type="hidden" name="id" value="<?=$cat->getId()?>">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_category<?=$cat->getId()?>" tabindex="-1" aria-labelledby="EditCategoryModalLabel<?=$cat->getId()?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditCategoryModalLabel<?=$cat->getId()?>">Change the Values</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/edit?action=save" method="post">
                                                <input type="hidden" name="id" value="<?=$cat->getId()?>">
                                                <div class="form-group">
                                                    <label>Category Name : </label>
                                                    <input type="text" name="category_name" class="form-control" value="<?=$cat->getName()?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category Background Color : </label>
                                                    <input type="text" name="category_bgcolor" class="form-control" value="<?=$cat->getBgColor()?>" required>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>




        </div>


        <script src="src/scripts/bootstrap.min.js"></script>
        <script src="src/scripts/scripts.js"></script>
</body>

</html>