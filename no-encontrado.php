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
    <section class="section-mensaje-noencontrado">
        <div class="container">        
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 contenedor-mensaje">
                    <h3 id="lo-sentimos">Lo sentimos, <br>no hemos encontrado tu búsqueda</h3>
                </div>
            </div>
        </div>

    </section>

    <!--
        RECOMENDADOS
    -->
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
            <div class="carousel slide" data-ride="carousel" id="carousel-recomendados-producto">
                <div class="carousel-inner col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
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

    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>  
  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>