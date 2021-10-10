<?php

echo substr('abcd', 1) . "<br>"; // output: bcd
echo substr('abcd', -3) . "<br>"; // output: bcd
echo substr('abcd', 4) . "<br>"; // false 
echo substr('abcd', -7) . "<br>"; // output: abcd