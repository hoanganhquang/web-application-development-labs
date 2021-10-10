<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Anh Quang</title>
</head>
<body>
    <h2>Mảng 1 chiều</h2>
    <form action="./index.php">
        <input type="text" name="input" placeholder="ex: 1,2,3,a,b">
        <input type="submit" value="Enter">
    </form>
    <div>
        <ul>
            <li>
                <h4>Xuất mảng</h4>
                    <?php 
                        if(isset($_GET['input'])){
                            $input = $_GET['input'];
                            print_r(explode(",", $input));
                            $input = explode(",", $input);
                        }
                    ?>
            </li>

            <li>
            <h4>Tìm phần tử max, min</h4>
                    <?php 
                        if(isset($_GET['input'])){

                        echo "Max: " . max($input) . "<br>";
                        echo "Min: " . min($input);
                        }
                    ?>
            </li>

            <li>
            <h4>Sắp xếp mảng</h4>
                    <?php 
                        if(isset($_GET['input'])){
                        echo "Tăng dần: ";
                        sort($input);
                        foreach($input as $value){
                            echo $value . " ";
                        } 
                        echo "<br>";
                        echo "Giảm dần: ";
                        rsort($input);
                        foreach($input as $value){
                            echo $value . " ";
                        } 
                    }
                    ?>
            </li>

            <li>
            <h4>Tìm phần tử có giá trị x trong mảng</h4>
                <form action="./result.php">
                    <input type="text" name="arr" placeholder="Nhập mảng. Ex: 1,2,3,4">
                    <input type="text" name="x" placeholder="Nhập giá trị">
                    <input type="submit">
                </form>
            </li>

            <li>
            <h4>Cập nhật giá trị cho phần tử có giá trị x trong mảng</h4>
                <form action="./result.php">
                    <input type="text" name="arr1" placeholder="Nhập mảng. Ex: 1,2,3,4">
                    <input type="text" name="num" placeholder="Nhập phần tử cần update">
                    <input type="text" name="value" placeholder="Nhập giá trị mới">
                    <input type="submit">
                </form>
            </li>

            <li>
            <h4>Xóa phần tử có giá trị x trong mảng</h4>
                <form action="./result.php">
                    <input type="text" name="arr2" placeholder="Nhập mảng. Ex: 1,2,3,4">
                    <input type="text" name="num" placeholder="Nhập phần tử cần xóa">
                    <input type="submit">
                </form>
            </li>

        </ul>

        <hr width="100%">
        <h2>Mảng 2 chiều</h2>
            <form action="./result.php">
                <input type="text" name="input2" placeholder="ex: 1,2,3,a,b">
                <input type="text" name="input3" placeholder="ex: 1,2,3,a,b">
                <input type="submit" value="Enter">
            </form>
    </div>
</body>
</html>