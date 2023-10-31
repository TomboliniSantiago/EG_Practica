# Ejercicio 4

Si el archivo `datos.php` contiene el código que sigue:

```php
<?php
$color = 'blanco';
$flor = 'clavel';
?>
```

Indicar las salidas que produce el siguiente código. Justificar.

```php
<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?> 
```

## Resolución

La salida que se produce es:

```
El
 El clavel blanco
```

El motivo es que en el primer `echo`, las variables `$flor` y `$color` no están definidas porque todavía no se ha incluido el archivo `datos.php`. En el segundo `echo`, el archivo ya ha sido incluido