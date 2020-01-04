<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;

# print_r funciona parecido a var_dump, pero con la diferencia de que
# el primero solo muestra el valor que contiene la variable. En el caso
# del array(), muestra las posiciones de los diferentes valores, y el 
# valor de dichos valores.

print_r($arreglo);

?>