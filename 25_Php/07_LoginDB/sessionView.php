<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <body>
        <?php
        echo '<pre>';
        print_r($_SESSION);

        var_dump($_SESSION);
        echo '</pre>';
        ?>
    </body>
</html>
