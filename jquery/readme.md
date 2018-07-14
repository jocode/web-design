# jQuery

jQuery es una librería de javascript rápida, pequeña y rica en funciones, que nos permite escribir menos código, trabajar con la manipulación del DOM, manejo de eventos, ajax y animaciones.

## Introducción

Para descargar la librería debemos dirigirnos a la página oficial, allí damos clic al botón download jQuery y descargamos la librería. 
Hay dos archivos:
- Comprimido: Este archivo ha sido minificado para que tenga un menor peso 
- Producción: Es el archivo sin comprimir, donde podemos ver cada una de las funcionalidades que dispone la librería
[jQuery (write less, do more)](https://jquery.com/)

También podemos usar la librería, utilizando una CDN, como por ejemplo la de Google. [Google Hosted Libraries](https://developers.google.com/speed/libraries/). 
Al cargarse de las CDN se garantiza una mayor velocidad en la carga y rendimiento del sitio web.

### Qué es una CDN 

Una CDN o Red de Distribución de Contenido es básicamente un conjunto de servidores ubicados en diferentes puntos de una red que contienen copias locales de ciertos contenidos (vídeos, imágenes, música, documentos, etc.) que están almacenados en otros servidores generalmente alejados geográficamente, de forma que sea posible servir dichos contenidos de manera más eficiente.


Haciendo esta validación, el código javascript se ejecutará después que se haya cargado todo el documento HTML y CSS en nuestro navegador.
```js 
$(document).ready(function(){
	// Code
});

/* También podemos ejecutar código cuando se carge la página, de esta manera*/
$(function(){
	// Code
});
```

La sintaxis de jQuery se compone prácticamente de la siguiente forma: 
```js 
// Sintaxis de jquery
$(selector).evento();
```

- **$** - Indicamos que vamos acceder a jquery.
- **selector** - Accedemos al elemento que queramos trabajar.
- **accion** - Lo que queremos hacer con el elementos seleccionado.

## Selectores
Nos permite seleccionar elementos de nuestra página para aplicar estilos o darle distintas funcionalidades.

```js 
/* --- Accediendo a etiquetas ----*/
// $('h1').hide(3000);
$('h1, h2').hide(1000);

/*--- Accediendo a clases ------*/
$('.encabezado').hide(2000);

/*-------- Accediendo a ids ---------*/
$('#primero').hide();
```


## Efectos con jQuery 
Con jQuery podemos aplicar efectos fácilmente.
Algunos efectos muy usados en sitios web, como menús de navegación, etc. Son:

La sintaxis para los efectos es igual que la anterior:
```js 
$(selector).efecto(velocidad, callback);
```
La función callback, es la que nosotros colocamos para ejercutarla al momento que haya terminado el efecto.
```js 
$('.caja').hide(2000, function(){
	alert('Se aplicó el efecto');
});
```

- **hide()** Oculta un elemento
- **show()** Muestra un elemento
- **toggle()** Alterna los estados, se oculta y se muestra

- **fadeIn()** Efecto de aparecer. El objeto debe estar oculto
- **fadeOut()** Efecto de desaparecer
- **fadeToggle()** Alterna los estados de aparecer y desaparecer

- **slideDown()** Muestra un elemento con un efecto de deslizar hacia abajo. (El elemento debe estar oculto)
- **slideUp()** Oculta un elemento dezlizando hacia arriba
- **slideToggle()** Alterna los dos estados


## Acceder a los elementos del DOM

Con el método **parent()** accedemos al elemento padre del selector. 
```js 
$('#tercera').parent();
```

Cambiando estilos css a un elemento padre 
```js 
console.log($('#tercera').parent().css({
	background: '#1b3b82'
}));
```

Además de poder acceder a los elementos del DOM por medio de selectores, también podemos hacerlo por medio de vinculaciones (Elementos: padre, hermanos, hijos) 
- **parent()** Accede al elemento padre del selector
- **parents()** Devuelve en un objeto todos los elementos padre
- **children()** Devuelve los elementos hijo
- **parent(selector)** Devuelve un elemento hijo o elementos hijos específicos
- **find(selector)** Busca elementos dentro 
- **siblings()** Trae todos los elementos hermanos
- **next()** Trae el elemento siguiente al seleccionado
- **prev()** Trae el elemento anterior 
- **nextAll()** Trae todos los elementos siguientes (Hermanos)
- **prevAll()** Trae todos los elementos anteriores (Hermanos)

## Métodos para filtrar elementos del DOM
Algunos otros métodos útiles para filtrar los elementos del DOM usando jQuery son:
- **first()** Regresa el primer elemento de varios seleccionados
- **last()** Regresa el ultimo de varios seleccionados
- **eq()** Regresa un elemento en base a un index.
- **filter()** Nos permite filtrar entre los elementos mediante un criterio.
- **not()** Nos regresa los elementos que no concuerdan con el criterio.

## Eventos
Son acciones que se ejecutan cuando el usuario interactúa con la pantalla. 

Las funciones **callback** son aquellas que se ejecutan después de una determinada acción, como un evento o alguna funcionalidad.

> Importante. Si se va a trabajar con un elemento varias veces, es recomendable cachar la ubicación con una variable, para evitar estar buscando el elemento cada vez que se solicite. Esto denota una mejora en el rendimiento de nuestro sitio.

Hay dos formas de ejecutar un evento: 
```js 
var boton = $('#boton');

// Usando el evento directamente
boton.click(saludo);

// Usando el método on y se le pasa por parámetro el evento y la función a ejecutar
boton.on('', saludo);

```

Para prevenir el comportamiento de los botones, usamos la función *preventDefault()*, y debemos colocar un parámetro para que pueda funcionar.
```js 
$('a').on('click', function(e){
	console.log('Enlace Desactivado');
	e.preventDefault();
});
```

## Palabra reservada `this`

La palabra reservada `this` tiene la misma función que en javascript, solo cambia en la declaración al estar usando jQuery. 

La declaración es **`$(this).evento()`**. En este caso this haría referencia a un objeto del DOM.

```
$('.caja').on('click', function(){
	$(this).toggleClass('color');
});
```

## Animaciones con jQuery 

Con jQuery podemos crear animaciones fácilmente. Para ello debemos usar el método **animate()**. La sintaxis es la siguiente: 
```js 
$(selector).animate({parametros}, velocidad, callback);
```

Ejemplo de animaciones 
```js 
$('#boton').on('click', function(){
$('#caja').animate({
	// width: '300px'
	// opacity: '0.2'

	// marginLeft: '20px'
	marginLeft: '+=50px'
}, 300);
});
```

## Método `stop()`
Este método permite detener las animaciones que se estén ejecutando con jQuery.
La declaración de este método es la siguiente: 
```js 
$(selector).stop(limpiarAnimaciones, saltaralFinal)
```

Los parámetros que recibe son booleanos. Lo que nos hace esta función es detener una o varias animaciones de acuerdo a los parámetros que le pasemos.

```js 
$('#parar').on('click', function(){
	$('.caja').stop(false, true);
});
```


