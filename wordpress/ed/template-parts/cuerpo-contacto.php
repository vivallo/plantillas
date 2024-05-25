<section id="contacto" class=" contactoParallax seccion-pag container-fluid" style="background-image: url(<?php $mapa = get_option('OpcionCyRubicacion'); echo $mapa['imgContacto']; ?>);">
    
    <div class="container">
      <div class="row">
        <div class="col-12 pt-5 pb-5 text-center">
          <h1>CONTACTO</h1>
        </div>
        <div>
          
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row text-center">
       
        <?php $formulario = get_option('OpcionCyRubicacion'); ?>
        <?php echo str_replace('&amp;', '&', do_shortcode($formulario['codigoCF7'])); ?>
        
      </div>
    </div>
    
  </section>
