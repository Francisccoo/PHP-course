<?php


$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>

<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
			# Mediante el bucle 'foreach' podemos recorrer un array() y mostrar su contenido,
			# y además presentarlo en forma de lista concatenandolo con las etiquetas <li></li>

			foreach($meses as $mes) {
				echo '<li>' . $mes . '</li>';
		}

		?>
    </ul>
</body>

</html>