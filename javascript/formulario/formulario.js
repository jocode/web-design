(function(){
var formulario = document.getElementById('formulario');
var nombre = formulario.nombre;
var correo = formulario.correo;
var sexo = formulario.sexo;
var terminos = formulario.terminos;
var error = document.getElementById('error');

function validarNombre(e){
	if (nombre.value == '' || nombre.value == null){
		console.log('Por favor ingresa su nombre');
		error.style.display = 'block';
		error.innerHTML += '<li>Completa el nombre</li>'
		e.preventDefault();
	} 
}

function validarCorreo(e){
	if (correo.value  == '' || correo.value == null){
		console.log('Por favor ingresa el correo');
		error.style.display = 'block';
		error.innerHTML += '<li>Completa el correo</li>'
		e.preventDefault();
	} 
}

function validarSexo(e){
	if (sexo.value == '' || sexo.value == null){
		console.log('Por favor selecciona el sexo');
		error.style.display = 'block';
		error.innerHTML += '<li>Selecciona tu sexo</li>'
		e.preventDefault();
	}
}

function validarTerminos(e){
	if (!terminos.checked){
		console.log('Por favor selecciona los términos');
		error.style.display = 'block';
		error.innerHTML += '<li>Debes aceptar los términos</li>'
		e.preventDefault();
	}
}
function validarFormulario(e){
	error.innerHTML = '';
	validarNombre(e);
	validarCorreo(e);
	validarSexo(e);
	validarTerminos(e);
}

formulario.addEventListener('submit', validarFormulario);
}())