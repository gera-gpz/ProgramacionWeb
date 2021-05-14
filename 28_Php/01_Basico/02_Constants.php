<?php

echo 'Guardan valores fijos que no se pueden modificar<br>';
echo 'No llevan signo de dolar y escriben con mayuscuas<br>';

define("PI",3.1416);

print PI;
print "<br>";
print constant("PI");

?>