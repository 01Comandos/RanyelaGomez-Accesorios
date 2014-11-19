<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranyela Gómez - Accesorios</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <?php include 'inc/header.php'; ?>
    
    <section class="contacto-section">
        <!--
            TITULO CONTACTO
        -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="contacto-titulo text-center">
                        <h1>CONTACTO</h1>
                        <h4>Tómate tu tiempo, todos los campos son obligatorios</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <!--
            FORMULARIO CONTACTO
        -->
        <article class="contacto-formulario">
            <form action="inc/contacto-formulario.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="nombre-contacto">
                                <figure><img src="img/icono-nombre-contacto.png" alt=""></figure>
                                <input type="name" name="nombre" required="required" placeholder="Nombre" id="nombre-contacto" >
                            </div>

                            <div class="asunto-contacto">
                                <figure><img src="img/icono-asunto-contacto.png" alt=""></figure>
                                <input type="text" name="asunto" required="required" placeholder="Asunto" id="asunto-contacto" >
                            </div>

                            <div class="mensaje-contacto">
                                <figure><img src="img/icono-mensaje-contacto.png" alt=""></figure>
                                <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje" required="required" id="mensaje-contacto"></textarea>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="email-contacto">
                                <figure><img src="img/icono-email-contacto.png"></figure>
                                <input type="email" name="email" required="required" placeholder="Email" id="email-contacto" >
                            </div>

                            <div class="recaptcha-contacto">
                                <span>AQUI RECAPTCHA</span>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="btn-contacto-enviar text-center">
                                <input type="submit" value="Enviar" id="boton-contacto-enviar">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </section>


    
    
    
    
  

  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>