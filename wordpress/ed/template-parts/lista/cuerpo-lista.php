<!-- cuerpo lista -->
<?php
$tipo   = get_the_term_list($post->ID, 'tipo_producto');
$RC     = get_post_meta(get_the_ID(), 'datos_dos_reseniaCorta', true); 
$PF     = get_post_meta(get_the_ID(), 'datos_uno_precioFijo', true); 
$PO     = get_post_meta(get_the_ID(), 'datos_uno_precioOferta', true);
$SKU    = get_post_meta(get_the_ID(), 'datos_uno_codigoSKU', true);
$fotos  = get_post_meta(get_the_ID(), 'datos_dos_imGaleria', 1);
$carac  = get_post_meta(get_the_ID(), 'datos_dos_listaDescripcion', true);
$MP     = cmb2_get_option('OpcionCyRproductos', 'mostrarPrecios'); 
?>

<div class="tarjeta [ is-collapsed ] ">
  <div class="tarjeta__inner [ js-expander ]">
    <?php if(has_post_thumbnail()) { the_post_thumbnail('normal'); } else { echo '<img src="'.get_theme_file_uri( 'img/p-sin-foto.jpg').'"/>'; } ?>
    <div class="texto">
      <p class="tipo"><?php echo $tipo = strip_tags($tipo); ?></p>
      <h1><?php the_title(); ?></h1>
      <p class="resenia"><?php echo $RC; ?></p>
      <h2 class="sku">SKU: <?php echo $SKU; ?></h2><?php if($MP!==false) { ?>
      <h2 class="<?php if(!$PO == '') { echo 'destacar'; } else {echo 'destacar2'; } ?>">Por :&nbsp;&nbsp;$<?php if(!$PO == '') { echo number_format($PO, 0, '', '.'); } else { echo number_format($PF, 0, '', '.'); } ?></h2>
      <?php if(!$PO == '') { echo '<sup>antes: $<span>'.number_format($PF, 0, '', '.').'</span></sup>'; } } ?>
    </div>
    <div class="boton"><i class="fa icon-cyr-cerrado"></i></div>
   </div>
  <div class="tarjeta__expander">
    <i class="fa icon-cyr-cerrar [ js-collapser ]"></i>
    <div class="detalles img">
      <h2><b>Imágenes</b></h2>
	  <?php if(!$fotos=='') {
        foreach($fotos as $foto) { echo '<a data-fancybox="grupo-'.get_the_ID().'" href="'.$foto.'"><img src="'.$foto.'"/></a>'; }
        } else { echo '<b>! No hay imágenes que mostrar ¡</b>'; } ?>
    </div>
    <div class="detalles des">
      <h2><b>Detalles</b></h2>
      <ul class="nav nav-tabs" id="miTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="des-tab-<?php the_id(); ?>" data-toggle="tab" href="#des-<?php the_id(); ?>" role="tab" aria-controls="des-<?php the_id(); ?>" aria-selected="true">Descripción</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="esp-tab-<?php the_id(); ?>" data-toggle="tab" href="#esp-<?php the_id(); ?>" role="tab" aria-controls="esp-<?php the_id(); ?>" aria-selected="false">Especificación</a>
        </li>
      </ul>
      <div class="tab-content" id="contenidoTab">
        <div class="tab-pane fade show active" id="des-<?php the_id(); ?>" role="tabpanel" aria-labelledby="des-tab-<?php the_id(); ?>"><?php if( '' !== get_post()->post_content ) { the_content(); } else {echo '<b>! No hay descripción ¡</b>'; } ?></div>
        <div class="tab-pane fade tabla" id="esp-<?php the_id(); ?>" role="tabpanel" aria-labelledby="esp-tab-<?php the_id(); ?>">
        <?php if(!$carac=='') { ?>
        <table class="tablaEspecifica">
          <thead>
            <tr>
              <th colspan="2">Características Técnicas</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $linea = 0;
            $archivo = fopen($carac, "r");
            while (($datos = fgetcsv($archivo, ",")) == true) 
            {
              $num = count($datos);
              $linea++;
              echo '<tr>';
              for ($columna = 0; $columna < $num; $columna++) 
                  {
                    echo '<td>'.$datos[$columna].'</td>';
                 }
              echo '</tr>';
            }
            fclose($archivo);
          ?>            
          </tbody>
        </table>
        <?php } else { echo '<b>! No hay especificaciones ¡</b>'; } ?>
        </div>
      </div>
    </div>
  </div>
</div>
