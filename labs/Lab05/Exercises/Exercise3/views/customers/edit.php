<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/customers.php');

if (isset($_POST["submit"])) {
    $customers = new Customers();

    $old_code = $_GET["code"];

    $new_code = $_POST["code"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $result = $conn->query($customers->edit($old_code, $new_code, $name, $gender, $address, $phone));

    if (!$result) {
        die($conn->error);
    }
    header("location: customers.php");
}
?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">
            <div class="card-header">Cập nhật thông tin khách hàng</div>

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
                        <label class="form-label">Giới tính: </label>
                        <?php if ($_GET["gender"] == "male.jpg") : ?>
                            <label for="">Nam</label>
                            <input type="radio" name="gender" value="male.jpg" checked>
                            <label for="">Nữ</label>
                            <input type="radio" name="gender" value="female.jpg">
                        <?php else : ?>
                            <label for="">Nam</label>
                            <input type="radio" name="gender" value="male.jpg">
                            <label for="">Nữ</label>
                            <input type="radio" name="gender" value="female.jpg" checked>
                        <?php endif ?>

                    </div>

                    <div class="mb-1">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $_GET["address"] ?>" />
                    </div>

                    <div class="mb-1">
                        <label class="form-label">Điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $_GET["phone"] ?>" />
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require('../../../../../layout/footer.php') ?>