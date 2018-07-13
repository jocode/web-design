$(function(){

	// Parent
	/*console.log($('#tercera').parent().css({
		background: '#1b3b82'
	}));*/

	// Parents
	$('#tercera').parents();

	// Acceder a los elementos hijos (Children)
	// $('#padre').children().fadeOut(2000);

	// Acceder a un elemento hijo en específico
	// $('#padre').children('#tercera').fadeOut(2000);

	// Find() - Encontrar dentro de un contenedor, un elemento
	// $('#contenedor').find('div.caja').slideUp();

	// siblings() - Selecciona los elementos hermanos
	// $('#tercera').siblings().fadeOut(1500);

	// next() - prev() => Acceder a los elementos siguientes y anteriores
	$('#tercera').prev().css({
		background: '#000'
	});

	$('#tercera').prevAll().css({
		background: '#000'
	});

	$('#tercera').next().css({
		background: '#ccc'
	});

	$('#tercera').nextAll().css({
		background: '#ccc'
	});

});