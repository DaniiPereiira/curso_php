<?php

$var1 = "Amor";
$var2 = 100;
$var3 = true;
$msgIf = "É um inteiro <br>";
$msgElse = "Não é um inteiro <br>";

if(is_int($var1)){
    echo $msgIf;
}else{
    echo $msgElse;
}

if(is_int($var2)){
    echo $msgIf;
}else{
    echo $msgElse;
}

if(is_int($var3)){
    echo $msgIf;
}else{
    echo $msgElse;
}