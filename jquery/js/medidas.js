$(document).ready(function(){

	var titulo = $('#titulo');
	var info = $('#info');

	// Calcula el ancho del elemento
	info.append('Ancho: '+titulo.width() + '<br/>');  

	// Calcula el ancho del elemento + padding
	info.append('Ancho Interno: '+titulo.innerWidth() + '<br/>');  

	// Calcula el ancho del elemento + padding + borde
	info.append('Ancho Externo: '+titulo.outerWidth() + '<br/>'); 

	// Calcula el ancho del elemento + padding + borde + margin
	info.append('Ancho Externo margen: ' + titulo.outerWidth(true) + '<br/>');  

	/*------- Medidas para el alto ------------*/
	info.append('Alto: '+titulo.height() + '<br/>');
	info.append('Alto interno: '+titulo.innerHeight() + '<br/>');
	info.append('Alto externo: '+titulo.outerHeight() + '<br/>');
	info.append('Alto externo margen: '+titulo.outerHeight(true) + '<br/>');

});