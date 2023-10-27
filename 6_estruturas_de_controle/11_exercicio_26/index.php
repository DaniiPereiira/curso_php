<?php

$veloicidade = 40;


if($veloicidade < 40){
    echo "Motorista está na velocidade correta";
}else if($veloicidade == 40){
    echo "Motorista precisa tomar cuidado";
}else{
    echo "Motorista tomou uma multa";
}