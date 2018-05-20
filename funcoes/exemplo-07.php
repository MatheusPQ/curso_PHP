<?php

function soma(int ...$valores){ //array de int
    // print_r($valores);
    return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 25, 25);
echo "<br>";
echo soma(1.5, 3.2); //vai converter p/ int (3 + 1)
echo "<br>";
?>