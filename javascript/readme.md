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
