
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
        <input type="number" name="a" placeholder="Cạnh a">
        <input type="number" name="b" placeholder="Cạnh b">
        <input type="number" name="c" placeholder="Cạnh c">
        <input type="submit" value="submit">
    </form>
    
    <?php 
        if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
            $a = intval($_GET["a"]);
            $b = intval($_GET["b"]);
            $c = intval($_GET["c"]);
            
            if($a === $b && $a === $c){
                echo "Tam giác đều";
                die();
            }

            if ($a === $b || $a === $c || $b === $c) {
                if ($a === sqrt(pow($b, 2) + pow($c, 2)) || $b === sqrt(pow($a, 2) + pow($c, 2)) || $c === sqrt(pow($b, 2) + pow($a, 2))){
                    echo "Tam giác vuông cân";
                    die();
                } 
                echo "Tam giác cân";
                die();
            } 

            if ($a == sqrt(pow($b, 2) + pow($c, 2)) || $b == sqrt(pow($a, 2) + pow($c, 2)) || $c == sqrt(pow($b, 2) + pow($a, 2))) {
                echo "Tam giác vuông";
                die();
            }

            echo "Tam giác thường";
        
        }
    
    ?>

</body>
</html>

