<?php

$texto = ' Hola Carlos ';

# La función htmlspecialchars() permite convertir los carácteres
# especiales de HTML en texto puro, de manera que al renderizarlo
# por el navegador, se mostrarán todos los simbólos y caractéres
# que muestra el valor de la variable insertada.

# Un uso se le puede atribuir para impedir que otros usuarios inyecten
# código dentro de nuestro archivo PHP y así poder malograrlo, o extraer
# información sensible que tengamos puesta.

echo htmlspecialchars($texto);

# trim() nos muestra el valor de la variable sin espacios, de modo
# que, si tenemos una cadena de texto con espacios, esta función los
# suprimirá y nos mostrará el exto sin ellos.

echo trim($texto);


?>