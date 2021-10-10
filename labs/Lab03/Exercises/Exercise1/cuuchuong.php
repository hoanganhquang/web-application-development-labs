
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
        <input type="number" name="n" placeholder="Nhập n">
        <input type="submit" value="submit">
    </form>
    
    <?php 
        if(isset($_GET["n"])){
            $n = $_GET["n"];
            $i = 1;

            while ($i <= 10) {
                echo  "$n * $i = " . $n * $i . "<br>";
                $i++;
            }
        }
    ?>

</body>
</html>


