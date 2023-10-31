# Ejercicio 1

Indicar si los siguientes códigos son equivalentes.

## Código 1

```php
<?php
$a = array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);
?>
```

## Código 2

```php
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>
```

## Resolución

Los códigos que se muestran no son equivalentes, dado que en el segundo código, al asignar el valor 4 a una posición vacía, no se sabe en qué posición estamos agregando dicho número.