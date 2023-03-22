
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
            <form class="mt-5" action="../../controller/PostController.php" enctype="multipart/form-data" method="POST">
            <div class="form-group ">
                <div class="row">
                <label for="title" class="col-4">Title :</label>
                <input type="text" class="form-control col-8" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Your title..." value="<?php echo $postData['title']?>">
                <?php if (isset($_SESSION['title'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['title']?></p>
                <?php } ?>
                </div>
            </div>

            <div class="form-group">
            <div class="row">
                <label for="description" class="col-4">Description :</label>
                <textarea name="description" class="form-control col-8" id="description" cols="30" rows="10" placeholder="Enter Your Description...">
                <?php echo $postData['description']?>
                </textarea>
                <?php if (isset($_SESSION['des'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['des'] ?></p>
                <?php } ?>
            </div>
            </div>

            <div class="form-group">
            <div class="row">
                <label for="image" class="col-4">Image :</label>
                <div class="custom-file form-control col-8">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile04">
                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <?php if (isset($_SESSION['image'])) { ?>
                    <p class="text-danger offset-4"><?php echo $_SESSION['image'] ?></p>
                <?php } ?>
            </div>
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $postData['id']?>">
            <div class="form-btn offset-4">
               <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-circle-arrow-up"></i> Update</button>
               <button type="reset" class="btn btn-outline-danger"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
            </div>

            

           
            </form>
        </div>

        