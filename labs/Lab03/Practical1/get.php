<?php 
        if(isset($_GET["name"]) && isset($_GET["age"])){
            echo "Full name " . $_GET['name'] . "<br>";
            echo "Age: " . $_GET['age'];
        }

    ?>