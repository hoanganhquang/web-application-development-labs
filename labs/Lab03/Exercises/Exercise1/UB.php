

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
            $c = max([$a, $b]);
            $UCLN = [];

            for($i = 1; $i <= $c; $i++) {
                if($a % $i == 0 && $b % $i == 0) {
                    array_push($UCLN, $i);
                }
            }

            for($i = $c; ; $i++) {
                if($i % $a == 0 && $i % $b == 0) {
                    echo "BCNN: " . $i . "<br>";
                    break;
                }
            }

            echo "UCLN: " . max($UCLN);


        }
    ?>

</body>
</html>


