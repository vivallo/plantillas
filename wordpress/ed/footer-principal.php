<section class="conatiner-fluid pie">
    
    <div class="container">
      <div class="row">
       
        <div class="col-12 col-md-8">
          <div class="row">           
            <div class="col-12 buscanos">
              <h2 class="pt-3 pb-3">Búscanos</h2>
              <ul class="w-100 d-flex flex-wrap text-left p-0">
              <?php $ubicar = get_option('OpcionCyRubicacion'); ?>
                <?php if(!$ubicar['facebook']=='') { ?><li class="mr-3"><a href="<?php echo $ubicar['facebook'];?>" target="_blank"><i class="icon-cyr-facebook"></i> Facebook </a></li><?php } ?>
                <?php if(!$ubicar['instagram']=='') { ?><li class="mr-3"><a href="https://www.instagram.com/<?php echo $ubicar['instagram'];?>/" target="_blank"><i class="icon-cyr-instagram"></i> Instagram </a></li><?php } ?>
                <?php //echo '<li class="mr-3">|</li>'; ?>
              </ul>
            </div>
            <div id="textoDos" class="col-12 buscanos">
             <h2 class="pt-3 pb-3">Contacto</h2>
              <ul class="w-100 text-left p-0">
                
               
                <li><i class="icon-cyr-movil"></i> <span>Fono Movil:</span> <span id="txtEfecto4"><?php echo $ubicar['movilUno']; ?></span></li>
                
                <li><i class="icon-cyr-whatsapp"></i> <span>WhatsApp:</span> <span id="txtEfecto5"><?php echo $ubicar['WaUno']; ?></span></li>
               
                <li><i class="icon-cyr-correo"></i> <span>Correo:</span>  <span id="txtEfecto6"><?php echo $ubicar['correoUno']; ?></span></li>
                
                <li><i class="icon-cyr-direccion"></i> <span>Dirección:</span> <span id="txtEfecto7"><?php echo $ubicar['direccionUno']; ?></span></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-4 secciones seccion">
          <h2 class="pt-3 pb-3">Secciones</h2>
          <ul class="w-100 text-left p-0">
            <li class="marca wow fadeInUp"><a href="#inicio"><i class="icon-cyr-flecha-der"></i> Inicio</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.2s"><a href="#servicios"><i class="icon-cyr-flecha-der"></i> Servicios</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.3s"><a href="#productos"><i class="icon-cyr-flecha-der"></i> Productos</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.4s"><a href="#somos"><i class="icon-cyr-flecha-der"></i> Somos</a></li>
             <?php
              $opcionV = get_option('OpcionCyRclientes');
                if($opcionV['clienteVision'] == 'mostrarCliente') {
            	  echo '<li class="marca wow fadeInUp" data-wow-delay="0.5s"><a href="#clientes"><i class="icon-cyr-flecha-der"></i> Clientes</a></li>';
				}
			?>
            <li class="marca wow fadeInUp" data-wow-delay="0.6s"><a href="#contacto"><i class="icon-cyr-flecha-der"></i> Contacto</a></li>
          </ul>
        </div>
                
      </div>
      
      <div class="row final">
        <div class="col-12 col-lg-4 text-center texto align-self-center py-5 p-lg-0"> Copyright 2020 &copy; | <b>Extintores a Domicilio</b></div>
        <div class="col-12 col-lg-4 text-center centro"><img src="<?php echo get_theme_file_uri( 'img/logo-pie.png'); ?>" alt=""></div>
        <div class="col-12 col-lg-4 text-center externo">Sitio impulsado por:<br/><a href="https://webgrafica.cl" target="blanc"><img src="<?php echo get_theme_file_uri( 'img/logoWG.png'); ?>" alt=""></a></div>
      </div>
      
    </div>
    
  </section>
  
<?php wp_footer(); ?>

</body>
</html>
