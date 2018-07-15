$(document).ready(function(){

	$('#boton').on('click', function(){

		// $(this).addClass('naranja');
		// $(this).removeClass('boton');

		// Agrega o elimina la clase naranja
		$(this).toggleClass('naranja');

		// Modifica una o más propiedades css del elemento seleccionado
		/*$(this).css({
			height: '100px',
			width: '100px'
		});*/

	});

});