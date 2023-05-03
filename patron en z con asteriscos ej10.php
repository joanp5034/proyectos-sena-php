<?php
$filas = 7;
for ($s = 1; $s <= $filas; $s++) {
    for ($f = 1; $f<= $filas; $f++) {
        if ($s == 1 || $s == $filas || $s + $f == $filas + 1) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>