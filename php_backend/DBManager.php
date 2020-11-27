<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "php_university";

include 'classes/User.php';
include 'classes/Post.php';
include 'classes/Comment.php';
include 'classes/Category.php';
// foreach (glob("classes/*.php") as $filename) {
//     include $filename;
// }

try {
    $connection = mysqli_connect("localhost", "root", "", "php_university");
    // $connection = new PDO('sqlite:php_university.db');

    // $connection = new PDO("mysql:host=$servername;dbname=$db", $user, $password);
    // $connection -> setAttribute(PDo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Error: ' . $e -> getMessage();
}

function registration(User $user){
    global $connection;
    
    $email = $user->getEmail();
    $pass = $user->getPassword();
    $name = $user->getName();
    $surname = $user->getSurname();
    $pic = $user->getPictureUrl();
    $role = $user->getRole();
    
    // $query = $connection->prepare("INSERT INTO users (email, password, name, surname, picture_url, role) VALUES($email,$pass,
    // $name, $surname,$pic,$role)");
    // $result = mysqli_query($connection,$query);
    // return $result;

    
    // $query = $connection->prepare("INSERT INTO users (email, password, name, surname, picture_url, role) VALUES('$email','$pass',
    // '$name', '$surname','$pic','$role')");
    // $result = mysqli_query($connection,$query);
    // return $result;

    
    $query = "INSERT INTO users (email, password, name, surname, picture_url, role) VALUES('$email','$pass','$name','$surname','$pic','$role')";
    
    return mysqli_query($connection,$query);
}

function login(User $user){
    global $connection;
    $selected_user = new User();
    if($query = $connection->prepare("select * from users where email=? and password=?")) {
        $email = $user->getEmail();
        $pass = $user->getPassword();

        $query->bind_param('ss',$email, $pass);
        $query->execute();
        $result = mysqli_fetch_row($query->get_result());

        $selected_user->setId($result[0]);
        $selected_user->setEmail($result[1]);
        $selected_user->setPassword($result[2]);
        $selected_user->setName($result[3]);
        $selected_user->setSurname($result[4]);
        $selected_user->setPictureUrl($result[5]);
        $selected_user->setRole($result[6]);

        if($selected_user->getPassword()==$user->getPassword() && $selected_user->getEmail()==$user->getEmail()) {
            return $selected_user;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function getUser($id){
    global $connection;
    $user = new User();
    if($query = $connection->prepare("select * from users where id=?")){
        $query->bind_param('i', $id);
        $query->execute();
        $result=mysqli_fetch_row($query->get_result());

        $user->setId($result[0]);
        $user->setEmail($result[1]);
        $user->setPassword($result[2]);
        $user->setName($result[3]);
        $user->setSurname($result[4]);
        $user->setPictureUrl($result[5]);
        $user->setRole($result[6]);

        // return $user;
    }
    return $user;
}

function updateUser($user){
    global $connection;
    if($query = $connection->prepare("UPDATE users set email=?, password=?, name=?, surname=?, picture_url=? where id=?")){
        
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $name = $user->getName();
        $surname = $user->getSurname();
        $pic = $user->getPictureUrl();
        $query->bind_param('sssssi',$email,$pass,$name,$surname,$pic,$id);
        $query->execute();
        return true;
    }else{
        return false;
    }
}

function getUsers() {
    global $connection;
    $users = array();
    $result = mysqli_query($connection, 'select * from users;');
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $user = new User();
            $user->setId($row['id']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setName($row['name']);
            $user->setSurname($row['surname']);
            $user->setPictureUrl($row['picture_url']);
            $user->setRole($row['role']);
            array_push($users, $user);
        }
    }
    return $users;
}
// function getPostById($id){
//     global $connection;
//     $post = new Post();
//     if($query = $connection->prepare("select * from posts where id=?")){
//         $query->bind_param('i', $id);
//         $query->execute();
//         $result=mysqli_fetch_row($query->get_result());
// // private $id, $title, $short_content, $content, $date, $pictureurl, $likes, $category_id;
//         $post->setId($result[0]);
//         $post->setTitle($result[1]);
//         $post->setShortContent($result[2]);
//         $post->setContent($result[3]);
//         $post->setDate($result[4]);
//         $post->setPictureUrl($result[5]);
//         $post->setLikes($result[6]);
//         $post->setCategoryId($result[7]);
//     }
//     return $post;
// }
function getPost($id){
    global $connection;
    $post = new Post();
    if($query = $connection->prepare("select * from posts where id=?")){
        $query->bind_param('i', $id);
        $query->execute();
        $result=mysqli_fetch_row($query->get_result());

        $post->setId($result[0]);
        $post->setTitle($result[1]);
        $post->setShortContent($result[2]);
        $post->setContent($result[3]);
        $post->setDate($result[4]);
        $post->setPictureUrl($result[5]);
        $post->setLikes($result[6]);
        $post->setCategoryId($result[7]);
    }
    return $post;
}

function deletePost($id){
    global $connection;
    if($query = $connection->prepare("delete * from posts where id=?")){
        $query->bind_param('i', $id);
        $query->execute();
    }
}
function updatePost($post){
    global $connection;
    if($query = $connection->prepare("UPDATE posts set title=?, short_content=?, content=?, date=?, pictureurl=?, likes=?, category_id=? where id=?")){
        // private $id, $title, $short_content, $content, $date, $pictureurl, $likes, $category_id;
        $title = $post->getTitle();
        $short_content = $post->getShortContent();
        $content = $post->getContent();
        $date = $post->getDate();
        $pictureurl = $post->getPictureUrl();
        $likes = $post->getLikes();
        $category_id = $post->getCategoryId();
        $query->bind_param('sssdsii',$title,$short_content,$content,$date,$pictureurl,$likes,$category_id,$id);
        $query->execute();
        return true;
    }else{
        return false;
    }
}
function getPosts() {
    global $connection;
    $posts = array();
    $result = mysqli_query($connection, 'select * from posts;');
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $post = new Post();
            $post->setId($row['id']);
            $post->setTitle($row['title']);
            $post->setShortContent($row['short_content']);
            $post->setContent($row['content']);
            $post->setDate($row['date']);
            $post->setPictureUrl($row['pictureurl']);
            $post->setLikes($row['likes']);
            $post->setCategoryId($row['category_id']);
            array_push($posts, $post);
        }
    }
    return $posts;
}

function getCategories() {
    global $connection;
    $categories = array();
    $result = mysqli_query($connection, 'select * from categories;');
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $category = new Category();
            $category->setId($row['id']);
            $category->setName($row['name']);
            $category->setBgColor($row['bg_color']);
            array_push($categories, $category);
        }
    }
    return $categories;
}

function getCategory($id) {
    global $connection;
    $category = new Category();
    if($query = $connection->prepare("select * from categories where id=?")){
        $query->bind_param('i', $id);
        $query->execute();
        $result=mysqli_fetch_row($query->get_result());

        $category->setId($result[0]);
        $category->setName($result[1]);
        $category->setBgColor($result[2]);
    }
    return $category;
}

