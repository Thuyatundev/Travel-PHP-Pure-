<?php
session_start();

include "../app/DataBase.php";
include "../app/User.php";

$db = new DB();
$connection = $db->connect();
$user = new User($connection);

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == "" | $email == "" | $password == "") {
        if ($username == "") {
            $_SESSION['username'] = 'UserName must not be Empty!';
        }
        if ($email == "") {
            $_SESSION['email'] = 'Email must not be Empty!';
        }
        if ($password == "") {
            $_SESSION['password'] = "Password Must not Be Empty!";
        }

        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        if ($_POST['action'] == 'add') {
            $status = $user->create($username, $email, $password);

            if ($status) {
                $_SESSION['status'] = "User Created Successfully...";
                $_SESSION['expire'] = time();
            }
            header("Location:" . $_SERVER['HTTP_REFERER']);
        } elseif ($_POST['action'] == 'update') {
            $id = $_POST['id'];
            $status = $user->update($id,$username, $email, $password );

            if ($status) {
                $_SESSION['status'] = "User Updated Successfully...";
                $_SESSION['expire'] = time();
            }
            header("Location: ../view/backend/admin.php?page=userlist");
        }
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['id'];
       $status =  $user->delete($id);
       if ($status) {
            $_SESSION['status'] = "User Deleted Successfully";
            $_SESSION['expire'] = time();
       }
       header("Location:".$_SERVER['HTTP_REFERER']);
    }
    
}
