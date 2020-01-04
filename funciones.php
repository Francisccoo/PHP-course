<?php

function saludo($nombre) {
	return 'Hola! ' . $nombre;

}

echo saludo('Francisco');

echo '<br>';

function sumar($numero1, $numero2) {
	$resultado = $numero1 + $numero2;
	return $resultado;
}

# Utilizamos return para que nos devuelva un valor dentro de la
# función, de ese modo podemos gestionarlo mejor desde el exterior

echo $resultado = sumar(150, 50);

?>