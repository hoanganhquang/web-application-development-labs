<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab03</title>
</head>
<body>  

    <form action = "<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
    </form>
    <br>
    <?php 
        if(isset($_REQUEST["name"]) && isset($_REQUEST["age"])){
            echo "Welcome " . $_REQUEST['name'] . "<br>";
            echo "You are " . $_REQUEST['age'] . " years old.";
        }
    ?>
</body>
</html>