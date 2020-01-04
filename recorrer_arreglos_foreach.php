<?php


$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$alejandro = array('nombre' => 'Alejandro', 'telefono' => 555666777, 'edad' => 30, 'pais' => 'España');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>

<body>
    <!-- <h1>Meses del año</h1> -->
    <h1>Datos personales de <?php echo $alejandro['nombre'] ?></h1>
    <ul>
        <?php 
			# Mediante el bucle 'foreach' podemos recorrer un array() y mostrar su contenido,
			# y además presentarlo en forma de lista concatenandolo con las etiquetas <li></li>

		// 	foreach($meses as $mes) {
		// 		echo '<li>' . $mes . '</li>';
		// }

		foreach($alejandro as $dato => $valor) {
				echo '<li>' . $dato . ': ' . $valor . '</li>';
		}

		?>
    </ul>
</body>

</html>