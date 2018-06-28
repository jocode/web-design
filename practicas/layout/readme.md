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