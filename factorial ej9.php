<?php
echo "Escribe el numero del que quiere calcular el factorial: ";
$num= (int)readline();


$fact = 1;

for ($j = 1; $j <= $num; $j++) {

    $fact = $fact * $j;
}

echo "El factorial de $num es: $fact";
?>