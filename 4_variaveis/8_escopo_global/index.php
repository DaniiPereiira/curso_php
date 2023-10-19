<?php

$a = 10;

echo "$a <br>";

if(5>2) {
    $a = 100;

    echo "$a <br>";
}

function teste() {
    global $a;

    $a = 1000;

    echo "$a <br>";
}

teste();

?>