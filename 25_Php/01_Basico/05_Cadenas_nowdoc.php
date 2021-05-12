<?php

$x= 1000;

$cadenaNowDoc = <<<'LABEL'
Esta es una cadena heredoc<br>
Una cadena heredoc puede ser un parrafo<br>
Con cambios de linea 'comillas internas'<br>
"comillas dobles"<br> 
signos de puntuacion ; ; [] {}@#(@*#)!(#)<br>
incluso variables como $x<br>

EN UNA CADENA nowdoc la variables no seran analizadas<br>
LABEL;
echo $cadenaNowDoc;

?>
