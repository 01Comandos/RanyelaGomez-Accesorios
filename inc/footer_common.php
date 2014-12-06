    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CALENDARIO FORMALIZAR PAGO -->
    <script type="text/javascript" src="http://eonasdan.github.io/bootstrap-datetimepicker/scripts/moment.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/master/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#calendario-ConfirmarPago').datetimepicker();
        });
    </script>

	<!-- VALIDACIONES JAVASCRIPT -->
	<!-- 	DATOS DE PAGO 	-->
	<script>
		function enviar-DatosDePago{
			var email = document.getElementById("email-DatosDePago").value;
			var password = document.getElementById("password-DatosDePago").value;

			if (email=="") {
				alert("Escribe tu Email");
				return;
			}

			if (password ==""){
				alert("Escribe tu contraseña");
				return;
			}

			document.getElementById("formulario-DatosDePago").submit();
		}
	</script>
	

	<!-- 	FORMALIZAR PAGO 	-->
	<script type="text/javascript">
		function enviar-FormalizarPago{
			var entidad = document.getElementById("nombre-banco").value;
			var monto = document.getElementById("monto-pago").value;
			var serial-operacion= document.getElementById("serial-pago").value;
			var calendario = document.getElementById("calendario").value;
			var direccion-envio = document.getElementById("direccion-envio").value;


			if (entidad=="") {
				alert("Escriba la Entidad Bancaria");
				return;
			}

			if (monto ==""){
				alert("Escriba el Total del depósito/transferencia");
				return;
			}

			if (monto != parseInt(monto)){
				alert("Debes escribir números, no letras");
				return;
			}

			if(serial-operacion =""){
				alert("Escriba el Serial del depósito/transferencia");
				return;
			}

			if(serial-operacion != parseInt(serial-operacion)){
				alert("Debes escribir el serial correctamente");
				return;
			}

			if(calendario ==""){
				alert("¿Cuando procesaste el pago?");
				return;
			}

			if(direccion-envio ==""){
				alert ("¿Dónde enviaremos tu pedido?");
				return;
			}

			document.getElementById("formulario-FormalizarPago").submit();
		}
	</script>


	<!-- 	CONTACTO 	-->
	<script type="text/javascript">
		function enviar-contacto(){
			var nombre= document.getElementById("nombre-contacto").value;
			var asunto= document.getElementById("asunto-contacto").value;
			var email = document.getElementById("email-contacto").value;
			var mensaje = document.getElementById("mensaje-contacto").value;

			if (nombre==""){
				alert ("Debes escribir tu nombre");
				return;
			}

			if (asunto==""){
				alert("Debes escribir el motivo del Mensaje");
				return;
			}

			if(email==""){
				alert("Debes escribir tu Email");
				return;
			}

			if(mensaje==""){
				alert("Debes escribir un mensaje");
				return;
			}

			document.getElementById("contacto-formulario").submit();
		}

	</script>

	