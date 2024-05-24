<?php
/*
Template Name: Tablero
*/
?>
<?php get_header('tablero'); ?>
<?php if(is_user_logged_in()): ?>
  <?php if(is_page('productos')): ?>
  <?php get_template_part( 'template-tab/tablero', 'producto' ); endif; ?>
  <?php if(is_page('todos')): ?>
  <?php get_template_part( 'template-tab/tablero', 'todos' ); endif; ?>
  <?php if(is_page('agregar')): ?>
  <?php get_template_part( 'template-tab/tablero', 'agregar' ); endif; ?>
  <?php if(is_page('eliminar')): ?>
  <?php get_template_part( 'template-tab/tablero', 'eliminar' ); endif; ?>
  <?php if(is_page('taxonomia')): ?>
  <?php get_template_part( 'template-tab/tablero', 'taxonomia' ); endif; ?>
  <?php else : ?>
  <?php get_template_part( 'template-tab/tablero', 'sesion' ); ?>
<?php endif ; ?>
<?php get_footer('tablero'); ?>