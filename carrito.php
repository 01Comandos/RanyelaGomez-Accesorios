<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/head_common.php'; ?>
  </head>
  <body>
        <?php include 'inc/header2.php'; ?>
    
    <section class="titulo-carrito">
        <div class="row usuario-carrito-banner text-center">
            <h2>Ranyela, estás en tu carrito</h2>
        </div>
    </section>

    <section class="cuerpo-carrito">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <button class="btn btn-primary botones-principales-carrito" id="mercadopago-carrito">Pagar con MercadoPago</button>
                    <button class="btn btn-primary botones-principales-carrito" data-toggle="modal" data-target=".modal-datos-de-pago">Datos de Pago</button>
                    <!--
                          MODAL 1: CARRITO ENVIO DE DATOS DE PAGO 
                        -->
                        <!-- Large modal -->
                        <div class="modal fade modal-datos-de-pago" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-right cerrar-ventana" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                </div>

                                <div class="titulo-DatosDePago">
                                  <span id="datos-title">Datos de Pago</span>
                                  <span id="datos-complemento">Te enviaremos a tu email nuestros <strong>Datos Bancarios</strong> <br>¿Deseas Recibirlos?</span>
                                </div>
                                         
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="btn-DatosDePago">
                                          <button class="btn btn-primary" id="boton-DatosDePago">Confirmar</button>
                                          <button class="btn btn-primary" id="boton-DatosDePago-regresar">Regresar</button>
                                        </div>
                                    </div>   
                                </div>                                                     
                            </div>
                          </div>
                        </div>
                        <!-- FIN COMPONENTE MODAL -->


                    <button class="btn btn-primary botones-principales-carrito" id="btn-xs-400" data-toggle="modal" data-target=".modal-formalizar-pago">Formalizar Pago</button>

                    <!--
                          MODAL 2: FORMALIZAR PAGOS 
                        -->
                        <!-- Large modal -->
                        <div class="modal fade modal-formalizar-pago" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-right cerrar-ventana" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                </div>

                                <div class="titulo-DatosDePago">
                                  <span id="datos-title">Formalizar Pago</span>
                                  <span id="datos-complemento">Confirmaremos tu <strong>Operación Bancaria</strong> en <strong>24hrs hábiles</strong></span>
                                </div>

                                <div class="formulario-FormalizarPago">
                                        <form action="inc/procesaformulario-FormalizarPago.php" method="POST" id="formulario-FormalizarPago">      
                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                                                      <div class="etiqueta-formulario">
                                                          <span>Entidad Bancaria</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">
                                                      <input type="text" name="name-bank"  required="required" id="nombre-banco">
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Monto</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">
                                                      <input type="text" name="monto-pago" required="required" id="monto-pago" >
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Serial de Operación</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">
                                                      <input type="text" name="serial" required="required" id="serial-pago" >
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Fecha</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">                                                      
                                                        <div class="form-group">
                                                            <div class='input-group date' id='calendario-ConfirmarPago'>
                                                                <input type='text' class="form-control" id="calendario" />
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  
                                            </div>
                                            <div class="dividir">
                                                <!-- LADO OSCURO DE LA WEB 
                                                PARA CREAR LA DIVISION DE DIRECCION 
                                                CON EL RESTO DEL FORMULARIO -->
                                            </div>

                                            <div class="row direccion-envio">
                                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Dirección de Envío</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-8 col-sm-8 col-md-8">
                                                      <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje" required="required" id="direccion-envio"></textarea>
                                                  </div>
                                            </div>                                                   

                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="btn-FormalizarPago">
                                                        <input type="submit" value="Confirmar" id="boton-FormalizarPago" onclick="enviar-FormalizarPago">
                                                    </div>
                                                </div>   
                                            </div>                                            
                                        </form>                
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- FIN COMPONENTE MODAL -->


                    <div class="total-carrito">
                        <span>Total: <strong>3.000 Bs</strong></span>
                    </div> 
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito primero">
                        <figure>
                            <a href="#">
                                <img src="img/producto1.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-01</span>
                          <span ><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                            <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>    
                            <!-- FIN SUMADOR -->                           
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-02</span>
                          <span ><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                          <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>   
                          <!-- FIN SUMADOR -->  
                        </div> 
                    </div>                  
                </div>              

            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto3.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Septiembre-Octubre</span>
                          <span><strong>Modelo:</strong> Gargantilla Mod-01</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.600</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                          <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>   
                          <!-- FIN SUMADOR -->  
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Septiembre-Octubre</span>
                          <span><strong>Modelo:</strong> Gargantilla Mod-02</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.530</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                          <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>   
                          <!-- FIN SUMADOR -->  
                        </div> 
                    </div>                  
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto5.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-03</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.550</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                          <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>  
                          <!-- FIN SUMADOR -->  
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 div-articulo">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto6.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-04</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <!-- SUMADOR -->
                          <div class="sumador-carrito">
                            <div class="input-group number-spinner">
                              <span class="input-group-btn data-dwn">
                                  <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                              </span>
                              <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                              <span class="input-group-btn data-up">
                                  <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                              </span>
                            </div>
                          </div>  
                          <!-- FIN SUMADOR -->  
                        </div> 
                    </div>                  
                </div>
            </div>


        </div>

    </section>


    
    
    
    
  

  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>