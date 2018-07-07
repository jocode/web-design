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
Number | Un número. Los números no tienen comillas. | `var miVariable = 10;`
**Boolean** | Tienen valor verdadero/falso. true/false son palabras especiales en JS, y no necesitan comillas. | `var miVariable = true;`
**Array** | Una estructura que te permite almacenar varios valores en una sola referencia. | `var miVariable = [1,'Bob','Steve',10];    Llama a cada miembro del array así:   miVariable[0], miVariable[1], etc.`
**Object** | Básicamente cualquier cosa. Todo en JavaScript es un objeto y puede ser almacenado en una variable. Mantén esto en mente mientras aprendes. | `var miVariable = document.querySelector('h1');    Todos los ejemplos anteriores también.`
