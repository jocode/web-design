// var cajas = document.getElementsByTagName('div');
var cajas = document.getElementsByClassName('caja');

var first = document.getElementById('first');

/*cajas[0].textContent = 'Hola mudo';*/
//cajas[0].innerHTML = '<h1>Hola mudo</h1>';

first.textContent = 'Hola mudo';
first.innerHTML = '<u>Hola mudo</u>';

/* ------ Creando Nodos --------*/
/*
1. Crear el elemento
2. Crear el nodo de texto
3. Añadir el nodo de texto al elemento
4. Agregar atributos al elemento
5. Agregar el elemento al documento 
*/

var caja = document.createElement('div');
var contenido = document.createTextNode('Caja creada');
caja.appendChild(contenido);
caja.setAttribute('class', 'caja naranja');

var contenedor = document.getElementById('contenedor');
contenedor.appendChild(caja);


/*----- Modificando la clase o id de un elemento -------*/
caja.id = 'primera';
caja.className = 'caja naranja';

/* Conocer el elemento padre de un elemento */
var padre = caja.parentNode;

/* Insertar elementos antes de otro elemento */
padre.insertBefore(caja, first);

/* Reemplazar nodos */
padre.replaceChild(caja, cajas[2]);

/* Eliminar nodos */
padre.removeChild(cajas[3]);
