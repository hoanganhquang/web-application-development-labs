<?php

$a = 1;
$b = 2;

echo "a = $a" . "<br>" . "b = $b" . "<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping" . "<br>";
echo "a = $a" . "<br>" . "b = $b";
