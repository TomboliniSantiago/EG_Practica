# Ejercicio 3

## Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

### Código HTML

```html
<p class="desarrollo"> 
    En este primer párrafo trataremos lo siguiente:
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
    Este párrafo debe ser quitado de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p>
    En este otro párrafo trataremos otro tema:<br />
    xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
    Y este es el párrafo más importante de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

### Código CSS

```css
p.quitar {
    color: red;
}

*.desarrollo {
    font-size: 8px;
}

.importante {
    font-size: 20px;
}
```

### Resolución

#### Del código HTML

1. `<p class="desarrollo">`: Esto es una etiqueta de párrafo con la clase "desarrollo" aplicada.

2. `<p class="quitar">`: Otra etiqueta de párrafo con la clase "quitar" aplicada.

3. `<p>`: Una etiqueta de párrafo sin clase.

4. `<p class="importante">`: Una etiqueta de párrafo con la clase "importante" aplicada.

5. `<h1 class="quitar">`: Un encabezado de nivel 1 (h1) con la clase "quitar" aplicada.

6. `<p class="quitar importante">`: Un párrafo con ambas clases "quitar" e "importante" aplicadas.

#### Del código CSS

1. **p.quitar:** Esta regla CSS se aplica a los elementos `<p>` que tienen la clase "quitar". Define una propiedad de estilo `color`, que establece el color de texto en rojo.

2. **\*.desarrollo:** Esta regla CSS utiliza el selector universal (*) seguido de la clase "desarrollo". Esto selecciona cualquier elemento con la clase "desarrollo". Define una propiedad de estilo `font-size`, que establece el tamaño de fuente en 8 píxeles.

3. **.importante:** Esta regla CSS se aplica a cualquier elemento que tenga la clase "importante". Define una propiedad de estilo: `font-size`, que establece el tamaño de fuente en 20 píxeles.