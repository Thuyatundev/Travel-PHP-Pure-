<?php
session_start();
include "../../app/DataBase.php";
include "../../app/User.php";
include "../../app/Post.php";


$db = new DB();
$connection = $db->connect();
$user = new User($connection);
$post = new Post($connection);

if(!isset($_SESSION['auth'])){
    header("Location: login.php");
}

include "./header.php";
include "./silder.php";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'adduser') {
        include "./user/adduser.php";
    }elseif($page == 'userlist'){
        $users = $user->getAll();
        include "./user/userlist.php";
    }elseif($page == 'userEdit'){
        $id = $_GET['id'];
        $userData = $user->get($id);
        include "./user/userEdit.php"; 
    }elseif ($page == 'addpost') {
        include "./post/addpost.php";
    }elseif ($page == 'postlist') {
        $posts = $post->getAll(); 
        include "./post/postlist.php";
    }elseif($page == 'postEdit'){
        $id = $_GET['id'];
        $postData = $post->get($id); 
        include "./post/postEdit.php";
    }
}

include "./footer.php";