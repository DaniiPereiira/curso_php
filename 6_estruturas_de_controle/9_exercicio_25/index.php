<?php

$a = 55;
$b = "Paz";

if(is_numeric($a)){
    $a *= 2;
    if($a > 100){
        echo "É um número maior que 100 <br>";
    }
}else {
    echo "Não é um número <br>";
}

if(is_numeric($b)){
    $b *= 2;
    if($a > 100){
        echo "É um número maior que 100 <br>";
    }
}else {
    echo "Não é um número <br>";
}