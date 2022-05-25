$(document).ready(function(){
	//Guardar Registro admin
	$('#guardar-registro').on('submit', function(e){
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
						window.location.href = 'lista-admin.php';
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



	//Guardar Tramites
	$('#guardar-tramites').on('submit', function(e){
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
						'Se Registro',
					  'Folio  '+resultado.folio+'',
					  'success'
					)
					setTimeout(function(){
						window.location.href = 'lista-tramites.php';
					}, 4000);
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
	//Guardar Tramites
	$('#editar-tramites').on('submit', function(e){
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
						'Se Actualizaron los datos',
					  'Correctamente',
					  'success'
					)
					setTimeout(function(){
						window.location.href = 'lista-tramites.php';
					}, 4000);
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
	//Guardar Registro con Imagen
	$('#guardar-registro-archivo').on('submit', function(e){
		e.preventDefault();
		var datos = new FormData(this);

		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			contentType: false,
			processData: false,
			async: true,
			cache: false,
			success: function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') {
					swal(
					  'Registrado',
					  'Se Guardo Correctamente',
					  'success'
					)
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

	//Eliminar Registro Admin

	$('.borrar_registro').on('click', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		var tipo = $(this).attr('data-tipo');

		swal({
		  title: '¿Estas Seguro De Eliminarlo?',
		  text: "Un Registro Eliminado no se Puede  Recuperar",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Eliminar!',
		  cancelButtonText: 'Cancelar',
		}).then((result) => {
		  if (result.value) {
				$.ajax({
				type: 'post',
				data: {
					id : id,
					registro : 'eliminar',
				},
				url: 'modelo-'+tipo+'.php',
				success: function(data){
					console.log(data);
					var resultado = JSON.parse(data);
					if (resultado.respuesta == 'exito') {
						swal(
					      'Borrado!',
					      'El Registro ha sido Eliminado.',
					      'success'
					    )
					    jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
					}else{
						swal(
						  'Oops...',
						  'No se Pudo Eliminar',
						  'error'
						)
					}
				}
				})
			}else if (result.dismiss === 'cancel') {
			    swal(
			      'Cancelado',
			      'Cancelaste Borrar Registro',
			      'error'
			    )
			  }
			
		})
	});
});