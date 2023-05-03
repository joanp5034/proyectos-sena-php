<?php
echo "Escriba el numero de la tabla de multiplicar que quiera ver: ";
$numTab = (int)readline();

for ($j = 1; $j <= 10; $j++){
  $mult = $numTab * $j;
 
  echo "$numTab * $j = $mult \n";
}
  ?>