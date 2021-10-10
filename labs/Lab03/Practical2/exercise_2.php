<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab03</title>
  </head>
  <body>
    <?php
        $_SESSION["name"]="abc";
        $_SESSION["password"]="abc";
        echo "set session";
    ?>
    <br/>
    <a href="./getSession.php">Go to getsession</a>
  </body>
</html>
