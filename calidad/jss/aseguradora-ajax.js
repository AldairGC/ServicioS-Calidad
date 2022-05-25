$(document).ready(function(){
	
	$('#guardar-aseguradora').on('submit', function(e){
		e.preventDefault();
		var datos = $(this).serializeArray();

		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			success: function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') {
					swal(
					  'Registrado',
					  'Se Guardo Correctamente',
					  'success'
					)
					setTimeout(function(){
						window.location.href = 'lista-aseguradora.php';
					}, 2000);
				}else{
					swal(
					  'Oops...',
					  'Hubo un Error al Guardar',
					  'error'
					)
				}
			}
		})
	});




