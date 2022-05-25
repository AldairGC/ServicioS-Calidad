(function (){
	"use strict";

	var regalo = document.getElementById('regalo');

	document.addEventListener('DOMContentLoaded', function(){

		//Campos Datos Usuario
		var nombre = document.getElementById('nombre');
		var apellido = document.getElementById('apellido');
		var email = document.getElementById('email');

		//Campos Pases
		var pase_dia = document.getElementById('pase_dia');
		var pase_dosdia = document.getElementById('pase_dosdia');
		var pase_completo = document.getElementById('pase_completo');

		//Botones y Divs
		var calcular = document.getElementById('calcular');
		var errorDiv = document.getElementById('error');
		var botonRegistro = document.getElementById('btnRegistro');
		var lista_productos = document.getElementById('lista-productos');
		var suma = document.getElementById('suma-total');

		//Extras

		var camisas= document.getElementById('camisa_evento');
		var etiquetas = document.getElementById('etiquetas');

		botonRegistro.disabled = true;

		//Eventos
		//Calcula Montos
		calcular.addEventListener('click', calcularMontos);
		//Muestra y Oculta los dias
		pase_dia.addEventListener('input', mostrarDias);
		pase_dosdia.addEventListener('input', mostrarDias);
		pase_completo.addEventListener('input', mostrarDias);

		nombre.addEventListener('blur', validarCampos);
		apellido.addEventListener('blur', validarCampos);
		email.addEventListener('blur', validarCampos);
		email.addEventListener('blur', validarMail);

		var formulario_editar = document.getElementsByClassName('editar-registrado');
		if (formulario_editar.length > 0) {
			if (pase_dia.value || pase_dosdia.value || pase_completo.value) {
			mostrarDias();
			}	
		}
		

		function validarCampos(){
			if (this.value == '') {
				errorDiv.style.display= 'block';
				errorDiv.innerHTML= "Este Campo es Obligatorio";
				this.style.border= '1px solid red';
				errorDiv.style.border= '1px solid red';
			}
			else{
				errorDiv.style.display= 'none';
				this.style.border= '1px solid green';
			}
		}

		function validarMail(){
			if (this.value.indexOf("@") > -1) {
				errorDiv.style.display= 'none';
				this.style.border= '1px solid green';
			}else{
				errorDiv.style.display= 'block';
				errorDiv.innerHTML= "Introduce un Email Valido";
				this.style.border= '1px solid red';
				errorDiv.style.border= '1px solid red';
			}
		}

		function calcularMontos(event){
			event.preventDefault();
			if (regalo.value === '') {
				alert('Debes Elegir un Regalo');
				regalo.focus();
			}else{
				var boletosDia = parseInt(pase_dia.value, 10) || 0,
					boletos2Dias = parseInt(pase_dosdia.value, 10) || 0,
					boletoCompleto = parseInt(pase_completo.value, 10) || 0,
					cantCamisas = parseInt(camisas.value, 10) || 0,
					cantEtiquetas= parseInt(etiquetas.value, 10) || 0;

				var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) +((cantCamisas*10)*.93)+(cantEtiquetas*2);
				
				var listadoProductos = [];

				if (boletosDia>=1) {
					listadoProductos.push(boletosDia + ' Boletos por Dia');
				}
				if (boletos2Dias>=1) {
					listadoProductos.push(boletos2Dias + ' Boletos por 2 Dias');
				}
				if (boletoCompleto>=1) {
					listadoProductos.push(boletoCompleto + ' Boletos Completos');
				}
				if (cantCamisas>=1) {
					listadoProductos.push(cantCamisas + ' Camisas');
				}
				if (cantEtiquetas>=1) {
					listadoProductos.push(cantEtiquetas + ' Etiquetas');
				}
				lista_productos.style.display="block";
				listadoProductos.push(regalo.value + ' Regalo');

				lista_productos.innerHTML= '';
				for (var i = 0; i< listadoProductos.length; i++) {
					lista_productos.innerHTML += listadoProductos[i] + '</br>';
				}
				suma.innerHTML = "$ " + totalPagar.toFixed(2);

				botonRegistro.disabled = false
				document.getElementById('total_pedido').value = totalPagar;
			}
		}

		function mostrarDias(){
			var boletosDia = parseInt(pase_dia.value, 10) || 0,
				boletos2Dias = parseInt(pase_dosdia.value, 10) || 0,
				boletoCompleto = parseInt(pase_completo.value, 10) || 0;

			var diasElegidos= [];

			if (boletosDia>0) {
				diasElegidos.push('viernes');
				console.log(diasElegidos);
			}
			if (boletos2Dias>0) {
				diasElegidos.push('viernes','sabado');
				console.log(diasElegidos);
			}
			if (boletoCompleto>0) {
				diasElegidos.push('viernes','sabado','domingo');
				console.log(diasElegidos);
			}
			for (var i = 0; i < diasElegidos.length; i++) {
				document.getElementById(diasElegidos[i]).style.display = 'block';
			}

		}
	});
})();