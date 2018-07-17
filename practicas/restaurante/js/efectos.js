$(document).ready(function(){

	/* Efecto menú */
	$('.menu a').each(function(index, valueElement){
		$(this).css({
			top: '-200px'
		});

		$(this).animate({
			top: '0px'
		}, 2000 + (index*500));
	});

	/* Efecto header */
	if($(window).width() > 800){
		$('header .textos').css({
			opacity: 0,
			marginTop: 0
		});

		$('header .textos').animate({
			opacity: 1,
			marginTop: '-52px'
		}, 1500);
	}

	/** -- Scroll elementos menú -- **/
	var acercaDe = $('#acerca-de').offset().top;
	var menu = $('#platillos').offset().top;
	var galeria = $('#galeria').offset().top;
	var ubicacion = $('#ubicacion').offset().top;

	$('#btn-acerca-de').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: acercaDe - 250
		}, 500);
	});

	$('#btn-menu').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: menu + 550
		}, 500);
	});

	$('#btn-galeria').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: galeria
		}, 500);
	});

	$('#btn-ubicacion').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: ubicacion
		}, 500);
	});


});