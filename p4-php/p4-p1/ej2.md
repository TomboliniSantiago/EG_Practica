# Ejercicio 2

## Indicar si los siguientes códigos son equivalentes.

### Inciso a

#### Código 1

```php
<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
?>
```

#### Código 2

```php
<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>
```

#### Código 3

```php
<?php
$i = 0;
do {
    print ++$i;
} while ($i < 10);
?>
```

### Resolución

Los códigos son equivalentes, ya que utilizan diferentes estructuras para lograr el mismo resultado: imprimir números del 1 al 10.

### Inciso b

#### Código 1

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>
```

#### Código 2

```php
<?php
for ($i = 1; $i <= 10; print $i, $i++);
?>
```

#### Código 3

```php
<?php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
?>
```

#### Código 4

```php
<?php
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
?>
```

### Resolución

Aunque todos estos códigos son equivalentes, ya que logran imprimir números del 1 al 10, tienen estructuras diferentes y algunos de ellos utilizan prácticas menos comunes en la programación. El primer código es el enfoque más claro y recomendado para este tipo de tarea.

### Inciso c

#### Código 1

```php
<?php
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
?>
```

#### Código 2

```php
<?php
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
?>
```

### Resolución

Ambos códigos hacen lo mismo: comprueban el valor de la variable `$i` y luego imprimen un mensaje correspondiente según el valor de `$i`. La diferencia principal radica en la sintaxis y la estructura de control que utilizan:

El primer código utiliza una serie de declaraciones `if` y `elseif` para realizar la comprobación condicional.

El segundo código utiliza una estructura `switch` para lograr la misma funcionalidad.