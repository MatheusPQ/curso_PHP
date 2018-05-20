<?php

// function soma(int ...$valores):string{
function soma(float ...$valores):string{ //tipo de retorno: string... ao retornar, vai converter p/ string
    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 25, 25);
echo "<br>";
echo soma(1.5, 3.2); //vai converter p/ int (3 + 1)
echo "<br>";
?>