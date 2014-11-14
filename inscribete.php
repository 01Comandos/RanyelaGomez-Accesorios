<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranyela Gómez - Accesorios</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!--
          LOGOTIPO
      -->
      <section class="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="logo-inscribete">
                        <img src="img/ranyela-logotipo.png" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </section>
    
    <!-- 
        FORMULARIO DE REGISTRO
    -->
    <section class="seccion-formulario">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 Contenedor-General">
                    <div class="titulo-formulario">
                      <span>Inscríbete</span>
                    </div>
                    <div class="subtitulo-formulario">
                      <span>*Todos los campos son obligatorios</span>
                    </div>

                    <div class="formulario">
                      <form action="inc/procesaformulario.php" method="POST">
                              <div class="container">
                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Nombre</span>
                                            </div>                              
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="nombre" required="required" id="first-name">
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Apellido</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="nombre" required="required" id="family-name">
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Email</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" name="email"  required="required" id="email1">
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Repetir-Email</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" name="email" required="required" id="email2">
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Teléfono</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="phone" name="phone" required="required" id="phone">
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="etiqueta-formulario">
                                                <span>Contraseña</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 contrasena">
                                            <input type="password" name="password" required="required" id="password1" >
                                            <span>Usa entre 6 y 20 Caracteres</span>
                                        </div>
                                  </div>

                                  <div class="row">
                                        <div class="col-md-8">
                                            <div class="seccion-documento">
                                                <label for="Documento" id="documento-title">Documento</label>
                                                <select id="documento" name="doc">
                                                  <option value="">C.I</option>
                                                  <option value="sex1">R.I.F</option>                                                  
                                                </select>

                                                <select id="documento2" name="doc2">
                                                  <option value="">V</option>
                                                  <option value="sex1">E</option>
                                                </select>

                                                <input type="text" name="documento-identidad" required="required" id="documento-identidad">
                                            </div>
                                        </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="btn-inscripcion">
                                              <input type="submit" value="Inscribirme" id="boton-inscribirme">
                                          </div>
                                      </div>   
                                  </div>
                            </div>
                      </form>
                                    
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
  


  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>