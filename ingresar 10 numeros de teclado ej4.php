<?php
$suma=0;

for ($j = 1; $j <= 10; $j++) {
  echo "Ingrese un numero $j: ";
  $num = readline();

  $suma = $suma + $num;
}

$prom = $suma/10;

echo "La suma de los 10 numeros es: " . $suma ;
echo "\nEl promedio de la suma de los 10 números es: " . $prom;
?>