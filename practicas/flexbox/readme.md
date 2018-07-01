## Layout con Flexbox

En esta práctica hemos usado flexbox para diseñar nuestro layout. Es un layout sencillo pero muy bonito, se han tratado los temas de responsive design y se han visto las propiedades de flexbox para la organización del contenido en el sitio web.

Algunos de las propiedades más utilizas en flexbox son:

- Para el contendor Padre 
	- `display: flex;`
	- `flex-direction: row | column;`
	- `flex-wrap: wrap | nowrap;`
	- `justify-content: space-between;`
	- `align-items: center;`

- Para el contenedor hijo 
	- `order: 2;`

Se ha usado mayormente las propiedades de los elementos padres, en los elementos hijos se ha usado solo la propiedad `order`

**Importante:**

Como vamos a trabajar con diseño responsivo, debemos agregar la etiqueta meta viewport en nuestro archivo html.
```html 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
```

En cuanto lo demás se ha usado la fuente **Open sans** que hemos tomado de google fonts.
```html 
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
```

```css 
font-family: 'Open Sans', sans-serif;
```

Para las imágenes hemos tomado un fondo prediseñado y les hemos dado algunas propiedades como:
```css 
background: #000 url('imagenes/fondo.jpg');
background-size: cover;
background-attachment: fixed;
```

La propiedades **background-size** como sabemos, se usa con el valor **cover** para que abarque todo el ancho posible en el espacio que dispone.