<?php

class Pessoa{

    function falar (){
        echo "Olá Pessoal!";
    }
}

$daniele = new Pessoa();

$daniele->nome = "Daniele";

echo $daniele->nome;

echo "<br>";

$daniele->falar();



?>