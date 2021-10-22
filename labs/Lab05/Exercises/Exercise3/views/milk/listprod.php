<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milk.php');

$milk = new Milk();
$page = $_GET["page"];

$count = $conn->query($milk->count());
$count = $count->fetch_assoc()["total"];
$total = ceil(intval($count) / 6);

?>

<div class="container">
    <h1 class="text-center my-5">Thông tin các loại sản phẩm</h1>

    <div class="content">

        <?php
        $result = $conn->query($milk->paginator($page));
        while ($row = $result->fetch_assoc()) :
        ?>
            <div class="card" style="width: 18rem; margin-bottom: 50px;">
                <img src="./uploads/<?php echo $row["image"] ?>" . class="card-img-top" alt="..." width="50px">
                <div class="card-body">
                    <div class="head">
                        <h5 class="card-title"><?php echo $row["name"] ?></h5>
                        <p class="card-text"><?php echo $row["weight"] . " - " . $row["price"] . "VNĐ" ?></p>
                    </div>
                    <a href="./detail.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"]; ?>&nameBranch=<?php echo $row["nameBranch"]; ?>&type=<?php echo $row["type"]; ?>&weight=<?php echo $row["weight"]; ?>&price=<?php echo $row["price"]; ?>&nutrition=<?php echo $row["nutrition"]; ?>&benefit=<?php echo $row["benefit"]; ?>&image=<?php echo $row["image"]; ?>" class="btn btn-primary">Details</a>
                </div>
            </div>
        <?php endwhile ?>

    </div>

    <div id="pagination">
        <?php for ($i = 1; $i <= $total; $i++) : ?>
            <a class="page" href="./listprod.php?page=<?php echo $i ?>"><?php echo $i ?></a>
        <?php endfor ?>
    </div>

    <script>
        const pages = document.getElementById("pagination").querySelectorAll("a");

        for (let i = 0; i < pages.length; i++) {
            if (pages[i].href == location.href) {
                pages[i].className = "active"
            }

        }
    </script>

</div>














<?php require('../../../../../layout/footer.php') ?>