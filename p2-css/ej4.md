# Ejercicio 4

Dadas las siguientes declaraciones:

```css
* {
    color: green;
}

a:link {
    color: gray;
}

a:visited {
    color: blue;
}

a:hover {
    color: fuchsia;
}

a:active {
    color: red;
}

p {
    font-family: arial, helvetica;
    font-size: 10px;
    color: black;
}

.contenido {
    font-size: 14px;
    font-weight: bold;
}
```

Analizar los siguientes códigos y comparar sus efectos. Explicar:

## Código 1

```html
<body>
    <p class="contenido" style="font-weight: normal;">
        Este es un texto ...............
    </p>
    <table>
        <tr>
            <td>Y esta es una tabla.......</td>
        </tr>
        <tr>
            <td><a href="http://www.google.com.ar">con un enlace</a></td>
        </tr>
    </table>
</body>
```

## Código 2

```html
<body class="contenido">
    <p> Este es un texto................</p>
    <table>
        <tr>
            <td>Y esta es una tabla.......</td>
        </tr>
        <tr>
            <td><a href="http://www.google.com.ar">con un enlace</a></td>
        </tr>
    </table>
</body>
```

En el código 1, el párrafo tiene la clase "contenido" y se aplica un estilo en línea `style="font-weight: normal;"` que establece la densidad de la fuente en "normal", en donde: 
* El texto dentro del párrafo `<p>` tiene un color verde debido a la declaración `* {color:green;}` y un tamaño de fuente de 14px (definido por `.contenido`), pero la densidad de la fuente se establece en "normal" debido al estilo en línea, lo que anula el texto en negrita definido en la clase mencionada.

En el código 2, el `<body>` tiene la clase "contenido", y el párrafo no tiene una clase adicional, en donde: 
* El `<body>` tiene un color de texto verde debido a la declaración `*{color:green;}`.
* El párrafo `<p>` tiene un tamaño de fuente de 14px y una fuente en negrita debido a la clase `contenido` definida. 

Puntualmente comparando los códigos tenemos que: 
* Ambos códigos tienen un tamaño de fuente de 14px y un color de texto verde para el contenido dentro del cuerpo debido a la declaración `* {color:green;}`. 
* Sin embargo, en el código 1, el párrafo tiene su densidad de fuente anulada y se establece en "normal" debido al estilo en línea `style="font-weight: normal;"`, mientras que en el código 2, el párrafo mantiene su negrita debido a la clase "contenido" dentro del `<body>`.