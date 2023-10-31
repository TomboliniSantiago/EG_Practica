# Ejercicio 2

## Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

### Código HTML

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado">
    <tr>
        <td>Esta es una tabla</td>
    </tr>
</table>
<p id="distinto">Este es el último párrafo</p>
```

### Código CSS

```css
p#normal {
    font-family: arial,helvetica;
    font-size: 11px;
    font-weight: bold;
}

*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}

#distinto {
    background-color: #9EC7EB;
    color: red;
}
```

### Resolución

1. **p#normal:** Esta regla CSS se aplica a los elementos `<p>` que tienen un atributo *id* igual a "normal". Define tres propiedades de estilo: `font-family`, `font-size`, y `font-weight`. Esto cambiará la fuente, el tamaño y aplicará un estilo de texto en negrita al párrafo con `id="normal"`.

2. **\*#destacado:** Esta regla CSS se aplica a todos los elementos que tienen un atributo *id* igual a "destacado", independientemente de su tipo. Define tres propiedades de estilo relacionadas con el borde del elemento (`border-style`, `border-color` y `border-width`). Esto agregará un borde sólido azul con un ancho de 2 píxeles a cualquier elemento con `id="destacado"`.

3. **#distinto:** Esta regla CSS se aplica a los elementos que tienen un atributo *id* igual a "distinto". Define dos propiedades de estilo: `background-color` y `color`. Esto cambiará el color de fondo y el color del texto para el elemento con `id="distinto"`.