<?php

$x = ["Amor", 3, false, true, 25, "Paz", "Fé", 42, "Vida", 17];

$y = 0;

while($y < count($x) ){

    if(is_string($x[$y])){

        echo $x[$y] . "<br>";
    }

    $y = $y + 1;

}