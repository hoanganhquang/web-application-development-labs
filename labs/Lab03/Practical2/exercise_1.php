<?php 
        setcookie("name","Abc",time()+3600,"/","",0);
        setcookie("age","21",time()+3600,"/","",0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab03</title>
  </head>
  <body>
    <p>Cookie was set</p>
    <a href="./getCookie.php">Go to getcookie</a>
  </body>
</html>
