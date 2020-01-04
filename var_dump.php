<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;


# la función var_dump nos devuelve el tipo de dato/variable que es,
# y el valor que contiene explicitamente (en caso de contener algúno).
#
# En este caso, nos devuelde un array() con dos valores en su interior,
# uno con el valor "nombre" y otro con el valor "edad", además, cada valor
# tiene su dato correspondiente, ya que se trata de un array() asociativo.
# 
# Para el primero tenemos un string de seis caracteres con el valor "Carlos",
# y por el otro uno de tipo numérico con el valor "20".


# La etiqueta <pre> muestra texto pre-formateado, es decir, como texto puro,
# sin ser interpretado ni renderizado por el navegador.
 

echo "<pre>"; 
var_dump($arreglo_asociativo);
echo "</pre>";


# El resultado será este:
#
#	array(2) {
#  		["nombre"]=>
#  		string(6) "Carlos"
#  		["edad"]=>
#  		int(20)
#	}

?>