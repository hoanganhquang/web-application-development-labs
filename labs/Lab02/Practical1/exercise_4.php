<?php

$no = 5;
$value = 13.5;
$name = "Bipin R. Prajapati";
$var = true;
$myarray= array(110, 45, "Bipin", 1.5, true);

echo gettype($no)."<br/>";
echo gettype($value)."<br/>";
echo gettype($name)."<br/>";
echo gettype($var)."<br/>";
echo gettype($myarray)."<br/>";
echo "<hr/>";

$data = array(1, 1.5, null, "Bipin", new stdclass, true);

foreach($data as $value)
{
echo gettype($value)." | ";
}