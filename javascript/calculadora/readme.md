# Calculadora

Este es un sencillo ejemplo de una calculadora que suma dos números. 
Para acceder a los valores de las cajas de texto, debemos acceder al objeto que tiene la caja de texto y obtener el valor. Eso lo hacemos con la función y el atributo.

```js 
document.getElementById('numberOne').value;
```

De esta manera obtenemos la etiqueta por el **id** y obtenemos al valor con el atributo **.value** 

Como lo que obtenemos es una cadena de texto, debemos convertir el texto a número y, para eso javascript tiene dos funciones:

- **parseInt()** Convierte una cadena de texto en un número entero. 

- **parseFloat()** Convierte una cadena de texto en un número decimal.

Entonces lo que debemos hacer es:
1. Obtener la referencia a la caja de texto 
2. Obtener el valor de la caja de texto 
3. Convertir la cadena de texto en un número 
4. Guardar el número en una variable ´para luego hacer la operación 

```js
var b = parseFloat(document.getElementById('numberTwo').value);
```

Finalmente obtenemos la otra la caja de texto resultado y le asignamos el valor de la operación.
```js 
document.getElementById('resultado').value = resultado;
```