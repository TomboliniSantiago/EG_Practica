<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + 60 * 60 * 24 * 90);
} else {
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="/ej1/estilos/' . $estilo . '.css">';
    } ?>
</head>

<body>
    <h1>Ejercicio 1 - Práctica 7</h1>
    <p>Crear una página que puede configurarse con distintos estilos CSS. El usuario es quien decide qué
        aspecto desea que tenga la página, por medio de un formulario. Luego la página es capaz de
        recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para
        mostrar la web.
    </p>
    <form action="index.php" method="post">
        Aquí puedes seleccionar el estilo que prefieres en la página:
        <br />
        <select name="estilo">
            <option value="verde">Verde</option>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
        </select>
        <input type="submit" value="Actualizar el estilo">
        <br>
        <p>Integrantes del grupo: </p>
        <br>
        <ul>
            <li>Amori, Tomás</li>
            <li>Mayor, Matías</li>
            <li>Tombolini, Santiago</li>
        </ul>
    </form>
</body>

</html>