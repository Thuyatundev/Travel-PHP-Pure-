<!-- start content -->
<div class="container mt-5" id="content">
    <h2 class="text-center text-danger"><?php echo $post['title']?></h2>
        <!-- start card -->
        
        <div class="mt-3 content-card">
            <div class="card">
                <img class="card-img-top" src="./assets/postimage/<?php echo $post['image']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']?></h5>
                    <p class="card-text"><?php echo $post['description']?></p>
                </div>
            </div>
        </div>
        <!-- end card -->  
</div>
<!-- end content-->