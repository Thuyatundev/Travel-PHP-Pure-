<?php
session_start();
include "../app/DataBase.php";
include "../app/Login.php";

$db = new DB();
$connection = $db->connect();
$login = new Login($connection);

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "" | $password == "") {
        if ($email == "") {
            $_SESSION['email'] = "Email is required...";
        }
        if ($password == "") {
            $_SESSION['password'] = "Pasword is required...";
        }
        header("Location:". $_SERVER['HTTP_REFERER']);
    }else{

        unset($_SESSION['email']);
        unset($_SESSION['password']);

       $status =  $login->check($email,$password);
       if ($status) {
        $_SESSION['auth'] = true;
       }else{
        $_SESSION['status'] = "Email Or Password is Wrong...";
        $_SESSION['expire'] = time();
       }

       header("Location: ../view/backend/admin.php");

    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'logout') {
        unset($_SESSION['auth']);
        header("Location:../view/backend/login.php");
    }
    
}