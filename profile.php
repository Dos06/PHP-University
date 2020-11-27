<?php
include 'php_backend/DBManager.php';
?>
<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            $("#links").load("src/templates/src.php");
        });
        $(function() {
            $("#footer").load("src/templates/footer.php");
        });
        $(function() {
            $("#header").load("src/templates/header.php");
        });
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <div id="links"></div>
</head>

<body>
    <header id="header"></header>
    <?php
    session_start();
    $current;
    if (isset($_SESSION['user'])) {
        $current = $_SESSION['user'];
    }
    ?>
    <div class="container">
        <div class="row py-3"></div>
        <div class="col-md-12 mx-auto mb-5">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3 mt-2">

                            <img src="<?= $current->getPictureUrl() ?>" class="rounded mb-2 img-thumbnail">

                            <button type="button" class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" data-target="#edit_user">Edit profile</button>
                        </div>

                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">1</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About</h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0">Id: <?= $current->getId() ?></p>
                        <p class="font-italic mb-0">Name: <?= $current->getName() ?></p>
                        <p class="font-italic mb-0">Surname: <?= $current->getSurname() ?></p>
                        <p class="font-italic mb-0">Email: <?= $current->getEmail() ?></p>
                        <p class="font-italic mb-0">Role: <?= $current->getRole() ?></p>
                        <p class="font-italic mb-0">Pass: <?= $current->getPassword() ?></p>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Recent posts</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                    </div>
                    <div class="row">
                        <h2>Post 1</h2>
                        <h2>Post 2</h2>
                        <h2>Post 3</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="edit_user" tabindex="-1" aria-labelledby="EditUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditUserModalLabel">Edit a User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="php_backend/profile/updateUser.php" method="post">
                        <input type="hidden" name="id" value="<?= $current->getId() ?>">
                        <div class="form-group">
                            <label>Name : </label>
                            <input type="text" name="name" class="form-control" value="<?= $current->getName() ?>" required>
                        </div>
                        <div class="form-group">
                            <label>User Surname : </label>
                            <input type="text" name="surname" class="form-control" value="<?= $current->getSurname() ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Picture Url : </label>
                            <input type="text" name="pictureurl" class="form-control" value="<?= $current->getPictureUrl() ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email : </label>
                            <input type="text" name="email" class="form-control" value="<?= $current->getEmail() ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Old Password: </label>
                            <input type="password" name="oldpassword" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>New Password : </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer"></footer>
    <script src="src/scripts/bootstrap.min.js"></script>
    <script src="src/scripts/scripts.js"></script>
</body>

</html>