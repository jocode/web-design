$(document).ready(function(){

	function saludo(){
		console.log('Hola mundo cruel');
	}

	$('#ejecutar').on('click', function(){
		$('.caja').slideUp(1000, function(){
			$(this).slideDown(1000);
		});
	});

	/*$('#ejecutar').on('click', function(){
		$('.caja').slideUp(300);
		alert('Hola');
		$('.caja').slideDown(300);
	});*/
	
});