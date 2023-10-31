<?php
    session_start();
?>

<html>
    <body>
        <?php
            if (!isset($_SESSION["count"])) {
                $_SESSION["count"] = 1;
            } else {
                $_SESSION["count"]++;
            } 
        ?>
        <a href="ej4-contador.html">Contador de visitas</a>
    </body>
</html>
