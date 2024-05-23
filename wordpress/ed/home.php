<nav class="container-fluid menu">
    <div class="row">
      
      <div class="container">
        <div class="row align-items-center">
          <?php $imgLogo = get_option('OpcionCyRgeneral'); ?>
          <div class="col-3 col-md-12 col-lg-2 d-inline-flex d-md-block logo">
            <img src="<?php echo $imgLogo['imgLogo']; ?>" alt="">
            <p>extintores</p>
          </div>
          
          <div class="col-9 d-inline-flex d-md-none align-items-center justify-content-end">
            <button class="btn btn-link d-md-none d-flex align-items-center colapsar" aria-hidden="true">
              Menú&nbsp;<i class="fas fa-bars"></i>
            </button>
          </div>
          
          <div class="col-12 col-lg-10 d-md-inline-flex justify-content-between text-center pt-md-3  pb-md-3 p-lg-0 menuCentral" id="men-sec">
            
             <a class="w-100 marca" href="#inicio">Inicio</a>
             <?php $opciones = get_option('OpcionCyRgeneral'); ?>
             <?php if($opciones['ordenSecciones'] == 'ordenUno' ) { ?>
             <a class="w-100 marca" href="#servicios">Servicios</a>
             <a class="w-100 marca" href="#productos">Productos</a>
             <?php } else { ?>
             <a class="w-100 marca" href="#productos">Productos</a>
             <a class="w-100 marca" href="#servicios">Servicios</a>
             <?php } ?>
             <a class="w-100 marca" href="#somos">Somos</a>
             <?php
              $opcionV = get_option('OpcionCyRclientes');
                if($opcionV['clienteVision'] == 'mostrarCliente') {
                  echo '<a class="w-100 marca" href="#clientes">Clientes</a>';
                }
             ?>
             <a class="w-100 marca" href="#contacto">Contacto</a>
            
          </div>
          
        </div>
      </div>
      
    </div>
  </nav>
