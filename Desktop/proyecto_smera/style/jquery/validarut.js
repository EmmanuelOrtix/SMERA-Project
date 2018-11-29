function checkRut(rut){
	var valor = rut.value.replace('.','');

		valor = valor.replace('-','');

	var cuerpo = valor.slice(0,-1);
	var dv = valor.slice(-1).toUpperCase();

	rut.value = cuerpo + '-' + dv;

	if(cuerpo.length < 7){
		rut.setCustomValidity("RUT Incompleto");
		return false;
	}	

	var suma = 0;
	var multiplo = 2;

	for(i = 1;i<=cuerpo.length;i++){

		var index = multiplo * valor.charAt(cuerpo.length - i);

		suma = suma + index;

		if(multiplo < 7){

			multiplo = multiplo + 1;
		}else{
			multiplo = 2;
		}
	}

	var dvEsperado = 11 - (suma % 11);

	dv = (dv == 'K') ? 10 : dv;
	dv = (dv == 0) ? 11 : dv;

	if(dvEsperado != dv){
		rut.setCustomValidity("RUT Invalido");
		return false;
	}

	rut.setCustomValidity('');
}