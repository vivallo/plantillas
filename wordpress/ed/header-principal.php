<!DOCTYPE html>
<html lang="es">
<head>
  <title>Rivera y Castro | extintores</title>
  
  <meta charset="UTF-8">
  <meta name="theme-color" content="#990000">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
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
  
  <link rel="stylesheet"  href="<?php //bloginfo('stylesheet_url'); ?>">
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
           <?php $fijos = cmb2_get_option('OpcionCyRubicacion', 'listaFonoFijo'); ?>
           <?php $fonos = cmb2_get_option('OpcionCyRubicacion', 'listaFonos'); ?>
           <?php $correos = cmb2_get_option('OpcionCyRubicacion', 'listaCorreos'); ?>
           <?php $direcciones = cmb2_get_option('OpcionCyRubicacion', 'listaDirecciones'); ?>
            <i class="icon-cyr-fono"></i> <b>Fonos:</b> <span id="txtEfecto1"><?php $contFF = 1; if(!empty($fijos)) { foreach($fijos as $fijo) { if($contFF == 1) { echo $fijo;  if(!$fijos==''&&!$fonos=='') { echo ' - '; } } $contFF++; } } $contF = 1; if(!empty($fonos)) { foreach($fonos as $fono) { if($contF == 1) { echo $fono;} $contF++; } } ?></span>
            <span class="d-none d-lg-inline"> | </span>
            <br class="d-inline d-lg-none">
            <i class="icon-cyr-correo"></i> <b>Correo:</b> <span id="txtEfecto2"><?php $contC = 1; foreach($correos as $correo) { if($contC == 1) { echo $correo;} $contC++; } ?></span><br>
            <i class="icon-cyr-direccion"></i> <b>Dirección:</b><span id="txtEfecto3"> <?php $contD = 1; foreach($direcciones as $direccion) { if($contD == 1){ echo $direccion; $contD++; } }?></span>
          </p>
        </div>
        
        <div class="col-12 col-sm-3 col-md-4 icono-social d-flex justify-content-around justify-content-sm-end">
       <?php $iconos = cmb2_get_option('OpcionCyRubicacion', 'rSociales'); ?>
       <?php foreach($iconos as $icono) { ?><a href="<?php echo $icono['direccionURL'];?>" target="_blank"><i class="icon-cyr-<?php echo $icono['redSocial'];?>"></i></a>
        <?php } ?>
        </div>
        
      </div>      
     </div>
     
      </div>
     </div>
    </div>
    <!--  <link rel="stylesheet" href="/css/fontello/css/fontello.css" type="text/css">-->
    