<?php


$y = 4;

while($y < 30){

    echo "Y é igual a $y <br>";

    if($y === 24){

        echo "Final do loop <br>";
        break;
    }

    $y += 2;

}