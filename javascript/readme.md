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