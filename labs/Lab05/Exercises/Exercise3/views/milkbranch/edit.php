<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milkbranch.php');

if (isset($_POST["submit"])) {
    $milkBranch = new MilkBranch();

    $old_code = $_GET["code"];

    $new_code = $_POST["code"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $result = $conn->query($milkBranch->edit($old_code, $new_code, $name, $address, $phone, $email));

    if (!$result) {
        die($conn->error);
    }
    header("location: milkbranch.php");
}
?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">
            <div class="card-header">Cập nhật thông tin hãng sữa</div>

            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-1">
                        <label class="form-label">Mã HS</label>
                        <input type="text" class="form-control" name="code" value="<?php echo $_GET["code"] ?>" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $_GET["name"] ?>" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $_GET["address"] ?>" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $_GET["phone"] ?>" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $_GET["email"] ?>" />
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require('../../../../../layout/footer.php') ?>