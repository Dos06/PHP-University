<?php
    include '../DBManager.php';
    if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['name']) 
            && isset($_POST['surname']) && isset($_POST['pictureurl'])
            && isset($_POST['oldpassword']) && isset($_POST['password'])){
        $id = $_POST['id'];
        $user = getUser($id);
        
        if($_POST['oldpassword'] == $user->getPassword())
        {
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setName($_POST['name']);
            $user->setSurname($_POST['surname']);
            $user->setPictureUrl($_POST['pictureurl']);
            updateUser($user);
            session_start();
            $_SESSION['user'] = $user;
            header("Location:/profile.php");
        }else
        {
            return "Password is incorrect";
        }
    
        
        
        
    }