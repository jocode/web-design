# HTML

HTML, sigla en inglés de **HyperText Markup Language**, hace referencia al lenguaje de marcado para la elaboración de páginas web.
Es la estructura básica de un sitio web, es decir, los elementos que conforman una página web. *El HTML le da la estructura a la página web*.

*Ver* [HTML Mozilla Developer Network (MDN)](https://developer.mozilla.org/es/docs/Web/HTML)

La estructura de cómo se escribe HTML es de la siguiente manera. Etiqueta de apertura y etiqueta de cierre. 
Cada etiqueta puede tener unos atributos que describen a esa etiqueta.
```html
<etiqueta atributo="valor">..Contenido..</etiqueta>
```

La estructura básica de un sitio web es la siguiente.

```html 
<!DOCTYPE html> <!-- Indica que es HTML 5 -->
<html lang="es">
<head>
	<meta charset="utf-8"> <!-- Especifica la codificación de las páginas web -->
	<title>Hola Mundo en HTML</title>
</head>
<body>
	Aquí va el contenido del sitio web.
</body>
</html>
```

Los comentarios, es código que el navegador no va a interpretar. En HTML los comentarios se escriben siguiendo la siguiente estructura `<!-- comentario -->`


## Encabezados (`<h1></h1>`)
Indican los títulos y subtítulos de las páginas.
Los encabezados se ordenan de 1 a 6, el primero es más importante y tendrá un tamaño mayor por defecto. Se recomienda sólo dejar un `h1` (Google no lo permite, y está mal es tu SEO "Search Engine Optimization", posicionamiento en buscadores) y respetar e orden en que se escriben.

## Párrafos (`<p></p>`)
Si queremos que la línea sea independiente de otras, podemos especificar que es un párrafo encerrándola con una etiqueta de elemento de párrafo (`<p>`)
Esta etiqueta respeta los espacios entre los textos, los párrafos.

La etiqueta `<br/>` sirve para dar saltos de línea.

## Etiquetas de Texto
Las reglas semánticas sirven para darle una estructura mejor definida al sitio web, esto es fundamental para el posicionamiento en buscadores.
- `<b> </b>` Bold/Negritas SIN importancia semántica
- `<strong></strong>` Bold/Negritas CON importancia semántica
- `<i></i>` Itálica SIN importancia semántica
- `<em></em>` (Énfasis) Itálica CON importancia semántica
- `<small></small>` Agrega texto pequeño
- `<mark></mark>` Agrega texto marcado, con línea amarilla
- `<del></del>` Texto tachado
- `<ins></ins>` Mostrar al usuario que hemos agregado un texto
- `<sub></sub>` Agrega texto pequeño abajo, como subindice
- `<sup></sup>` Agrega Texto pequeño arriba, como superíndice

## Enlaces (`<a href="link"><a>`)
La etiqueta `<a href=""></a>` ancla, y creará un hipervínculo en la parte del texto encerrado entre las etiquetas.
- **href:** El valor de este atributo indica la dirección web a la que se quiera que punte el enlace
- **target:** El atributo target especifica el contexto de navegación que será usado para mostrar el enlace. 
- **title:** El atributo title añade información adicional sobre el enlace, como puede ser el título de la página que estás enlazando. Esta información aparecerá cuando se le pase el ratón por encima.

## Listas (`ul, ol`)
Son un conjunto de elementos ordenados uno debajo de otro 
- **Lista Desordenada**  `<ul></ul>` Son aquellas que no tienen ningún orden
Los elementos de la listas son puestas con `<li></li>`
- **Lista Ordenada** `<ol></ol>` Son listas que están enumeradas, viene del inglés ordered list

Nosotros podemos anidar listas, por ejemplo agregar una lista dentro de otra

## Imágenes (`<img src="">`)
La etiqueta imagen permite cargar imágenes y mostrarlas en el sitio web.
- **src:** El atributo `source` indica el recurso, la ruta en donde se encuentra la imagen, debe tener la extensión del archivo
- **alt:** Es el texto alternativo, en caso de que no se cargue la imagen
- **title** Es el texto de título, aparece cuando el usuario pasa el mouse por encima de la imagen

Es recomendable usar los atributos `alt` y `title`

## Tablas (`<table></table>`)
Son elementos en html que nos permite agregar información de una manera organizada por filas y columnas.

Las tablas se construyen por filas y columnas
La estructura de una tabla es de la siguiente manera
```html
<table>
	<!-- Encabezado de la tabla -->
	<thead>
		<tr>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<!-- Cuerpo de la página -->
	<tbody>
		<!-- Filas -->
		<tr>
			<!-- Columnas -->
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
```

## Formulario (`<form></form>`)
Básicamente en ellos se incluyen los elementos con los que el usuario puede interactuar, como botones, campos de texto, listas de chequeo, etc.

Los atributos del la etiqueta `<form></form>` son los siguientes 
- **action**: Indica hacia que archivo enviará los datos del formulario
- **method**: Establecer por qué vía enviar los datos (Get o Post)

Algunos campos del formulario son:
- **input** `<input />`: Permite ingresar datos en una caja de texto.
	* `name` Indica el nombre del elemento, éste se recibirá como tipo clave => valor en el servidor 
	* `type` Indica el tipo de entrada, el tipo de elemento por ejemplo, de texto, número, contraseña, email, etc.
	* `value` Define un valor por defecto en el elemento 
	* `placeholder` Coloca un texto opaco que se quita al escribir algo. Sirve para especificar los campos de los formularios.
	* `maxlength` Establecemos cuántos caracteres queremos permitir
	* `size` Cambiamos el tamaño de nuestro input
	* `required` Forzamos al usaurios a llenar ese formulario, sirve como validación del lado de cliente
	* `readonly` Nos permite leer sólamente la información
	* `disabled` Deshabilita un campo


Los input de tipo *submit* es un botón, que sirve para enviar los datos del formulario

- **select** `<select></select>` Nos permite escoger una opción de una serie se opciones, como una menú desplegable.

- **label** `<label></label>` Con este elemento podemos agregarle un texto descriptivo a un campo del formulario

- **radio button** `<input type="radio" name="">` Estos elementos nos permiten escoger una sola opción entre muchas. Aquí debemos colocar el nombre igual a la cantidad de opciones que tengamos, para relacionarlas.

- **checkbox** `<input type="checkbox" name="">` Son usados como listas de chequeo, aquí podemos seleccionar muchas opciones a la vez.

- **input password** `<input type="password" name="">` Nos permite crear un campo para contraseña, de esta manera nos oculta la contraseña que digitamos reemplazando los caracteres por puntos

- **input color** `<input type="color">` Nos permite escoger un color en valor hexadecimal

- **input number** `<input type="number" name="">` Este campo de formulario solo nos permite ingresar números 

- **input range** `<input type="range" name="">` Nos muestra una barra para escoger un rango.

- **input url** `<input type="url" name="">` Este campo permite el ingreso de una url, si no es url muesta error.


*Para más información ir a:* [input HTML | MDN](https://developer.mozilla.org/es/docs/Web/HTML/Elemento/input) 

*Para ver qué tecnologías son soportadas por los diferentes navegadores, visitar el sitio web:* [Can I Use](https://caniuse.com)


## Etiquetas para citas (`<blockquote></blockquote>`)
Esta etiqueta nos permite citar algún autor, libro, etc. Lo que hace es agregar espacio a la derecha y a la izquierda.

- **`<hr>`** Esta etiqueta agrega una línea horizontal, separando dos párrafos
- **`<cite></cite>`** Permite agregar una cita, lo que hace es colocar la letra como itálica o cursiva

## Meta Etiquetas
Las etiquetas Meta o meta etiquetas, viene meta de "metainformation" - metainformación. Sirve para aportar información sobre el documento.

- **meta:keywords** `<meta name="keywords" content="tags">` Esta etiquetas nos permite agregar palabras clave a nuestro sitio web, para que pueda ser indexado por algunos buscadores. 
Google antiguamente la usaba para indexar los sitios web, pero actualmente cambiaron el algoritmo de busqueda omitiendo esta etiqueta.

- **meta:description** `<meta name="description" content="Descripción del sitio web">` Esta etiqueta es tenida en cuenta por los buscadores, lo que tienes que colocar en content, es la descripción de lo que és tu sitio web, lo recomendable es no execederse de los 170 caracteres.

- **meta:author** `<meta name="author" content="name author">` Esta etiqueta nos permite establecer el autor del sitio web

- **meta:viewport** `<meta name="viewport"...>` Esta etiqueta es muy importante para indicar que el sitio web es adaptable, aquí se definen los parámetros para que el sitio web tenga un diseño responsivo.

## Atributos id - class
- **id** Me permite agregar un identificador al elemento. Sirve para diferenciar este elementos del resto que tenemos en nuestra página web. Sirve para acceder a los elementos del DOM (Document Object Model)
Es importante colocar el **id una sola vez**

- **class** Con este atributo podemos identificar varios elementos con una característica en especial, por ejemplo, botón de color rojo.

## Audio `<audio></audio>`
Nos permite agregar archivos multimedia de audio que podemos reproducir en los sitios web.
- `controls` Es un atributo de este elemento que nos permite agregar controles al reproductor

## Video `<video></video>`
Esta etiqueta nos permite agregar un vídeo.

## Imágenes SVG (Scalable Vector Graphics) `<svg></svg>`
SVG (Scalable Vector Graphics) es un formato vectorial poco conocido pero muy útil para su uso online por su flexibilidad y por la capacidad de ofrecer gráficos con calidad.
Es parcialmente implementado en los principales navegadores como Firefox, Opera, navegadores WebKit, Internet Explorer y otros.

Para agregar archivos `svg` al navegador lo podemos agregar como imágenes con la etiqueta `<img src="">` o directamente colocando el código svg que tiene la imagen.

> Los archivos Gráficos vectoriales escalables (SVG) son más livianos que los mapas de bits como png, o jpeg

## Etiquetas de maquetado
Son aquellas que nos van a servir de contendedores para las demás etiquetas y elementos.
- **div** `<div></div>` Nos sirve de contenedor para los demas elementos, es un contenedor general. NO tiene sentido semántico

A partir de HTML5 se agregan nuevas etiquetas contenedoras

- **header** `<header></header>` Nos permite agregar el encabezado de nuestra página
- **nav** `<nav></nav>` Se usa para la creación de menús de navegación
- **section** `<section></section>` Establece una sección en nuestro sitio web
- **article** `<article></article>` Nos permite agregar contenido, por ejemplo para identificar un artículo
- **aside** `<aside></aside>` Nos sirve para agregar contenido fuera del contenido principal, por ejemplo barras laterales, etc.
- **footer** `<footer></footer>` Con esta etiqueta nos sirve para indicar el pie de página

Los elementos anteriores son semánticos y, son tenidos en cuenta por los buscadores para hacer el ranking de los sitios web y posicionarlos.

[Ejemplo de etiquetas de maquetado](html/etiquetas-maquetado.html)

> Los Elementos Semanticos son aquellos que definen cual es el contenido que tendran dentro, y le sirven a los buscadores y navegadores web

## Diferencias entre div - section - article 
Todos ellos son contendedores, sin embargo hay una diferencia en la semántica, estos elementos son abstraidos de la realidad, por lo que solo es hacer la analogía para entenderlos mejor.
- `div` Es un contendedor general, sirve para cualquier cosa, pero no me dice que contenido es el que lleva dentro de él, es decir, no me da una referencia al contenido.
- `section` Se definen secciones que tenga nuestro sitio web, por ejemplo la sección trabajos, acerca de o contacto.
- `article` Aquí es importante colocar lo que se refiere a un articulo, productos, etc. De esta manera podemos establecer una mejor coherencia en el contenido de nuestra página web.

## Etiqueta `iframe` y `span`

- **iframe** `<iframe src=""></iframe>` Nos permite agregar (embeber) una página web dentro de otra. 
Esta etiqueta se utiliza en algunos casos por ejemplo para agregar videos de youtube, vimeo, post de twitter e instagram.

- **span** `<span></span>` Esta etiqueta es denominada en línea, es decir no cambia el contenido que la contiene, por ejemplo algun espacio. Se utiliza para darle estilo a algún texto es especial, como un color o algún otro estilo con css.

## Etiqueta `script` y `noscript`

- **noscript** `<noscript></noscript>` Ejecuta o muestra un mensaje, si el usuario no tiene activado javascript.