<section class="container-fluid pendon p-0">
  
    <div id="jssor_1" class="slider"> <!-- Loading Screen -->
     
      <div data-u="loading" class="jssorl-009-spin"><img src="<?php echo get_theme_file_uri( 'images/spin.svg'); ?>" /></div>
      
    <div data-u="slides" class="capaUno">
    
     <?php $dinamicos = cmb2_get_option('OpcionCyRvitrina', 'vitrinaCyRuno'); ?>
     <?php $contD = 0; foreach($dinamicos as $dinamico) { ?><div class="fondo<?php if( $contD == 0 || $contD == 2 ) {echo 'Uno'; } else { echo 'Dos'; } ?>">
        <img data-t="<?php echo $contD*4; ?>" class="img<?php echo $contD; ?>" src="<?php echo $dinamico['imgVitrina']; ?>" />
        <div data-t="<?php echo $contD*4+1; ?>" class="texto<?php if( $contD == 0 || $contD == 2 ) {echo 'Uno'; } else { echo 'Dos'; } ?>A"><?php echo $dinamico['subtituloDinamica']; ?></div>
        <div data-t="<?php echo $contD*4+2; ?>" class="texto<?php if( $contD == 0 || $contD == 2 ) {echo 'Uno'; } else { echo 'Dos'; } ?>B"><?php echo $dinamico['tituloDinamica']; ?></div>
        <div data-t="<?php echo $contD*4+3; ?>" class="texto<?php if( $contD == 0 || $contD == 2 ) {echo 'Uno'; } else { echo 'Dos'; } ?>C"><?php echo $dinamico['refenciaDinamica']; ?></div>
      </div>
      
      <?php $contD++; } ?>      
    </div>
       
        <!-- Arrow Navigator -->    
     <div data-u="arrowleft" class="jssora051" style="left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
      <svg viewbox="0 0 16000 16000">
        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
      </svg>
    </div>
    
    <div data-u="arrowright" class="jssora051" style="right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
      <svg viewbox="0 0 16000 16000">
        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
      </svg>
    </div>
    
      </div>
    
  </section>
  </header>
