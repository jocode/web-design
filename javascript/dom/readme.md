# DOM (Document Object Model)

El [Modelo de Objetos del Documento (DOM)](https://developer.mozilla.org/es/docs/DOM) es un API para documentos HTML y XML. Proporciona una representación estructural del documento, permitiendo la modificación de su contenido o su presentación visual. Esencialmente, comunica las páginas web con los scripts o los lenguajes de programación.

![DOM - Document Object Model](https://www.tutorialspoint.com/javascript/images/html-dom.jpg)

Podemos ver el DOM como un árbol, donde va teniendo ramificaciónes, cada una de ellas recibe el nombre de **nodo**. Con Javascript podemos cambiar el contenido se cada uno de los elementos que dispone el documento, de esta manera podemos crear interactividad.

Siempre que queramos acceder a los objetos del documento, debemos llamar al objeto `document` en javascript. 

Obtenemos todos los div del documento.
```js 
var cajas = document.getElementsByTagName('div');
```

Obtener elementos por el nombre de la clase 
```js 
var cajas = document.getElementsByClassName('caja');
```

Obtener un elemento por su identificador 
```js 
var first = document.getElementById('first');
```

Como vemos anteriormente, son distintas formas de obtener los objetos del documento. Pero también podemos cambiar su contenido accediendo a los atributos:

- **textContent** Con este atributo, podemos obtener y modificar el contenido del objeto. 
	`first.textContent = 'Hola mudo';`

- **innerHTML** Podemos agregar contenido con HTML, es decir, incluyendo las etiquetas de HTML 
	`first.innerHTML = '<h1></h1>';`


## Agregando nodos (append: Agregar)
Javascript nos permite interactuar con el DOM, de esta forma podemos agregar y eliminar contenido de nuestro sitio web. 
Para crear elementos con Javascript, debemos seguir los siguientes pasos:
1. Crear el elemento
2. Crear el nodo de texto
3. Añadir el nodo de texto al elemento
4. Agregar atributos al elemento
5. Agregar el elemento al documento 

En este ejemplo, se muestran los métodos usados para realizar esta funcionalidad:
```js 
var caja = document.createElement('div');
var contenido = document.createTextNode('Caja creada');
caja.appendChild(contenido);
caja.setAttribute('class', 'caja naranja');

var contenedor = document.getElementById('contenedor');
contenedor.appendChild(caja);
```

- **replaceChild(newChild, oldChild)** Reeemplaza el nodo hijo viejo por el nuevo nodo hijo.
- **removeChild(oldChild)** Elimina del documento, el nodo que le indiquemos 

Algunos otros atributos importantes en Javascript son:
```js 
/* Modificar el id */
caja.id = 'primera';

/* Modificar el nombre de la clase */
caja.className = 'caja naranja';

/* Conocer el elemento padre de un elemento */
var padre = caja.parentNode;

/* Insertar elementos antes de otro elemento */
padre.insertBefore(caja, first);

/* Reemplazar nodos */
padre.replaceChild(caja, cajas[2]);

/* Eliminar nodos */
padre.removeChild(cajas[3]);
```
