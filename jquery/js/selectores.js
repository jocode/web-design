$(document).ready(function(){

	// Ocultamos los elementos h1, con una duración de 2s

	/* --- Accediendo a etiquetas ----*/
	// $('h1').hide(3000);
	$('h1, h2').hide(1000);

	/*--- Accediendo a clases ------*/
	$('.encabezado').hide(2000);

	/*-------- Accediendo a ids ---------*/
	$('#primero a').hide();

});