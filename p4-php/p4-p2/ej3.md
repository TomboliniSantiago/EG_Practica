# Ejercicio 3

En cada caso, indicar las salidas correspondientes:

## Inciso a

```php
<?php
$fun = getdate();
echo "Has entrado en esta página a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```

### Salida

```
Has entrado en esta página a las 0 horas, con 49 minutos y 4 segundos, del 26/9/2023
```

## Inciso b

```php
<?php
function sumar($sumando1, $sumando2) {
    $suma = $sumando1 + $sumando2;
    echo $sumando1 . "+" . $sumando2 . "=" . $suma;
}
sumar(5, 6);
?>
```

### Salida

```
5+6=11
```