<?php
/**
 * @package guddi
 * @since 1.0
 * @version 1.0
 */
?>
<?php
/*
	============================
	FRONT-END ENQUEUE FUNCTIONS
	============================
*/

function guddi_scripts(){
	
	
	/*wp_enqueue_style( 'normalize', get_template_directory_uri() . '/vendor/normalize.css', array(), '8.0.1', 'all' );*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', '4.2.1', 'all' );

	wp_enqueue_style( 'guddi-theme', get_stylesheet_uri(), array('bootstrap') ); 
	
	wp_enqueue_style( 'guddi', get_template_directory_uri() . '/assets/css/mystyle.css', array('bootstrap','guddi-theme'), '1.0.0', 'all' );
	
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/vendor/animate/animate.css', array('bootstrap','guddi-theme'), '3.7.0', 'all' );
	
	

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/vendor/jquery/jquery.js', false, '3.2.1', true );
	wp_enqueue_script( 'jquery' );
	
	
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '4.2.1', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/bootstrap/js/popper.min.js', array('jquery'), '4.2.1', true );
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/vendor/font-awesome/all.js', array('jquery'), '5.5.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/vendor/wow/wow.min.js', array('jquery'), '5.7.0 ', true );

	

	wp_enqueue_script( 'guddi-js', get_template_directory_uri() . '/assets/js/myjs.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'guddi_scripts' );