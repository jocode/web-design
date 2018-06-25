# CSS (Cascading Style Sheets)

Las Hojas de Estilo en Cascada (del inglés Cascading Style Sheets) o CSS es el lenguaje utilizado para describir la presentación de documentos HTML o XML, esto incluye varios lenguajes basados en XML como son XHTML o SVG. CSS describe como debe ser renderizado el elemento estructurado en pantalla, en papel, hablado o en otros medios.

Mientras que HTML se utiliza para definir la estructura y la semántica del contenido, CSS se usa para darle estilo y posicionarlo visualmente. CSS se puede usar, por ejemplo, para cambiar la fuente, el color, el tamaño y el espaciado del contenido, para formar multiples columnas, añadir animaciones y otros elementos decorativos.

## Relacionando archivos css en HTML 
Para cargar o relacionar los archivos css a nuestra página web, debemos usar una etiqueta llamada `link`, esta nos permite obtener los estilos que se van a aplicar a los elementos de nuestra página.
```html 
<link rel="stylesheet" type="text/css" href="estilos.css">
```
Aquí le indicamos los atributos:
- **rel** Archivo a relacionar (Hojas de estilo)
- **type** Tipo se archivo que se utilizará 
- **href** Indicamos la ruta donde se encuentra el archivo

Hay otra forma de incluir los estilos directamente en la página web, haciendo uso de la etiqueta `<style type="text/css"></style>`. Dentro de ella podemos incluir todos los estilos que deseemos.

Si queremos incluir estilos directamente a un elemento HTML, podemos hacer uso de la propiedad `style`, y dentro de ella podemos colocar los estilos.

## Anatomía de una regla CSS

<img src="https://mdn.mozillademos.org/files/11925/csspartes.png" alt="drawing" width="400px" alt="Anatomía de una regla CSS" title="Anatomía de una regla CSS" />

*Tomada de MDN*

La estructura completa es llamada regla predeterminada (pero a menudo "regla" para abreviar). Nota también los nombres de las partes individuales:

**Selector**
    El elemento HTML en el que comienza la regla. esta selecciona el(los) elemento(s) a dar estilo (en este caso, los elementos p ). Para dar estilo a un elemento diferente, solo cambia el selector.
**Declaración**
    Una sola regla como color: red; especifica a cuál de las propiedades del elemento quieres dar estilo.
**Propiedades**
    Maneras en las cuales puedes dar estilo a un elemento HTML. (En este caso, color es una propiedad del elemento p.) En CSS, seleccionas que propiedad quieres afectar en tu regla.
**Valor de la propiedad**
    A la derecha de la propiedad, después de los dos puntos (:), tenemos el valor de la propiedad, para elegir una de las muchas posibles apariencias para una propiedad determinada (hay muchos valores para color además de red). 

*Para más información ver* [Introducción a CSS MDN](https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/CSS_basics)

## Selectores 

- **Selector Universal** `*` Este selector afecta a todos los elementos de la página web
- **Selectores de etiqueta** `h1, p, div` Afecta a sólo las etiquetas HTML que definamos, por ejemplo `a`
```css 
a {
	color: green;
}
```
Se pueden usar el mismo estilo a varias etiquetas, separándolas por coma `,`. Por ejemplo 
```css 
h1, h2, h3 {
	color: red;
}
```
- **Selector descendente** `div article p { }` Permite seleccionar elementos que estén dentro de otro. 

- **Sector de clase** `.class { }` Aplica cambios de estilo, a todos los elementos que pertenezcan a una clase

- **Selectores por id** `#idElemento { }` Aplica los cambios al elemento que tenga ese identificador. 

> Recomendación: NUNCA usar los ids en CSS, en vez de ellos usar las CLASES para CSS. El id, nunca se debe repetir porque está pensado para ser único, que lo identifique de los demás. El id, es útil para JavaScript.

## Selectores Avanzados
- **Selectores de hijos** `div > p { }` Afecta sólo a los elementos (hijos) que estén contenidos dentro de ese selector. En este caso sólo cambiará estilos a los párrafos que sean hijos directos de div.

- **Selectores de atributos** `input[type]{  }`  y `input[type="text"]{  }` Selecciona a los elementos en los que le especifiquemos lo atributos

