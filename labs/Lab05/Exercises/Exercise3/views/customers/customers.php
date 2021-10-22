<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/customers.php');

$customers = new Customers();
?>

<div class="container">
    <h1 class="text-center my-5">Thông tin khách hàng</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã KH</th>
                <th scope="col">Tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody class="customers">
            <?php
            $result = $conn->query($customers->getAll());
            while ($row = $result->fetch_assoc()) :
            ?>
                <tr>
                    <td class="code"><?php echo $row["code"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <?php if ($row["gender"] == "male.jpg") : ?>
                        <td><img src="../../db/img/male-user.png" alt=""></td>
                    <?php else : ?>
                        <td><img src="../../db/img/woman-avatar.png" alt=""></td>
                    <?php endif ?>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td>
                        <button class="del-btn">Xoá</button>
                        <a href="./edit.php?code=<?php echo $row["code"] ?>&name=<?php echo $row["name"]; ?>&gender=<?php echo $row["gender"]; ?>&address=<?php echo $row["address"]; ?>&phone=<?php echo $row["phone"]; ?>">
                            Sửa
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <a href="./add.php">Thêm mới</a>

    <script>
        const delBtn = document.querySelectorAll(".del-btn");
        const code = document.querySelectorAll(".code");

        delBtn.forEach((element, index) => {
            element.addEventListener("click", () => {
                const value = code[index].textContent;
                const delConfirm = confirm("Bạn có chắc muốn xoá?");

                if (delConfirm) {
                    window.location.assign(`./delete.php?code=${value}`);
                }
            })
        });
    </script>

</div>

<?php require('../../../../../layout/footer.php') ?>