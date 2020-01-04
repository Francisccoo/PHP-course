<?php


# Para este ciclo, definimos una variable con un valor (1), y en el
# apartdo while(...), declaramos que si el valor de la variable es
# menor o igual a 20, se seguirá ejecutando una sola vez, imprimiendo
# los valores de dicha variable, e incrementando su valor.


$i = 1;

do {
	echo $i . '<br />';
	$i++;

} while($i <= 20);


?>