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
    
    <section class="titulo-principal-categoria text-center">
        <h2>Temporada Julio - Agosto</h2>
    </section>

    <section class="detalles-producto">
        
        <div class="container">
            <div class="row Producto-contenido">

                <!--
                    IMAGENES PRINCIPALES
                -->
                <div class="col-md-5 col-lg-5">
                    <article id="slide-detalles-producto" class="carousel slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1 col-lg-1" id="malditas-columnas-caga-anchos">
                                    <ol class="carousel-indicators" id="indicators-productos">
                                        <li data-target="#slide-detalles-producto" data-slide-to ="0" class="active">
                                            <img src="img/producto1.jpg">
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
                <div class="col-md-7 col-lg-7">
                    <div class=" datos-generales-producto" id="descripcion">
                            <div class="datos-articulo-carrito" >
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

                            <div class="botones-producto-detalles">
                                    <button class="btn btn-primary"><img src="img/agregar-al-carrito-icon.png" id="icon-agregar-carrito">Agregar al carrito</button>
                                    <button class="btn btn-primary">Comprar</button>
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

    <section class="productos-recomendados">
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
                        <a href="#"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                    </div>
                </div>
            </div>

            <!--
                GALERIA PRODUCTOS
            -->
            <div class="row Productos-Recomendados text-center">
                <!-- PRODUCTO 1 -->
                <div class="col-md-3 col-lg-3 producto">
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
                <div class="col-md-3 col-lg-3 producto">
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
                <div class="col-md-3 col-lg-3 producto">
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
                <div class="col-md-3 col-lg-3 producto">
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
    </section>      
  

  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>