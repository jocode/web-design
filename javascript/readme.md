# Javascript
JavaScript es el lenguaje de programación que debes usar para añadir características interactivas a tu Sitio Web, (por ejemplo juegos, eventos que ocurren cuando los botones son presionados o los datos son introducidos en los formularios, efectos de estilo dinámicos, animación, y mucho más). [Fundamentos de JavaScript](https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

## Qué es JavaScript?
JavaScript es un robusto lenguaje de programación que puede ser aplicado a un documento HTML y usado para crear interactividad dinámica en los sitios web. Fue inventado por Brendan Eich, co-fundador del proyecto Mozilla, Mozilla Foundation y la Corporación Mozilla .

## Variables
Las variables son contenedores en los que puedes almacenar valores. Primero debes declarar la variable con la palabra clave var, seguida del nombre que le quieras dar:
```js
var nombreDeLaVariable;
```

Las variables pueden tener distintos tipos de datos:

Tipo de dato | Explicación | Ejemplo
-------------|-------------|--------
**String** | Una cadena de texto. Para indicar que la variable es una cadena, debes  escribirlo entre comillas. | `var miVariable = 'Bob';`
**Number** | Un número. Los números no tienen comillas. | `var miVariable = 10;`
**Boolean** | Tienen valor verdadero/falso. true/false son palabras especiales en JS, y no necesitan comillas. | `var miVariable = true;`
**Array** | Una estructura que te permite almacenar varios valores en una sola referencia. | `var miVariable = [1,'Bob','Steve',10];    Llama a cada miembro del array así:   miVariable[0], miVariable[1], etc.`
**Object** | Básicamente cualquier cosa. Todo en JavaScript es un objeto y puede ser almacenado en una variable. Mantén esto en mente mientras aprendes. | `var miVariable = document.querySelector('h1');    Todos los ejemplos anteriores también.`

## Operadores
Un operador es básicamente un símbolo matemático que puede actuar sobre dos valores (o variables) y producir un resultado.
Los tipos de operadores son:
- Asignación `=`
  Nos permiten dar un valor a una variable. Cuando en una variable se le coloca este signo, le estamos asignando un valor, si no le agregamos el =, sólo la estamos declarando.
- Matemáticos o aritméticos
  - Suma `+`
  - Resta `-`
  - Multiplicación `*`
  - División `/`
  - Módulo `%` (Residuo de la división)
- Incremento y decremento
  - Incremento `++`
  - Decremento `--`
- Operadores lógicos o de comprobación
  - Negación `!`
  - AND `&&`
  - OR `||`
  - Igualdad `==`
  - Identidad `===` (Iguales en valor y tipo de dato)
  - Distinto `!=`
  - No idénticos `!==`
  - Mayor que `>`
  - Menos que `<`
  - Mayor o igual que `>=`
  - Menor o igual que `<=`


## Arreglos
Es una variable que puede guardar múltiples valores

Para declarar y asignar valores en un arreglo debemos hacer los siguiente:
```js 
var colores = ['Amarillo', 'Azul', 'Rojo', 'Verde', 'Naranja', 'Violeta'];
```

Para acceder a los elementos del arreglo, debemos iniciar con 0, de esta manera estaremos accediendo al primer elemento de que tenemos en el arreglo:
```js 
document.write(colores[1]); // Imprimirá 'Azul'
```

También podemos declarar y agregar elementos al arreglo accediendo con la posición
```js 
var amigos = [];
amigos[0] = 'Juan';
amigos[1] = 'Maria';
```

## Métodos y propiedades para arreglos

```js 
var colores = ['Amarillo', 'Azul', 'Rojo', 'Verde', 'Naranja', 'Violeta'];
```

- **Método length** Nos permite saber cuántos elementos tiene un arreglo.
  `colores.length`

- **Método Join** Convierte nuestro arreglo en una cadena de texto, separando cada elementos por un delimitador escojamos.
  `colores.join(' - ')`

- **Método pop y push**
  - **pop** Elimina el último elemento de un arreglo y lo devuelve.
  `colores.pop()`
  - **push** Agrega uno o varios elementos al final de arreglo. 
  `colores.push(item1, item2, etc)`;

- **shift y unshift**
  - **shift** Elimina el primer elemento de un arreglo y lo devuelve.
    `colores.shift();`
  - **unshift** Inserta uno o varios elementos al comienzo del arreglo
    `colores.unshift(item1, item2, etc);`


- **concat**
Concatena uno o más items o arreglos en el arreglo actual.
  `todosColores = colores.concat(neutros);`

- **Método sort y reverse**
  - **sort**
  Ordena los arreglos alfabéticamente. 
  Nota: sort no funciona para ordenar números, sólo cadenas de texto. Para ordenar números debemos pasar una función cómo parámetro.
  `colores.sort();`
  - **reverse**
  Revierte el orden de los elementos en el array y lo devuelve;

## Condicionales
Las Condicionales son estructuras de código que permiten comprobar si una expresión devuelve true o no, y después ejecuta un código diferente dependiendo del resultado. La forma de condicional más común es la llamada  `if ... else`. Entonces, por ejemplo:

```js 
var edad = 18;
if (edad >= 18){
  document.write('Eres mayor de edad');
} else {
   document.write('Eres menor de edad');
}
```

## Ciclos
Nos permiten repetir bloques de código dada una condición.

### Ciclo For
El ciclo *for* ejecuta la primera expresión al iniciar el ciclo. Luego al inicio de cada iteración (Repetición) evalúa la segunda expresion y al final de cada iteración ejecuta la tercera expresion.


La estructura se conforma de la siguiente manera:
```js 
for (inicio; condicion; actualización){
  /*
  * Bloque de código a repetirse
  */
}
```

El siguiete ejemplo, imprime los valores del 1 al 10
```js 
for (var i = 1; i <= 10; i++) {
  document.writeln(i);
}
```

Ciclo que imprime valores del 10 al 1
```js 
for (var i = 10; i > 0; i--){
  document.writeln(i);
}
```

Iteración de los item de un arreglo 
```js 
var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Agosto', 'Octuble', 'Noviembre', 'Diciembre'];

for (var item = 0; item < meses.length; item++){
  document.writeln(meses[item]);
}
```

Otra forma de iteración del ciclo for. A este tipo de ciclo de le llama **for in** y se usa para recorrer arreglos
```js 
for (mes in meses){
  console.log(meses[mes]);
}
```
La variable `mes` toma las posición en cada iteración del arreglo `meses`. 


### Ciclo While
Ejecuta las sentencia siempre que la condición sea verdadera. La expresión se verfica en cada inicio de la iteración.

**Iteración**: Es la repetición de cada sentencia.

La estructura del ciclo while se compone de la siguiente forma:
```js 
while (condicion){
  /*
  * Código
  */
}
```

Ejemplo de ciclo while. Imprime los números del 1 al 10
```js 
var numero = 1;
while (numero <= 10){
  document.writeln(numero);
  numero++;
}
```

> **Nota** Siempre que usemos el ciclo while, debemos incrementar la variable para que no se convierta en un ciclo infinito.


### Ciclo Do While
El bucle do-while es una variante del ciclo *while*. Este ciclo evalúa la expresión al final de cada iteración. Por lo que se garantiza que el ciclo se ejecute al menos una vez.

Ejemplo de ciclo *do-while*, imprime '11', primero ejecuta las sentencias y luego evalúa la condición. 
```js 
var numeo = 11;
do {
 document.writeln(numero);
 numero++;  
} while (numero <= 10);
```
Como vemos en este ciclo, imprime '11', a pesar de ser falsa la condición, esto es porque primero ejecuta el código y luego evalúa la condición.

## Sentencias `break` y `continue`
Estas sentencias nos permiten alterar el comportamiento de nuestros ciclos. Con estas sentencias podemos decirle al ciclo que pare completamente o que pase a la siguiente iteración dada una acción. 

- **break** Corta la ejecución de un ciclo, es decir ya no se ejecutan más las sentencias.
- **continue** Salta a la siguiente iteración o ejecución del ciclo, ignorando el código que le sigue.


En este ejemplo, muestra todos los colores, menos el 'Azul'. Si usamos `break`, sólo mostrará el color 'Amarillo'
```js 
var colores = ['Amarillo', 'Azul', 'Rojo', 'Verde', 'Naranja', 'Violeta'];

for (color in colores){
  if (colores[color]=='Azul'){
    continue; // break;
  }
  document.writeln(colores[color] + ' <br>');
}
```

## Funciones
Las funciones son una manera de encapsular una funcionalidad que quieres reutilizar, de manera que puedes llamar esa función con un solo nombre, y no tendrás que escribir el código entero cada vez que la utilices.

Si ves algo que parece un nombre de variable, pero tiene paréntesis — `()` — al final, probablemente es una función. Las funciones con frecuencia toman argumentos — pedazos de datos que necesitan para hacer su trabajo. Estos se colocan dentro de los paréntesis, y se separan con comas si hay más de uno.

La estructura para la declaración de una función es:
```js 
function nombre(arg1, arg2, etc){
  /*
  * Código
  */
}
```
- La sentencia **return** devuelve los valores de las operaciones hechas en las funciones

Ejemplo, suma de dos números:
```js 
function suma(a, b){
  return a+b;
}
```

Otra forma de declarar funciones es creando una función anónima (Aquella función que no tiene nombre) y guardarla dentro de una variable.
```js 
var suma = function(a, b){
  return a + b;
}
```

Las funciones se utilizan llamando el nombre de la función con paréntesis, y colocando parámetros si los solicita. 
```js 
suma(12, 89);
```

### Funciones autoinvocadas
Se ejecutan de forma automática, sin necesidad de llamarla. 
Para declarar una función automática hacemos lo siguiente:
```js 
/*Función autoinvocada*/
(function(){
  alert('Hola mundo')
}());
```
Esto no permite proteger nuestro código de código de terceros (scope), en el caso que utilicemos otro código y tenga los mismo nombres de variables o funciones, no vayan a entrar en confusión.

## scope (Ámbito de las variables)
Es el alcance que pueden tener nuestras variables y qué partes de nuestro código pueden acceder a ellas y que otras no pueden.
El Scope funciona por niveles.

Las variables pueden ser de 2 tipos:
- **global** Las variables globales pueden ser accedidas desde cualquier parte del codigo, incluyendo cualquier funcion.
- **local** Las variables locales son las que han sido creadas dentro de una funcion o una funcion anidada (una funcion dentro de otra).

El scope funciona por niveles, si no encuentra una variable en el mismo nivel subirá de nivel hacia afuera y buscará. 
Si no encuentra subira otro nivel y asi sucesivamente.

Si tenemos una funcion anidada (una funcion dentro de otra)
podemos buscar variables desde dentro hacia afuera, pero desde 
una funcion no podemos buscar variables hacia dentro de otra funcion.

> **IMPORTANTE**  
> Si la variable no está precedida de la palabra (var), la variable se define como global

### Proteger nuestras variables de codigo de terceros
Hay un tipo de función especial, denominada función autoinvocada y permiten convertir nuestras variables, en variables locales, es decir que no pueden ser accesadas desde otro script.

Las funciones autoinvocadas se ejecutan automáticamente, y se definen de la siguiente manera:
```js 
(function(){
  var mensaje = 'Este es mi mensaje';
}());
// Producirá error al acceder a la variable, porque no la encuentra
console.log(mensaje);
```

Esta debería ser la forma de que escribieras código, para que no vaya a entrar en conflicto con el código de terceros. Ni siquiera la consola del navegador puede acceder a la variable. 
Sim embargo, siempre debes colocar la palabra `var`, porque de lo contrario el valor de la variable puede ser mostrado.

## Métodos y propiedades para cadenas de texto

- **length** `variable.length` Muestra cuántos caracteres contiene la variable. (Los espacios se inluyen como caracteres). 

- **substring(start, end)** Devuelve una subsección específica de la cadena de texto

- **substr(start, length)** Devuelve una subsección especifica, indicandole el caracter de inicio y el largo de caracteres a tomar

- **replace(searchExp, replaceExp)** Busca y reemplaza valores en una cadena de texto. (Metodo sencible a mayusculas, 'c' es diferente a 'C')

- **toUpperCase()** `nombre.toUpperCase()` Convierte todas las letras a mayúsculas. 

- **toLowerCase()** Convierte todas la letras en minúsculas.

- **indexOf(searchString, position)** Muestra la posición de una cadena de texto o letra. (Metodo sencible a mayusculas, 'c' es diferente a 'C')

- **lastIndexOf(searchString, position)** Encuentra la posición de la primera letra o cadena de texto iniciando de atrás hacia adelante. (Metodo sencible a mayusculas, 'c' es diferente a 'C')

## Eventos
Son unas estructuras de código que captan lo que sucede en el navegador, y permite que en respuesta a las acciones que suceden se ejecute un código. El ejemplo más obvio es un click (click event), que se activa al hacer click sobre algo.

*Si quieres saber más sobre los eventos, visitar el sitio web de Mozilla Developers Network* [Event Reference](https://developer.mozilla.org/en-US/docs/Web/Events#Standard_events) 

Exixten 3 modelos de eventos diferentes:
- Modelo basico de eventos.
  Caracteristicas limitadas.
  Pero Funciona en todos los navegadores.

- Modelo de eventos estandar.
  Podemos hacer mas cosas con el.
  Todos los navegadores lo soportan.

  Las versiones anteriores de Internet explorer como IE7 no lo soportan.

- Modelo de eventos de Internet Explorer.
  Modelo creado por Microsoft exclusivamente para IE.

El primer caso, es cuando le colocamos el atributo dentro del nodo de HTML, el segundo caso, es creando el evento por código, usando la función **addEventListener** 
```js 
function saludo(){
    alert('Hola, buenas, buenas...');
}

// Obtenemos el nodo y le asociamos un evento
var btnSaludar = document.getElementById('btn-saludar');
btnSaludar.addEventListener('click', saludo);

// Eliminamos el evento del nodo
btnSaludar.removeEventListener('click', saludo2);
```

También podemos ejecutar las funciones anónimas, en la creación de eventos
```js 
nodo.addEventListener('click', function(){
  // Código
});
```

Algunos de los eventos mas usados son:      
- click
- focus
- blur
- change
- onload
- mouseover
- mouseout
- resize 
- submit

## Palabra reservada `this`
Las palabras reservadas no pueden ser utilizadas como variables, funciones, métodos o identificadores de objetos. Porque son propias del lenguaje de programación y tienen sus funciones dentro de él. 

La palabra reservada `this` tiene muchas connotaciones en javascript, dependiendo del contexto en el que se use. 

- **Contexto Global**
En el contexto de ejecución **global** (fuera de cualquier función), `this` se refiere al objeto global, ya sea en modo estricto o no.
Por ejemplo: 
```js 
console.log(this.document === document); // true

// En los navegadores web, el objeto window también es un objeto global:
console.log(this === window); // true
```

- **Como contexto de una función**
- **Como controlador de eventos del DOM** 
De esta forma javascript sabrá qué elemento ha sido clickeado, arrastrado, etc. Como el siguiente ejemplo:
```js 
for (i = 0; i < cajas.length; i++){
  cajas[i].addEventListener('click', color);
}

function color(){
  this.classList.toggle('negro');
}
```
Al momento de dar click en un elemento, el sabe automáticamente cuál elemento ha sido seleccionado, sin necesidad de colocar la posición en el arreglo.

*Para más información sobre palabras reservadas, visitar el sitio web:* 
[Palabras reservadas](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Palabras_Reservadas)

## Formularios
Javascript es muy versátil y ha llegado para que podamos hacer funcionalidad elegantes. Uno de las cosas que nos sirve javascript es para validar formularios del lado del cliente. 

Para acceder a los elementos del formulario, tenemos una opción mucho más elegante que usar `document.getElementById`. Sólo basta con obtener el id del formulario, y tan sólo con los nombres de los campos, podemos acceder a ellos. 
```js 
var formulario = document.getElementById('formulario');

// Podemos acceder a un elemento del formulario por el atributo 'name'
var nombre = formulario.nombre;
var sexo = formulario.sexo;
var terminos = formulario.terminos;
```

Para evitar el envío del formulario, hay una función **(`preventDefault()`)** que podemos usar, esta función se coloca en el evento 'submit', como vemos en el siguiente ejemplo: 
```js 
formulario.addEventListener('submit', validar);
function validar(e){
  /*Previene el comportamiento del formulario, evita que se envíe. */
  e.preventDefault();
}
```

## Eventos de tiempo: `timming, timmers, timeout e interval`
Nos permite ejecutar cierto código despues que haya pasado cierto tiempo o por intervalos.

- **setTimeout(func, delay)** Ejecuta una función o un bloque de código después de cierto tiempo. 
```js 
function saludo(){
  alert('Hola');
}
// Ejecuta la función saludo, trascurridos 3 segundos
setTimeout(saludo, 3000);
```

- **setInterval(funcName, delay)** Define intervalos de tiempo para una función.
```js 
var intervalo = setInterval(saludo, 3000);

document.getElementById('btn-detener').addEventListener('click', function(){
  clearInterval(intervalo);
});
```

- **`clearInterval(timeoutId)` - `clearTimeout(timeoutId)`** Estos métodos eliminan los tiempos de retraso que han sido establecido por las funciones `setInterval()` ó `setTimeout()`. Es necesario almacenar los tiempos de espera en una variable para tener una referencia a ellos y poder eliminarlas.

