$(document).ready(function(){

	var boton = $('#boton');

	// Ejemplo con función anónima
	/*boton.click(function(){

	});*/

	// boton.click(saludo);
	// boton.on('click', saludo);

	function saludo(){
		alert('Hola mundo');
	}

	/** ----- Evento con Fallback (Función anónima) --- **/
	/*boton.on('mouseenter', function(){
		document.body.style.background = '#000';
	});*/

	/*boton.on('mouseleave', function(){
		document.body.style.background = '#fff';
	});*/

	/** ----- Eliminando eventos ------- **/
	/*boton.on('click', function(){
		alert('Saludos');
	});

	$('#desactivar').on('click', function(){
		// Eliminando eventos con jQuery
		boton.off('click');
		console.log('Desactivado');

		//  Eliminando eventos con javascript
		// btnSaludar.removeEventListener('click', saludo2);
	});*/

	/** ----- Prevenir el comportamiento de los enlaces -----**/
	$('a').on('click', function(e){
		console.log('Enlace Desactivado');
		e.preventDefault();
	});


});