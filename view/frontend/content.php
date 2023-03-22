<!-- start content -->
<div class="container-fluid mt-5" id="content">
    <h2 class="text-center text-danger">This is Our Menu</h2>
    
    <div class="row mt-3">
    <?php  foreach ($posts as $post) {?>
        <!-- start card -->
        <div class="col-md-3 mt-3 content-card">
            <div class="card">
                <img class="card-img-top" src="./assets/postimage/<?php echo $post['image']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']?></h5>
                    <p class="card-text"><?php echo substr($post['description'],0,200)?></p>
                    <a href="index.php?page=detail&id=<?php echo $post['id']?>" class="btn btn-danger">View More</a>
                </div>
            </div>
        </div>
        <!-- end card -->
        <?php } ?>
    </div>
    
</div>
<!-- end content-->