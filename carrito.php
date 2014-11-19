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
                    <button>Datos de Pago</button>
                    <button>Formalizar Pago</button>
                    <button class="total-carrito">Total: 3.000Bs</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 articulo-carrito">
                    <div class="articulo-carrito">
                        <figure>AQUI IMAGEN PARA CARRITO</figure>
                        <div class="datos-articulo-carrito">
                          <span>Temporada: </span>
                          <span>Modelo: <strong>Mod-01</strong></span>
                          <span>Precio: <strong>Precio</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 articulo-carrito">
                    <div class="articulo-carrito">
                        <figure>AQUI IMAGEN PARA CARRITO</figure>
                        <div class="datos-articulo-carrito">
                          <span>Temporada: </span>
                          <span>Modelo: <strong>Mod-01</strong></span>
                          <span>Precio: <strong>Precio</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 articulo-carrito">
                    <div class="articulo-carrito">
                        <figure>AQUI IMAGEN PARA CARRITO</figure>
                        <div class="datos-articulo-carrito">
                          <span>Temporada: </span>
                          <span>Modelo: <strong>Mod-01</strong></span>
                          <span>Precio: <strong>Precio</strong></span>
                          <span>Cantidad: </span>
                          <div class="stock-quantity-inputs" data-component="quantitySelector">
                                <input type="button" class="stock-quantity-increments" name="pop" value="-" disabled="">
                                <input type="number" id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" min="1" max="9999" title="Cantidad de Unidades" value="1">
                                <input type="button" class="stock-quantity-increments" name="push" value="+">
                            </div>
                        </div> 
                    </div>                  
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 articulo-carrito">
                    <div class="articulo-carrito">
                        <figure>AQUI IMAGEN PARA CARRITO</figure>
                        <div class="datos-articulo-carrito">
                          <span>Temporada: </span>
                          <span>Modelo: <strong>Mod-01</strong></span>
                          <span>Precio: <strong>Precio</strong></span>
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