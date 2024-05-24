<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tablero CyR | </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/awesome_5/css/all.min.css' );?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/style.css' );?>">
  <?php if (is_page('agregar')): ?>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body>
 <section>
  <div class="container-fluid barraHorizontal">
    <div class="row">
      <div class="col-2 titulo">Tablero CyR</div>
      <div class="col-10 text-right sesion">
        <?php if ( is_user_logged_in() ) : ?>
        <a href="#"><i class="fa fa-envelope"></i>Correo</a>       
        <a href="#"><i class="fa fa-bell"></i>Alertas</a>       
        <a href="#"><?php echo get_avatar(get_the_author_meta('email'), '32' ); ?> <b><?php global $current_user; wp_get_current_user(); echo $current_user->user_login; ?>
        </b></a>
        <?php else : ?>
        <a href="#"><i class="fa fa-user"></i>Inicia Sesión</a>
        <?php endif; ?>
      </div>
    </div>
  </div>