<section id="somos" class="somos seccion-pag pb-5 container-fluid">
    <?php $somos = get_option('OpcionCyRsomos'); ?>
    <div class="container">
      <div class="row">
       <div class="col-12 text-center pt-5 pb-4">
        <h1>SOMOS</h1>
        </div>
        <div class="col-12 col-lg-8 ">
         
          <div class="col-12 texto">
			  <p class="wow zoomInRight"><?php echo $somos['textoSomos']; ?></p></div>
           
            <div class="col-12">
            
            <div class="colapso wow zoomInRight" data-wow-delay="0.3s" id="accordion">
             
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Misión<i class="float-right icon-cyr-cohete"></i>
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <p><?php echo $somos['textoMision']; ?></p>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Visión<i class="float-right icon-cyr-ojo"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <p><?php echo $somos['textoVision']; ?></p>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Política de Calidad
                    <i class="float-right icon-cyr-calidad"></i></button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <p><?php echo $somos['textoPolitica']; ?></p>
                  </div>
                </div>
              </div>
            </div>

            </div>
        </div>
        <div class="col-12 col-lg-4 text-center p-3 imagen">
          <img src="<?php echo get_theme_file_uri( 'img/logo-somos2.png'); ?>" class="wow zoomInLeft img-fluid" data-wow-delay="0.5s">
        </div>
      </div>          
        <hr>

        <div class="row equipo d-flex justify-content-center">
		<?php
		$contar = 0;
        $usuarios = get_users('orderby=user_id&role=editor');
        foreach ($usuarios as $usuario) { ?>
          <div class="col-12 col-md-6 col-lg-4 pt-4 pb-4 wow zoomIn <?php if($usuario->ID == 2) { echo 'order-2 order-lg-1" data-wow-delay="0.9s'; } else if($usuario->ID == 4) {echo 'order-1 order-lg-2" data-wow-delay="0.7s'; } else if($usuario->ID == 3) {echo 'order-3" data-wow-delay="1.1s'; } ?>">
			  <?php $incluye = get_user_meta($usuario->ID, 'perfil_usuario_avatar', true); ?>
            <img src="<?php if($incluye !== '') { echo $incluye; } else { echo get_theme_file_uri('img/u-sin-foto.jpg'); } ?>">
            <h3 class="mt-3 p-0"><?php echo $usuario->user_firstname; ?> <?php echo $usuario->user_lastname; ?></h3>
            <h4 class="mb-3 p-0"><?php echo $usuario->display_name; ?></h4>
          </div>
			
		<?php if(++$contar > 2) break; } ?>
        </div>
    </div>
    
  </section>
