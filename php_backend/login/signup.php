<?php
    include '../DBManager.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['surname'])){
            $user = new User($_POST['email'],
                            $_POST['password'],
                            $_POST['name'], 
                            $_POST['surname'],
                            "https://iupac.org/wp-content/uploads/2018/05/default-avatar.png",
                            "student");
            $result = registration($user);
            if ($result > 0){
                $result = "success";
            } else {
                $result = "fail";
            }
            header("Location:/login.php?result=$result");
        }
        else if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['pictureurl'])){
            $user = new User($_POST['email'],
                            $_POST['password'],
                            $_POST['name'], 
                            $_POST['surname'],
                            $_POST['pictureurl'],
                            "student");
            $result = registration($user);
            if ($result){
                $result = "success";
            } else {
                $result = "fail";
            }
            header("Location:/login.php?result=$result");
        }
    }








    // if($_SERVER['REQUEST_METHOD']=='POST'){
    //     if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['surname'])){
    //         $user = new User($_POST['email'],
    //                         $_POST['password'],
    //                         $_POST['name'], 
    //                         $_POST['surname'],
    //                         "https://iupac.org/wp-content/uploads/2018/05/default-avatar.png",
    //                         "student");
    //         $result = registration($user);
    //         if ($result > 0){
                
    //         } else {
    //             $result = "fail";
    //         }
    //         header("Location:/login.php?result=$result");
    //     }

        
    //     // if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['pictureurl'])){
    //     //     $user = new User($_POST['email'],
    //     //                     $_POST['password'],
    //     //                     $_POST['name'], 
    //     //                     $_POST['surname'],
    //     //                     $_POST['pictureurl'],
    //     //                     "student");
    //     //     $result = registration($user);
    //     //     if ($result > 0){
    //     //         $result = "success";
    //     //     } else {
    //     //         $result = "fail";
    //     //     }
    //     //     header("Location:/login.php?result=$result");
    //     // }
    // }
    // header('Location:/index.php');

?>