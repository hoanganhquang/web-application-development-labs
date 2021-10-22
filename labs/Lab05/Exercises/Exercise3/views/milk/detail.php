<?php require('../../../../../layout/header.php'); ?>


<h1 class="text-center my-5">Thông tin chi tiết</h1>

<div class="container-details">

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <?php if (isset($_GET["id"])) : ?>
                <div class="col-md-4">
                    <img src="./uploads/<?php echo $_GET["image"] ?>" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <h5 class="card-title"><?php echo $_GET["name"] ?></h5>
                        <p class="card-text">Thành phần dinh dưỡng:</p>
                        <p class="card-text"> - <?php echo $_GET["nutrition"] ?></p>

                        <p class="card-text">Lợi ích:</p>
                        <p class="card-text"> - <?php echo $_GET["benefit"] ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $_GET["type"] ?> - <?php echo $_GET["weight"] ?> - <?php echo $_GET["price"] . "VNĐ" ?></small></p>


                    </div>
                </div>
            <?php else : ?>
                <h3>No data</h3>
            <?php endif ?>
        </div>
    </div>

</div>












<?php require('../../../../../layout/footer.php') ?>