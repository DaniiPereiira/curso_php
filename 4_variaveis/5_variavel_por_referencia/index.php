<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$x = 90;

echo "<br>";
echo $y;


?>