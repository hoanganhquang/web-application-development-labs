<?php 
include "./exercise_2.php";
$student = new Students("John", "Doe", "10/33 ABC, Da Lat");

echo $student->greating() . "<br>";
echo $student->getAddress();