<?php

$total = 150;
$desconto = 0.9;

do {
    $total *= $desconto; //vai aplicar um desconto de 10% a ele mesmo
} while ($total > 100);

echo $total;

?>