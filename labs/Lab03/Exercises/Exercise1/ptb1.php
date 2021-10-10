<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab03</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        <input type="number" name="a" placeholder="Nhập a">
        <input type="number" name="b" placeholder="Nhập b">
        <input type="submit" value="submit">
    </form>
    
    <?php 
        if(isset($_GET["a"]) && isset($_GET["b"])){
            $a = intval($_GET["a"]);
            $b = intval($_GET["b"]);

            if($a === 0 && $b === 0){
                echo "Phương trình có vô số nghiệm";
            } else {
                if ($a === 0 && $b !== 0) {
                    echo "Phương trình vô nghiệm";
                } else {
                    echo "Phương trình có nghiệm là: " . -($b/$a);
                }
            }
        }
    
    ?>

</body>
</html>
