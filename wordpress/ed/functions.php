<?php
//require_once dirname(__FILE__) . '/inc/opciones.php';
require_once dirname(__FILE__) . '/cmb2.php';

function archivosCyR() {

  wp_enqueue_style('fontawsome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css"', false, '5.8.1');
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', false, '4.6.2');  

  $opciones = get_option('OpcionCyRgeneral');

  if($opciones['ordenVitrina'] == 'dinamica') {
    wp_enqueue_style('Presentador', get_template_directory_uri().'/css/slideUno.css', false);
  } else {
    wp_enqueue_style('Presentador', get_template_directory_uri().'/css/slideDos.css', false);
  }
  
  wp_enqueue_style('Articulos', get_template_directory_uri().'/css/articulos.css', false);
  wp_enqueue_style('Efectos', get_template_directory_uri().'/css/animate.css', false);
  wp_enqueue_style('Fontello', get_template_directory_uri().'/css/fontello/css/extintores.css', false);
  if(is_home()) {
    wp_enqueue_style('Estilos', get_stylesheet_uri(), array('bootstrap') );
  }
  
  wp_deregister_script('jquery');
  wp_register_script('ajax productos', get_template_directory_uri().'/js/ajax-productos.js', array('jquery'), 1.0, true );
  wp_register_script('jquery', get_template_directory_uri().'/js/jQuery-v1.11.2.min.js', array(), true, '1.11.2');
  wp_enqueue_script('jQuery Slim', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], '3.5.1', true );
  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], '1.16.1', true );
  wp_enqueue_script('Bootstrap JS', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', [], '4.6.2', true );
  wp_enqueue_script('WOW', get_template_directory_uri().'/js/wow.min.js', array(), 1.0, true );
  wp_enqueue_script('Shuffle Letter', get_template_directory_uri().'/js/jquery.shuffleLetters.js', array(), 1.0, true );
  wp_enqueue_script('Smooth Scroll', get_template_directory_uri().'/js/smooth-scroll.min.js', array(), 1.0, true );
  wp_enqueue_script('Way Point', get_template_directory_uri().'/js/waypoints.min.js', array(), 1.0, true );
  wp_enqueue_script('jssor Slider', get_template_directory_uri().'/js/jssor.slider-27.5.0.min.js', array(), 1.0, true );
  wp_enqueue_script('bxSlider', get_template_directory_uri().'/js/jquery.bxslider.min.js', array(), 1.0, true );
  wp_enqueue_script('Parallax', get_template_directory_uri().'/js/jquery.paroller.min.js', array(), 1.0, true );
  
  if($opciones['ordenVitrina'] == 'dinamica') {
    wp_enqueue_script('Pendon', get_template_directory_uri().'/js/slideUno.js', array(), 1.0, true );
  } else {
    wp_enqueue_script('Pendon', get_template_directory_uri().'/js/slideDos.js', array(), 1.0, true );
  }
  
  wp_enqueue_script('Cargas Más', get_template_directory_uri().'/js/cargarMas.js', array(), 1.0, true );
  wp_enqueue_script('Galeria Productos', get_template_directory_uri().'/js/galeriaProductos.js', array(), 1.0, true );
  wp_enqueue_script('Inicio', get_template_directory_uri().'/js/index.js', array(), 1.0, true );
  wp_enqueue_script('ajax');

  wp_localize_script( 'search-user', 'admin_url',	array('ajax_url' => admin_url('admin-ajax.php')) );
  
}  
add_action('wp_enqueue_scripts', 'archivosCyR');

function rolesCyR() {
  
$perfil = get_role('editor');
$perfil->remove_cap('edit_pages');
$perfil->add_cap('manage_options');
$perfil->add_cap('edit_users');
  
}

add_action('admin_init', 'rolesCyR');

function remover_menu() {
  
  /* menú cf7 solo en nivel de administrador */
  if(!current_user_can('administrator')) {
    remove_menu_page('wpcf7');
  }
  
  /* agregando menú de opciones para la plantilla principal */
  add_menu_page   ('Opciones del tema CyR', 'Opciones CyR', 'read', 'opcionesCyR-functions.php', 'opcionesCyR-functions.php', get_theme_file_uri('img/logo_menu.svg'), 61);
  
  /* agregando submenu de opciones para la plantilla principal */
  add_submenu_page('opcionesCyR-functions.php', 'Opciones', 'Opciones', 'read', 'opcionesCyR-functions.php', '');
  
  /* quitando submenu para no repetir en menu principal de la pantilla */
  remove_submenu_page('opcionesCyR-functions.php', 'opcionesCyR-functions.php', '');
}
add_action( 'admin_menu', 'remover_menu' );

//		'icon_url'      => , //dashicons-edit,
//    'position'      => 61,

/*
function login_error_override()
{
    return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

function admin_login_redirect( $redirect_to, $request, $user )
{
  global $user;
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
      if( in_array( "administrator", $user->roles ) ) {
        return $redirect_to;
      } else {
        return home_url();
      }
    }
    else
    {
      return $redirect_to;
    }
}
add_filter("login_redirect", "admin_login_redirect", 10, 3);*/
function fotoProducto() {
  
  add_image_size('normal', 226, 226, true);  
  add_theme_support('post-thumbnails');
  
}
add_action('after_setup_theme', 'fotoProducto');


function buscarProducto() {
	$valor = isset($_REQUEST['valor']) ? sanitize_text_field( $_REQUEST['valor']  ) : "";
	if(!$valor=='') {
  $args = array(  
            'post_type'     => 'productos',
            'no_found_rows' => false,
            'post__not_in'  => array (
              $post->ID
            ),
            'tax_query' => array(
              array(
                'taxonomy' => 'tipo_producto',
                'field'    => 'slug',
                'terms'    => $valor,
              ),
            ),
           ) ;
} else {
  $args = array(  
            'post_type'     => 'productos',
            'no_found_rows' => false,
            'post__not_in'  => array (
              $post->ID
            ),
           ) ;
}


	$productos = new WP_Query($args);

	foreach ($productos as $producto) {    
    $tipo = get_the_term_list($post->ID, 'tipo_producto');
    $RC = get_post_meta(get_the_ID(), 'datos_dos_reseniaCorta', true); 
    $PF = get_post_meta(get_the_ID(), 'datos_uno_precioFijo', true); 
    $PO = get_post_meta(get_the_ID(), 'datos_uno_precioOferta', true);
    $SKU = get_post_meta(get_the_ID(), 'datos_uno_codigoSKU', true);
    
		$producto->avatar =  get_avatar_url( $producto->user_email );
	}

	echo wp_json_encode($productos);
	wp_die();
}

add_action('wp_ajax_buscarProducto','buscarProducto');
add_action('wp_ajax_nopriv_buscarProducto','buscarProducto');
add_filter( 'show_admin_bar', '__return_false' );

/** modificando del login **/
function adminEstilos() {
  wp_enqueue_style('admin-estilos', get_stylesheet_directory_uri().'/login.css');
}
add_action('login_enqueue_scripts', 'adminEstilos');

function direccionarLogo() {
  return home_url();
}
add_filter('login_headerurl', 'direccionarLogo');
?>
