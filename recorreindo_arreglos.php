<?php

# Definimos una variable que contenga el array() de meses

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Recorremos el array() con el bucle for(...), utilizando el método
# count() como valor que representa la longitud del array() meses en este
# momento, finalmente renderizamos los valores por pantalla a través de un 
# echo(), indicando dentro de la variable meses el valor $i = cantidad de meses
# seguido de una concatenación de saltos de línea.

// for($i = 0; $i < count($meses); $i++) {

// 	echo $meses[$i] . '<br />';
// }

# También podemos hacerlo mediante un bucle while(...), que para
# este caso debemos tener una variable que nos haga de contador o sumador
# para ir incrementando el valor y no nos crashee la máquina en un bucle infinito.

# Aquí indicamos que, si el valor del contador es menor que el valor máximo del array/()
# meses, los imprima por pantalla y a la vez incremente el contador. Cuando el valor del
# contador llegue al mismo valor del array() meses, habrá terminado de recorrerlo.

$contador = 0;

while ($contador < count($meses)) {
	echo $meses[$contador] . '<br />';

	$contador++;
}

?>