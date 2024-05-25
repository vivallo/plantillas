<?php $mapa = get_option('OpcionCyRubicacion'); ?>
<?php if(!$mapa['mapaGoogle']== '') { ?>
<section class="container-fluid">
  <div class="row p-0"><?php echo $mapa['mapaGoogle']; ?></div>
</section>
<?php } ?>
