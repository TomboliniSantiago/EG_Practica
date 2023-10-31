# Ejercitación 3

En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

## Inciso a

```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
<a href="#">Click aquí para ir a Google</a>
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>
```

* La primera línea define un hipervínculo a la página de Google que se abre en la misma pestaña.
* La segunda línea es similar a la primera, pero se abre en una pestaña nueva.
* La tercera línea es también un enlace a la página de Google, aunque con atributos que informan sobre distintas características de dicha página. Sin embargo, al no tener un tag de cierre y, por ende, nada entre sus tags, no es posible visualizar el enlace ni tampoco clickear el mismo.
* La cuarta línea es similar en apariencia a las primeras pero en este caso, no está vinculada a ninguna página en particular y es un enlace "vacío".
* La quinta línea es un enlace de tipo ancla que enlaza a la sección de la misma página cuyo atributo *name* es “arriba”.
* La sexta línea crea un anclaje con el nombre “arriba” y el identificador “arriba”. Puede ser utilizado como destino para los enlaces que tienen `href=”#arriba”` (como en el caso anterior) para permitir a los usuarios volver rápidamente al principio de la página. Sin embargo, en HTML5, se recomienda usar el atributo *id* en lugar del atributo *name*.

## Inciso b

```html
<p>
    <img src="im1.jpg" alt="imagen1" />
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a>
    Click aquí
</p>
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
        Click aquí
    </a>
</p>
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a>
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```

* Párrafo con una imágen y un enlace a la página de Google cuyo texto es “Click aquí”.
* Párrafo con una imágen que enlaza a la página de Google y el texto “Click aquí” a su derecha.
* Párrafo con un enlace a la página de Google que contiene una imagen y el texto “Click aquí”.
* Párrafo con 2 enlaces a la página de Google, uno es una imagen y el otro el texto “Click aquí”.

## Inciso c

```html
<ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>
```

El segmento de código anterior representa una lista no ordenada con 3 ítems.

```html
<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>
```

El segmento de código anterior representa una lista ordenada con 3 ítems.

```html
<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li value="3">zzz</li>
</ol>
```

El segmento de código anterior representa 3 listas ordenadas con un ítem cada una. Al segundo y al tercero se les asigna un valor (número en la lista) para que la numeración de las 3 listas sea complementaria, asemejándose a una sola lista.

```html
<blockquote>
    <p>
        1. xxx<br />
        2. yyy<br />
        3. zzz
    </p>
</blockquote>
```

Blockquote que, utilizando un párrafo y saltos de línea, se ve similar a la lista ordenada del segundo segmento de código.

## Inciso d

```html
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```

Tabla de 2x2 con cabecera declarada para las columnas, borde de 1 pixel y ancho de 300 pixeles.

```html
<table border="1" width="300">
    <tr>
        <td>
            <div align="center">
                <strong>Columna 1</strong>
            </div>
        </td>
        <td>
            <div align="center">
                <strong>Columna 2</strong>
            </div>
        </td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```

Tabla de 2x2 igual a la anterior con la excepción de que no tiene cabecera declarada sino que usa celdas comunes centradas y en negrita para que se vean similares.

## Inciso e

```html
<table width="200">
    <caption>
        Título
    </caption>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Tabla de 3x2 con título declarado utilizando la etiqueta `<caption>` y ancho de 200 pixeles.

```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Tabla de 3x2 similar a la anterior con la excepción de que no tiene un título declarado con `<caption>`, sino que utiliza las 3 celdas de la primera fila y texto centrado para que tenga la misma apariencia.

## Inciso f

```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Tabla idéntica a la segunda del inciso e pero cuya primera columna tiene sus dos filas unidas.

```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Tabla idéntica a la segunda del inciso e pero cuya primera fila tiene sus 2 primeras columnas unidas.

## Inciso g

```html
<table width="200" border="1">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```

Tabla con borde de 1 pixel y ancho de 200 pixeles.

```html
<table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```

Tabla con borde de 1 pixel y ancho de 200 pixeles pero sin espacio entre bordes y entre bordes y contenidos de celda.

## Inciso h

```html
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
        Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
    </fieldset>
    <input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
```

Formulario de login que realiza un POST a “procesar.php”, posee un campo *usuario* (que por defecto tiene el valor xxx) y un campo *contraseña* (que por defecto tiene el valor xxx y muestra lo ingresado con asteriscos). Además, posee un botón del tipo submit que posee como texto “enviar”. Se encuentra recuadrado y tiene la leyenda “LOGIN”.

```html
<form id="form2" name="form2" action="" method="get" target="_blank">
    LOGIN<br />
    <label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
    <label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
```

Formulario similar al anterior en apariencia. Difiere en que no se encuentra recuadrado y no tiene valores por defecto. No oculta la contraseña con asteriscos. Además no tiene leyenda, sino un texto con un salto de línea. Al enviarlo no realiza ninguna acción.

```html
<form id="form3" name="form3" action="mailto:xx@xx.com" enctype="text/plain" method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu3" name="usu3" /><br />
        Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
    <input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>
```

Formulario similar al primero. Difiere en que no tiene valores por defecto. El botón no envía el formulario sino que borra (o resetea) los valores de ambos campos. Además, en caso de poder ser enviado, el formulario se procesaría como un mail a `xx@xx.com`.

## Inciso i

```html
<label>Botón 1
    <button type="button" name="boton1" id="boton1">
        <img src="logo.jpg" alt="Botón con imagen" width="30" height="20" /><br />
        <b>CLICK AQUÍ</b>
    </button>
</label>
```

Botón etiquetado e incluido dentro de un label “Botón 1”, con una imágen en un texto en negrita “CLICK AQUÍ”.

```html
<label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```

Botón etiquetado e incluido dentro de un label “Botón 2”, solo con el texto “CLICK AQUÍ”.

## Inciso j

```html
<p>
    <label>
        <input type="radio" name="opcion" id="X" value="X" />
        X
    </label>
    <br />
    <label>
        <input type="radio" name="opcion" id="Y" value="Y" />
        Y
    </label>
</p>
```

Párrafo con un grupo de radio buttons de 2 opciones etiquetadas con un label.

```html
<p>
    <label>
        <input type="radio" name="opcion1" id="X" value="X" />
        X
    </label>
    <br />
    <label>
        <input type="radio" name="opcion2" id="Y" value="Y" />
        Y
    </label>
</p>
```

Párrafo similar al anterior con la excepción de que las opciones pertenecen a grupos de radio buttons distintos (difieren en el atributo *name*). Por este motivo, pueden seleccionarse ambos.

## Inciso k

```html
<select name="lista">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
```

Select que se visualiza como una lista desplegable y permite seleccionar solo una opción.

```html
<select name="lista[]" multiple="multiple">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
```

Select que se visualiza como una lista scrollable y permite seleccionar varias opciones.
