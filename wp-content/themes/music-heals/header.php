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
		<script src="https://use.typekit.net/phd7iff.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>


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
				<div class="site-branding">

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
