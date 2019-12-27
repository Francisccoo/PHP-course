<?php

# Para declarar un array en PHP se hace de la siguiente manera: $nombre_variable = array(contendio del array);

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# Otra forma de declarar un array, esta vez entre corchetes [].

$array = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

//echo $semana[1]; # De este modo estamos acceciendo al valor 'Martes' correspondiente al array semana.  

$semana[7] = 'FalconMasters'; # Estamos indicando que en la posición número 7 se encuentra el valor 'FalconMasters'; 

echo $semana[7]; # Ahora estamos llamando a la posición numero 7 del array;

echo '<br />';

# Imprimir los días de la semana

echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

# Se concatena con . seguido de la etiqueta <br>

?>