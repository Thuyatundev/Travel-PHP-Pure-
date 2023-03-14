
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
        </nav>


        <div class="col-md-6 offset-md-3 mt-5 bg-dark p-5 text-white form-container">
            <?php if (isset($_SESSION['expire'])) {
                $diff = time() - $_SESSION['expire'];
                if ($diff > 2) {
                    unset($_SESSION['status']);
                    unset($_SESSION['expire']);
                }
            }?>
            <?php if(isset($_SESSION['status'])){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['status']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php } ?>

        <h2 class="mt-5"> <i class="fa-solid fa-user-plus"></i>  Edit User</h2>
            <form class="mt-5" action="../../controller/UserController.php" method="POST">
            <div class="form-group ">
                <div class="row">
                <label for="username" class="col-4">UserName :</label>
                <input type="text" class="form-control col-8" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Your Name..." value="<?php echo $userData['username']?>">
                <?php if (isset($_SESSION['username'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['username']?></p>
                <?php } ?>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                <label for="email" class="col-4">Email :</label>
                <input type="email" class="form-control col-8" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email..." value="<?php echo $userData['email']?>">
                <?php if (isset($_SESSION['email'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['email']?></p>
                <?php } ?>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                <label for="password" class="col-4">Password :</label>
                <input type="password" class="form-control col-8" name="password" id="password" aria-describedby="emailHelp" placeholder="***************">
                <?php if (isset($_SESSION['password'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['password']?></p>
                <?php } ?>
                </div>
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $userData['id']?>">
           <div class="form-btn offset-4">
           <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-circle-arrow-up"></i> Update</button>
            <button type="reset" class="btn btn-outline-danger"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
           </div>
            </form>
        </div>

        