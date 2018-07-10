# Formulario

En esta práctica se creó un formulario de registro, se le dieron los respectivos estilos CSS, muy interesantes, sobre todo al cambiar el el diseño de los radio button, donde le dimos una apariencia más elegante. *Ver el archivo* [estilos.css](estilos.css)

Ejemplo de la modificación del aspecto del radio button 
```css 
.formulario input[type="radio"]{
	display: none;
}

.formulario .sexo {
	display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	margin-bottom: 20px;
}

.formulario .sexo .hombre { border-radius: 3px 0 0 3px;  }
.formulario .sexo .mujer { border-radius: 0 3px 3px 0; }

.formulario .label-radio {
	background: rgba(249, 160, 63, .4);
	color: #fff;
	padding: 10px;
	text-align: center;
	width: 49.5%;
}

.formulario input[type="radio"]:checked + .label-radio {
	background: #f9a03f;
}
```

También se trabajó la validación de los campos en el formulario. 
Algo a tener en cuenta es usar el método **preventDefault()** para evitar que se envíe el formulario cuando hay algún error en la validación. 

Por ejemplo 
```js 
function validarTerminos(e){
	if (!terminos.checked){
		console.log('Por favor selecciona los términos');
		error.style.display = 'block';
		error.innerHTML += '<li>Debes aceptar los términos</li>'
		e.preventDefault();
	}
}
```