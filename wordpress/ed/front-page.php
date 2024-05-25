<?php get_header('principal'); ?>
<?php get_template_part( 'template-parts/cuerpo', 'menu' ); ?>

<?php $opciones = get_option('OpcionCyRgeneral'); ?>
<?php if($opciones['ordenVitrina'] == 'dinamica') { ?>
<?php get_template_part( 'template-parts/cuerpo', 'sliderUno' ); ?>
<?php } else { ?>
<?php get_template_part( 'template-parts/cuerpo', 'sliderDos' ); } ?>

<?php if($opciones['ordenSecciones'] == 'ordenUno' ) {  
 get_template_part( 'template-parts/cuerpo', 'servicio' );
 get_template_part( 'template-parts/cuerpo', 'producto' );
} else {  
 get_template_part( 'template-parts/cuerpo', 'producto' );
 get_template_part( 'template-parts/cuerpo', 'servicio' );
} ?>

<?php get_template_part( 'template-parts/cuerpo', 'somos' ); ?>

<?php
  $opcionV = get_option('OpcionCyRclientes');
  if($opcionV['clienteVision'] == 'mostrarCliente') {
	get_template_part( 'template-parts/cuerpo', 'cliente' );
  }
?>
<?php get_template_part( 'template-parts/cuerpo', 'contacto' ); ?>
<?php get_template_part( 'template-parts/cuerpo', 'mapa' ); ?>
<?php get_footer('principal'); ?>
