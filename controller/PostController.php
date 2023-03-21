<?php
session_start();

include "../app/DataBase.php";
include "../app/Post.php";


$db = new DB();
$connection = $db->connect();
$postDB = new Post($connection);

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $des = $_POST['description'];
    $imageName = $_FILES['image']['name'];

    if ($title == "" | $des == "") {
        if ($title == "") {
            $_SESSION['title'] = "Title field is required...";
        }
        if ($des == "") {
            $_SESSION['des'] = "Description field is required...";
        }
        if ($imageName == "") {
            $_SESSION['image'] = "Image field is required...";
        }

        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        unset($_SESSION['title']);
        unset($_SESSION['des']);
        unset($_SESSION['image']);

        if ($_POST['action'] == "add") {
            $tmp_name = $_FILES['image']['tmp_name'];
            $folder = "../assets/postimage/";
            $saveImageName = uniqid() . $imageName;
            move_uploaded_file($tmp_name, $folder . $saveImageName);
            $status = $postDB->create($title, $des, $saveImageName);
            if ($status) {
                $_SESSION['status'] = "Post Created Successfully...";
                $_SESSION['expire'] = time();
            }

            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
}
