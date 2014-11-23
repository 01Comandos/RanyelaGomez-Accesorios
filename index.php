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
    
    <section class="SlideShow_principal">
        <article id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                        <li data-target="#miSlide" data-slide-to ="0" class="active"></li>
                        <li data-target="#miSlide" data-slide-to ="1"></li>
                        <li data-target="#miSlide" data-slide-to ="2"></li>
                        <li data-target="#miSlide" data-slide-to ="3"></li>
                </ol>

                <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slide1.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="img/slide2.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="img/slide1.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="img/slide2.jpg" class="adaptar">
                        </div>
                </div>

                <!--
                    PASADORES
                -->
                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </article>  
    </section>

    <section class="mas-visitados text-center">
        <!--
            TITULO DE CUERPO ARTICULOS
        -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 titulo-index">
                    <h1>Ser autentica es nuestro mayor acierto</h1>
                </div>
            </div>

            <!--
                PASADORES DE SECCIONES
            -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="categorias-index">
                        <li><a href="#">TODOS</a></li>
                        <li><a href="#">MEJOR VENDIDO</a></li>
                        <li><a href="#">MÁS VISITADOS</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-offset-1 controles-index">
                    <a href="#"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                    <a href="#"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                </div>
            </div>
        </div>

            <!--
                PRODUCTOS
            -->
        <div class="container listado-productos">
            <div class="row">
                <!-- PRODUCTO 1 -->
                <div class="col-md-3 producto">
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
                <div class="col-md-3 producto">
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
                <div class="col-md-3 producto">
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
                <div class="col-md-3 producto">
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

            <div class="row">
                <!-- PRODUCTO 5 -->
                <div class="col-md-3 producto">
                    <div class="empaquetado">
                        <a href="#"><figure><img src="img/producto5.jpg"></figure></a>
                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                        <div class="prenda-stock">
                            <span class="prenda">Pulsera Mod-03</span>
                            <span class="stock-etiqueta">STOCK</span>
                        </div>
                        <span class="precio">Bs.550</span>
                    </div>
                </div>

                <!-- PRODUCTO 6 -->
                <div class="col-md-3 producto">
                    <div class="empaquetado">
                        <a href="#"><figure><img src="img/producto6.jpg" alt=""></figure></a>
                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                        <div class="prenda-stock">
                            <span class="prenda">Pulsera Mod-04</span>
                            <span class="stock-etiqueta">STOCK</span>
                        </div>
                        <span class="precio">Bs.300</span>
                    </div>
                </div>

                <!-- PRODUCTO 7 -->
                <div class="col-md-3 producto">
                    <div class="empaquetado">
                        <a href="#"><figure><img src="img/producto7.jpg" alt=""></figure></a>
                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                        <div class="prenda-stock">
                            <span class="prenda">Pulsera Mod-05</span>
                            <span class="stock-etiqueta">STOCK</span>
                        </div>
                        <span class="precio">Bs.400</span>
                    </div>
                </div>

                <!-- PRODUCTO 8 -->
                <div class="col-md-3 producto">
                    <div class="empaquetado">
                        <div class="etiqueta-nuevo">
                            <span>NUEVO</span>
                        </div>
                        <a href="#"><figure><img src="img/producto8.jpg" alt=""></figure></a>
                        <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                        <div class="prenda-stock">
                            <span class="prenda">Gargantilla Mod-03</span>
                            <span class="stock-etiqueta">STOCK</span>
                        </div>
                        <span class="precio">Bs.450</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="letritas">
                        <h3>Porque lucir bellas y originales es una ciencia</h3>
                    </div>
                    <div class="formulario-newsletter">
                        <form action="">
                            <input type="email" name="email" placeholder="@Email" required="required" id="email3">
                            <input type="submit" value="SUSCRIBETE" id="boton-suscribir">
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="imagen-ciencia">
                        <img src="img/img-newsletter.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
  

  </body>
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</html>