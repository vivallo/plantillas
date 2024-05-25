<section id="servicios" class="seccion-pag container-fluid">
    <div class="row">
       <div class="container">
         <div class="row text-center fa-4x p-4">
         <div class="col-12 text-center pt-3 pb-3" style="color: #333;"><h1>SERVICIOS</h1></div>
			 <?php $servicio = get_option('OpcionCyRservicios'); ?>
          <button type="button" class="btn col-sm-6 col-lg-3 mt-4 mb-4 wow zoomIn" data-wow-delay="0.1s" data-toggle="popoverServicios" data-placement="top" data-content="<?php echo $servicio['textoInstalar']; ?>">
          <i class="icon-cyr-engranajes mb-4 mt-4"></i><h2>Instalación</h2>
          </button>
			 
          <button type="button" class="btn col-sm-6 col-lg-3 mt-4 mb-4 wow zoomIn" data-wow-delay="0.5s" data-toggle="popoverServicios" data-placement="top" data-content="<?php echo $servicio['textoPrevencion']; ?>">
          <i class="icon-cyr-gorro mb-4 mt-4"></i><h2>Prevención</h2>
          </button>
			 
          <button type="button" class="btn col-sm-6 col-lg-3 mt-4 mb-4 wow zoomIn" data-wow-delay="0.3s" data-toggle="popoverServicios" data-placement="top" data-content="<?php echo $servicio['textoAsesoria']; ?>">
          <i class="icon-cyr-usuarios mb-4 mt-4"></i><h2>Asesoría</h2>
          </button>
			 
          <button type="button" class="btn col-sm-6 col-lg-3 mt-4 mb-4 wow zoomIn" data-wow-delay="0.7s" data-toggle="popoverServicios" data-placement="top" data-content="<?php echo $servicio['textoMantener']; ?>">
          <i class="icon-cyr-herramientas mb-4 mt-4"></i><h2>Mantención</h2>
          </button>
          
         </div>
      </div>
    </div>  
  </section> 
