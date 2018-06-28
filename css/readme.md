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

## Galería de Imágenes 
Se ha hecho una breve práctica sobre una galería de imágenes es este archivo [Galería](galeria.html)

## Sombras
Podemos darle sombras a los textos y cajas usando las siguientes propiedades:

- **text-shadow** (Para Texto) `text-shadow: 0px 0px 10px #000;` Los valores para esta propiedad son `horizontal` - `vertical` - `tamaño de la sombra` (Con este valor la sombra de difumina) - `color` 

- **box-shadow** (Para las cajas)  `box-shadow: 0 5px 10px rgba(0,0,0,.5);` Se colocan cuatro parámetros como valores al igual que la anterior: `horizontal - vertical - tamañosombra - color`.

## Bordes y bordes redondeados
Existen distintos tipos de bordes que podemos usar en CSS, también podemos usar la propiedad `border-radius` para dar un borde con esquinas redondeadas.

- Tipos de Bordes **`border`**
	- **solid** Tiene una línea sólida
	- **dotted** Línea punteada
	- **dashed** Línea con guiones
	- **double** Doble línea
	- **groove** Efecto en 3D con profundidad
	- **ridge** Efecto 3D con profundidad
	- **inset** Borde con relieve hacia afuera
	- **outset** Borde con relieve hacia adentro

- Bordes redondeados **`border-radius`**
	Podemos darle bordes redondeados a las cajas usando la propiedades `border-radius: value;`
	Para volver un div como círculo, debemos tener un tamaño cuadrado y usar esta propiedad  colocando un valor de 100%, de la siguiente forma:

```css 
border-radius: 100%;
```

## Pseudoclases `:pseudoclaese`
Son estados que pueden tener nuestros elementos en diferentes situaciones.

- Algunos tipos de pseudoclases son:
	- **hover** `a:hover {}` Aplica los estilos cuando pasamos el mouse por encima de un enlace
	- **link** `a:link {}` Aplica estilos a enlaces que no hemos visitado.
	- **visited** `a:visited {}` Aplica estilos a enlaces que ya hayan sido visitados.
	- **active** `a:active {}` Estado de un enlace cuando estemos dando clic.
	**first-line** `p:first-line {}` Selecciona la primera línea de algún párrafo o texto.
	**nth-child()** `p:nth-child(2) {}` Selecciona y aplica estilos a un elemento en común, el que le especifiquemos entre paréntesis (En este ejemplo selecciona el párrafo `<p></p>` número 2)

## Pseudoelementos `::pseudoelemento`
Nos permiten seleccionar ciertas partes de algunos elementos	

- Algunos Pseudoelementos son:
	- **first-letter** `selector::first-letter {}` Selecciona la primera letra que esté dentro del elemento

	- **first-line** `selector::first-line {}` Selecciona la primera línea de texto del elemento

	- **selection** `selector::selection {}` Aplica estilos a algún objeto seleccionado

	- **before** `selector::before {}` Agrega un elemento antes de la caja. Se *debe* agregar la propiedad `content: '';` por obligación

	- **after** `selector::after {}` Agrega un elemento después de la caja. Se *debe* agregar la propiedad `content: '';` por obligación

## Listas 
Podemos cambiar los estilos de viñetas para las listas, usando la propiedad `list-style`.

- Algunos tipos de listas son:

	- **Graficos:**
	`list-style: none | disc | circle | square`

	- **Numericos:**
	`list-style: decimal | decimal-leading-zeo | lower-roman | upper-roman | lower-latin | upper-latin`

También podemos colocar imágenes personalizadas, usando la propiedad `list-style-image`, colocando la ruta de la imagen:
```css 
list-style-image: url(../img/checked.png);
```

## Menú de navegación
Los menús se navegación se hacen con listas. La clave en los menús es colocar la propiedad `display: inline-block;` en los **item de listas `li`** para que se ordenen en línea y sean de tipo bloque y, colocar los **enlaces** con la propiedad tipo `display: block;` para poder agregarle el padding.

- **li** `display: inline-block;`

- **li a** `display: block;`

*Ver ejemplo de menú en* [menu.css](estilos/menu.css)

## Tablas
La propiedades **border** permite darle un borde a la tabla, pero si le damos un borde a cada celda vamos a tener un borde doble. Para quitarlo sólo debemos usar la propiedades **border-collapse** `border-collapse: collapse;`, de esta manera obtendremos un solo borde, siendo un  diseño mas estilizado.
*Ver archivo* [tablas.css](estilos/tablas.css)

## Formulario
Una de las propiedades que nunca debe faltar en los formularios en **box-sizing**. Con ella limitamos el tamaño de los input, es decir, si queremos que tenga un ancho de 200px, sea de 200px sin importar el padding que incluyamos.
```css 
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
```

