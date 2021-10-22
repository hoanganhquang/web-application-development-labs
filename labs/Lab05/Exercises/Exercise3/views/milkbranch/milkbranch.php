<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milkbranch.php');

$milkBranch = new MilkBranch();
?>

<div class="container">
    <h1 class="text-center my-5">Thông tin hãng sữa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã HS</th>
                <th scope="col">Tên hãng sữa</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody class="milkbranch">
            <?php
            $result = $conn->query($milkBranch->getAll());
            while ($row = $result->fetch_assoc()) :
            ?>
                <tr>
                    <td class="code"><?php echo $row["code"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td>
                        <button class="del-btn">Xoá</button>
                        <a href="./edit.php?code=<?php echo $row["code"] ?>&name=<?php echo $row["name"]; ?>&address=<?php echo $row["address"]; ?>&phone=<?php echo $row["phone"]; ?>&email=<?php echo $row["email"]; ?>">
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