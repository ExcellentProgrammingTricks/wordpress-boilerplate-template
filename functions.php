<?php
/** 
 * @package guddi
 * @since 1.0
 * @version 1.0
 */

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/walker.php';

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

/*
	****************
	*Activate Menus*
	****************
*/
function ept_activate_menus(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');

}
add_action( 'init', 'ept_activate_menus');

function allow_button_onclick_mce($settings) {
  $settings['extended_valid_elements'] =  "a[rel|rev|charset|hreflang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur|onclick]";
  return $settings;
}
add_filter('tiny_mce_before_init', 'allow_button_onclick_mce');
