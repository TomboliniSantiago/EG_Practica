# Ejercitación 1
## Responder el siguiente cuestionario

### 1. ¿Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML, del inglés HyperText Markup Language (Lenguaje de Marcado de Hipertexto), es un lenguaje de marcado utilizado para crear la estructura y el contenido de páginas web. Funciona como un estándar que define cómo se debe estructurar el contenido en una página web y cómo los navegadores deben interpretar y mostrar ese contenido.

Comenzó a desarrollarse en la década de 1990 en el CERN (Organización Europea para la Investigación Nuclear) y experimentó varias revisiones y extensiones. El primer intento, conocido como HTML 2.0, se publicó en 1995. Sin embargo, el avance significativo se logró con HTML 3.2, que se completó en 1997 y estableció un enfoque más pragmático.

Posteriormente, en 1999, se lanzó HTML 4.01, que introdujo mejoras en la estructura y la presentación de las páginas web. Durante este tiempo, hubo una serie de esfuerzos para desarrollar nuevas versiones, pero la estandarización de HTML se estancó durante varios años.

La evolución importante continuó con HTML5, que comenzó a desarrollarse en 2004. HTML5 introdujo muchas características nuevas y significativas, como etiquetas semánticas, reproducción de video y audio nativo, elementos de formulario avanzados y capacidades de gráficos. No fue hasta octubre de 2014 cuando HTML5 se recomendó oficialmente por el World Wide Web Consortium (W3C) como la quinta revisión mayor del estándar HTML.

La versión HTML5 no solo se convirtió en el primer lenguaje de la web, sino que también sentó las bases para el desarrollo moderno de páginas web interactivas y ricas en contenido multimedia.

### 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

Para la creación de documentos con HTML, el W3C recomienda seguir los siguientes principios básicos:

**Estructura:** Es importante utilizar una estructura clara y semántica en el documento HTML, utilizando las etiquetas adecuadas para cada sección y contenido. La estructura debe reflejar la jerarquía y relación entre los diferentes elementos del contenido.

**Separación de presentación y contenido:** El HTML debe utilizarse para definir el contenido y la estructura del documento, mientras que el diseño y la presentación deben ser controlados a través de CSS (Cascading Style Sheets).

**Accesibilidad:** El documento HTML debe ser accesible para todos los usuarios, independientemente de su discapacidad o dispositivo de acceso. Esto incluye el uso de etiquetas adecuadas para describir el contenido, el uso de atributos *alt* en las imágenes, el uso de enlaces de texto descriptivos, entre otros.

**Validación:** Es importante validar el código HTML para asegurarse de que cumple con los estándares definidos por el W3C y que no contiene errores. La validación ayuda a garantizar la interoperabilidad entre diferentes navegadores y dispositivos.

**Optimización:** Es importante optimizar el documento HTML para mejorar su rendimiento y velocidad de carga. Esto incluye el uso de etiquetas semánticas y ligereza en la carga de recursos, entre otros aspectos.

### 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

Los elementos y atributos son “desaprobados” cuando su uso ya no es recomendado, principalmente porque el estándar suele actualizarse y algunos elementos o características del lenguaje son agregadas o removidas. Debido a ello, los autores de documentos HTML son provistos de un mayor número de herramientas cuando un nuevo elemento es agregado, pero también son alentados a desechar aquellos que han sido reemplazados o que se vuelven obsoletos. La decisión de usar elementos desaprobados es librada a consideración del desarrollador.

Un elemento o atributo se considera “obsoleto” cuando oficialmente se declaró que no se deben usar, ya que su uso podría traer errores y problemas en la página web. Su uso no es recomendable.

### 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

El DTD (Documento de Definición de Tipo) es una declaración que define la estructura y las reglas que debe seguir un documento en un lenguaje de marcado, como HTML. Un DTD describe la estructura y los elementos permitidos en un documento HTML, estableciendo reglas para cómo deben organizarse y relacionarse los diferentes elementos.

En la especificación de HTML 4.01, se definen tres tipos de DTDs, cada uno destinado a un propósito específico:

**Strict DTD (DTD Estricto):** Este DTD define una estructura rigurosa y consistente para los documentos HTML. Limita el uso de elementos y atributos a aquellos que cumplen con las normas más estrictas de marcado. El objetivo principal del DTD Estricto es garantizar que los documentos HTML sean lo más coherentes y accesibles posible.

**Transitional DTD (DTD de Transición):** El DTD de Transición es una versión más permisiva que el DTD Estricto. Permite la inclusión de elementos y atributos obsoletos y en desuso, lo que facilita la transición de documentos HTML antiguos hacia estándares más modernos. Es útil para aquellos casos en los que la actualización completa de un documento no es práctica inmediata.

**Frameset DTD (DTD de Marcos):** El DTD de Marcos está destinado a documentos HTML que utilizan marcos (frames) para dividir la página en varias áreas separadas que pueden cargar contenido independiente. Los marcos eran una técnica común en la creación de diseños de sitios web en la época de HTML 4.01.

Estos DTDs proporcionan diferentes niveles de restricciones y flexibilidad en cuanto a la estructura y los elementos que se pueden utilizar en un documento HTML. Los diseñadores y desarrolladores web pueden elegir el DTD que mejor se adapte a sus necesidades y a los estándares que desean seguir en su sitio web.

### 5. ¿Qué son los metadatos y cómo se especifican en HTML?

Los metadatos son información descriptiva y contextual sobre un documento o recurso. En el contexto de las páginas web, los metadatos son datos que proporcionan información adicional sobre el contenido de una página, como su título, autor, descripción, idioma, codificación de caracteres, y más. Estos metadatos ayudan a los motores de búsqueda, navegadores y otros sistemas a comprender y presentar adecuadamente el contenido de la página.

En HTML, los metadatos se especifican utilizando la etiqueta `<meta>`.

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres -->
    <meta name="description" content="Descripción de la página">
    <meta name="keywords" content="palabras clave, para, búsqueda">
    <meta name="author" content="Nombre del autor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
</head>
<body>
    <!-- Contenido de la página -->
</body>
</html>
```