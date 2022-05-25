$(document).ready(function() {
     $(function() {
            $("#codigo").autocomplete({
                source: "productos.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
                    $('#codigo').val(ui.item.codigo);
					$('#descripcion').val(ui.item.descripcion);
					$('#precio').val(ui.item.precio);
					$('#id_producto').val(ui.item.id_producto);
			     }
            });
		}); 
});