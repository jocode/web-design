$(document).ready(function(){

	var contenedor = $('#contenedor');
	var contador = 1;

	$('#agregar').on('click', function(){
		// Creando la caja
		var caja = $('<div></div>').attr('class', 'caja').text(contador);
		contador++;

		// Agregando la caja al contenedor
		// contenedor.append(caja);

		// Agregar una caja al contendor y se posiciona al principio
		// contenedor.prepend(caja);

		// Agrega un elemento antes del contenedor
		contenedor.before(caja);

		// Agrega el elemento después del contenedor
		// contenedor.after(caja);
	});

});