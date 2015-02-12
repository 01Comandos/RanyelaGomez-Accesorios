<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/head_common.php'; ?>
  </head>
  <body>
        <?php include 'inc/header.php'; ?>

        <!-- Franja color -->
    <section class="franja-no-encontrado"> </section>
    <!--
        MENSAJE
    -->
    <section class="section-terminar">
        <div class="container">        
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="contenedor-mensaje-mailchimp">
                        <h2 class="h2-mailchimp">Bienvenida</h2>
                        <h3> Por favor, confirmanos tus datos</h3>


                        <div class="formulario-newsletter holis">
                            <form action="">
                                <input type="name" name="name" placeholder="Nombre" required="required" id="nombre5">

                                <input type="name" name="name" placeholder="Apellido" required="required" id="apellido5">

                                <input type="email" name="email" placeholder="@Email" required="required" id="email3">

                                <div class="holis-suscribir">
                                    <input type="submit" value="SUSCRIBETE" id="boton-suscribir" onClick="boton_suscribir()">
                                </div>

                              
                            </form>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>

    </section>


    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>  
  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>