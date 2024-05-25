<?php

require_once dirname(__FILE__) . '/cmb2.php';


function archivosCyR() {
 
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.3.1');
  wp_enqueue_style('Estilos', get_stylesheet_uri(), array('bootstrap') );
  $opciones = get_option('OpcionCyRgeneral');
  if($opciones['ordenVitrina'] == 'dinamica') {
  wp_enqueue_style('Presentador', get_template_directory_uri().'/css/slideUno.css', false);
  } else {
  wp_enqueue_style('Presentador', get_template_directory_uri().'/css/slideDos.css', false);
  }
  wp_enqueue_style('Articulos', get_template_directory_uri().'/css/articulos.css', false);
  wp_enqueue_style('Efectos', get_template_directory_uri().'/css/animate.css', false);
  wp_enqueue_style('Fontello', get_template_directory_uri().'/css/fontello/css/extintores.css', false);
  
  wp_deregister_script('jquery'); 
  wp_register_script('jquery', get_template_directory_uri().'/js/jQuery-v1.11.2.min.js', array(), true, '1.11.2');
  
  wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array(), 1.0, true );
  wp_enqueue_script('Bootstrap JS', get_template_directory_uri().'/js/bootstrap.min.js', array(), 1.0, true );
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
  wp_enqueue_script('Galeria Productos', get_template_directory_uri().'/js/galeriaProductos.js', array(), 1.0, true );
  wp_enqueue_script('Inicio', get_template_directory_uri().'/js/index.js', array(), 1.0, true );
  
}  
add_action('wp_enqueue_scripts', 'archivosCyR');

/* Mostrando Contant Form 7 solo en menú administrador */
function remover_menu() {
  
  /* menú cf7 solo en nivel de administrador */
  if(!current_user_can('administrator')) {
    remove_menu_page('wpcf7');
  }
	 
  /* agregando menú de opciones para la plantilla principal */
    add_menu_page('Opciones del tema ED', 'Opciones ED', 'read', 'opcionesED-functions.php', 'opcionesED-functions.php', get_theme_file_uri('img/logo_menu.svg'), 61);
  
  /* agregando submenu de opciones para la plantilla principal */
  add_submenu_page('opcionesED-functions.php', 'Opciones', 'Opciones', 'read', 'opcionesED-functions.php', '');
  
  /* quitando submenu para no repetir en menu principal de la pantilla */
  remove_submenu_page('opcionesED-functions.php', 'opcionesED-functions.php', '');
}

add_action( 'admin_menu', 'remover_menu' );


function configurar_plugins($plugins) {
	if(!current_user_can('administrator')) {
		if(is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
			unset( $plugins['contact-form-7/wp-contact-form-7.php'] );
		}
		if(is_plugin_inactive( 'contact-form-7/wp-contact-form-7.php' ) ) {
			unset( $plugins['contact-form-7/wp-contact-form-7.php'] );
		}
		if(is_plugin_active( 'wpcf7-recaptcha/wpcf7-recaptcha.php' ) ) {
			unset( $plugins['wpcf7-recaptcha/wpcf7-recaptcha.php'] );
		}
		if(is_plugin_inactive( 'wpcf7-recaptcha/wpcf7-recaptcha.php' ) ) {
			unset( $plugins['wpcf7-recaptcha/wpcf7-recaptcha.php'] );
		}
		if(is_plugin_active( 'postTypeCyR/post-type-cyr.php' ) ) {
			unset( $plugins['postTypeCyR/post-type-cyr.php'] );
		}
		if(is_plugin_inactive( 'postTypeCyR/post-type-cyr.php' ) ) {
			unset( $plugins['postTypeCyR/post-type-cyr.php'] );
		}
		if(is_plugin_active( 'cmb2-field-post-search-ajax-master/cmb-field-post-search-ajax.php' ) ) {
			unset( $plugins['cmb2-field-post-search-ajax-master/cmb-field-post-search-ajax.php'] );
		}
		if(is_plugin_inactive( 'cmb2-field-post-search-ajax-master/cmb-field-post-search-ajax.php' ) ) {
			unset( $plugins['cmb2-field-post-search-ajax-master/cmb-field-post-search-ajax.php'] );
		}
		if(is_plugin_active( 'akismet/akismet.php' ) ) {
			unset( $plugins['akismet/akismet.php'] );
		}
		if(is_plugin_inactive( 'akismet/akismet.php' ) ) {
			unset( $plugins['akismet/akismet.php'] );
		}
		if(is_plugin_active( 'hello-dolly/hello.php' ) ) {
			unset( $plugins['hello-dolly/hello.php'] );
		}
		if(is_plugin_inactive( 'hello-dolly/hello.php' ) ) {
			unset( $plugins['hello-dolly/hello.php'] );
		}
		if(is_plugin_active( 'adminimize/adminimize.php' ) ) {
			unset( $plugins['adminimize/adminimize.php'] );
		}
		if(is_plugin_inactive( 'adminimize/adminimize.php' ) ) {
			unset( $plugins['adminimize/adminimize.php'] );
		}
		if(is_plugin_active( 'fancybox-for-wordpress/fancybox.php' ) ) {
			unset( $plugins['fancybox-for-wordpress/fancybox.php'] );
		}
		if(is_plugin_inactive( 'fancybox-for-wordpress/fancybox.php' ) ) {
			unset( $plugins['fancybox-for-wordpress/fancybox.php'] );
		}
	}
 return $plugins;
}
add_filter('all_plugins', 'configurar_plugins' );
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
