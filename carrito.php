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
        <?php include 'inc/header2.php'; ?>
    
    <section class="titulo-carrito">
        <div class="row usuario-carrito-banner text-center">
            <h2>Ranyela, estás en tu carrito</h2>
        </div>
    </section>

    <section class="cuerpo-carrito">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 botones-principales-carrito text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Datos de Pago</button>
                    <!--
                          MODAL 1: CARRITO ENVIO DE DATOS DE PAGO 
                        -->
                        <!-- Large modal -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="boton-cerrar-modal-DatosDePago">Cerrar</button>
                                </div>

                                <div class="titulo-DatosDePago">
                                  <span id="datos-title">Datos de Pago</span>
                                  <span id="datos-complemento">Te enviaremos a tu email nuestros <strong>Datos Bancarios</strong></span>
                                </div>

                                <div class="formulario-DatosDePago">
                                        <form action="inc/procesaformulario-DatosDePago.php" method="POST">      
                                            <div class="row">
                                                  <div class="col-md-4 text-center">
                                                      <div class="etiqueta-formulario">
                                                          <span>Email</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-8 pull-left">
                                                      <input type="email" name="email"  required="required" id="email-DatosDePago">
                                                  </div>
                                            </div>

                                            <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="etiqueta-formulario">
                                                          <span>Contraseña</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-8 contrasena-DatosDePago">
                                                      <input type="password" name="password" required="required" id="password-DatosDePago" >
                                                      <a href="#">Olvidé mi Contraseña</a>
                                                  </div>
                                            </div>                                                 

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-DatosDePago">
                                                        <input type="submit" value="Confirmar" id="boton-DatosDePago">
                                                    </div>
                                                </div>   
                                            </div>                                            
                                        </form>                
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- FIN COMPONENTE MODAL -->










                    <button>Formalizar Pago</button>
                    <div class="total-carrito">
                        <span>Total: <strong>3.000 Bs</strong></span>
                    </div> 
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto1.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-01</span>
                          <span ><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>                          
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-02</span>
                          <span ><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>              

            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto3.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Septiembre-Octubre</span>
                          <span><strong>Modelo:</strong> Gargantilla Mod-01</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.600</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Septiembre-Octubre</span>
                          <span><strong>Modelo:</strong> Gargantilla Mod-02</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.530</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto5.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-03</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.550</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="articulo-carrito">
                        <figure>
                            <a href="#">
                                <img src="img/producto6.jpg" alt="">
                            </a>
                        </figure>
                        <div class="borrar-articulo-carrito">
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <div class="datos-articulo-carrito">
                          <span><strong>Temporada:</strong> Julio-Agosto</span>
                          <span><strong>Modelo:</strong> Pulsera Mod-04</span>
                          <span><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
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