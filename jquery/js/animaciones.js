$(document).ready(function(){

	// $(selector).animate({parametros}, velocidad, callback);
	$('#boton').on('click', function(){
		$('#caja').animate({
			// width: '300px'
			// opacity: '0.2'

			// marginLeft: '20px'
			marginLeft: '+=50px'
		}, 300);

		// $('#caja').addClass('animacion');

		// $('#caja').toggleClass('animacion');

		$('.caja').animate({
			marginLeft: '-=50px'
		}, 300);

	});

});