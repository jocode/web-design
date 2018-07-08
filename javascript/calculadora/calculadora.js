function suma(){
	/*Obtenemos los valores del input*/
	var a = parseFloat(document.getElementById('numberOne').value);
	var b = parseFloat(document.getElementById('numberTwo').value);
	var resultado = a+b;

	document.getElementById('resultado').value = resultado;
}


