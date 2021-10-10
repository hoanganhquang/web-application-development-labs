
<?php session_start(); ?>

<?php


    $_SESSION["num1"] = $_POST['num1'];
    $_SESSION["num2"] = $_POST['num2'];

    $num1 = $_SESSION["num1"];
    $num2 =  $_SESSION["num2"];



require('../../../layout/header.php') 

?>


<div class="wrap" style="text-align:center;">
    <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
    <p>Chọn phép tính: <?php echo $_POST['pt']?> </p>
    <?php 

        switch ($_POST['pt']) {
            case 'Cộng':
                $result = $num1 + $num2;
                break;
            case 'Trừ':
                $result = $num1 - $num2;
                break;
            case 'Nhân':
                $result = $num1 * $num2;
                break;
            case 'Chia':
                $result = $num1 / $num2;
                break;
        }

        echo "<label>Số 1: </label>";
        echo "<input type='text' value='$num1' style='margin: 10px 0px;'> <br>";

        echo "<label>Số 2: </label>";
        echo "<input type='text' value='$num2' style='margin: 10px 0px;'> <br>";

        echo "<label>Kết quả: </label>";
        echo "<input type='text' value='$result' style='margin: 10px 0px;'> <br>";

        echo "<a href='./index.php'>back</a>"
    ?>
  </div>

<?php require('../../../layout/footer.php') ?>