*Ver ejemplo de formulario* [formulario.css](formulario.css)

## Transform `transform: scale(1,1)`
Nos permite transformar, dar interactividad a los elementos como trasladarlos, rotarlos. Es ideal para animaciones.

- Cosas que podemos hacer con transform:
	- Trasladar elementos `translate(200px, 50px)` *values: x, y*
	- Escalar Elementos `scale(1,1)` *values: x, y*
	- Rotar Elementos `rotate(20deg)` *values: grados*
	- Sesgar Elementos `skew(20deg, 0deg)` *values: grados-x, grados-y*
[Ver transform.css](estilos/transform.css)

## Transiciones `transition: all .4s ease` 
Cambio de un estado a otro de algún elemento. Podemos hacer diseños hermosos que brinden una mejor experiencia de usuario haciendo uso de esta propiedad.

Al usar esta propiedad en los elementos, le damos 3 valores para su función:
```css 
transition: all .4s ease;
```
Recibe 3 parámetros: all | background , duración, velocidad-transición

- Velocidad de Curva (Velocidad de la transición)
	- **ease** - inicio lento, despues rapido y termina lento
	- **linear** - misma velocida de inicio a fin
	- **ease-in** - inicio lento
	- **ease-out** - final lento
	- **ease-in-out** - inicio lento y final lento

Ver ejemplo [transiciones.css](estilos/transiciones.css)

## Animaciones con CSS `animation`
Con las animaciones podemos darle movimiento y efectos a los elementos, además de darles estilos con css.

Para crear una animación debemos usar una palabra reservada en css llamada **keyframes**, con ella declaramos y colocamos la funcionalidad de la animación, por ejemplo:

```css
@keyframes movimiento {
	0% {transform: translate(0px);}
	50% {transform: translate(500px);}
	100% {transform: translate(0px);}
}
```

Las funciones de las animaciones de definen en porcentaje (anterior) o usando las palabras reservadas **from** **to** como el siguiente ejemplo. En cada una se pueden colocar estilos, transiciones o transformaciones.
```css 
@keyframes colores {
	from { background: #93b3c2;  }
	to { background: #21295c; }
}
```

Luego de crear la funcionalidad, debemos llamarla usando la propiedad `animation-name: value;` y definir una duración `animation-duration: 5s;`. También podemos colocar el tipo iteración, con `animation-iteration-count: all | initial | infinitive | inherit | unset`

```css 
.caja {
	width: 200px;
	height: 200px;
	background: #93b3c2;
	/*animation-name: movimiento;
	animation-duration: 5s;
	animation-iteration-count: infinite;*/
	animation: movimiento 5s ease infinite;
}
``` 

Podemos colocar todas las configuraciones en una sola línea como aparece en el código anterior, usando la propiedad `animation` y colocando como parámetros `nombre duración velocidad iteración`.

## Cómo utilizar fuentes personalizadas
Muchas veces el sitio web está diseñado con una fuente distintas a las habituales, dependiendo del tema que trate o de lo que se quiera transmitir.

Sin embargo, no todas la personas disponen de las fuentes en los ordenadores, así que es necesario poder enlazarlas de algún sitio para que pueda siministrarlas a la persona que este visitando nuestro sitio web.

Una página que nos ayuda es eso es [Google fonts](https://fonts.google.com/).

- Hay 2 formas de incluir las fuentes 
	
	- Manualmente: Para ellos debemos descargar las fuentes y usar el selector `@font-face` y colocar el nombre de la fuente y la ruta con la propiedad `src`
	```css 
	@font-face {
		font-family: "Roboto-Regular";
		src: url('estilos/fonts/Roboto-Regular.ttf');
	}
	```

	- Automáticamente: Usando google font, que nos provee un CDN para cargar las fuentes. Sólo basta con seleccionar la fuente y copiar el código que nos genera la página: 

		- Cargar de forma estándar 
		```html 
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
		``` 

		- Cargar con CSS `@import` 
		```css 
		@import url('https://fonts.googleapis.com/css?family=Lato');
		```

Luego sólo es cuestion de incluir la fuente en los elementos usando la propiedad **font-family**, así: `font-family: 'Lato', sans-serif;`

## Diseñando plantilla con float
En el ejemplo [plantillaSentilla.html](plantillaSentilla.html) hemos creado unos estilos [plantillaSencilla.css](estilos/plantillaSencilla.css) para diseñar una plantilla sencilla usando float. Algunos tips a tener en cuenta son: 

* Colocar la propiedad `float: left;` a ambos elementos principales 

* Al elemento que sigue abajo, dar la propiedad `clear: both;` para limpiar el contenido y que los elementos anteriores se ubiquen correctamente

* Importante usar la propiedad **box-sizing** para que los márgenes interiores se incluyan en el tamaño del objeto.
```css 
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
```