<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        session_unset();    //Remover variables de sesión
        session_destroy();  //Destruir la sesión
        ?>
    </body>
</html>