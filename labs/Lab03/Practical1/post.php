<?php 
        if(isset($_POST["name"]) && isset($_POST["age"])){
            echo "Name: " . $_POST['name'] . "<br>";
            echo "Age: " . $_POST['age'];
        }

    ?>