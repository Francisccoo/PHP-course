<?php

# Los arreglos multidimensionales se definen creando primero un array(), y en su interior se van definiendo
# Otros array().

$amigos = array(
		  array('Alejandro', 20, array('Vallejo', 666)),
		  array('Cesar', 21),
		  array('Manuel', 18)

);

# Para acceder a los valores de un arreglo multidimensional, hacemos un 'echo' seguido del nombre del array y
# seguido de dos corchetes [][], el primero para identificar el valor que ocupa en la posición del array contenedor, y el segundo para el valor que ocupa el dato de ese array al que hemos accedido.

echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

?>