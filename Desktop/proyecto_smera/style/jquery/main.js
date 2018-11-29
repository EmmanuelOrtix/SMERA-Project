jQuery(document).on('submit','formlg', function (event) {
	event.preventDefault();
	jQuery.ajax({
		url: 'controlador.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend function(){
			$('.botonlg').val ('Validando')
		}
	})

	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if (respuesta.tipo = 'Admin') {
				location.href = 'controlador.php?c=home&a=index';

			}else(respuesta.tipo = 'Usuario'){
				location.href = 'controlador.php?c=home&a=index';
			}
		}else{
			$('.error')slideDown('slow');
			setTimeout(function(){
				$('.error'.slideUp('slow');
			},3000);
				$('.botonlg').val('Iniciar Sesión');
			}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});