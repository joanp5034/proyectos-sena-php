<?php

\n";
// Estos son los 20 primeros numeros naturales que se van a sumar
for ($j = 1; $j <= 20; $j++) {
    echo $j;
    if ($j < 20) {
        echo ", " ;
    }
      }
// La expresencion $suma = $suma+$j de una manera mas corta es
// $suma += $j
$suma = 0;
for ($j = 1; $j <= 20; $j++) {
  $suma=$suma + $j;
}
echo "\nLa suma de los primeros 20 números naturales es: ". $suma;
?>
