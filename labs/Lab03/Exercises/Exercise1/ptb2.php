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
        <input type="number" name="c" placeholder="Nhập c">
        <input type="submit" value="submit">
    </form>
    
    <?php 
        if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
            $a = intval($_GET["a"]);
            $b = intval($_GET["b"]);
            $c = intval($_GET["c"]);
            $delta = pow($b, 2) - (4 * $a * $c);

            if($delta < 0){
                echo "Phương trình vô nghiệm";
            } else {
                if ($delta === 0) {
                    echo "Phương trình có nghiệm kép: " . -($b/(2*$a));
                } else {
                    echo "Phương trình có 2 nghiệm: " . ($b*-1 + sqrt($delta))/(2*$a) . " và " . ($b*-1 - sqrt($delta))/(2*$a);
                }
            }
        }
    
    ?>

</body>
</html>

