<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include 'inc/head_common.php'; ?>
  </head>
  <body>
        <?php include 'inc/header.php'; ?>
    
    <section class="titulo-principal-categoria text-center">
        <h2>Temporada Julio - Agosto</h2>
    </section>

    <section class="detalles-producto">
        
        <div class="container">
            <div class="row Producto-contenido">

                <!--
                    IMAGENES PRINCIPALES
                -->
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <article id="slide-detalles-producto" class="carousel slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1 col-lg-1" id="malditas-columnas-caga-anchos">
                                    <ol class="carousel-indicators" id="indicators-productos">
                                        <li data-target="#slide-detalles-producto" data-slide-to ="0" class="active">
                                            <img src="img/producto1.jpg" >
                                        </li>                                                                     
                                        
                                        <li data-target="#slide-detalles-producto" data-slide-to ="1">
                                            <img src="img/producto2.jpg">
                                        </li>

                                        <li data-target="#slide-detalles-producto" data-slide-to ="2">
                                            <img src="img/producto3.jpg">
                                        </li>

                                        <li data-target="#slide-detalles-producto" data-slide-to ="3">
                                            <img src="img/producto4.jpg">
                                        </li>
                                    </ol>
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <div id="imagenes-ppal-detalles" class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/producto1.jpg" class="adaptar">
                                        </div>
                                        <div class="item">
                                            <img src="img/producto2.jpg" class="adaptar">
                                        </div>
                                        <div class="item">
                                            <img src="img/producto3.jpg" class="adaptar">
                                        </div>
                                        <div class="item">
                                            <img src="img/producto4.jpg" class="adaptar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>  
                </div>

                <!--
                    Detalles de la información
                -->
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class=" datos-generales-producto" id="descripcion">
                            <div class="datos-articulo-carrito" >
                              <span><strong>Temporada:</strong> Julio-Agosto</span>
                              <span><strong>Modelo:</strong> Pulsera Mod-01</span>
                              <span ><strong>Precio:</strong><strong id="precio-carrito"> Bs.300</strong></span>
                              <span>Cantidad: </span>

                                    <!-- SUMADOR -->
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades">
                                    <span class="input-group-btn data-up">
                                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                    </span>
                                </div>  
                                <!-- FIN SUMADOR -->                        
                            </div> 

                            <div class="botones-producto-detalles">
                                    <button class="btn btn-primary" id="agregar-al-carrito"><img src="img/agregar-al-carrito-icon.png" id="icon-agregar-carrito">Agregar al carrito</button>
                                    <button class="btn btn-primary" data-toggle="modal" data-target=".modal-comprar" id="boton-comprar">Comprar</button>
                                    
                                    <!--
                                      MODAL: COMPRAR - TIPO DE PAGO 
                                    -->

                                    <div class="modal fade modal-comprar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-right cerrar-ventana" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                            </div>

                                            <div class="titulo-compra">
                                              <span id="compra-title">Ranyela, confirma tu compra</span>
                                            </div>

                                            <div class="row">
                                                  <div class="col-md-5 text-center">
                                                      <div class="imagen-producto-comprar">
                                                          <figure><img src="img/producto2.jpg" alt=""></figure>
                                                          <span>Temporada Noviembre - Diciembre <br>Pulsera 01-A</span>
                                                          <span id="precio-comprar-modal">Bs.F. 1350</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-7 col-md-7">
                                                    <div class="cantidad-ventana-comprar">
                                                        <span>Cantidad:</span>
                                                        <!-- SUMADOR -->
                                                        <div class="input-group number-spinner">
                                                            <span class="input-group-btn data-dwn">
                                                                <button class="btn btn-default btn-info ke-ase-dwn" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                            </span>
                                                            <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-modal-producto">
                                                            <span class="input-group-btn data-up">
                                                                <button class="btn btn-default btn-info ke-ase-up" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                            </span>
                                                        </div>  
                                                        <!-- FIN SUMADOR -->  
                                                    </div>

                                                    <div class="email-ventana-comprar">
                                                        <span id="email-title">Email:</span>
                                                        <span id="correo-usuario-comprar">comandos@comandosgroup.com.ve</span>
                                                    </div>

                                                    <div class="botones-confirmar-compra">
                                                        <button>Pagar con MercadoPago</button>
                                                        <button>Confirmar Compra</button>
                                                    </div>

                                                    
                                                  </div>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    <!-- FIN COMPONENTE MODAL -->
                            </div>
                    </div>
                    <div class="follow-producto text-center">
                        <div class="titulo-sociales-producto">
                            <span>¿Te gustó? <br> ¡Compartelo en las redes sociales!</span>
                        </div>
                        
                        <div id="facebook-producto">
                            <a href="#"><img src="img/facebook-icon-producto.png" ><span>Compartir</span></a>
                            
                        </div>
                        
                        <div id="twitter-producto">
                            <a href="#"><img src="img/twitter-icon-producto.png" ><span>Twittear</span></a>
                            
                        </div>
                        <div id="google-producto">
                            <a href="#"><img src="img/google-icon-producto.png"><span>Compartir</span></a>
                            
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="productos-recomendados hidden-xs">
        <div class="container">
            <div class="row">
                <!--
                    TITULO RECOMENDADOS
                -->
                <div class="col-md-12 col-lg-12">
                    <div class="recomendados-titulo">
                        <span>Recomendados</span>
                    </div>
                    
                    <div class="controles-recomendados">
                        <a href="#carousel-recomendados-producto" data-slide="prev"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                        <a href="#carousel-recomendados-producto" data-slide="next"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                    </div>
                </div>
            </div>

            <!--
                GALERIA PRODUCTOS
            -->
            <div class="carousel" data-ride="carousel" id="carousel-recomendados-producto">
                <div class="carousel-inner text-center">
                    <div class="item active">
                        <div class="container listado-productos">
                            <div class="row">
                                <!-- PRODUCTO 1 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="#"><figure><img src="img/producto1.jpg"></figure></a>
                                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Pulsera Mod-01</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.300</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 2 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <a href="#"><figure><img src="img/producto2.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Pulsera Mod-02</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.450</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 3 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="#"><figure><img src="img/producto3.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Gargantilla Mod-01</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.600</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 4 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto hidden-sm">
                                    <div class="empaquetado">
                                        <a href="#"><figure><img src="img/producto4.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Gargantilla Mod-02</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.530</span>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="item">
                        <div class="container listado-productos">
                            <div class="row">
                                <!-- PRODUCTO 5 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="#"><figure><img src="img/producto4.jpg"></figure></a>
                                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Pulsera Mod-01</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.300</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 6 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <a href="#"><figure><img src="img/producto5.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Pulsera Mod-02</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.450</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 7 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="#"><figure><img src="img/producto8.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Gargantilla Mod-01</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.600</span>
                                    </div>
                                </div>

                                <!-- PRODUCTO 8 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto hidden-sm">
                                    <div class="empaquetado">
                                        <a href="#"><figure><img src="img/producto7.jpg" alt=""></figure></a>
                                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Gargantilla Mod-02</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.530</span>
                                    </div>
                                </div>
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
  <script src="js/sumador.js"></script>
  
</html>