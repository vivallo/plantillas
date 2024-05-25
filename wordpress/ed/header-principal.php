<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
  <title>Extintores a Domicilio</title>
  
  
  <meta name="theme-color" content="#990000">
  
  <meta name="viewport" content="width=divice-width, initial-scale=1, maximun-scale=1"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  
  <meta name="msapplication-square72x72logo" content="<?php echo get_theme_file_uri( '/img/ico-cr-64.png' ); ?>"/>
  <meta name="msapplication-square114x114logo" content="<?php echo get_theme_file_uri( 'img/ico-cr-128.png'); ?>"/>
  <meta name="msapplication-TileImage" content="<?php echo get_theme_file_uri( 'img/ico-cr-128.png'); ?>" />  
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri( 'img/ico-cr.ico'); ?>"/>
  <link rel="icon" href="<?php echo get_theme_file_uri( 'img/ico-cr.ico'); ?>"/>
  <link rel="icon" href="<?php echo get_theme_file_uri( 'img/ico-cr-32.png'); ?>" sizes="32x32" />
  <link rel="icon" href="<?php echo get_theme_file_uri( 'img/ico-cr-128.png'); ?>" sizes="128x128" />
  
  
  <?php wp_head(); ?>
  
  <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
 
  <header class="container-fluid seccion-pag p-0" id="inicio">
   <div class="row">
    <div class="container-fluid ubicar">
      <div class="row">
     
      <div class="container">
       <div class="row">
       
        <div class="col-12 col-sm-9 col-md-8">
          <p id="textoUno">
		   <?php $datosUbicar = get_option('OpcionCyRubicacion'); ?>
            <i class="icon-cyr-fono"></i> <!-- <b>Fonos:</b>--> <span id="txtEfecto1"><?php if(isset($datosUbicar['fijoUno'])) echo $datosUbicar['fijoUno']; if(isset($datosUbicar['fijoUno'])&&isset($datosUbicar['movilUno'])) echo ' - '; echo $datosUbicar['movilUno']; ?></span>
            <span class="d-none d-lg-inline"> | </span>
			<i class="icon-cyr-whatsapp"></i> <!-- <b>WhatsApp:</b> --> <span id="txtEfecto1"><?php echo $datosUbicar['WaUno']; ?></span>
            <span class="d-none d-lg-inline"> | </span>
            <br class="d-inline d-lg-none">
            <i class="icon-cyr-correo"></i> <!-- <b>Correo:</b> --> <span id="txtEfecto2"><?php echo $datosUbicar['correoUno']; ?></span><br>
            <i class="icon-cyr-direccion"></i> <!-- <b>Dirección:</b> --> <span id="txtEfecto3"> <?php echo $datosUbicar['direccionUno']; ?></span>
          </p>
        </div>
        
        <div class="col-12 col-sm-3 col-md-4 icono-social d-flex justify-content-around justify-content-sm-end">
	  <?php if(!$datosUbicar['facebook']=='') ?><a href="<?php echo $datosUbicar['facebook']; ?>" target="_blank"><i class="icon-cyr-<?php if(isset($datosUbicar['facebook'])) echo 'facebook'; ?> "></i></a><?php ; ?>
          <?php if(!$datosUbicar['twitter']=='') ?><a href="<?php echo $datosUbicar['twitter']; ?>" target="_blank"><i class="icon-cyr-<?php if(isset($datosUbicar['twitter'])) echo 'twitter'; ?> "></i></a><?php ; ?>
          <?php if(!$datosUbicar['instagram']=='') ?><a href="https://www.instagram.com/<?php echo $datosUbicar['instagram']; ?>/" target="_blank"><i class="icon-cyr-<?php if(isset($datosUbicar['instagram'])) echo 'instagram'; ?> "></i></a><?php ; ?>
          <?php if(!$datosUbicar['linkedin']=='') ?><a href="<?php echo $datosUbicar['linkedin']; ?>" target="_blank"><i class="icon-cyr-<?php if(isset($datosUbicar['linkedin'])) echo 'linkedin'; ?> "></i></a><?php ; ?>
          <?php if(!$datosUbicar['youtube']=='') ?><a href="<?php echo $datosUbicar['youtube']; ?>" target="_blank"><i class="icon-cyr-<?php if(isset($datosUbicar['youtube'])) echo 'youtube'; ?> "></i></a><?php ; ?>
        </div>
        
      </div>      
     </div>
     
      </div>
     </div>
    </div>
