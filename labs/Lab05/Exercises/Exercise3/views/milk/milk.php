<?php
require('../../../../../layout/header.php');
require('../../db/db.php');
require('../../Models/milk.php');

$milk = new Milk();
?>

<div class="container">
    <h1 class="text-center my-5">Thông tin sữa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Số TT</th>
                <th scope="col">Tên sữa</th>
                <th scope="col">Hãng sữa</th>
                <th scope="col">Loại sữa</th>
                <th scope="col">Trọng lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody class="customers">
            <?php
            $result = $conn->query($milk->getAll());
            while ($row = $result->fetch_assoc()) :
            ?>
                <tr>
                    <td class="code"><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["nameBranch"]; ?></td>
                    <td><?php echo $row["type"]; ?></td>
                    <td><?php echo $row["weight"]; ?></td>
                    <td><?php echo $row["price"]; ?></td>
                    <td>
                        <button class="del-btn">Xoá</button>
                        <a href="./edit.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"]; ?>&nameBranch=<?php echo $row["nameBranch"]; ?>&type=<?php echo $row["type"]; ?>&weight=<?php echo $row["weight"]; ?>&price=<?php echo $row["price"]; ?>&nutrition=<?php echo $row["nutrition"]; ?>&benefit=<?php echo $row["benefit"]; ?>">
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
                    window.location.assign(`./delete.php?id=${value}`);
                }
            })
        });
    </script>

</div>

<?php require('../../../../../layout/footer.php') ?>