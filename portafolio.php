
<?php require_once 'layouts/header.php'; ?>
<style>
    .classy-navbar {
        padding: 0;
        top: 0;
        margin: -29px 0 0 0;
    }
</style>

<div class="contenido" id="portafolio">
  <div class="row" id="cabecera">
      <div class="col-md-12">
        <h1>PORTAFOLIO</h1>
        <p>
          Estamos a la vanguardia de las tendencias para brindar las mejores soluciones a tus proyectos digitales.
        </p>
      <a href="" class="btn btn-outline-info text-center button-center">Pedir cotizacion</a>
      </div>
    </div>


  <section class="portafolio">
    <div class="galeria">
        <div class="contenedor">
                <header>
                    <form action="">
                    <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
                </form>
                    <?php 
                        //imprimir nombres de etiquetas categoria
                        $albums = scandir('assets/img/portafolio');
                        unset($albums[0]); 
                        unset($albums[1]);
                     ?>
                    <div class="categorias" id="categorias">
                        <a href="#" class="activo">All</a>
                        <?php 
                            foreach ($albums as $key => $value) { ?>
                                <a href="#"><?php echo $value; ?></a>
                            <?php } ?>
                    </div>
                </header>


            <section class="grid" id="grid">
                <?php 
                    //impresion de items segun el albuns
                    foreach ($albums as $key => $value) { ?>
                            <?php 
                                    //fotos del albun
                                    $fotos = scandir('assets/img/portafolio/'.$value);
                                    unset($fotos[0]); 
                                    unset($fotos[1]);
                                    foreach ($fotos as $key => $foto) { ?>
                                        <div class="item" 
                                             data-categoria="<?php echo $value; ?>"
                                             data-etiquetas=""
                                             data-descripcion="">
                                            <div class="item-contenido">
                                                <img src="assets/img/portafolio/<?php echo $value; ?>/<?php echo $foto; ?>" alt="">
                                            </div>
                                        </div>
                                    <?php  } ?>
                             
                    <?php } ?>
                                        
            </section>

            <section class="overlay" id="overlay">
                <div class="contenedor-img">
                    <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
                    <img src="" alt="">
                </div>
                <p class="descripcion"></p>
            </section>

        </div>
      </div>
  </section>
      
</div>



<?php require_once 'layouts/footer.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<link rel="stylesheet" href="assets/css/estilos-galeria.css">


    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="assets/js/main.js"></script>
