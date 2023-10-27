<?php

function calcularDesconto($a, $b){

    if($a == "eletrônicos"){ 
        echo $b * 0.9;
    }else if($a == "vestuário"){
        echo $b * 0.8;
    }else if($a == "alimentos"){
        echo $b * 0.95;
    }else{
        echo $b;
    }
   
}

echo calcularDesconto("vestuário", 100);


