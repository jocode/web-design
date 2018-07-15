$(document).ready(function(){

	// Modifica el texto de un elemento
	$('#titulo').text('Encabezado Modificado');

	// Modifica el html
	$('#titulo').html('<u>Encabezado Modificado subrayado</u>');

	var nombre = $('#nombre');
	nombre.on('change', function(){
		$('#titulo').text(nombre.val());
	});

	/*--- Modificando atributos -------*/
	$('#enlace').text('Johan Mosquera');
	$('#enlace').attr('href', 'http://johanmosquera.me');

	// Modificando multiples atributos
	$('#enlace').attr({
		'class': 'azul',
		'target': '_blank'
	});

});