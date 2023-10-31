<?php

$arr = [];
$x = 10;

for($i = 0; $i < 10; $i++){

    array_push($arr, $x);

    $x++;

    if($arr[$i] % 2 != 0){

        echo $arr[$i] . "<br>";

    }


}