<?php

$peso = 30.2;
$msgIf = "Está pesado demais";
$msgElse = "Peso dentro do limite";

if($peso >80){
    echo $msgIf;
}else{
    echo $msgElse;
}