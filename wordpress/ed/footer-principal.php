<section class="conatiner-fluid pie">
    
    <div class="container">
      <div class="row">
       
        <div class="col-12 col-md-8">
          <div class="row">           
            <div class="col-12 buscanos">
              <h2 class="pt-3 pb-3">Búscanos</h2>
              <ul class="w-100 d-flex flex-wrap text-left p-0">
              <?php $iconos = cmb2_get_option('OpcionCyRubicacion', 'rSociales');
               $cont = 1;
               foreach($iconos as $icono) {
               if( $cont >= 2 ) { echo '<li class="mr-3">|</li>'; } ?>
                <li class="mr-3"><a href="<?php echo $icono['direccionURL'];?>" target="_blank"><i class="icon-cyr-<?php echo $icono['redSocial'];?>"></i> <?php echo $icono['redSocial'];?></a></li>
                <?php $cont++; } ?>
              </ul>
            </div>
            <div id="textoDos" class="col-12 buscanos">
             <h2 class="pt-3 pb-3">Contacto</h2>
              <ul class="w-100 text-left p-0">
               <?php $fijos = cmb2_get_option('OpcionCyRubicacion', 'listaFonoFijo'); ?>
               <?php $fonos = cmb2_get_option('OpcionCyRubicacion', 'listaFonos'); ?>
               <?php $whatsapps = cmb2_get_option('OpcionCyRubicacion', 'numeroWA'); ?>
               <?php $correos = cmb2_get_option('OpcionCyRubicacion', 'listaCorreos'); ?>
               <?php $direcciones = cmb2_get_option('OpcionCyRubicacion', 'listaDirecciones'); ?>
               
               <?php if(!$fijos == '') { ?>
               <li><i class="fa fa-phone-volume"></i> <span>Fono Fijo:</span> <span id="txtEfecto4"><?php $contFF = 1 ; foreach($fijos as $fijo) { if( $contFF >= 2 ) { echo ' - ' ; }; echo $fijo; $contFF++; } ?></span></li><?php } ?>
                
                <?php if(!$fonos == '') { ?>
                <li><i class="icon-cyr-movil"></i> <span>Fono Celular:</span> <span id="txtEfecto4"><?php $contF = 1 ; foreach($fonos as $fono) { if( $contF >= 2 ) { echo ' - ' ; }; echo $fono; $contF++; } ?></span></li><?php } ?>
                
                <?php if(!$whatsapps == '') { ?>
                <li><i class="icon-cyr-whatsapp"></i> <span>WhatsApp:</span> <span id="txtEfecto5"><?php $contWA = 1 ; foreach($whatsapps as $whatsapp) { if( $contWA >= 2 ) { echo ' - ' ; }; echo '(+56) '.$whatsapp; $contWA++; } ?></span></li><?php } ?>
                
                <?php if(!$correos == '') { ?>
                <li><i class="icon-cyr-correo"></i> <span>Correo:</span>  <span id="txtEfecto6"><?php $contC = 1 ; foreach($correos as $correo) { if( $contC >= 2 ) { echo ' - ' ; }; echo $correo; $contC++; } ?></span></li><?php } ?>
                
                <?php if(!$direcciones == ''){ ?>
                <li><i class="icon-cyr-direccion"></i> <span>Dirección:</span> <span id="txtEfecto7"><?php $contD = 1 ; foreach($direcciones as $direccion) { if( $contD >= 2 ) { echo ' - ' ; }; echo $direccion; $contD++;} ?></span></li><?php } ?>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-4 secciones seccion">
          <h2 class="pt-3 pb-3">Secciones</h2>
          <ul class="w-100 text-left p-0">
            <li class="marca wow fadeInUp"><a href="#inicio"><i class="fa fa-angle-right"></i> Inicio</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.2s"><a href="#servicios"><i class="fa fa-angle-right"></i> Servicios</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.3s"><a href="#productos"><i class="fa fa-angle-right"></i> Productos</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.4s"><a href="#somos"><i class="fa fa-angle-right"></i> Somos</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.5s"><a href="#clientes"><i class="fa fa-angle-right"></i> Clientes</a></li>
            <li class="marca wow fadeInUp" data-wow-delay="0.6s"><a href="#contacto"><i class="fa fa-angle-right"></i> Contacto</a></li>
          </ul>
        </div>
                
      </div>
      
      <?php $imgLogo2 = get_option('OpcionCyRgeneral'); ?>
      <div class="row final">
        <div class="col-4 text-center texto align-self-center"> Copyright 2018 &copy; | <b>Castro y Rivera</b> extintores</div>
        <div class="col-4 text-center centro"><img src="<?php echo $imgLogo2['imgLogo2']; ?>" alt=""></div>
        <div class="col-4 externo">Este sitio es impulsado por:<a href="https://webgrafica.cl" target="blanc"><img src="<?php echo get_theme_file_uri( 'img/isotipoWG.png'); ?>" alt=""></a></div>
      </div>
      
    </div>
    
  </section>
  
<?php wp_footer(); ?>

</body>
</html>