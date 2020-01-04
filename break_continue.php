<?php


$paises = array(
	'Mexico', 'España', 'Colombia', 'Peru',
	'Argentina', 'Venezuela', 'Guatemala'
);

sort($paises);

foreach($paises as $pais) {
	
	if($pais == 'España') {
		break;
	}

	echo $pais . '<br />';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Paises Latinoamericanos</h1>
    <?php

	foreach($paises as $pais) {

		if($pais == 'España') {
		continue;
	  }

	  echo $pais . '<br />';
	} 
?>
</body>

</html>