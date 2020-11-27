<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        if(isset($_POST['email']) && isset($_POST['password'])){

            include '../DBManager.php';
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $result = login($user);

            if (gettype($result) == gettype($user)) {
                session_start();
                $_SESSION['user'] = $result;
                header("Location:/index.php");
            } else {
                header("Location:/login.php?result=false");
            }
        }
    }
?>