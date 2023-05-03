<?php
$filas = 4;
$num = 1;
for ($s = 1; $s <= $filas; $s++) {
  
    for ($f = 1; $f <= $filas - $s; $f++) {
        echo " ";
    }
 
    for ($f = 1; $f <= $s; $f++) {
        echo $num . " ";
        $num++;
    }
    echo "\n";
   }
?>