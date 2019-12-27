<?php


$edad = 25;

# isset() devuelve 1 si la variale contiene un valor, por el contrario no muestra nada por pantalla

echo isset($edad);

echo '<br />';

# En este condicional, '?' representa el if(...){...} , y el simbolo ':' else{...}

$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';

echo 'Edad:' . $edad;

?>