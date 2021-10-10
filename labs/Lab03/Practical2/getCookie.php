<?php
if(!isset($_COOKIE["name"])) {
    echo "Cookie is not set!";
  } else {
    echo $_COOKIE["name"] . "<br>";
    echo $_COOKIE["age"];
  }
    