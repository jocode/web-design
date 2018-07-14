$(document).ready(function(){

	$('#ejecutar').on('click', function(){
		$('.caja').animate({
			marginLeft: '500px'
		}, 5000);

		$('.caja').animate({
			marginLeft: '0px'
		}, 5000);
	});

	$('#parar').on('click', function(){
		//$(selector).stop(limpiarAnimaciones, saltaralFinal)
		$('.caja').stop(false, true);
	});


});