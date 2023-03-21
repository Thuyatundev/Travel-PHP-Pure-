<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-3" id="sidebar">
                <h2 class="mt-5 text-warning">Admin Panel</h2>
                <ul class="sidebar-list">
                    <li><i class="fa-solid fa-user-plus"></i> <a href="admin.php?page=adduser">   Add User</a></li>
                    <li><i class="fa-solid fa-users"></i> <a href="admin.php?page=userlist">   User List</a></li>
                    <li><i class="fa-solid fa-file-circle-plus"></i> <a href="admin.php?page=addpost">   Add Post</a></li>
                    <li><i class="fa-solid fa-list"></i>  <a href="admin.php?page=postlist">  Post List</a></li>
                </ul>
        </div>
        <div class="col-9">