<?php

function verificarAcesso($a, $b){

    if($a >= 18 && $b == true){
        echo "Acesso autorizado";
    }else if($a < 18){
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    }else if($a >=18 && $b == false){
        echo "Acesso negado. Autorização necessária";
    }

}

echo verificarAcesso(15, true);