## Practica Layout

En esta práctica crearemos una plantilla sencilla, este es nuestro primer proyecto luego de ver los capítulos de HTML y CSS

En el caso de utilizar la propiedad **float: left;** los elementos que le siguen a ellos se ubican bajo ellas siguiendo el mismo orden.

Para solucionar esto tenemos dos formas:
- **overflow: hidden;**  
 	De esta manera el diseño que sigue lo interrumpimos para que tome una nueva línea, un nuevo espacio debajo de los elementos.
- **clear: both;**
	Limpiamos el diseño e iniciamos uno nuevo en un nuevo espacio debajo.

De esta manera podemos maquetar nuestro sitio web usando la propiedad `float` con su valor `left`, es decir que los elementos floten hacia la derecha.

*Para ver la plantilla diseñada, ver los siguientes archivos**
- [index.html](index.html) Contiene la estructura de la plantilla
- [estilos.css](css/estilos.css) Contiene los estilos de la plantilla, aquí vemos la maquetación del sitio usando las propiedades `float: left;` y `overflow: hidden` ó en su defecto `clear: both`

## Diseño Responsive
El diseño responsive o adaptable a dispositivos móviles es muy importante en la industria web.

> En sublime Text, si se tiene el plugin de Emmet instalado sólo basta con digitar `meta:vp` y se agrega la línea del **meta viewport**

```html 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
```

Esta etiqueta meta **viewport** es la que otorga los valores para establecer la medidas del sitio web cuando se hace adaptable. Las propiedades que lo conforman son:
- **width=device-width** Indica que el ancho debe ser igual al ancho que tenga el dispositivo
- **user-scalable=no** Define si el sitio web puede ser escalable, es decir, se le puede hacer zoom en el sitio web
- **initial-scalable=1.0** Define la escala inicial en 1
- **maximum-scale=1.0** Define la máxima escala en 1
- **minimum-scale=1.0** Define la escala mínima en 1

Lo ideal es trabajar con valores dinámicos, por eso es bueno trabajar con porcentajes en las medidas de los sitios web.
Cuando se trate de **width** es importante usar los porcentajes.
Los tamaños de fuente, márgenes y padding si se pueden trabajar con píxeles

## Mediaqueries
Funcionan como condicionales para aplicar estilos diferentes cuando la medida del dispositivo cambie

```css 
/*
* Cuando estes es una pantalla con un tamaño máximo de 800px, 
* aplicale estos estilos
*/
@media screen and (max-width:800px){
	/* Estilos */
}
```

Como vemos en el ejemplo, los estilos se aplican a las pantallas que tengan como máximo 800px, es decir los estilos de aplicarán de 0px - 800px, ó de 800px para abajo.