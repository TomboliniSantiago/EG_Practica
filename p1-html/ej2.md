# Ejercitación 2

HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos). Cada tag puede tener atributos (proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un script que se ejecuta cuando el evento ocurre). Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos (nombre y valor), aclarando si es obligatorio.

## Inciso a


```html
<!-- Código controlado el día 12/08/2009 -->
```

El segmento de código que se muestra es un comentario. Puede ser colocado en cualquier sección del documento HTML ya que su principal utilidad es que los programadores puedan dejar anotaciones o notas para sus compañeros o para ellos mismos y visualizarlas más tarde. Además, es una buena práctica dejar comentarios a lo largo del código explicando, por ejemplo, qué parte de una página web representa una sección del mismo. En los comentarios únicamente se utilizan etiquetas de apertura (&lt;!--) y de cierre (--&gt;).

## Inciso b

```html
<div id="bloque1">Contenido del bloque1</div>
```

El segmento de código que se muestra es un `<div>`, también llamado elemento de bloque. La ubicación más común para colocarlo es el `<body>` del documento HTML. Sus principales funciones son:

* Estructurar y agrupar el contenido: El `<div>` permite dividir el contenido en secciones lógicas y estructuradas. Se pueden agrupar elementos relacionados dentro de un `<div>`, lo que hace que sea más fácil aplicar estilos y efectos a todos esos elementos a la vez.
* Estilización: Al asignar clases o identificadores a los `<div>`, se pueden aplicar estilos utilizando hojas de estilo en cascada (CSS). Esto permite controlar la apariencia y el diseño de los elementos contenidos en el `<div>`.

Se utiliza con la etiqueta de apertura `<div>` y la etiqueta de cierre `</div>`. Dentro de la etiqueta de apertura se pueden colocar varios atributos, como en el caso del ejemplo se colocó el atributo "id" que, aunque no es obligatorio, nos permite identificar el elemento con el que estamos trabajando.

## Inciso c

```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm"/>
```

El segmento de código que se muestra es una etiqueta para insertar una imagen con varios atributos que se describen en detalle a continuación. Este segmento es versátil y puede ser utilizado en diversas partes del código, tales como el `body`, `header` o `footer`.

El atributo obligatorio es *src*, en el cual se proporciona la ruta o URL de la imagen que se desea mostrar. Sin este atributo, la imagen no se visualizará. El atributo *src* también se utiliza como valor por defecto para la descripción de la imagen si el atributo *alt* no está presente.

Los demás atributos son opcionales, y a continuación, explicaremos la función de cada uno:

* *alt*: Se utiliza para suministrar una descripción alternativa de la imagen. Esto es útil cuando la imagen no puede cargarse, cuando un usuario utiliza un lector de pantalla o cuando la carga de imágenes está desactivada en el navegador. En el ejemplo proporcionado, el valor del atributo *alt* es "lugar imagen", pero es recomendable proporcionar una descripción más precisa del contenido de la imagen.
* *id*: Este atributo proporciona a la imagen un identificador único. Esto permite hacer referencia específica a dicho elemento dentro del documento, en hojas de estilo o en scripts. Cada ID debe ser único dentro del documento.
* *name*: Aunque se menciona en el ejemplo, el atributo name no tiene significado ni funcionalidad dentro de una etiqueta de imagen. Este atributo se emplea en otros elementos HTML, como `<input>`, `<select>` o `<textarea>`, para especificar nombres para esos elementos.
* *width*: Este atributo determina el ancho de la imagen en píxeles. Proporciona información al navegador sobre las dimensiones reales de la imagen antes de cargarla, reservando así el espacio adecuado para mostrarla.
* *height*: El atributo *height* establece la altura de la imagen en píxeles, permitiendo controlar el tamaño de la imagen en la presentación visual de la página web.
* *longdesc*: Aunque se menciona en el ejemplo, el atributo *longdesc* no es ampliamente soportado por los navegadores modernos y su uso se ha vuelto menos común. Si queremos brindar descripciones detalladas, lo mejor será utilizar otros enfoques, como elementos `<figcaption>` en combinación con la etiqueta `<figure>`.

## Inciso d

