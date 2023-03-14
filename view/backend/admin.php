<?php
session_start();
include "../../app/DataBase.php";
include "../../app/User.php";

$db = new DB();
$connection = $db->connect();
$user = new User($connection);

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
    }
}

include "./footer.php";