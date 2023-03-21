<?php
session_start();
include "../../app/DataBase.php";
include "../../app/User.php";
include "../../app/Post.php";

$db = new DB();
$connection = $db->connect();
$user = new User($connection);
$post = new Post($connection);

include "./header.php";
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
    }
}

include "./footer.php";