<header id="main-header">

  <!-- ZONA 01: LOGIN - INSCRIBIRSE - CARRITO -->
  <div class="container">
        <div class="row">
           <!--
               INSCRIBIRSE - LOGIN - CARRITO 
            -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="btn-group botones-superiores">
                      <button class="btn btn-default btn-superior" data-toggle="modal" data-target=".modal-inscribirse"><img src="img/inscribete-icono.png" alt="">Inscríbete</button>
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
                                  <strong>¿Cómo quieres inscribirte?</strong>
                                </div>

                                      <div class="row">
                                            <div class="col-md-6 col-lg-6">                                                
                                                <a href="#" class="twitter-registro">
                                                  <figure class="icono-registro-social"><img src="img/twitter-icon-producto.png"></figure>
                                                  <span><strong>Conéctate con Twitter</strong></span>
                                                </a> 
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <a href="#" class="facebook-registro">
                                                  <figure class="icono-registro-social"><img src="img/facebook-icon-producto.png"></figure>
                                                  <span><strong>Conéctate con Facebook</strong></span>
                                                </a>
                                            </div>
                                      </div>                      

                                      <div class="row">
                                          <div class="col-md-12">
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
                                    <div class="col-md-6 col-lg-6">                                                
                                        <a href="#" class="twitter-registro">
                                          <figure class="icono-registro-social"><img src="img/twitter-icon-producto.png"></figure>
                                          <span><strong>Ingresar con Twitter</strong></span>
                                        </a> 
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <a href="#" class="facebook-registro">
                                          <figure class="icono-registro-social"><img src="img/facebook-icon-producto.png"></figure>
                                          <span><strong>Ingresar con Facebook</strong></span>
                                        </a>
                                    </div>
                              </div>  

                                <div class="formulario-login">
                                        <form action="inc/procesaformulario-login.php" method="POST"> 
                                            <div class="titulo-ingresar-tradicional">
                                              <span><strong>Registro Tradicional</strong></span>
                                            </div>
                                                 
                                            <div class="row">
                                                  <div class="col-md-4 text-center">
                                                      <div class="etiqueta-formulario">
                                                          <span>Email</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <input type="email" name="email"  required="required" id="email-login">
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Contraseña</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-8 contrasena">
                                                      <input type="password" name="password" required="required" id="password-login" >
                                                      <a href="#">Olvidé mi Contraseña</a>
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

                      <button class="btn btn-default btn-superior" onclick="location.href='carrito.php'"><img src="img/carrito-icono.png" alt="">Carrito: Vacio</button>
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
                  <nav>        
                      <ul class="menu-principal pull-right">
                          <li ><a href="index.php" id="home-icon"><span class="glyphicon glyphicon-home"></span></a></li>
                          <li class="opcion-principal"><a href="#">GARGANTILLAS</a>
                               <ul>
                                <li><a href="#">Julio - Agosto</a></li>
                                <li id="ultimas-opciones"><a href="#">Noviembre - Diciembre</a></li>
                                <li><a href="#">Septiembre - Octubre</a></li>                                
                                <li id="ultimas-opciones"><a href="#">Enero - Febrero (2015)</a></li>
                              </ul>
                          </li>
                          <li class="opcion-principal"><a href="#">PULSERAS</a>
                             <ul>
                                <li><a href="#">Julio - Agosto</a></li>
                                <li id="ultimas-opciones"><a href="#">Noviembre - Diciembre</a></li>
                                <li><a href="#">Septiembre - Octubre</a></li>                                
                                <li id="ultimas-opciones"><a href="#">Enero - Febrero (2015)</a></li>
                              </ul>
                          </li>
                          <li class="opcion-principal"><a href="#">ZARCILLOS</a>
                              <ul>
                                <li><a href="#">Julio - Agosto</a></li>
                                <li id="ultimas-opciones"><a href="#">Noviembre - Diciembre</a></li>
                                <li><a href="#">Septiembre - Octubre</a></li>                                
                                <li id="ultimas-opciones"><a href="#">Enero - Febrero (2015)</a></li>
                              </ul>
                          </li>
                          <li><a href="contacto.php">CONTACTO</a></li>
                      </ul>
                  </nav>
                
            </div>
        </div>
  </div>

              


</header>