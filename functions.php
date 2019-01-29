<?php
/** 
 * @package guddi
 * @since 1.0
 * @version 1.0
 */

require get_template_directory().'/inc/enqueue.php';

function allow_button_onclick_mce($settings) {
  $settings['extended_valid_elements'] =  "a[rel|rev|charset|hreflang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur|onclick]";
  return $settings;
}
add_filter('tiny_mce_before_init', 'allow_button_onclick_mce');