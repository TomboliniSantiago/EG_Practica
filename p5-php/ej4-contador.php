<?php
    session_start();
?>
<html>
    <body>
        <a href="ej4-index.php"></a>
        <?php
            echo "Usted ha visitado " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <br>
        <a href="ej4-index.php">Volver a la página principal</a>
    </body>
</html>