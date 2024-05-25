 <section id="productos" class="seccion-pag container-fluid">
  <div class="row">
    <div class="container">
      <div class="row d-block pb-5">

        <div class="col-12 text-center pt-5 pb-3">
          <h1>PRODUCTOS</h1>
        </div>

          <?php 
           $args = array(  
            'post_type'     => 'productos',
            'no_found_rows' => false,
            'post__not_in'  => array (
              $post->ID
            ),
           ) ;

            $productos = new WP_Query($args);

            if($productos->have_posts()) { ?>

        <div class="wrapper" id="galeriaLista">

          <div class="tarjetas" id="cProductos">
            
             
          <?php while($productos->have_posts()) : $productos->the_post();
            
            get_template_part( 'template-parts/lista/cuerpo', 'lista' );
            
             endwhile; wp_reset_postdata(); ?>
          </div>  
        </div>
             <?php } else { ?>
               <div class="col pb-5 pl-0 pr-0 m-0 galeria" id="galeriaLista">

          <div class="row no-gutters galeriaMenu" id="cProductos">
            <?php get_template_part( 'template-parts/lista/cuerpo','productos' ); ?>
          </div>  
        </div>
        
        <?php } ?>
      </div>
    </div>
  </div>
</section>
