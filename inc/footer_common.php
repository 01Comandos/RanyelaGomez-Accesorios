    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sumador.js"></script>

    <!-- NICESCROLL -->
     <script src="js/jquery.nicescroll.js"></script>

     <!-- ALERTA NEWSLETTER -->
    <script type="text/javascript" src="js/alertify.js"></script>
	<script>		
			//alerta para inscripcion tradicional			
			function boton_inscribirme(){				
				if($('#first-name').val().length !==0 && $('#family-name').val().length !==0 && $('#email1').val().length !==0 && $('#email2').val().length !==0 && $('#phone').val().length !==0 && $('#password1').val().length !==0 && $('#documento-identidad').val().length !==0) {
					alertify.log("<b>¡Te haz inscrito correctamente!</b> </br> Logueate y accede a tu cuenta"); 
					return false;				
				};
			}
			
			//alerta para inscripcion a la newsletter
			function boton_suscribir(){
				if( $('#email3').val().length !==0){
					alertify.log("<b>Boletines de Novedades</b> <br>¡Te has suscrito!"); 
					return false;
				};	
			}
			
		</script>




    <!-- CALENDARIO FORMALIZAR PAGO -->
	<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/master/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#calendario-ConfirmarPago').datetimepicker();
        });
    </script>


	