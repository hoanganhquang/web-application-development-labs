<?php require('../../../layout/header.php') ?>

<div class="wrap" style="text-align:center;">
    <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
    <span>Chọn phép tính: </span>
    <form action="./result.php" method="POST">
        <input type="radio" name="pt" value="Cộng"/> Cộng
        <input type="radio" name="pt" value="Trừ"/> Trừ
        <input type="radio" name="pt" value="Nhân"/> Nhân
        <input type="radio" name="pt" value="Chia"/> Chia
        <br>
        <input type="text" name="num1" placeholder="Số thứ nhất" style="margin: 10px 0px;"> <br>
        <input type="text" name="num2" placeholder="Số thứ hai" style="margin: 10px 0px;"> <br>

        <input type="submit" value="Tính">
    </form>
  </div>

<?php require('../../../layout/footer.php') ?>
