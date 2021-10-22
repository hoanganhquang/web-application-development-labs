<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milk.php');
require('../../Models/milkbranch.php');


if (isset($_POST["submit"])) {
    $milk = new Milk();

    $id = $_POST["id"];
    $name = $_POST["name"];
    $nameBranch = $_POST["nameBranch"];
    $type = $_POST["type"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];
    $nutrition = $_POST["nutrition"];
    $benefit = $_POST["benefit"];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    $image = $_FILES["fileToUpload"]["name"];

    $result = $conn->query($milk->add($id, $name, $nameBranch, $type, $weight, $price, $nutrition, $benefit, $image));

    if (!$result) {
        die($conn->error);
    }
    header("location: milk.php");
}

$branch = new MilkBranch();
$all = $conn->query($branch->getAll());

?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">
            <div class="card-header">Thêm sữa</div>

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-1">
                        <label class="form-label">Số TT</label>
                        <input type="text" class="form-control" name="id" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Tên sữa</label>
                        <input type="text" class="form-control" name="name" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Hãng sữa</label>
                        <select name="nameBranch" id="">
                            <?php while ($row = $all->fetch_assoc()) : ?>

                                <option value="<?php echo $row["name"] ?>"><?php echo $row["name"] ?></option>

                            <?php endwhile ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Loại sữa</label>
                        <input type="text" class="form-control" name="type" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Trọng lượng</label>
                        <input type="text" class="form-control" name="weight" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Đơn giá</label>
                        <input type="text" class="form-control" name="price" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Dinh dưỡng</label>
                        <input type="text" class="form-control" name="nutrition" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Lợi ích</label>
                        <input type="text" class="form-control" name="benefit" value="" />
                    </div>

                    <div class="mb-1">
                        <input type="file" name="fileToUpload" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require('../../../../../layout/footer.php') ?>