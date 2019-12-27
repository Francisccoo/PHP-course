<?php


$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Usamos count() para mostrar la cantidad de elementos existentes en un array()
# en valor numérico

echo count($meses);

echo '<br />';

# También podemos definir una variable para almacenar el método de contador, y por ejemplo
# querer que nos muestre la cantidad de meses actual menos 1.

$ultimo_mes = count($meses) - 1;

echo $ultimo_mes;

echo '<br />';

# En este caso queremos que nos muestre el último mes, pero en formato de string, tal y como lo
# hemos definido al principio de todo.

echo $meses[$ultimo_mes];

?>