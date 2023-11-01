<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Capital</title>
</head>
<body>
    <?php
        include("conexion_inc.php");
        
        //Captura datos desde el Form anterior
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHab = $_POST['Hab'];
        $vSup = $_POST['Sup'];
        $vTieneMetro = isset($_POST['TieneMetro']);

        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT Count(ciudad) as canti FROM ciudades WHERE ciudad='$vCiudad'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $vCantCapitales = mysqli_fetch_assoc($vResultado);

        
            $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) values ('$vCiudad','$vPais', '$vHab', '$vSup', " . (boolval($vTieneMetro) ? 1 : 0) . ")";
            mysqli_query($link, $vSql) or die (mysqli_error($link));

            echo("La capital fue registrada con éxito<br>");
            echo ("<A href='/ej2/html/Menu.html'>VOLVER AL MENU</A>");
            
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
        
        // Cerrar la conexion
        mysqli_close($link);
    ?>
</body>
</html>