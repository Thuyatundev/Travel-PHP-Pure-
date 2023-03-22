<?php

include "./app/Post.php";
include "./app/DataBase.php";

$db = new DB();
$connection = $db->connect();
$postDB = new Post($connection);
$posts = $postDB->getAll();


include "./view/frontend/header.php";
include "./view/frontend/navbar.php";
include "./view/frontend/slider.php";


if (isset($_GET['page'])) {  
    $id = $_GET['id'];
    $post = $postDB->get($id);
        include "./view/frontend/detail.php";
   }else{
    include "./view/frontend/intro.php";
    include "./view/frontend/content.php";
    
    }


include "./view/frontend/footer.php";





