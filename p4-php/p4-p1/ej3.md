# Ejercicio 3

## Explicar para qué se utiliza el siguiente código:

### Inciso a

```html
<html>
<head>
    <title>Documento 1</title>
</head>
<body>
    <?php
    echo "<table width='90%' border='1'>";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col; $c++) {
            echo "<td>&nbsp;</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>
</html>
```

El código proporcionado se utiliza para generar una tabla HTML con un número específico de filas y columnas, donde cada celda contiene un espacio en blanco

### Inciso b

```html
<html>
<head>
    <title>Documento 2</title>
</head>
<body>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Edad: <input name="age" size="2">
        <input type="submit" name="submit" value="Ir">
    </form>
    <?php
    } else {
        $age = $_POST['age'];
        if ($age >= 21) {
            echo 'Mayor de edad';
        } else {
            echo 'Menor de edad';
        }
    }
    ?>
</body>
</html>
```

Este código HTML y PHP muestra un formulario que solicita la edad del usuario. Cuando el usuario envía el formulario, se procesa la edad y se muestra un mensaje que indica si el usuario es mayor o menor de edad. Si el formulario no se ha enviado, se muestra el formulario vacío para que el usuario complete su edad.