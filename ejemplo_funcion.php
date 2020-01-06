<?php

function calcularAreaTriangulo($base, $altura) {
	$resultado = $base * $altura / 2;
	return $resultado;
}

$area_triangulo = calcularAreaTriangulo(50, 50); 

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';



?>