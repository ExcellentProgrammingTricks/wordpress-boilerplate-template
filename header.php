<?php
/**
 * @package guddi
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge"><!--internet explorer-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poppins:300,300i" rel="stylesheet">

<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="keywords" content="Bootstrap, Excellent Programming Tricks">
<meta name="author" content="excellent programming tricks">

<title><?php bloginfo( 'name' ); wp_title(); ?></title>

<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
   
<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top" id="guddiNavbarInternal">
  <a class="navbar-brand" href="#">Brand Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#guddiNavbar" aria-controls="guddiNavbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="icon-bar">Menu</span>
  </button>
  <?php
    wp_nav_menu([
      'menu'            => 'primary',
      'theme_location'  => 'primary',
      'container'       => 'div',
      'container_id'    => 'guddiNavbar',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav mr-auto',
      'depth'           => 2,
      'fallback_cb'     => 'guddiNavbar::fallback',
      'walker'          => new Ept_Nav_Walker()
    ]);
  ?>
</nav><!-- navbar -->
