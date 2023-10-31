# Ejercicio 1

En el siguiente código identificar:

* las variables y su tipo
* los operadores
* las funciones y sus parámetros
* las estructuras de control
* cuál es la salida por pantalla

```php
<?php
function doble($i) {
    return $i * 2;
}

$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if (is_int($d)) {
    $d += 4;
}

if (is_string($a)) {
    echo "Cadena: $a";
}

$d = $a ? ++$d : $d * 3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f, $g;
?>
```

## Resolución

```php
<?php
function doble($i) { // Declaración de una función llamada "doble" con un parámetro $i
    return $i * 2;  // La función devuelve el doble del parámetro $i
}

$a = TRUE;         // Variable $a de tipo boolean
$b = "xyz";        // Variable $b de tipo string
$c = 'xyz';        // Variable $c de tipo string
$d = 12;           // Variable $d de tipo entero
echo gettype($a);  // Muestra el tipo de $a
echo gettype($b);  // Muestra el tipo de $b
echo gettype($c);  // Muestra el tipo de $c
echo gettype($d);  // Muestra el tipo de $d

if (is_int($d)) {   // Verifica si $d es de tipo entero
    $d += 4;        // Incrementa $d en 4 si es de tipo entero
}

if (is_string($a)) {  // Verifica si $a es de tipo string
    echo "Cadena: $a";  // Muestra un mensaje si $a es de tipo string
}

$d = $a ? ++$d : $d * 3;  // Operador ternario: Incrementa $d si $a es TRUE, de lo contrario multiplica $d por 3
$f = doble($d++);  // Llama a la función "doble" con un post-incremento de $d
$g = $f += 10;      // Realiza una operación de asignación y adición
echo $a, $b, $c, $d, $f, $g;  // Muestra varias variables en pantalla
?>
```

La salida por pantalla es:

```
booleanstringstringinteger1xyzxyz184444
```