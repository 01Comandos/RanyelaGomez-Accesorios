<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>
</head>
<body class="full-width-password">

		<section class="contenido-password">
			<div class="container">
				<div class="row">
					<!-- FORMULARIO ACCEDER -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<div class="formulario-reset">
								<div id="main-logo-password">
			                    <a href="index.php"><img src="img/ranyela-logotipo.png" alt="logotipo"></a>
			                </div>
							<div class="form-two">
								  <div id="formulario-password">
							            <form action="inc/procesaformulario-password.php" method="POST">
							              <div class="row">
							                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							                  <input type="text" name="email" placeholder="Email" required="required" id="email-password">
							                </div>
							              </div>
							              <div class="row">
							              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							              		<button class="btn btn-default dropdown-toggle" type="button" id="boton-cancel" data-toggle="dropdown" onclick="location.href='index.php'">Cancelar</button>						                 	
							                </div>					           
							              </div>
							              <div class="row">
							              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							                 	<input type="submit" value="Recuperar Contraseña" id="reset-password">
							                </div>						              	
							              </div>
							            </form>
						          </div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>	
	

	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>