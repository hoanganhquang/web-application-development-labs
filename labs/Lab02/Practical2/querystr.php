<?php 

    $username = $_GET['username'];
    $password = $_GET['pass'];
    $gender = $_GET['gender'];
    $branch = $_GET['branch'];

    echo <<<content
        Fullname: $username <br>
        Password: $password <br>
        Gender: $gender <br>
        Branch: $branch <br>
    content;
    
