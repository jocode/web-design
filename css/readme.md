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

![Anatomía de una regla CSS](https://mdn.mozillademos.org/files/11925/csspartes.png)
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
