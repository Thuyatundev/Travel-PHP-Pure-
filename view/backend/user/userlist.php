<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User List</li>
        </ol>
        </nav>
    <div class="container mt-5">
        <h2 class=" mt-5"><i class="fa-solid fa-users"></i> User List</h2>
        <?php if (isset($_SESSION['expire'])) {
          $diff = time() - $_SESSION['expire'];
            if ($diff > 2) {
              unset($_SESSION['status']);
              unset($_SESSION['expire']);
            }
        } ?>
        <?php if (isset($_SESSION['status'])) {?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['status']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php } ?>
    <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php $no = 1;
foreach ($users as $user) {?>
    
    <tr>
      <th scope="row"><?php echo $no ?></th>
      <td><?php echo $user['username']?></td>
      <td><?php echo $user['email']?></td>
      <td>
        <a href="admin.php?page=userEdit&id=<?php echo $user['id']?>" class="text-success"><i class="fa-solid fa-user-pen"></i></a>
        <a href="../../controller/UserController.php?action=delete&id=<?php echo $user['id'] ?>" class="text-danger" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

    <?php $no++; } ?>
  </tbody>
</table>
    </div>
</body>
</html>