```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

Puede ser colocado en la sección `<head>` de una página. Estas etiquetas son invisibles para los lectores, pero permiten transmitir metadatos a través de la página web para describirla con mayor detalle. Por ejemplo, es posible proporcionar información sobre el autor, una descripción de la página, palabras clave relevantes, entre otros aspectos.

La etiqueta `<meta>` es de apertura y no necesita una etiqueta de cierre si se coloca una barra inclinada antes del símbolo "&gt;", por ejemplo `/>`.

* El atributo *name* indica el tipo de información que se está proporcionando. Por lo general, se usa con valores predefinidos, aunque no es obligatorio mantenerse dentro de esa lista. Si no se utiliza su reemplazo *http-equiv*, el atributo *name* es obligatorio. En este caso, se le asigna el valor "keywords", lo que implica la especificación de palabras clave.
* El atributo *lang* indica el idioma del texto o la sección a la que se aplica. El valor asignado determinará el idioma. Usualmente, se utiliza para mejorar la búsqueda, las traducciones y la lectura de las páginas. En este caso, se establece el idioma como español ("es").
* El atributo *content* se usa junto con el atributo *name* para indicar el contenido de la información definida por este último. Es obligatorio. Dado que el atributo *name* implica la especificación de palabras clave, el contenido de *content* en este caso es una lista de palabras clave.
* El atributo *http-equiv* a menudo se usa como reemplazo del atributo *name*. Los servidores HTTP utilizan este atributo para obtener información sobre los encabezados de las respuestas HTTP. El valor asignado en este caso es "expires", lo que implica la determinación de un tiempo (en segundos) o una fecha después del cual la caché se borrará del servidor. Esto se usa si no se quiere evitar por completo el almacenamiento en caché. A través del atributo *content*, se proporciona una fecha específica, después de la cual se eliminará la caché.

## Inciso e

```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>
```

Este código representa un hipervínculo, que puede ser utilizado en el cuerpo del documento, junto a una imagen o texto. Al hacer clic en el texto o imagen dentro de esta etiqueta, se redirigirá el navegador a la página especificada en el enlace.

La etiqueta `<a>` es la etiqueta de apertura, y `</a>` es la etiqueta de cierre, que delimitan el contenido que actúa como enlace.

* El atributo *href* determina la dirección web a la que se dirigirá el lector al hacer clic en el texto. El valor asignado a este atributo es la ruta hacia la página, correo electrónico, archivo local, u otro recurso. Es un atributo obligatorio.
* El atributo *type* se utiliza para especificar el tipo de contenido del enlace. En este caso, se le asigna el valor "text/html".
* El atributo *hreflang* se utiliza para indicar el idioma del documento o página enlazada. En este ejemplo, se establece el idioma como español ("es").
* El atributo *charset* permite definir la codificación de caracteres del documento al que se enlaza. Es importante mencionar que, en HTML5, la definición de la codificación se realiza en el documento mismo, y este atributo está obsoleto. En este caso, se le asigna el valor "utf-8".
* El atributo *rel* permite definir la relación entre la página actual y la página enlazada. En este caso, se le otorga el valor "help".
* "Resumen HTML" es el texto que aparecerá en la pantalla y al cual se le aplica el hipervínculo. Al hacer clic en este texto, el navegador nos redirigirá a la página especificada en el atributo *href*.

## Inciso f

```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

La etiqueta `<table>` es la etiqueta de apertura de la tabla, y `</table>` es la etiqueta de cierre.

* El atributo *width* permite definir el ancho de la tabla en píxeles. En este caso, se le asigna el valor de 200.
* El atributo *summary* se utiliza para proporcionar un resumen del contenido de la tabla. Esto es especialmente útil para usuarios no visuales, como aquellos que utilizan lectores de pantalla. El resumen definido en este atributo se leerá en el lector de pantalla.
* La etiqueta `<caption>` se utiliza para definir un título pequeño para la tabla. Aunque no es obligatoria, puede proporcionar contexto adicional.
El atributo *align* en `<caption>` permite alinear el título. Sin embargo, es importante señalar que este atributo ha sido desaprobado en HTML4. En este caso, se le asigna el valor "top".
* La etiqueta `<tr>` se utiliza para definir una fila de celdas. `<tr>` es la etiqueta de apertura, y `</tr>` es la etiqueta de cierre.
* La etiqueta `<th>` se utiliza para crear encabezados en la tabla. Las celdas de encabezado se escriben en negrita y se centran automáticamente, sin necesidad de indicarlo.
* El atributo *scope* en `<th>` permite definir a qué conjunto de celdas se aplica un encabezado. Puede tomar valores como "row", "col", "rowgroup" y "colgroup".
* La etiqueta *<td>* se utiliza para definir celdas de datos regulares en la tabla.