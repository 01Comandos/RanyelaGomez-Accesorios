<header id="main-header">

  <!-- ZONA 01: LOGIN - INSCRIBIRSE - CARRITO -->
  <div class="container">
        <div class="row">
           <!--
               INSCRIBIRSE - LOGIN - CARRITO 
            -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="btn-group botones-superiores">
                      <button class="btn btn-default btn-superior" data-toggle="modal" data-target=".modal-inscribirse"><img src="img/inscribete-icono.png" alt="">Registrate</button>
                      <!--
                          COMPONENTES MODAL 
                        -->
                        <!-- Large modal -->
                        <div class="modal fade modal-inscribirse" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                </div>

                                <div class="titulo-login" id="GGGG">
                                  <strong>¿Cómo quieres registrarte?</strong>
                                </div>

                                      <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 tw">                                                
                                                <a href="#" class="twitter-registro">
                                                  <figure class="icono-registro-social"><img src="img/twitter-icon-producto.png"></figure>
                                                  <span><strong>Conéctate con Twitter</strong></span>
                                                </a> 
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a href="#" class="facebook-registro">
                                                  <figure class="icono-registro-social"><img src="img/facebook-icon-producto.png"></figure>
                                                  <span><strong>Conéctate con Facebook</strong></span>
                                                </a>
                                            </div>
                                      </div>                      

                                      <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                              <div class="inscripcion-tradicional">
                                                  <span>¿No tienes cuentas sociales?</span>
                                                  <a href="inscribete.php">
                                                      <strong>Registro Tradicional</strong>
                                                  </a>                                          
                                              </div>
                                          </div>   
                                      </div>                                            

                            </div>
                          </div>
                        </div>
                        <!-- FIN COMPONENTE MODAL -->


                      <button class="btn btn-primary" data-toggle="modal" data-target=".modal-ingresar"><img src="img/ingresa_icon.png" id="ingresa">Ingresa</button>
                        <!--
                          COMPONENTES MODAL 
                        -->
                        <!-- Large modal -->
                        <div class="modal fade modal-ingresar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                </div>

                                <div class="titulo-login">
                                  <span>Ingresar a mi Cuenta</span>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 tw">                                                
                                        <a href="#" class="twitter-registro">
                                          <figure class="icono-registro-social"><img src="img/twitter-icon-producto.png"></figure>
                                          <span><strong>Ingresar con Twitter</strong></span>
                                        </a> 
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="#" class="facebook-registro">
                                          <figure class="icono-registro-social"><img src="img/facebook-icon-producto.png"></figure>
                                          <span><strong>Ingresar con Facebook</strong></span>
                                        </a>
                                    </div>
                              </div>  

                                <div class="formulario-login">
                                        <form action="inc/procesaformulario-login.php" method="POST" id="formulario-login"> 
                                            <div class="titulo-ingresar-tradicional">
                                              <span><strong>Registro Tradicional</strong></span>
                                            </div>
                                                 
                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                                                      <div class="etiqueta-formulario">
                                                          <span>Email</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">
                                                      <input type="email" name="email"  required="required" id="email-login">
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Contraseña</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8 contrasena">
                                                      <input type="password" name="password" required="required" id="password-login" >
                                                      <a href="recover-password.php">Olvidé mi Contraseña</a>
                                                  </div>
                                            </div>                                                 

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-login">
                                                        <input type="submit" value="Ingresar" id="boton-login">
                                                    </div>
                                                </div>   
                                            </div>                                            
                                        </form>                
                                </div>
                                <div class="pie-modal">
                                  <span>¿Todavía no tienes cuenta? <a href="inscribete.php">¡Inscríbete!</a></span>
                                </div>

                            </div>
                          </div>
                        </div>
                        <!-- FIN COMPONENTE MODAL -->
                    </div>
            </div>
          
        </div>
  </div>

  <!--
      lOGOTIPO - MENU
  -->
  <div class="container">
        <div class="row">
           <!--
               LOGO
            -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div id="main-logo">
                    <a href="index.php"><img src="img/ranyela-logotipo.png" alt="logotipo"></a>
                </div>
            </div>
            
            <!-- 
                MENU
            -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                  <nav class="nav-normal">     
                      <ul class="menu-principal">
                          <li ><a href="index.php" id="home-icon"><span class="glyphicon glyphicon-home"></span></a></li>
                          <li class="opcion-principal"><a href="#">GARGANTILLAS</a>
                               <ul>
                                <li><a href="#">Agosto</a></li>
                                <li><a href="#">Septiembre</a></li>
                                <li><a href="#">Octubre</a></li>
                                <li><a href="#">Noviembre</a></li>
                              </ul>
                          </li>
                          <li class="opcion-principal"><a href="#">PULSERAS</a>
                             <ul>
                                <li><a href="#">Agosto</a></li>
                                <li><a href="#">Septiembre</a></li>
                                <li><a href="#">Octubre</a></li>
                                <li><a href="#">Noviembre</a></li>
                              </ul>
                          </li>
                          <li class="opcion-principal"><a href="#">ZARCILLOS</a>
                              <ul>
                                <li><a href="#">Agosto</a></li>
                                <li><a href="#">Septiembre</a></li>
                                <li><a href="#">Octubre</a></li>
                                <li><a href="#">Noviembre</a></li>
                              </ul>
                          </li>
                          <li id="btn-contacto"><a href="contacto.php">CONTACTO</a></li>
                      </ul>
                  </nav>

                  
                  <!--
                    NAVEGACION PARA TELEFONOS
                  -->
                  <nav class="navbar navbar-default nav-phone" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <div id="main-logo-mobile">
                        <a href="index.php"><img src="img/ranyela-logotipo.png" alt="logotipo"></a>
                      </div>

                      <button type="button" class="navbar-toggle navegacion-mobile" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"> Cambiar Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav menu-principal">
                        <li ><a href="index.php" id="home-icon"><span class="glyphicon glyphicon-home"></span></a></li>

                        <!-- MENU GARGANTILLAS -->
                        <li class="dropdown opcion-principal"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">GARGANTILLAS</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Agosto</a></li>
                            <li><a href="#">Septiembre</a></li>
                            <li><a href="#">Octubre</a></li>
                            <li><a href="#">Noviembre</a></li>
                          </ul>
                        </li>

                        <!-- MENU PULSERAS -->
                        <li class="dropdown opcion-principal"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PULSERAS</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Agosto</a></li>
                            <li><a href="#">Septiembre</a></li>
                            <li><a href="#">Octubre</a></li>
                            <li><a href="#">Noviembre</a></li>
                          </ul>
                        </li>

                        <!-- MENU ZARCILLOS -->
                        <li class="dropdown opcion-principal"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ZARCILLOS</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Agosto</a></li>
                            <li><a href="#">Septiembre</a></li>
                            <li><a href="#">Octubre</a></li>
                            <li><a href="#">Noviembre</a></li>
                          </ul>
                        </li>
                        <li id="btn-contacto"><a href="contacto.php">CONTACTO</a></li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
                
            </div>
        </div>
  </div>
</header>