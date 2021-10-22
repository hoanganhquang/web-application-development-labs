<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milkbranch.php');

if (isset($_POST["submit"])) {
    $milkBranch = new MilkBranch();

    $code = $_POST["code"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $result = $conn->query($milkBranch->add($code, $name, $address, $phone, $email));

    if (!$result) {
        die($conn->error);
    }
    header("location: milkbranch.php");
}
?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">
            <div class="card-header">Thêm hãng sữa</div>

            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-1">
                        <label class="form-label">Mã HS</label>
                        <input type="text" class="form-control" name="code" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Tên</label>
                        <input type="text" class="form-control" name="name" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="" />
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require('../../../../../layout/footer.php') ?>