_**Herencia**_ Los estilos que se apliquen a un selector padre afectarán a todos los selectores que los contengan. Por ejemplo, si yo le coloco un `color: blue` al `body` todos los textos serán de color azul, a menos que alguno de ellos tenga sus propios estilos.

## Propiedades  CSS - Fondos

- **background** Esta propiedad nos permite agregar fondos
- **background-repeat** Establece si queremos repetir un background, por defecto es `repeat`.
`background: repeat | no-repeat | repeat-x | repeat-y;`
- **background-size** Establece el tamaño del fondo
`background-size: auto | 100px 100px | 100% 100% | cover | contain;`
- **background-attachment** Establece si el fondo se puede hacer scroll o sólo el contenido
`background-attachment: scroll | fixed ;`
- **background-position** Modifica la posición de nuestro fondo
`background-position: center center | 100px 100px` *(horizontal vertical)*

Generalmente las imágenes tienen un peso considerable, por eso, hay una opción que es tomar una imagen pequeña y hacer un truco, que consiste en repetir `repeat` esa imagen y con eso, tenemos un diseño bonito como fondo.
Una página muy útil para esos patrones repetitivos es [Subtle Patterns](https://www.toptal.com/designers/subtlepatterns/)

## Gradientes 
Los gradientes o degradados son colores que van tomando un tono o saturación diferente en alguna dirección formando llamativas figuras visuales.
Los gradientes se usan usando la propiedad `background` en css. De la siguiente manera:
```css
background: linear-gradient(to bottom, #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
```
Hay varias páginas que generar gradientes es CSS, *puede buscar CSS gradient generator*. Un página de esas que puedes usar es [Colorzilla](http://www.colorzilla.com/gradient-editor/)

## Enlaces
Con CSS le podemos cambiar la tipografía, el tamaño, el color, etc. a los enlaces
Con la propiedad `text-decoration: none;` le quitamos el subrayado a los enlaces.

Las **pseudoclases** nos permiten darle estilos dependiendo del estado del elemento.
- **hover** `a:hover {}` Aplica los estilos cuando pasamos el mouse por encima de un enlace
- **link** `a:link {}` Aplica estilos a enlaces que no hemos visitado.
- **visited** `a:visited {}` Aplica estilos a enlaces que ya hayan sido visitados.
- **active** `a:active {}` Estado de un enlace cuando estemos dando clic. 

## Texto y tipografía
Para cambiar la tipografía con css usamos la propiedad `font-family`. Lo ideal es colocar varias familias separadas por coma, en caso de que no cargue una, pueda cargar la siguiente.
*Los nombres de familias de fuentes que lleven espacio, deben ser encerradas entre comillas ("Comic Sans MS")*

Las propiedades más utilizadas en CSS para texto son:
```css 
font-weight: bold;
font-size: 2em;
color: #4281ed;
text-align: left;
text-decoration: underline;
text-transform: uppercase; /*  uppercase | lowercase | capitalize */
letter-spacing: 0px; /*Espaciado entre letras*/
line-height: 20px; /*Espaciado entre líneas*/
```

## Unidades de Medida
Las unidades de medida en el diseño web, son así como los cm, m, mm en la vida real.
- Unidades Relativas
	* **px** - pixel
	* **em** - Relativa al tamaño de fuente que tenga su elemento padre o el mas cercano
	* **rem** - Relativa al tamaño de fuente especificado en el body.
	* **%** - porcentaje

- Unidades Abosultas
	Estas medidas nunca las vas a usar en el diseño web, pero aqui estan para que las conozcas
	* **in** - inches (pulgadas)
	* **cm**  - centimetros
	* **mm**  - milimetros

Por defecto el navegador web, nos pone un tamaño de letra de `16px` en el `body`
> Es recomendable usar las medidas relativas para tener una sóla medida en base al tamaño del body. 

## Unidades de Color
Los colores los podemos colocar en valores hexadecimales o palabras clave.

- Hay 17 palabras clave que podemos usar:
	aqua, black, blue, fuchsia, gray, green, lime, maroon, navy, 
	olive, orange, purple, red, silver, teal, white, yellow

- RGB Decimal: rgb(215, 38, 61)

- RGB Porcentual: rgb(84%, 15%, 24%)

- RGB Hexadecimal: #D7263D

- RGBA: Con este color le damos la transparencia **a = alpha**. La transparencia toma valores de 0 - 1 `rgba(84, 23, 67, 0.8)`. Esta opacidad es de solo el color

## Modelo de caja
Cómo tratamos los elementos para modificar diferentes propiedades como el ancho, el alto, márgenes, etc.
- **Margen interno** `padding`
	`padding: 20px; /*vertical horizontal (2 valores)*/`
- **Margen externo** `margin`
	`margin: 20px; /*vertical horizontal (2 valores)*/`
- **Borde** `border`
	`border: 5px solid green; /*grosor tipo-borde color*/ `

## Tipos de Elementos 
- **Elementos de Tipo Bloque** `display: block` Son aquellos que abarcan el 100% del ancho que tengan disponible.

Los elementos de tipo bloque no pueden tener elementos a su lado por defecto.

- **Elementos de Tipo Línea**  `display: inline` Sólo abarcan el espacio que necesitan.

A los elementos de tipo línea NO le podemos dar valores como `padding, height, width` porque van a abarcar espacio de otros elementos

* Algunos elementos "inline"
    a, span, img, b, i, small, cite, code,
    em, strong, br, script, button, 
    input, label, select, textarea.


* Algunos elementos "block"
	div, article, section, header
	footer, aside, table, p, video,
	ul, ol, h1, h2, h3, h4, h5, h6

La propiedad **display** nos permite modificar la forma de cómo están ubicados los elementos.
```css 
display: inline; /* block | inline | flex | table | inline-block | initial | inherit | all | inline-flex | inline-table */
```

## Diseñando botones
Hay una página para generar una paleta de colores. [Coolors](https://coolors.co/)
En este ejercicio, hemos diseñado unos [Botones](botones.html), usando css y usando la paleta de colores que buscamos en la página mencionada.

## Posicionamiento de cajas `position: static;`
Nosotros podemos ubicar las cajas en la pantalla haciendo uso de algunas propiedades como:

- Tipos de Posicionamiento:
	- **Normal `(static)`**: Posicionamiento por defecto con el que los navegadores acomodan los elementos
	- **Relativo `(relative)`**: Nos permite posicionar una caja y despues moverla desde su lugar original.
	- **Abosluto `(absolute)`**: Nos permite posicionar una caja respecto a su contenedor y el resto de elementos ignoran la nueva posicion.
	- **Fijo `(fixed)`**: Nos permite posicionar una caja en donde su posicion respecto a la pantalla del usuario siempre va a ser la misma.
	- **Flotante `(float)`**: Nos permite desplazar las cajas todo lo posible hacia la derecha o izquierda.


- Las propiedades para posicionamiento son:
	- `top: 100px`
	- `bottom: 100px`
	- `right: 100px`
	- `left: 100px`

Con los valores que le demos a estas propiedades podemos desplazar las cajas.

> Si se tiene una caja Padre con posición relative, y dentro una caja hija con posición absolute, podemos acomodar la caja hija en el espacio de la caja padre.

Para poner una caja a un lado de otra cuando son de tipo bloque, usamos la propiedad **float** y podemos darle dirección `float: right | left`.  De esta manera están construidos muchos sitios web, en los que seccionan cada elemento como columnas.

## Posicionamiento flotante `float: left | right`
La propiedad **float** Se creó para colocar texto alrededor de la imagen, no para maquetar sitios web. Sim embargo ha sido utilizada para organizar el contenido web usando la propiedad `float`.

Si queremos organizar las cajas en un contenedor, debemos crear un contenedor y colocarle una propiedad llamada **overflow** con el valor **hidden** `overflow: hidden;` de esta manera solucionamos un error, que es no mostrar el fondo del contendor padre al organizar las cajas con la propiedades **float**
Un ejemplo lo podemos ver en el ejemplo [posicionamiento-flotante.html](posicionamiento-flotante.html)

## Visualización
¿Cómo se verán los elementos en la página (Ocultar)?

- **display** `display: block;` Esta propiedad, permite ocultar y quitar  los espacios (NO PERMANECEN) que ocupaban los elementos.

- **visibility** `visibility: hidden;` Con esta propiedad ocultamos los elementos pero se PERMANECEN los espacios que ocupan.

- **overflow** `overflow: hidden;` Oculta todo el contenido que se desborde de la caja, es decir, que se salga del contenedor.

- **z-index** `z-index: 10;` Con esta propiedad decidimos cuál elemento queremos que esté po encima del otro. El valor mayor es el que estará por encima de los demás
