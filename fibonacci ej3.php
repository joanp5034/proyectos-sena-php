<?php
echo "Ingrese la cantidad de términos a mostrar: ";
$n = (int) readline();

$suma = 0;
$s1 = 0;
$s2 = 1;

for ($j = 1; $j <= $n; $j++) {
    $s3 = $s1 + $s2;
    $suma = $suma + $s3;
    echo $s3 . " ";
    $s1 = $v2;
    $s2 = $s3;
}

echo "\n La suma de los números es: " . $suma;
?>
