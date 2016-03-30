<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet' type='text/css'>

	<?php wp_enqueue_script('jquery'); ?>


	<?php wp_head(); ?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
	  jQuery('.bxslider').bxSlider({
	    mode: 'horizontal',
	    infiniteLoop: true,
	    speed: 2000,
	    pause: 8000,
	    auto: true,
	    pager: false,
	    controls: true
	  });
	});
	</script>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-banner">
						<div class="menu"><img src="<?php echo get_template_directory_uri() . '/assets\/Hamburger menu-01' ?>.svg" alt="Hamburger Menu"/></div>

						<div class="logo"><img src="<?php echo get_template_directory_uri() . '/assets\/musicheals' ?>.png" alt="Music Heals Logo"/></div>

						<div class="cart"><img src="<?php echo get_template_directory_uri() . '/assets\/icon_shopping_cart_empty' ?>.svg" alt="Empty Shopping Cart"/></div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
